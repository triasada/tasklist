<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Data_Model extends Model{
    function __construct() {
        parent::__construct();
    }
    
    public function getProject($id) {
        $customQuery = "";
        if (isset($id)) {
            $customQuery = " where a.id = $id";
        }
        $query = "select a.*,b.departement, c.priority from project a join departement b on a.departement_id=b.id join priority c on a.priority_id = c.id" . $customQuery." order by a.priority_id desc, a.start_date desc";
        $result= $this->db->select($query);
        foreach ($result as $key => $value) {
            $query2 = "select * from tasklist where project = $value[id]";
            $result2= $this->db->select($query2);
            $result[$key]['task']=$result2;
            $result[$key]['taskall']= count($result2);
            $query3 = "select * from v_task where project = $value[id] and statusid=4";
            $result3= $this->db->select($query3);
            $result[$key]['taskdone']= count($result3);
        }
        return $result;
    }
}
