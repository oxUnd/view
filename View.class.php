<?php

/**
 * **V, View for php
 * @date 2015-03-17 08:21:56
 */

class View {
    static private $_context = array();
    static private $_renderFlag = false;

    static public function block($name, $proc) {
        if (!isset(self::$_context[$name])) {
            self::$_context[$name] = $proc;
        }
        
        if (self::$_renderFlag) {
            // render a block
            call_user_func(self::$_context[$name]);
        }
    }

    static public function layout($filepath) {
        self::$_renderFlag = true;

        ob_start();
        require(self::getPath($filepath));
        $_output = ob_get_clean();

        self::$_renderFlag = false; 

        self::$_context = array(); // reset

        echo $_output;
    }

    static public function getPath($id) {
        //@TODO
        return $id;
    }
}
