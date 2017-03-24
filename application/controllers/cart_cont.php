<?php


class cart_cont extends CI_Controller {

    public function cart()
    {
        //Get all products
        $data['products'] = $this->Product_model->get_products();


        $this->load->view('cart',$data);
    }
}
