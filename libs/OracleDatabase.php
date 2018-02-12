<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OracleDatabase
 *
 * @author satria.persada
 */
class OracleDatabase {

    //put your code here
    public function glib() {
        $conn = oci_connect('ifsapp', 'ifsappq', '172.16.241.41/office');
        return $conn;
    }

    public function get_userhris($id = NULL) {
        if (isset($id)) {
            $query = "select * from (SELECT EMP_CARD,INTERNAL_DISPLAY_NAME,ORG_NAME ,JOB_ID
FROM EMPLOYEE_POSITION2 b
 WHERE RPAD(POS_CODE,6) IN ('104051','104052')
UNION ALL
SELECT EMP_CARD,EMP_NAME,ORG_NAME,JOB_ID FROM EMP_DEV_OUTSOURCE WHERE STATUS='AKTIF'
ORDER BY 3,4)  usertable where EMP_CARD = $id
                     ";
        } else {
            $query = "SELECT EMP_CARD,INTERNAL_DISPLAY_NAME,ORG_NAME ,JOB_ID
FROM EMPLOYEE_POSITION2 b
 WHERE RPAD(POS_CODE,6) IN ('104051','104052')
UNION ALL
SELECT EMP_CARD,EMP_NAME,ORG_NAME,JOB_ID FROM EMP_DEV_OUTSOURCE WHERE STATUS='AKTIF'
ORDER BY 3,4";
        }
        $json = oci_parse($this->glib(), $query);
        $res = array();
        if (!oci_execute($json)) {
            $res = oci_error($this->glib());
        }

        while (($row = oci_fetch_object($json)) != false) {
            array_push($res, $row);
        }

        return $res;
    }
    public function get_pass($id = NULL,$pass=null) {
        if (isset($id)) {
            $query = "select Get_portaldev_login('$id','$pass') from dual";
        } 
        $json = oci_parse($this->glib(), $query);
        $res = array();
        if (!oci_execute($json)) {
            $res = oci_error($this->glib());
        }

        while (($row = oci_fetch_array($json)) != false) {
            array_push($res, $row);
        }

        return $res;
    }

}
