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
 * this class is the default page for docebolms
 */
class LmsPageWriter extends PageWriter {
	
	function __construct() {
		$this->addZone( 'page_head' );
		$this->addZone( 'blind_navigation' );
		$this->addZone( 'feedback' );
		$this->addZone( 'header' );
		$this->addZone( 'quickbar' );
		$this->addZone( 'menu_over' );
		$this->addZone( 'menu', true );
		$this->addZone( 'content', true );
		$this->addZone( 'footer' );
		$this->addZone( 'scripts' );
		$this->addZone( 'debug' );
		$this->_zones['def_lang'] = new PageZoneLang( 'def_lang', false );

		$this->addStart( '<ul id="blind_avigation" class="container-blindnav">', 'blind_navigation' );
		$this->addEnd( '</ul>'."\n", 'blind_navigation' );
		
	}
	
	/**
	 * Create an instance of LmsPageWriter
	 * @static
	 *
	 * @return an istance of LmsPageWriter
	 *
	 * @access public
	 */
	function &createInstance() {
		if($GLOBALS['page'] === null) {
			$GLOBALS['page'] = new LmsPageWriter();
		}
		return $GLOBALS['page'];
	}
	
}

?>