<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login_Ajax_Model extends CI_Model
{
    function __construct()
    {
        $this->userTbl = 'account';
    }

    public function loginajax(){
        return $this->db->get("account")->result();
    }
}