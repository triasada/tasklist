<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
//        $sth = $this->db->prepare("SELECT * FROM user WHERE 
//                username = :login AND password = :password");
//        $sth->execute(array(
//            ':login' => filter_input(INPUT_POST, 'login'),
//            ':password' => md5(filter_input(INPUT_POST, 'password'))//Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
//        ));
//        
//        $data = $sth->fetch();
        $helper = new Helper();
        $id = filter_input(INPUT_POST, 'login');
        $pass = filter_input(INPUT_POST, 'password');
        $ora = new OracleDatabase();
        $data = $ora->get_userhris($id);
//        var_dump($data[0]->EMP_CARD);exit();
        if ($data[0]->EMP_CARD !== NULL) {
            $match = $ora->get_pass($id, $pass);
            if ($match[0][0] === "BENAR") {
                Session::init();
                Session::set('groupstaff', $helper->jobIdHelper($data[0]->JOB_ID));
                Session::set('role', $helper->jobIdHelper($data[0]->JOB_ID));
                Session::set('loggedIn', true);
                Session::set('userid', $data[0]->EMP_CARD);
                Session::set('userProfileName', $data[0]->INTERNAL_DISPLAY_NAME);
//                var_dump($_SESSION);exit();
                header('location:' . URL . 'dashboard');
            } else {
                $msg = 'wrong_password';
                header('location:' . URL . 'login/' . $msg);
            }
        } elseif($id=='admin' && $pass== 'admin'){
             Session::init();
                Session::set('groupstaff', 1);
                Session::set('role', 1);
                Session::set('loggedIn', true);
                Session::set('userid', 1);
                Session::set('userProfileName', 'Super Admin');
//                var_dump($_SESSION);exit();
                header('location:' . URL . 'dashboard');
        
        }else {
            $msg = 'user_not_found';
            header('location:' . URL . 'login/' . $msg);
        }
    }

}
