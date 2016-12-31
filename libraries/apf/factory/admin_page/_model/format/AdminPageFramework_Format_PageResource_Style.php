<?php 
/**
	Admin Page Framework v3.8.13 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/recipepress-reloaded>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class AdminPageFramework_Format_PageResource_Style extends AdminPageFramework_Format_Base {
    static public $aStructure = array('src' => null, 'handle_id' => null, 'dependencies' => null, 'version' => null, 'media' => null,);
    public $asSubject = '';
    public function __construct() {
        $_aParameters = func_get_args() + array($this->asSubject,);
        $this->asSubject = $_aParameters[0];
    }
    public function get() {
        return $this->_getFormatted($this->asSubject);
    }
    private function _getFormatted($asSubject) {
        if (is_array($asSubject)) {
            return $asSubject + self::$aStructure;
        }
        $_aSubject = array();
        if (is_string($asSubject)) {
            $_aSubject['src'] = $asSubject;
        }
        return $_aSubject + self::$aStructure;
    }
}
