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

if (!class_exists('Model')) {
    require_once(_lib_.'/mvc/lib.model.php');
}

require_once _lib_.'/lib.pluginmanager.php';

class Forma {

    /**
     * @param $file
     * @return string
     */
    public static function inc($file) {

        $file = str_replace(_base_.'/', '', $file);
        $file = str_replace(_base_.'\\', '', $file);

        if (isset($GLOBALS['notuse_plugin']) && $GLOBALS['notuse_plugin'] == true || isset($_SESSION['notuse_plugin']) && $_SESSION['notuse_plugin'] == true){
            $use_plugin = false;
        } else {
            $use_plugin = true;
        }

        if($use_plugin == true){

	        $plugins = PluginManager::get_all_plugins();

            foreach ($plugins as $plugin){
                if (file_exists(_base_.'/plugins/'.$plugin['name'].'/Features/'.$file)){
                    include_once(_base_.'/plugins/'.$plugin['name'].'/Plugin.php');
                    return _base_.'/plugins/'.$plugin['name'].'/Features/'.$file;
                }
            }
        }

        if (isset($GLOBALS['notuse_customscript']) && $GLOBALS['notuse_customscript'] == true || isset($_SESSION['notuse_customscript']) && $_SESSION['notuse_customscript'] == true){
            $use_customscript = false;
        } else {
            $use_customscript = true;
        }

        if (file_exists(_base_.'/customscripts'.'/'.$file) && Get::cfg('enable_customscripts', false) == true && $use_customscript == true) {
            return _base_.'/customscripts'.'/'.$file;
        } else {
            return _base_.'/'.$file;
        }
    }
}