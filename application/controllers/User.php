<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($_SESSION['user_logged'] == FALSE ) {
            $this->session->set_flashdata("error", "Please login first to view this page");
            header("Location:http://localhost:8888/ASL-CI/index.php/auth/login");

        }

    }
        //This function confirms that the user is logged in
        // -if not then the user is redirected to the login page
    public function profile()
    {
        if ($_SESSION['user_logged'] == FALSE ) {
            $this->session->set_flashdata("error", "Please login first to view this page");
            header("Location:http://localhost:8888/ASL-CI/auth/login");

        }
        $this->load->view('profile');


    }
    public function cart()
    {

        $this->load->view('cart');
    }

}