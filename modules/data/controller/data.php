<?php

class Data extends Controller {
    function __construct() {
        parent::__construct();
        $this->loadCustomModel('project', 'project');
         $this->loadCustomModel('tasklist', 'tasklist');
        $this->loadCustomModel('task', 'task');
    }
    
    public function getData() {
     $datamentah = $this->task_model->get();

        $i = 0;
        foreach ($datamentah as $value) {
            $datamentah[$i]['resourcenya'] = $this->tasklist_model->getResource($value['id']);
            $i++;
        }
        $dataproject = $this->project_model->get();
     $dataall=[];
     foreach ($dataproject as $key => $value){
         $dataall[$key]['label'] = $value['project'];
         $dataall[$key]['value'] = count($this->removeElementArray($datamentah, 'projectname', $value['project']));
     }
         
//         var_dump($dataall);exit();
        echo json_encode(array('success'=>true,'data'=>$dataall));  
    }
    
}
