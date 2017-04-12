<?php
    class Autoload{
        public function loader($class){
            $filename = strtolower($class).'.php';
            $file = 'sourceFiles/'.$filename;
            if(!file_exists($file)){
                return false;
            }
            include $file;
        }
    }