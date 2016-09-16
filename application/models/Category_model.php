<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }
    
    function view()
    {
        $query = $this->db->get('category');
        return $query;
    }
    
    public function view_selected($id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where('category', array('category_id' => $id), $limit, $offset);
        return $query;
    }
   
    function save($data)
    {
        $this->db->insert('category', $data);
    }
    
    function update($id, $data)
    {
        $this->db->where('category_id', $id);
        $this->db->update('category', $data);
    }
    
    function delete($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('category');
    }
   
}