<?php

class Index extends Controller {
    function __construct() {
        parent::__construct();
         $this->loadCustomModel('tasklist', 'tasklist');
        $this->loadCustomModel('task', 'task');
    }
    
    function index() {
        
        $this->view->title = 'Home';
        $this->view->render('header');
         $this->view->js = array('js/depan.js');
        $this->view->renderModule('default','index');
        $this->view->render('footer');
    }
    public function getData() {
     $datamentah = $this->task_model->get();

        $i = 0;
        foreach ($datamentah as $value) {
            $datamentah[$i]['resourcenya'] = $this->tasklist_model->getResource($value['id']);
            $i++;
        }
         
        $result['Gboss'] = $this->removeElementArray($datamentah, 'projectname', 'Gboss');
        $result['GbossTotal'] = count($result['Gboss']);
        $result['GbossDone'] =  count($this->removeElementArray($result['Gboss'], 'statusid', '4'));
        $result['GbossNew'] =  count($this->removeElementArray($result['Gboss'], 'statusid', '0'));
        $result['GbossProc']= count($this->removeElementArray($result['Gboss'], 'statusid', '1'));
        echo json_encode(array('success'=>true,'data'=>$result));  
    }
    
}