<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('registrar_');
        $this->load->library('facebook');
        $this->load->model('facebook_Model');

    }


    public function profile(){
        $data['gm'] = "";
        if(!isset($_SESSION['email']))
        {
            redirect('');
        }
        else{
            $chek = $this->registrar_->chekAccount($_SESSION['email']);
          foreach ($chek as $row){
                  $data['nombre'] = $row['nombre'];
                  $data['img'] = $row['img'];
              }
            $this->load->view('account/profile',$data);
        }

    }

    public function e(){
        $this->load->view('account/e');
    }
    public function r(){
        $this->load->view('account/r');
    }
    public function v(){
        $data['nombre'] = strip_tags($this->input->post('nombre'));
        $this->load->view('account/v');
    }

    public function login()
    {
        if(isset($_SESSION['email']))
        {
            redirect('');
        }
        else{
            $userData = array();
            // Check if user is logged in
            $userData = array();

            // Check if user is logged in
            if($this->facebook->is_authenticated()){
                // Get user facebookControl profile details
                $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

                // Preparing data for database insertion
                $userData['oauth_provider'] = 'facebookControl';
                $userData['oauth_uid'] = $userProfile['id'];
                $userData['first_name'] = $userProfile['first_name'];
                $userData['last_name'] = $userProfile['last_name'];
                $userData['email'] = $userProfile['email'];
                $userData['gender'] = $userProfile['gender'];
                $userData['locale'] = $userProfile['locale'];
                $userData['profile_url'] = 'https://www.facebookControl.com/'.$userProfile['id'];
                $userData['picture_url'] = $userProfile['picture']['data']['url'];

                // Insert or update user data
                $userID = $this->user->checkUser($userData);
                // Check user data insert or update status
                if(!empty($userID)){
                    $data['userData'] = $userData;
                    $this->session->set_userdata('userData',$userData);
                } else {
                    $data['userData'] = array();
                }

                // Get logout URL
                $data['logoutUrl'] = $this->facebook->logout_url();
            }else{
                $fbuser = '';

                // Get login URL
                $data['authUrl'] =  $this->facebook->login_url();
            }
        }
        $this->load->view('account/login', $data);
    }


    public function  registrarajax(){
        if (!$this->input->is_ajax_request()) { exit('no valid req.'); }
        $email = $this->input->post('email');
        $username = $this->input->post('usuario');
        $result1 = $this->registrar_->checkEmail($email);
        $result2 = $this->registrar_->checkUser($username);
        if($result1){
            echo '<div class="success">Correo ya existe</div>';
        }
        if($result2){
            echo '<div class="success">Usuario ya existe</div>';
        }
        else if(!$result1 and !$result2){
            $userData = array(
                'nombre' => strip_tags($this->input->post('nombre')),
                'telefono' => strip_tags($this->input->post('telefono')),
                'email' => strip_tags($this->input->post('email')),
                'usuario' => strip_tags($this->input->post('usuario')),
                'password' => md5($this->input->post('password')),
            );
            $insert = $this->registrar_->insert($userData);
            if($insert){
                $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                echo '<div class="success"></div><meta http-equiv="refresh" content="0; url="'.base_url("").'" />';
            }
            else{
                echo '<div class="success">No se pudo registrar usuario contacte con un administrador</div>';
            }
        }
    }

    public function registration()
    {
        if(isset($_SESSION['email']))
        {
            redirect('');
        }
        $this->load->view('account/registration');
    }


    public function loginajax(){
        if (!$this->input->is_ajax_request()) { exit('no valid req.'); }
        $email = $this->input->post('email');
        $pass =  md5($this->input->post('password'));
        $checkLogin = $this->registrar_->chekExist($email,$pass);
        if($checkLogin){
            echo '<div class="success"></div><meta http-equiv="refresh" content="0; url="'.base_url("").'" />';
        }
        else{
            echo '<div class="success">Usuario o Contraseña invalido</div>';
        }
    }


    public function logout(){
        // Remove local Facebook session
        session_destroy();
        $this->facebook->destroy_session();
        $this->session->unset_userdata('userData');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        redirect('');
    }

    public function a()
    {
        $data['txtnombre'] = "";
        if (!$this->input->is_ajax_request()) {
            exit('no valid req.');
        }
        $data['txtnombre'] = $this->input->post('txtnombre');
        echo '<div class="success"></div>';
        $this->load->view('account/profile', $data);
        $this->load->view('account/a', $data);

    }

}