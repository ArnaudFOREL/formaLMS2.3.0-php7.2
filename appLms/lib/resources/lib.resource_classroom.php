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
 * @version  $Id: $
 */
// ----------------------------------------------------------------------------


require_once($GLOBALS["where_framework"]."/lib/resources/lib.resource_model.php");


class ResourceClassroom extends ResourceModel {


	function __construct($prefix=FALSE, $dbconn=NULL) {
		$this->setResourceCode("classroom");
		parent::__construct($prefix, $dbconn);
	}


	function checkAvailability($resource_id, $start_date=FALSE, $end_date=FALSE) {
		$res=FALSE;

		$found=$this->getResourceEntries((int)$resource_id, $start_date, $end_date);

		if (count($found) < $this->getAllowedSimultaneously())
			$res=TRUE;

		return $res;
	}


}





?>
