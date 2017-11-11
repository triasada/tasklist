<?php

/*
* mymvc ;
* news_model.php ;
* Satria Persada <triasada@yahoo.com> ;
* Nov 9, 2017;
* 10:20:49 PM;
* Jakarta International Container Terminal (JICT);
*/

class Task_Model extends Model {
    protected $table ='taskhistory';
    public function __construct() {
        parent::__construct();
    }
public function get($id) {
        $customQuery = "";
        if (isset($id)) {
            $customQuery = " where resource like '%$id%' or createdby = $id ";
        }
        $query1 = "select * from tasklist " . $customQuery ."order by created desc";
        $result1= $this->db->select($query1);
        foreach ($result1 as $key => $value) {
            $query2 = "select * from v_task where id = $value[id] order by lastupdate desc limit 1  ";
            $result2= $this->db->select($query2);
            $result1[$key]=$result2[0];
        }
        return $result1;
    }

}
