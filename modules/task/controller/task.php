<?php

/*
 * mymvc ;
 * news.php ;
 * Satria Persada <triasada@yahoo.com> ;
 * Nov 9, 2017;
 * 9:58:07 PM;
 * Jakarta International Container Terminal (JICT);
 */

class Task extends Backend {

    protected $module_name = 'task';
    protected $_title = 'Task Overview';

    function __construct() {
        parent::__construct();
        $this->loadCustomModel('project', 'project');
        $this->loadCustomModel('user', 'user');
        $this->loadCustomModel('tasklist', 'tasklist');
    }

    public function Index() {
        $datamentah = $this->model->get($this->id);

        $i = 0;
        foreach ($datamentah as $value) {
            $datamentah[$i]['resourcenya'] = $this->tasklist_model->getResource($value['id']);
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
        $data = $this->tasklist_model->getHistory($id);
        echo json_encode(array('success' => true, 'data' => $data));
    }

    

}
