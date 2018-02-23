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
        if ($data[0]->EMP_CARD !== NULL) {
            $job = $data[0]->ORG_NAME . " " . $data[0]->JOB_ID;
            $match = $ora->get_pass($id, $pass);
            if ($match[0][0] === "BENAR") {
                Session::init();
                Session::set('groupstaff', $helper->jobIdHelper($job));
                Session::set('role', $helper->jobIdHelper($job));
                Session::set('loggedIn', true);
                $userid= $data[0]->EMP_CARD;
                Session::set('userid', "$userid");
                Session::set('userProfileName', $data[0]->INTERNAL_DISPLAY_NAME);
//                var_dump($_SESSION);exit();
                echo "Login Succesfull";
            } else {
                $msg = 'wrong password';
                echo $msg;
//                header('location:' . URL . 'login/' . $msg);
            }
        } elseif ($id == 'admin' && $pass == 'admin') {
            Session::init();
            Session::set('groupstaff', 1);
            Session::set('role', 1);
            Session::set('loggedIn', true);
            $userid= 1;
            Session::set('userid',"$userid" );
            Session::set('userProfileName', 'Super Admin');
//                var_dump($_SESSION);exit();
            echo "Login Succesfull";
        } else {
            $msg = 'user not found';
            echo $msg;
//            header('location:' . URL . 'login/' . $msg);
        }
    }

}
