<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class producto_Model extends CI_Model
{
    var $table = 'productos';
    var $column_order = array('id','nombre','precio','img','categoria',"text",null); //set column field database for datatable orderable
    var $column_search = array('nombre','precio','categoria'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'aces'); // default order


    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    function ViewProductos(){
        $sql = "select *from productos";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function ViewMenu(){
        $sql = "select *from sub_menu";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function ViewMenuProductos(){
        $sql = "select *from menu_productos";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function ViewProductosSearh($search){
        $sql = "select *from productos";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function booktable($search){
        $query = $this
            ->db
            ->select('*')
            ->from('productos')
            ->like('nombre',$search)
            ->or_like('categoria',$search)
            ->get();
        return $query->result_array();
    }


    public function insert($data = array()) {
        $insert = $this->db->insert($this->userTbl, $data);
        if($insert){
            $this->session->set_userdata($data);
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


    private function _get_datatables_query()
    {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();

        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->where('id', $where);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }



}