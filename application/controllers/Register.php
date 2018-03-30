<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/8
 * Time: 11:31
 */
class Register extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        if(!isset($arguments['reg_phone']) || !isset($arguments['reg_password'])){
            $this->load->view('register');
            return;
        }


        $result['errno'] = 0;
        $result['errmsg'] = '';
        $result['data'] = [];

        $this->load->model('user');
        $reg_info['phone'] = $arguments['reg_phone'];
        $reg_info['password'] = $arguments['reg_password'];
        $user_info = $this->user->create_user_info($reg_info);
        $result['data'] = array(
            'user_info' => $user_info,
            'order_info' => [],
        );
        if($user_info != false){
            $this->load->view('home');
            $this->load->view('home',$result['data']);
        }else{
            $this->load->view('register');
        }
    }
}