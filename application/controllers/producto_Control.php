<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class producto_Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('registrar_');
        $this->load->library('facebook');
        $this->load->model('facebook_Model');
        $this->load->model('producto_Model','producto');
    }
    public function index(){
        $data['ViewProductos'] = $this->producto->ViewProductos();
        $data['ViewMenu'] = $this->producto->ViewMenu();
        $this->load->view('producto_Control/index',$data);
    }
	   public function preview(){
           $data['ViewProductos'] = $this->producto->ViewProductos();
           $data['ViewMenu'] = $this->producto->ViewMenu();
        $this->load->view('producto_Control/preview',$data);
    }

    public function ajax_list()
    {
        $list = $this->producto->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $producto) {
            $no++;
            $row = array();
            $row[] = $producto->id;
            $row[] = $producto->nombre;
            $row[] = $producto->img;
            $row[] = $producto->precio;
            $row[] = $producto->categoria;
            $row[] = $producto->text;


            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$producto->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Editar</a>';
            $row[] = ' <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$producto->id."'".')"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->producto->count_all(),
            "recordsFiltered" => $this->producto->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->producto->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {

        //upload file

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB

       $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                $data['valor'] = false;
            } else {
                if (file_exists('uploads/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('file')) {
                       // echo 'Imagen Guardado con existo : '.$this->upload->data('file_name');
                        $data['valor'] = true;
                    }
                    else{
                        echo 'Error: '.$this->upload->data('file_name');
                        $data['valor'] = false;
                    }
                }
            }
        } else {
            $data['valor'] = false;
        }
        if($data['valor']){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'precio' => $this->input->post('precio'),
                'img' =>$this->upload->data('file_name'),
                'categoria' => $this->input->post('categoria'),
                'text' => $this->input->post('detalle'),
            );
            $insert = $this->producto->save($data);
            if( $insert) {
                  echo "el producto: ".$this->input->post('nombre')." fue guardado con exito";
                }
            else{
                echo 'Error al ingresar producto';
            }
        }else{

        }

    }

    public function ajax_update()
    {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1024'; //1 MB
        $data['valor'] = false;
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
            } else {
                if (file_exists('uploads/' . $_FILES['file']['name'])) {
                    echo '<div class="succes">Imagen ya existe/'.$_FILES['file']['name'].'</div>';
                } else {
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('file')) {
                        // echo 'Imagen Guardado con existo : '.$this->upload->data('file_name');
                        $data['valor'] = true;
                    }
                    else{
                        echo 'Error: '.$this->upload->data('file_name');
                        $data['valor'] = false;
                    }
                }
            }
        } else {
            $data['valor'] = false;
        }
        if($data['valor']) {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'precio' => $this->input->post('precio'),
                'img' => $this->upload->data('file_name'),
                'categoria' => $this->input->post('categoria'),
                'text' => $this->input->post('detalle'),
            );
        }else{
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'precio' => $this->input->post('precio'),
                'categoria' => $this->input->post('categoria'),
                'text' => $this->input->post('detalle'),
            );
        }
            $insert = $this->producto->update($this->input->post('id'),$data);
            if( $insert) {
                echo "el producto: ".$this->input->post('nombre')." fue guardado con exito";
            }
            else{
                echo "error al actualizar";
            }
    }

    public function ajax_delete($id)
    {
        $this->producto->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

}
?>