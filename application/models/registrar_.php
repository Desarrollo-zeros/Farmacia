<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class registrar_ extends CI_Model{
    function __construct() {
        $this->userTbl = 'account';
    }
    /*
     * get rows from the users table
     */

    public function chekExist($email, $password)
    {
        $this -> db -> select('*');
        $this -> db -> from('account');
        $this -> db -> where('email', $email);
        $this->db ->where( 'password', $password);
        if($this->db->count_all_results() == 1){
            $newdata = array(
                'email'  => $email,
                'password'     => $password,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            return true;
        }
        else{
            return false;
        }
    }

    public function checkEmail($email)
    {
        $this -> db -> select('*');
        $this -> db -> from('account');
        $this -> db -> where('email', $email);
        $query = $this -> db -> get();
        return $query->result_array();
    }


    public function checkUser($user)
    {
        $this -> db -> select('*');
        $this -> db -> from('account');
        $this -> db -> where('usuario', $user);
        $query = $this -> db -> get();
        return $query->result_array();
    }


    public function Chek($email)
    {
        $this -> db -> select('*');
        $this -> db -> from('account');
        $this -> db -> where('email', $email);
        $query = $this -> db -> get();
        return $query->result_array();
    }


    public function chekAccount($email){
        $this->db->select('*');
        $this->db->from('account');
        $this ->db-> where('email', $email);
        $this->db->join('account_acces', 'account_acces.id = account.id');
        $query = $this -> db -> get();
        if($this->db->count_all_results() == 1){
            return $query->result_array();
        }
    }


    /*
     * Insert user information
     */
    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);

        //return the status
        if($insert){
            $this->session->set_userdata($data);
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

}