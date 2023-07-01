<?php

    namespace App\Controllers;

    class View extends BaseController {
        
        protected $helpers = ['url', 'form','array','date','filesystem','html','inflector','number','text','security'];
        public function index() {
            return view('index');
        }
    }


?>