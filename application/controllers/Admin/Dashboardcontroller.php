<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardcontroller extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model("CommonModel");
		$this->load->model("database_model");
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
	}


	public function index()
	{
		 $getassets = $this->database_model->getassets();

		 $data['getassets'] = $getassets;
		 
		$this->load->view('admin/dashboard',$data);

	}

	//show form for insert or get method as laravel
	// only for drop down radio checkbox 

	public function addassets()
	{	



		$senddata = array();
		$senddata['getamenities'] = $this->CommonModel->getamenities();
		$senddata['getassetstypes'] = $this->CommonModel->getassetstypes();
		$senddata['getassetseater'] = $this->CommonModel->getassetseater();
		$senddata['getassetstatus'] = $this->CommonModel->getassetstatus();
	


		$this->load->view('admin/addassets', $senddata);
		
		
	}


	// insert data into database or post method as laravel
	public function insertassets()
	{
		$insertdata = array();
		
		

		$this->load->library('upload', $config);
		
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('getassetstypes', 'getassetstypes', 'required');



		if ($this->form_validation->run() == TRUE)
		{  
			//print_r($_FILES);

			$img =  $_FILES['image']['name'];
			if($img !=""){
				$imgext  = @end(explode(".",$img));
				$imgtest1 =strtolower($imgext);
				$new_img = time(). '.' .$imgtest1;
				$img_path = './public/uploads/' . $new_img;
				move_uploaded_file($_FILES['image']['tmp_name'],$img_path);
			}



			$insertdata['name'] = $this->input->post('name');
        $insertdata['address'] = $this->input->post('address');
      
		$insertdata['getassetseater'] = $this->input->post('getassetseater');
		$insertdata['image'] = $new_img;
		
		 $getamentities = $this->input->post('getamentities');
        $insertdata['getamenities'] = json_encode($getamentities);
        $insertdata['getassetstypes'] = $this->input->post('getassetstypes');
        $insertdata['getassetstatus'] = $this->input->post('getassetstatus');

		//print_r($insertdata);
    
		 $this->db->insert("assets", $insertdata);
		 redirect('admin/dashboard');
		// print_r($query);
			
		}

		else{
			$senddata = array();
		$senddata['getamenities'] = $this->CommonModel->getamenities();
		$senddata['getassetstypes'] = $this->CommonModel->getassetstypes();
		$senddata['getassetseater'] = $this->CommonModel->getassetseater();
		$senddata['getassetstatus'] = $this->CommonModel->getassetstatus();
	


		$this->load->view('admin/addassets', $senddata);
			

		}
    
            
        

			}	

			
			


			// delete ka route hai
			
		public function delete($id){
			$this->db->where('id',$id);
			$this->db->delete('assets');
			redirect('admin/dashboard');


		}



		 public function editassets($id)
		{		$this->db->where('id',$id);
			$result = $this->db->get('assets')->result_array();

			$data['editassets'] = $result;
			$data['getamenities'] = $this->CommonModel->getamenities();
		$data['getassetstypes'] = $this->CommonModel->getassetstypes();
		$data['getassetseater'] = $this->CommonModel->getassetseater();
		$data['getassetstatus'] = $this->CommonModel->getassetstatus();

			$this->load->view('admin/editassets',$data);
			
		}


		public function update($id){
				
			
			$updatedata = array();
			 
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('getassetstypes', 'getassetstypes', 'required');



        if ($this->form_validation->run() == true) {
		
			$img =  $_FILES['image']['name'];

			if($img !=""){
				$imgext  = @end(explode(".",$img));
				$imgtest1 =strtolower($imgext);
				$new_img = time(). '.' .$imgtest1;
				$img_path = './public/uploads/' . $new_img;
				move_uploaded_file($_FILES['image']['tmp_name'],$img_path);
			}

			
			if(empty($img)){
				$new_img = $_REQUEST['old_image'];			

			}



            $updatedata['name'] = $this->input->post('name');
			$updatedata['address'] = $this->input->post('address');
			
			echo $updatedata['image'] = $new_img;
			
            $updatedata['getassetseater'] = $this->input->post('getassetseater');
        
            $getamentities = $this->input->post('getamentities');
            $updatedata['getamenities'] = json_encode($getamentities);
            $updatedata['getassetstypes'] = $this->input->post('getassetstypes');
            $updatedata['getassetstatus'] = $this->input->post('getassetstatus');

            // //print_r($insertdata);
            $this->db->where('id', $id);
            $this->db->update("assets", $updatedata);
            redirect('admin/dashboard');
            // print_r($query);
		}
		
		else{
			$this->db->where('id',$id);
			$result = $this->db->get('assets')->result_array();

			$data['editassets'] = $result;
			$data['getamenities'] = $this->CommonModel->getamenities();
		$data['getassetstypes'] = $this->CommonModel->getassetstypes();
		$data['getassetseater'] = $this->CommonModel->getassetseater();
		$data['getassetstatus'] = $this->CommonModel->getassetstatus();

			$this->load->view('admin/editassets',$data);

		}


		}



	



}
