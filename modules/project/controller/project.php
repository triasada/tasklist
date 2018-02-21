<?php

/*
* mymvc ;
* news.php ;
* Satria Persada <triasada@yahoo.com> ;
* Nov 9, 2017;
* 9:58:07 PM;
* Jakarta International Container Terminal (JICT);
*/

class Project extends Backend{
    protected $module_name='project';
    protected $_title='Manage Project';
            function __construct() {
        parent::__construct();
    }
    
    public function range($id){
        $this->view->js = array('js/range.js');
        $this->view->title = "Add Range ".$this->module_name;
        $data = $this->model->get($id);
        $result['data'] = $data[0];
        $this->view->data = $result;
        $this->rendering('range');
    }
    
}