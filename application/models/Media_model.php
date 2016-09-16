<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }
    
    function view()
    {
        $query = $this->db->get('media');
        return $query;
    }
    
    public function view_selected($id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where('media', array('media_id' => $id), $limit, $offset);
        return $query;
    }
   
    function save($data)
    {
        $this->db->insert('media', $data);
    }
    
    function update($id, $data)
    {
        $this->db->where('media_id', $id);
        $this->db->update('media', $data);
    }
    
    function delete($id)
    {
        $this->db->where('media_id', $id);
        $this->db->delete('media');
    }
   
}