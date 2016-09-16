<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function index()
	{
        $data = array(
            'category' => $this->category_model->view()->result()
        );
		$this->load->view('backend/category/index', $data);
	}
    
    public function create()
    {
        $this->load->view('backend/category/create');
    }
    
    public function edit($id)
    {
        $data = array(
            'category' => $this->category_model->view_selected($id)->result()
        );
        $this->load->view('backend/category/edit', $data);
    }
    
    public function add()
    {
        if(isset($_POST))
        {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'status' => $this->input->post('status')
            );
        }
        $this->category_model->save($data);
        
        $this->session->set_flashdata('message', 'New Category successfully saved.');
        redirect('backend/category');
    }
    
    public function update($id)
    {
        $data = array(
            'category_name' => $this->input->post('category_name'),
            'status' => $this->input->post('status')
        );
        $this->category_model->update($id, $data);
        
        $this->session->set_flashdata('message', 'Category successfully updated.');
        redirect('backend/category');
    }
    
    public function delete($id)
    {
        $this->category_model->delete($id);
        
        $this->session->set_flashdata('message', 'Category successfully deleted.');
        redirect('backend/category');
    }
}