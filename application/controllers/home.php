<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('inc/header');
        $this->load->view('home/view_home');
        $this->load->view('inc/footer');
    }

    // -----------------------------------------------

    public function car_sales(){
        $this->load->view('inc/header');
        $this->load->view('home/car_sales');
        $this->load->view('inc/footer');
    }

    //-----------------------------------------------

    public function sign_up(){
        $this->load->view('inc/header');
        $this->load->view('home/sign_up');
        $this->load->view('inc/footer');
    }

    //-----------------------------------------------

    public function after_post_sign_up(){
        print_r($_POST);
        $username = $this->input->post('username');
        echo $username;

        $user = [
            'name' => $username
        ];

        $query = $this->db->insert('',$user);

    }
}
