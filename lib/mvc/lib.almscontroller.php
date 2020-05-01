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

class AlmsController extends Controller {

	protected $_mvc_name = 'almscontroller';

	public function viewPath() {

		return _lms_.'/admin/views';
	}

    public function templatePath(){
        return _base_."/templates/".getTemplate()."/layout";
    }

	public function init() {
		parent::init();
		checkPerm('view', false, $this->_mvc_name, 'lms');
	}


}
