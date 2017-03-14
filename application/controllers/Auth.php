<?php



class Auth extends CI_Controller{

    public function login(){
        echo 'Welcome to the Wooden Nickel Login Page';
    }
    public function register(){

        if (isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|md5');
            //if form validation true
            if ($this->form_validation->run() == TRUE){
                echo 'form validated';

                    // add user in database


            }
        }
        //loads view
        $this->load->view('register');
    }

}