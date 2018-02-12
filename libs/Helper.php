<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Helper
 *
 * @author satria.persada
 */
class Helper {
    //put your code here
    public function departementHelper(){
        
    }
    
    public function jobIdHelper($job){
        switch ($job) {
            case "APPLICATION DEVELOPMENT MGR":
                $groupstaff = 2;
                break;
            case "APPLICATION DEVELOPMENT STAFF":
                $groupstaff = 3;
                break;
            case "OUTSOURCE DEV":
                $groupstaff = 4;
                break;
            case "APPLICATION SUPPORT STAFF":
                $groupstaff = 5;
                break;

            default:
                 $groupstaff = 0;
                break;
        }
        
        return $groupstaff;
    }
}
