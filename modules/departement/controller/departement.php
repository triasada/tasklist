<?php

/*
* mymvc ;
* news.php ;
* Satria Persada <triasada@yahoo.com> ;
* Nov 9, 2017;
* 9:58:07 PM;
* Jakarta International Container Terminal (JICT);
*/

class Departement extends Backend{
    protected $module_name='Departement';
    protected $_title='Manage Departement';
            function __construct() {
        parent::__construct();
    }
    public function edit($id) {
       
        parent::edit($id);
    }

    public function add() {
        
        parent::add();
    }
    
    
    
}