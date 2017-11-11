<?php

class Dashboard extends Backend {

    protected $module_name = 'dashboard';
    protected $_title = 'Dashboard';

    function __construct() {
        parent::__construct();
        $this->loadCustomModel('tasklist', 'tasklist');
        $this->loadCustomModel('task', 'task');
//        $this->view->js = array('dashboard/js/default.js');
    }

    function index() {
       $datamentah = $this->task_model->get($this->id);

        $i = 0;
        foreach ($datamentah as $value) {
            $datamentah[$i]['resourcenya'] = $this->tasklist_model->getResource($value['id']);
            $i++;
        }
         
        $result['dataAll'] = $datamentah;
        $result['dataNew'] = count($this->removeElementArray($datamentah, 'statusid', '0'));
        $result['dataProc'] = count($this->removeElementArray($datamentah, 'statusid', '1'));
        $result['dataNeed'] = count($this->removeElementArray($datamentah, 'statusid', '2'));
        $result['dataRev'] = count($this->removeElementArray($datamentah, 'statusid', '3'));
        $result['dataDone'] = count($this->removeElementArray($datamentah, 'statusid', '4'));
        $result['dataAll'] = $datamentah;
        $this->view->sess = $_SESSION;
        $this->view->msg = 'Welcome ' . $this->view->nameuser;
//        $this->view->js = array('js/index.js');
        $this->view->data = $result;
        $this->view->title = $this->_title;
        $this->rendering('index');
    }

    function logout() {
        Session::destroy();
        header('location: ' . URL . 'login');
        exit;
    }

}
