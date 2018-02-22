<?php

/*
* mymvc ;
* news_model.php ;
* Satria Persada <triasada@yahoo.com> ;
* Nov 9, 2017;
* 10:20:49 PM;
* Jakarta International Container Terminal (JICT);
*/

class tasklist_Model extends Model {
    protected $table ='tasklist';
    public function __construct() {
        parent::__construct();
    }

    public function get($id) {
        $customQuery = "";
        if (isset($id)) {
            $customQuery = " where id = $id";
        }
        $query1 = "select a.* , b.priority_id ,c.priority
from tasklist a 
join project b on a.project=b.id 
join priority c on b.priority_id=c.id  " . $customQuery ." order by priority_id desc, created desc";
        $result1= $this->db->select($query1);
        foreach ($result1 as $key => $value) {
            $query2 = "select * from v_task where id = $value[id] order by lastupdate desc limit 1  ";
            $result2= $this->db->select($query2);
            $result1[$key]=$result2[0];
        }
       
        return $result1;
    }
    public function getHistory($id) {
        
        $query = "select * from v_history where taskid = $id order by created desc";
        return $this->db->select($query);
    }
    public function getResource($id) {
        $strquery1 = "SELECT resource FROM tasklist WHERE id = $id";
        $query1 = $this->db->select($strquery1);

        $role = explode('|', $query1[0]['resource']);
        
        $inmenu = implode(',', $role);
        
        $strquery2 = "SELECT fname,lname FROM userprofile WHERE userid in ($inmenu) order by userid";
        $query2 = $this->db->select($strquery2);
        $groupRole = [];
        foreach ($query2 as $value) {
            array_push($groupRole, $value['fname']." ".$value['lname']);
        }
        $groupRole = implode('|', $groupRole);
//        var_dump($groupRole);exit();
        return $groupRole;
    }

}
