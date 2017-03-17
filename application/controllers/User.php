<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_logged'])) {
            $this->session->set_flashdata("error", "Please login first to view this page");
            header("Location:http://localhost:8888/ASL-CI/index.php/auth/login");

        }

    }

    public function profile()
    {

        $this->load->view('profile');

    }


}