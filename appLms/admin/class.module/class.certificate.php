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

/**
 * @package  DoceboLms
 * @version  $Id: class.certificate.php,v 1
 * @category Certification management
 * @author	 Claudio Demarinis <claudiodema [at] docebo [dot] com>
 */

require_once(dirname(__FILE__).'/class.definition.php');

class Module_Certificate extends LmsAdminModule {


	function loadBody() {

		require_once(Forma::inc(_lms_.'/admin/modules/'.$this->module_name.'/'.$this->module_name.'.php'));
		certificateDispatch($GLOBALS['op']);
	}

	// Function for permission managment
	function getAllToken($op) {
		return array(
			'view' => array( 	'code' => 'view',
								'name' => '_VIEW',
								'image' => 'standard/view.png'),
			'mod' => array( 	'code' => 'mod',
								'name' => '_MOD',
								'image' => 'standard/edit.png'),
			'assign' => array( 	'code' => 'assign',
								'name' => '_ASSIGN',
								'image' => 'standard/assign.png'),
			'release' => array( 	'code' => 'release',
								'name' => '_RELEASE',
								'image' => 'standard/release.png')
		);
	}
}

?>