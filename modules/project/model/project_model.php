<?php

/*
* mymvc ;
* news_model.php ;
* Satria Persada <triasada@yahoo.com> ;
* Nov 9, 2017;
* 10:20:49 PM;
* Jakarta International Container Terminal (JICT);
*/

class Project_Model extends Model {
    protected $table ='project';
    public function __construct() {
        parent::__construct();
    }
    public function get($id) {
        $customQuery = "";
        if (isset($id)) {
            $customQuery = " where a.id = $id";
        }
        $query = "select a.*,b.departement, c.priority from $this->table a join departement b on a.departement_id=b.id join priority c on a.priority_id = c.id" . $customQuery;
        return $this->db->select($query);
    }

}
