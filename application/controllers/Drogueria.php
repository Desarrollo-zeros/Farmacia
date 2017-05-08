<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drogueria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('registrar_');
        $this->load->library('facebook');
        //Load user model
        $this->load->model('facebook_Model');
        $this->load->model('producto_Model');
    }


    public function index(){
        $userData = array();
        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];

            // Insert or update user data
            $userID = $this->facebook_Model->checkUser($userData);

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
        $data['ViewProductos'] = $this->producto_Model->ViewProductos();
        $data['ViewMenuProductos'] = $this->producto_Model->ViewMenuProductos();
        $this->load->view('index',$data);
    }

    public function logoutfb() {
        // Remove local Facebook session
        $this->facebook->destroy_session();
        // Remove user data from session
        $this->session->unset_userdata('userData');
        // Redirect to login page
        redirect('');
    }
    public function search(){
        if(is_null($this->input->get('id')))
        {
            $this->load->view('');
        }
        else
        {
            $data['booktable']=$this->producto_Model->booktable($this->input->get('id'));
            $this->load->view('search',$data);

        }
    }

    public function parcial(){
        $data['r'] =  $this->producto_Model->persona();
        $this->load->view('parcial',$data);
    }

    public function ap(){
        if (!$this->input->is_ajax_request()) { exit('no valid req.'); }
        $ar = array(
            "n_ident" => $this->input->post('n_ident'),
            "nombre"  => $this->input->post('nombre'),
            "correo"  => $this->input->post('correo'),
            "fecha_nacimiento"  => $this->input->post('fecha_nacimiento'),
            "sexo"  => $this->input->post('sexo'),
            "idc"  => $this->input->post('cid'),
        );
        $insert=  $this->producto_Model->crud($ar);
        if($insert){

            echo '<div class="success">'.$this->input->post('nombre').'</div>';
        }
        else{
            echo '<div class="success">No se pudo registrar usuario contacte con un administrador</div>';
        }

    }

    public function departamento(){
        if (!$this->input->is_ajax_request()) { exit('no valid req.'); }
        $r = $this->producto_Model->departamento();
        foreach ($r as $row){
            echo "<option value=".$row['idd'].">". $row['depto']."</option>";
        }

    }
    public function ciudad(){
        $idc = $this->input->post('idc');
        $r = $this->producto_Model->ciudad($idc);
        foreach ($r as $row){
            echo "<option value=".$row['idc'].">". $row['ciud']."</option>";
        }
    }

    public function x(){
    $this->load->view('/x');
    }
}
?>
