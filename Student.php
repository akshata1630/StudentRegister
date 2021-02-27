<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function index(){
        $this->load->model('server_model');
         $users = $this->server_model->all();
         $data = array();
         $data['users'] = $users;
        $this->load->view('Form', $data);
    }


	function create(){
        $this->load->model('server_model');
        $this->form_validation->set_rules('sname','sname','required');
        $this->form_validation->set_rules('rollno','rollno','required');
		$this->form_validation->set_rules('std','std','required');

        if($this->form_validation->run() == false) {
        	$this->load->view('table'); 
        }else {
            //save record to database

            $formArray = array();
            $formArray['sname'] = $this->input->post('sname');
            $formArray['rollno'] = $this->input->post('rollno');
            $formArray['std'] = $this->input->post('std');

            $this->server_model->create($formArray);
            $this->session->set_flashdata('success','Recored Added Successfully !');
            redirect(base_url().'index.php');
        }
      
    }

	/*function table(){
		$this->load->model('server_model');
		$data['fetch']=$this->server_model->fetch_data();
		$this->load->view('table',$data); 
	} */	


}
