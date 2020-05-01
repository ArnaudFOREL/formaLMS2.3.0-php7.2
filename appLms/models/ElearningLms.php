<?php defined("IN_FORMA") or die('Direct access is forbidden.');

/* ======================================================================== \
|   FORMA - The E-Learning Suite                                            |
|                                                                           |
|   Copyright (c) 2013 (Forma)                                              |
|   http://www.formalms.org                                                 |
|   License  http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt           |
|                                                                           |
|   from docebo 4.0.5 CE 2008-2012 (c) docebo                               |
|   License http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt            |
\ ======================================================================== */

class ElearningLms extends Model {

	protected $_t_order = false;

	public function  __construct() {
	}

	/**
	 * This function return the correct order to use when you wish to diplay the a
	 * course list for the user.
	 * @param <array> $t_name the table name to use as a prefix for the field, if false is passed no prefix will e used
	 *							we need a prefix for the course user rows and a prefix for the course table
	 *							array('u', 'c')
	 * @return <string> the order to use in a ORDER BY clausole
	 */
	protected function _resolveOrder($t_name = array('', '')) {
		// read order for the course from database
		if($this->_t_order == false) {

			$t_order = Get::sett('tablist_mycourses', false);
			if($t_order != false) {

				$arr_order_course = explode(',', $t_order);
				$arr_temp = array();
				foreach($arr_order_course as $key=>$value) {

					switch ($value) {
						case 'status': $arr_temp[] = ' ?u.status '; break;
						case 'code': $arr_temp[] = ' ?c.code '; break;
						case 'name': $arr_temp[] = ' ?c.name '; break;
					}
				}
				$t_order = implode(', ', $arr_temp);
			} else {

				$t_order = '?u.status, ?c.name';
			}
			// save a class copy of the resolved list
			$this->_t_order = $t_order;
		}
		foreach($t_name as $key=>$value) {
			if($value != '') $t_name[$key] = $value.'.';
		}
		return str_replace(array('?u.', '?c.'), $t_name ,$this->_t_order);
	}

	public function compileWhere($conditions, $params) {

		if(!is_array($conditions)) return "1";

		$where = array();
		$find = array_keys($params);
		foreach($conditions as $key=>$value) {

			$where[] = str_replace($find, $params, $value);
		}
		return implode(" AND ", $where);
	}

	public function findAll($conditions, $params) {


		$db = DbConn::getInstance();

          // exclude course belonging to pathcourse in which the user is enrolled as a student  
       $learning_path_enroll = $this->getUserCoursePathCourses($params[':id_user'] );
       $exclude_pathcourse = '';
       if (count($learning_path_enroll) > 1 && Get::sett('on_path_in_mycourses')=='off') {
           $exclude_path_course = "select idCourse from learning_courseuser where idUser=".$params[':id_user']." and level <= 3 and idCourse in (".implode(',',$learning_path_enroll).")";
           $rs =$db->query($exclude_path_course);
           while($d = $db->fetch_assoc($rs)){
               $excl[] = $d['idCourse'];
           } 
           $exclude_pathcourse = " and c.idCourse not in (".implode(',', $excl)." )";
       } 
       
        
        
        
        $query =             "SELECT c.idCourse, c.course_type, c.idCategory, c.code, c.name, c.description, c.box_description, c.difficult, c.status AS course_status, c.level_show_user, c.course_edition, "
            ."    c.max_num_subscribe, c.create_date, "
            ."    c.direct_play, c.img_othermaterial, c.course_demo, c.use_logo_in_courselist, c.img_course, c.lang_code, "
			."	  c.course_vote, c.hour_end , "
            ."    c.date_begin, c.date_end, c.valid_time, c.show_result, c.userStatusOp, c.auto_unsubscribe, c.unsubscribe_date_limit, "

            ."    cu.status AS user_status, cu.level, cu.date_inscr, cu.date_first_access, cu.date_complete, cu.waiting"

            ." FROM %lms_course AS c "
            ." JOIN %lms_courseuser AS cu ON (c.idCourse = cu.idCourse)  "
            ." WHERE ".$this->compileWhere($conditions, $params)
            .($_SESSION['id_common_label'] > 0 ? " AND c.idCourse IN (SELECT id_course FROM %lms_label_course WHERE id_common_label = '".$_SESSION['id_common_label']."')" : "")
            .$exclude_pathcourse 
            ." ORDER BY ".$this->_resolveOrder(array('cu', 'c'));


		$rs = $db->query($query);

		$result = array();
		$courses = array();
		while($data = $db->fetch_assoc($rs)) {

			$data['enrolled'] = 0;
			$data['numof_waiting'] = 0;
			$data['first_lo_type'] = FALSE;


            //** name category
            $data['nameCategory'] = $this->getCategory($data['idCategory']); //$this->getCategory($data['idCategory']);

            $courses[] = $data['idCourse'];
			$result[$data['idCourse']] = $data;
		}

       
        if (!empty($courses)) {
			// find subscriptions
			$re_enrolled = $db->query(
				"SELECT c.idCourse, COUNT(*) as numof_associated, SUM(waiting) as numof_waiting"
				." FROM %lms_course AS c "
				." JOIN %lms_courseuser AS cu ON (c.idCourse = cu.idCourse) "
				." WHERE c.idCourse IN (".implode(',', $courses).") "
				." GROUP BY c.idCourse"
			);
			while($data = $db->fetch_assoc($re_enrolled)) {

				$result[$data['idCourse']]['enrolled'] = $data['numof_associated'] - $data['numof_waiting'];
				$result[$data['idCourse']]['numof_waiting'] = $data['numof_waiting'];
			}


            #3562 Grifo multimedia - LR
            $query_lo = "select org.idOrg, org.idCourse, org.objectType from (SELECT o.idOrg, o.idCourse, o.objectType 
                          FROM %lms_organization AS o WHERE o.objectType != '' AND o.idCourse IN (".implode(',', $courses).") ORDER BY o.path) as org 
                          GROUP BY org.idCourse ";



			// find first LO type
			$re_firstlo = $db->query($query_lo);
			while($data = $db->fetch_assoc($re_firstlo)) {
				$result[$data['idCourse']]['first_lo_type'] = $data['objectType'];
			}
		}

		return $result;
	}


	public function getFilterYears($id_user) {
		$output = array(0 => Lang::t("_ALL_YEARS", 'course'));
		$db = DbConn::getInstance();

        $query = "SELECT DISTINCT YEAR(cu.date_inscr) AS inscr_year "
            ." FROM %lms_courseuser AS cu "
            ." WHERE cu.idUser = ".(int)$id_user
            ." ORDER BY inscr_year ASC";


		$res = $db->query($query);
		if ($res && $db->num_rows($res) > 0) {
			while (list($inscr_year) = $db->fetch_row($res)) {
                if ($inscr_year== 0) {
                    $output['no-data'] = Lang::t('_NO_COURSE_DATA', 'course');
                } else {    
				    $output[$inscr_year] = $inscr_year;
                }    
			}
		}
		return $output;
	}

    
    //** Calculates the course states **
    public function getFilterStatusCourse($id_user) {
     
     
        $output['all'] = Lang::t('_ALL_OPEN', 'course');
     
        $db = DbConn::getInstance();


        $query =  "SELECT DISTINCT status AS status_course  FROM learning_courseuser WHERE learning_courseuser.idUser = ".(int)$id_user;
        
            
 
            
        $res = $db->query($query);
        if ($res && $db->num_rows($res) > 0) {
            while (list($status_course) = $db->fetch_row($res)) {
                
                if($status_course==0) $str_status_course =  Lang::t('_NEW', 'standard');
                if($status_course==1) $str_status_course =  Lang::t('_USER_STATUS_BEGIN', 'standard');
                if($status_course==2) $str_status_course =  Lang::t('_COMPLETED', 'standard');;
                
                if($status_course>=0) $output[$status_course] = $str_status_course;
            }
        }
        return $output;
    }    
    
    
    
    

    // LR: list category of subscription
    public function getListCategory($idUser, $completePath = true){
        $db = DbConn::getInstance();
        
        $query = "select idCategory,path from %lms_category where idcategory in (
       						select distinct idCategory from %lms_course as c,%lms_courseuser as cu where cu.idUser=".$idUser." and cu.idCourse=c.idCourse)";

        $res = $db->query($query);
        if ($res && $db->num_rows($res) > 0) {
            $output[0] = Lang::t('_ALL_CATEGORIES', 'standard');
            while (list($idCategory, $path) = $db->fetch_row($res)) {
                if($completePath){
                    $category = str_replace('/root/','',$path);
                }
                else {
                    $category = explode('/',$path);
                }
                $output[$idCategory] = $category[count($category)-1];
            }
        } else {
            $output[0] = Lang::t('_NO_CATEGORY', 'standard');
        }
        return $output;


    }




	public function getUserCoursePathCourses( $id_user ) {
		require_once(_lms_.'/lib/lib.coursepath.php');
		$cp_man = new Coursepath_Manager();
		$output = array();
		$cp_list = $cp_man->getUserSubscriptionsInfo($id_user);
		if (!empty($cp_list)) {
			$cp_list = array_keys($cp_list);
			$output = $cp_man->getAllCourses($cp_list);
		}
		return $output;
	}


    private function getCategory($idCat){
        $db = DbConn::getInstance();
        $query = "select path from %lms_category where idCategory=".$idCat;
        $res = $db->query($query);
        $path = "";
        if ($res && $db->num_rows($res) > 0) {
            list($path) = $db->fetch_row($res);
        }
        return $path;


    }







}