<?php



class Auth extends CI_Controller{

    public function login(){
        echo 'Welcome to the Wooden Nickel Login Page';
    }
    public function register(){

        if (isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('phone','Phone','required|min_length[5]');

            //if form validation true
            if ($this->form_validation->run() == TRUE){
                echo 'Registration Confirmed';

                    // add user in database
                $data = array(
                    'username'=>$_POST['username'],
                    'email'=>$_POST['email'],
                    'password'=>md5($_POST['password']),
                    'gender'=>$_POST['gender'],
                    'created_date'=> date('Y-m-d'),
                    'phone'=>$_POST['phone']
                );
                $this->db->insert('login',$data);

                $this->session->set_flashdata("success", "Your account has been registered. You can now login");
                redirect("auth/register", "refresh");

            }
        }
        //loads view
        $this->load->view('register');
    }

}