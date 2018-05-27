<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/7
 * Time: 23:25
 */
class Login extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $data = array(
            'message' => '',
        );
        if(isset($arguments['flag'])){
            $this->load->view('login',$data);
            return;
        }
        $this->load->view('welcome_message',$data);
    }
}