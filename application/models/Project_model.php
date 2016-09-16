<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }
   
    function view()
    {
        $query = $this->db->get('project');
        return $query;
    }
    
    public function view_selected($id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where('project', array('project_id' => $id), $limit, $offset);
        return $query;
    }
    
    public function save($data) {
        $this->db->insert('project', $data);
    }

    function update($id, $data)
    {
        $this->db->where('project_id', $id);
        $this->db->update('project', $data);
    }
    
    function delete($id)
    {
        $this->db->where('project_id', $id);
        $this->db->delete('project');
    }
}