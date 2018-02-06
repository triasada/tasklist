<?php

/*
* mymvc ;
* news.php ;
* Satria Persada <triasada@yahoo.com> ;
* Nov 9, 2017;
* 9:58:07 PM;
* Jakarta International Container Terminal (JICT);
*/

class Tasklist extends Backend{
    protected $module_name='tasklist';
    protected $_title='Manage Task';
            function __construct() {
        parent::__construct();
        $this->loadCustomModel('project', 'project');
        $this->loadCustomModel('user', 'user');
        
    }
    
    public function Index() {
       $datamentah = $this->model->get();
       
       $i=0;
       foreach ($datamentah as $value) {
           $datamentah[$i]['resourcenya']=$this->model->getResource($value['id']);
           $i++;
       }
        $result['data'] = $datamentah;
        
         $this->view->js = array('js/index.js');
         $this->view->data = $result;
         $this->view->title = $this->_title;
         $this->rendering('index');
    }
    public function getHistory() {
         $id = filter_input(INPUT_POST, 'id');
         $data = $this->model->getHistory($id);
         echo json_encode(array('success' => true, 'data' => $data));
    }
    public function add() {
        $this->view->project = $this->project_model->get();
        $this->view->resource = $this->user_model->getBelow1($this->id);
        parent::add();
        
    }
    public function edit($id) {
        $this->view->project = $this->project_model->get();
        $this->view->resource = $this->user_model->getBelow($this->id);
        parent::edit($id);
        
    }
     public function save($id) {
        $data = filter_input_array(INPUT_POST);
        $role = implode('|', $data['resource']);
        $data['resource']=$role;
        $data['createdby']=intval($this->id);
        if (isset($id)){
            $data['id']=$id;
        }
		
        $result = (isset($id)) ? $this->model->edit($data) : $this->model->add($data);
		
        $success = ($result === 1) ? true : false;
        $msg = ($result === 1) ? 'success' : 'failed';
        echo json_encode(array('success' => $success, 'msg' => $msg));
		
//        var_dump($data);
    }
    
}