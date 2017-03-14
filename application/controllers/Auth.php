<?php



class Auth extends CI_Controller{

    public function login(){
        echo 'Welcome to the Wooden Nickel Login Page';
    }
    public function register(){
        $this->load->view('register');
    }

}