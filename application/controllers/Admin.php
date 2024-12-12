

<?php

class Admin extends  CI_Controller
{


	function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['admin_id']))
			redirect(base_url()."login");
	}
	function logout()
	{
		session_destroy();
		redirect(base_url()."login");
	}
	

	protected   function  navbar()
	{
		$this->load->view("admin/navbar");
	}


    protected  function  footer()
	{
		$this->load->view("admin/footer");
	}

	
	public function index()
	{
	   $this->navbar();
       $this->load->view("admin/index");
       $this->footer();
	}


	// company info start

	public function company_info()
	{
		$this->navbar();
	    $data["info"] = $this->My_model->select("company_info");
		$this->load->view("admin/company_info",$data);	 
		$this->footer();

	}
	public function save_company_info()
	{
		$this->My_model->update("company_info",["company_id"=>1],$_POST);
		redirect(base_url()."admin/company_info");
	}

	// Company info end



	// Slider Start

	public function  slider()
	{
		$this->navbar();
		$data['slides'] = $this->My_model->select("slider");
		$this->load->view("admin/slider",$data);
		$this->footer();

	}
	public function save_slider()
	{
		 $file_name = time().$_FILES['slider_image']['name'];
		move_uploaded_file($_FILES['slider_image']['tmp_name'], "uploads/".$file_name);
        $_POST["slider_image"] = $file_name;
		$this->My_model->insert("slider",$_POST);
		redirect(base_url()."admin/slider");
	}

	public  function edit_slide($slider_id)
	{
		$cond = ["slider_id"=>$slider_id];
		$data['info'] = $this->My_model->select_where("slider",$cond);
		$this->navbar();
		$this->load->view("admin/edit_slide",$data);
		$this->footer();

	}

	public function update_slider()
	{
		
		if($_FILES['slider_image']['name']!='')
		{
				 $file_name = time().$_FILES['slider_image']['name'];
		move_uploaded_file($_FILES['slider_image']['tmp_name'], "uploads/".$file_name);


        $_POST["slider_image"] = $file_name;

		}

		$cond = ["slider_id"=>$_POST['slider_id']];
		$this->My_model->update("slider",$cond,$_POST);
		redirect(base_url()."admin/slider");
	}

	public function delete_slide($slider_id)
	{
		$cond = ["slider_id"=>$slider_id];
		$this->My_model->delete("slider",$cond);
		redirect(base_url()."admin/slider");
	}

	// Slider End


	// Features start

   public  function features()
   {
   		$this->navbar();
		$data['features'] = $this->My_model->select("features");
		$this->load->view("admin/features",$data);
		$this->footer();


   }
   public function save_features()
	{
		 $file_name = time().$_FILES['features_image']['name'];
		move_uploaded_file($_FILES['features_image']['tmp_name'], "uploads/".$file_name);
        $_POST["features_image"] = $file_name;
		$this->My_model->insert("features",$_POST);
		redirect(base_url()."admin/features");
	}



public  function edit_features($features_id)
	{
		$cond = ["features_id"=>$features_id];
		$data['info'] = $this->My_model->select_where("features",$cond);
		$this->navbar();
		$this->load->view("admin/edit_features",$data);
		$this->footer();

	}

	public function update_features()
	{
		
		if($_FILES['features_image']['name']!='')
		{
				 $file_name = time().$_FILES['features_image']['name'];
		move_uploaded_file($_FILES['features_image']['tmp_name'], "uploads/".$file_name);


        $_POST["features_image"] = $file_name;

		}

		$cond = ["features_id"=>$_POST['features_id']];
		$this->My_model->update("features",$cond,$_POST);
		redirect(base_url()."admin/features");
	}

	public function delete_features($features_id)
	{
		$cond = ["features_id"=>$features_id];
		$this->My_model->delete("features",$cond);
		redirect(base_url()."admin/features");
	}

	// Features End





	// About Start

	public function about()
	{
	   $this->navbar();
	   $data["info"] = $this->My_model->select("about");
       $this->load->view("admin/about",$data);
       $this->footer();
	}


	public function save_about()
{
		
		if($_FILES['image1']['name']!='')
		{
				 $file_name = time().$_FILES['image1']['name'];
		move_uploaded_file($_FILES['image1']['tmp_name'], "uploads/".$file_name);


        $_POST["image1"] = $file_name;

		}

		if($_FILES['image2']['name']!='')
		{
				 $file_name = time().$_FILES['image2']['name'];
		move_uploaded_file($_FILES['image2']['tmp_name'], "uploads/".$file_name);


        $_POST["image2"] = $file_name;

		}


         // $this->My_model->insert("about",$_POST);
		$this->My_model->update("about",["about_id"=>8],$_POST);
		redirect(base_url()."admin/about");
		
	}

	// About End


	// Service Start

    public function services()
	{
	   $this->navbar();
		$data['services'] = $this->My_model->select("services");
       $this->load->view("admin/services",$data);
       $this->footer();
	}

	public function save_services()
	{
		 $file_name = time().$_FILES['services_image']['name'];
		move_uploaded_file($_FILES['services_image']['tmp_name'], "uploads/".$file_name);
        $_POST["services_image"] = $file_name;
		$this->My_model->insert("services",$_POST);
		redirect(base_url()."admin/services");
	}


public  function edit_services($services_id)
	{
		$cond = ["services_id"=>$services_id];
		$data['info'] = $this->My_model->select_where("services",$cond);
		$this->navbar();
		$this->load->view("admin/edit_services",$data);
		$this->footer();

	}

	public function update_services()
	{
		
		if($_FILES['services_image']['name']!='')
		{
				 $file_name = time().$_FILES['services_image']['name'];
		move_uploaded_file($_FILES['services_image']['tmp_name'], "uploads/".$file_name);


        $_POST["services_image"] = $file_name;

		}

		$cond = ["services_id"=>$_POST['services_id']];
		$this->My_model->update("services",$cond,$_POST);
		redirect(base_url()."admin/services");
	}

	public function delete_services($services_id)
	{
		$cond = ["services_id"=>$services_id];
		$this->My_model->delete("services",$cond);
		redirect(base_url()."admin/services");
	}


	// Services End


	// IT Solution Start
	public function it_solution()
	{
	   $this->navbar();
	   $data["info"] = $this->My_model->select("it_solution");
       $this->load->view("admin/it_solution",$data);
       $this->footer();
	}

	public function save_it_solution()
	{
		if($_FILES['it_solution_image']['name']!='')
		{
				 $file_name = time().$_FILES['it_solution_image']['name'];
		move_uploaded_file($_FILES['it_solution_image']['tmp_name'], "uploads/".$file_name);


        $_POST["it_solution_image"] = $file_name;

		}
         // $this->My_model->insert("it_solution",$_POST);
		$this->My_model->update("it_solution",["it_solution_id"=>1],$_POST);
		redirect(base_url()."admin/it_solution");
	}

	// End It solution


	// Start testimonial
	public function testimonial()
	{
	   $this->navbar();
		$data['testimonial'] = $this->My_model->select("testimonail");
       $this->load->view("admin/testimonial",$data);
       $this->footer();
	}

	 public function save_testimonial()
	{
		 $file_name = time().$_FILES['testimonial_image']['name'];
		move_uploaded_file($_FILES['testimonial_image']['tmp_name'], "uploads/".$file_name);
        $_POST["testimonial_image"] = $file_name;
		$this->My_model->insert("testimonail",$_POST);
		redirect(base_url()."admin/testimonial");
	}





public  function edit_testimonial($testimonial_id)
	{
		$cond = ["testimonial_id"=>$testimonial_id];
		$data['info'] = $this->My_model->select_where("testimonail",$cond);
		$this->navbar();
		$this->load->view("admin/edit_testimonial",$data);
		$this->footer();

	}

	public function update_testimonial()
	{
		
		if($_FILES['testimonial_image']['name']!='')
		{
				 $file_name = time().$_FILES['testimonial_image']['name'];
		move_uploaded_file($_FILES['testimonial_image']['tmp_name'], "uploads/".$file_name);


        $_POST["testimonial_image"] = $file_name;

		}

		$cond = ["testimonial_id"=>$_POST['testimonial_id']];
		$this->My_model->update("testimonail",$cond,$_POST);
		redirect(base_url()."admin/testimonial");
	}

	public function delete_testimonial($testimonial_id)
	{
		$cond = ["testimonial_id"=>$testimonial_id];
		$this->My_model->delete("testimonail",$cond);
		redirect(base_url()."admin/testimonial");
	}

	//Testimonial End

		

    // Project Start

	public function project()
	{
	   $this->navbar();
		$data['project'] = $this->My_model->select("project");
       $this->load->view("admin/project",$data);
       $this->footer();
	}



	public function save_project()
	{
		$file_name = time().$_FILES['project_image']['name'];
		move_uploaded_file($_FILES['project_image']['tmp_name'], "uploads/".$file_name);
        $_POST["project_image"] = $file_name;
		$this->My_model->insert("project",$_POST);
		redirect(base_url()."admin/project");
	}

	public  function edit_project($project_id)
	{
		$cond = ["project_id"=>$project_id];
		$data['info'] = $this->My_model->select_where("project",$cond);
		$this->navbar();
		$this->load->view("admin/edit_project",$data);
		$this->footer();

	}

	public function update_project()
	{
		
		if($_FILES['project_image']['name']!='')
		{
				 $file_name = time().$_FILES['project_image']['name'];
		move_uploaded_file($_FILES['project_image']['tmp_name'], "uploads/".$file_name);


        $_POST["project_image"] = $file_name;

		}

		$cond = ["project_id"=>$_POST['project_id']];
		$this->My_model->update("project",$cond,$_POST);
		redirect(base_url()."admin/project");
	}

	public function delete_project($project_id)
	{
		$cond = ["project_id"=>$project_id];
		$this->My_model->delete("project",$cond);
		redirect(base_url()."admin/project");

	}

	//Project End

  public function counter()
	{
	   $this->navbar();
	   $data["info"] = $this->My_model->select("counter");
       $this->load->view("admin/counter",$data);
       $this->footer();
	}


		public function save_counter()
{
		
		if($_FILES['counter_background_image']['name']!='')
		{
				 $file_name = time().$_FILES['counter_background_image']['name'];
		move_uploaded_file($_FILES['counter_background_image']['tmp_name'], "uploads/".$file_name);


        $_POST["counter_background_image"] = $file_name;

		}

         // $this->My_model->insert("counter",$_POST);
		$this->My_model->update("counter",["counter_id"=>1],$_POST);
		redirect(base_url()."admin/counter");
		
	}

// Counter End

    // our Team Start
    public function our_team()
	{
	   $this->navbar();
		$data['our_team'] = $this->My_model->select("our_team");
       $this->load->view("admin/our_team",$data);
       $this->footer();
	}

	public function save_our_team()
	{
		$file_name = time().$_FILES['our_team_image']['name'];
		move_uploaded_file($_FILES['our_team_image']['tmp_name'], "uploads/".$file_name);
        $_POST["our_team_image"] = $file_name;
		$this->My_model->insert("our_team",$_POST);
		redirect(base_url()."admin/our_team");
	}


     public  function edit_our_team($our_team_id)
	{
		$cond = ["our_team_id"=>$our_team_id];
		$data['info'] = $this->My_model->select_where("our_team",$cond);
		$this->navbar();
		$this->load->view("admin/edit_our_team",$data);
		$this->footer();

	}

	public function update_our_team()
	{
		
		if($_FILES['our_team_image']['name']!='')
		{
				 $file_name = time().$_FILES['our_team_image']['name'];
		move_uploaded_file($_FILES['our_team_image']['tmp_name'], "uploads/".$file_name);


        $_POST["our_team_image"] = $file_name;

		}

		$cond = ["our_team_id"=>$_POST['our_team_id']];
		$this->My_model->update("our_team",$cond,$_POST);
		redirect(base_url()."admin/our_team");
	}

	public function delete_our_team($our_team_id)
	{
		$cond = ["our_team_id"=>$our_team_id];
		$this->My_model->delete("our_team",$cond);
		redirect(base_url()."admin/our_team");

	}

	// End Our Team



	// Blog Start
	 public function blog()
	{
	   $this->navbar();
		$data['blog'] = $this->My_model->select("blog");
       $this->load->view("admin/blog",$data);
       $this->footer();
	}



	public function save_blog()
	{
		$file_name = time().$_FILES['blog_image']['name'];
		move_uploaded_file($_FILES['blog_image']['tmp_name'], "uploads/".$file_name);
        $_POST["blog_image"] = $file_name;
		$this->My_model->insert("blog",$_POST);
		redirect(base_url()."admin/blog");
	}



    public  function edit_blog($blog_id)
	{
		$cond = ["blog_id"=>$blog_id];
		$data['info'] = $this->My_model->select_where("blog",$cond);
		$this->navbar();
		$this->load->view("admin/edit_blog",$data);
		$this->footer();

	}

	public function update_blog()
	{
		
		if($_FILES['blog_image']['name']!='')
		{
				 $file_name = time().$_FILES['testimonial_image']['name'];
		move_uploaded_file($_FILES['blog_image']['tmp_name'], "uploads/".$file_name);


        $_POST["blog_image"] = $file_name;

		}

		$cond = ["blog_id"=>$_POST['blog_id']];
		$this->My_model->update("blog",$cond,$_POST);
		redirect(base_url()."admin/blog");
	}

	public function delete_blog($blog_id)
	{
		$cond = ["blog_id"=>$blog_id];
		$this->My_model->delete("blog",$cond);
		redirect(base_url()."admin/blog");
	}



	  public function contact_list()
	{
	   $this->navbar();
		$data['contact'] = $this->My_model->select("contact");
       $this->load->view("admin/contact_list",$data);
       $this->footer();
	}


	  public function banners()
	{
	   $this->navbar();
	   $data["info"] = $this->My_model->select("banners");
       $this->load->view("admin/banners",$data);
       $this->footer();
	}


		public function save_banners()
{
		
		if($_FILES['banner_image1']['name']!='')
		{
				 $file_name = time().$_FILES['banner_image1']['name'];
		move_uploaded_file($_FILES['banner_image1']['tmp_name'], "uploads/".$file_name);


        $_POST["banner_image1"] = $file_name;

		}

		if($_FILES['banner_image2']['name']!='')
		{
				 $file_name = time().$_FILES['banner_image2']['name'];
		move_uploaded_file($_FILES['banner_image2']['tmp_name'], "uploads/".$file_name);
		  $_POST["banner_image2"] = $file_name;
		}


		if($_FILES['banner_image3']['name']!='')
		{
				 $file_name = time().$_FILES['banner_image3']['name'];
		move_uploaded_file($_FILES['banner_image3']['tmp_name'], "uploads/".$file_name);
		  $_POST["banner_image3"] = $file_name;
		}

        $this->My_model->update("banners",["banner_id"=>1],$_POST);
		redirect(base_url()."admin/banners");


         // $this->My_model->insert("banners",$_POST);
		
		
	}





	
	}







?>






 

