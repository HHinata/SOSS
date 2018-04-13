<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/10
 * Time: 20:06
 */
class AcceptOrder extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('order');
        $this->load->helper('user');
        $help_user = new user_helper();
        $this->order->accept_order($arguments['oid']);
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $arguments['orderflag'] = 1;
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
        return;
    }
}