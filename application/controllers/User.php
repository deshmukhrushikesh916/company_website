<?php

class User extends CI_Controller
{

	protected function  navbar()
	{
		$this->load->view("user/navbar");
	}

	protected function  footer()
	{
	    $data["info"] = $this->My_model->select("company_info");
		$this->load->view("user/footer",$data);
	}

	public function index()
	{
		$this->navbar();
		$data['slides'] = $this->My_model->select("slider");
		$data['features'] = $this->My_model->select("features");
		$data['services'] = $this->My_model->select("services");
		$data['about'] = $this->My_model->select("about");
		$data['it_solution'] = $this->My_model->select("it_solution");
		$data['testimonial'] = $this->My_model->select("testimonail");
		$data['project'] = $this->My_model->select("project");
		$data['counter'] = $this->My_model->select("counter");
		$data['our_team'] = $this->My_model->select("our_team");
		$data['blog'] = $this->My_model->select("blog");
		$this->load->view("user/index",$data);
		$this->footer();

	}

	public function services()
	{
		$this->navbar();
		$data['features'] = $this->My_model->select("features");
		$data['services'] = $this->My_model->select("services");
		$data['blog'] = $this->My_model->select("blog");
		$data['banners'] = $this->My_model->select("banners");

		$this->load->view("user/services",$data);
		$this->footer();
	}

	public function about()
	{
		$this->navbar();
		$data['features'] = $this->My_model->select("features");
		$data['about'] = $this->My_model->select("about");
		$data['testimonial'] = $this->My_model->select("testimonail");
		$data['it_solution'] = $this->My_model->select("it_solution");
		$data['counter'] = $this->My_model->select("counter");
		$data['our_team'] = $this->My_model->select("our_team");
		$data['banners'] = $this->My_model->select("banners");
		$this->load->view("user/about",$data);
		$this->footer();
	}

	public function projects()
	{
		$this->navbar();
		$data['project'] = $this->My_model->select("project");
		$data['banners'] = $this->My_model->select("banners");
		$this->load->view("user/projects",$data);
		$this->footer();


	}

	public function blog()
	{
		$this->navbar();
		$data['blog'] = $this->My_model->select("blog");
		$data['banners'] = $this->My_model->select("banners");		
		$this->load->view("user/blog",$data);
		$this->footer();


	}


	public function contact()
	{
		$this->navbar();
		$data['banners'] = $this->My_model->select("banners");
	    $data["info"] = $this->My_model->select("company_info");
		$this->load->view("user/contact",$data);
		$this->footer();
	}


	public  function save_contact()
	{
		$this->My_model->insert("contact",$_POST);
		redirect(base_url()."user/contact");


	}

	

}




?>