<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function index()
	{
		$data = array(
            'project' => $this->project_model->view()->result()
        );
        $this->load->view('backend/project/index', $data);
	}
    
    public function create()
    {
        $data = array(
            'category' => $this->category_model->view()->result()
        );
        $this->load->view('backend/project/create', $data);
    }
    
    public function edit($id)
    {
        $data = array(
            'project' => $this->project_model->view_selected($id)->result(),
            'category' => $this->category_model->view()->result()
        );
        $this->load->view('backend/project/edit', $data);
    }
    
    public function add()
    {
        if(isset($_POST))
        {
            $data = array(
                'project_name' => $this->input->post('project_name'),
                'project_description' => $this->input->post('project_description'),
                'category_id' => $this->input->post('category_id'),
                'status' => $this->input->post('status'),
                'image_1' => $this->input->post('image_media_1'),
                'image_2' => $this->input->post('image_media_2'),
                'image_3' => $this->input->post('image_media_3'),
                'image_4' => $this->input->post('image_media_4'),
                'image_5' => $this->input->post('image_media_5'),
                'image_6' => $this->input->post('image_media_6'),
                'image_7' => $this->input->post('image_media_7'),
                'image_8' => $this->input->post('image_media_8'),
                'video_url' => $this->input->post('video_media_url'),
            );
        }
        $this->project_model->save($data);
        
        $this->session->set_flashdata('message', 'New Project successfully saved.');
        redirect('backend/project');
    }
    
    public function update($id)
    {
        $data = array(
            'project_name' => $this->input->post('project_name'),
            'project_description' => $this->input->post('project_description'),
            'category_id' => $this->input->post('category_id'),
            'status' => $this->input->post('status'),
            'image_1' => $this->input->post('image_media_1'),
            'image_2' => $this->input->post('image_media_2'),
            'image_3' => $this->input->post('image_media_3'),
            'image_4' => $this->input->post('image_media_4'),
            'image_5' => $this->input->post('image_media_5'),
            'image_6' => $this->input->post('image_media_6'),
            'image_7' => $this->input->post('image_media_7'),
            'image_8' => $this->input->post('image_media_8'),
            'video_url' => $this->input->post('video_media_url'),
        );
        $this->project_model->update($id, $data);
        
        $this->session->set_flashdata('message', 'Project successfully updated.');
        redirect('backend/project');
    }
    
    public function delete($id)
    {
        $this->project_model->delete($id);
        
        $this->session->set_flashdata('message', 'Project successfully deleted.');
        redirect('backend/project');
    }

    public function upload($uploadNumber) {
        if(isset($_FILES["image".$uploadNumber]) && $_FILES["image".$uploadNumber]["error"] == UPLOAD_ERR_OK)
        {
            $UploadDirectory    = 'media/gallery/';
            $File_Name          = strtolower($_FILES['image'.$uploadNumber]['name']);
            $File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
            $Current_Date       = date('mdYHis'); //time stamp to be added to name.
            $NewFileName        = $Current_Date.$File_Ext; //new file name
            move_uploaded_file($_FILES['image'.$uploadNumber]['tmp_name'], $UploadDirectory.$NewFileName);
        }

        // Save media to database
        $data = array(
            'file_name' => $NewFileName,
            'status' => 'Enabled'
        );
        $this->media_model->save($data);

        $arr = array('fileName' => $NewFileName);

        header('Content-Type: application/json');
        echo json_encode($arr);
    }
}