<?php

class Data extends Controller {
    function __construct() {
        parent::__construct();
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
         
        $Gboss = $this->removeElementArray($datamentah, 'projectname', 'Gboss');
        $result['GbossTotal'] = count($Gboss);
        $result['GbossDone'] =  count($this->removeElementArray($Gboss, 'statusid', '4'));
        $result['GbossNew'] =  count($this->removeElementArray($Gboss, 'statusid', '0'));
        $result['GbossProc']= count($this->removeElementArray($Gboss, 'statusid', '1'));
//        var_dump($result);exit();
        echo json_encode(array('success'=>true,'data'=>$result));  
    }
    
}
