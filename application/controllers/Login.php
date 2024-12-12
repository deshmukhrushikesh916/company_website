<?php

class Login extends CI_Controller
{
    function index()
    {
        $this->load->view("login");
    }
    function proccess()
    {
        $data = $this->My_model->select_where('admin',$_POST);
        if(isset($data[0]))
        {
            $_SESSION['admin_id'] = $data[0]['admin_id'];
            redirect(base_url()."admin");
        }
        else
        {
            echo "<script>alert('Invalid Details');history.back();</script>";
   }
}
}

?>