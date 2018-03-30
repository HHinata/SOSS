<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/13
 * Time: 18:00
 */
class OrderInfo extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('order');
        $order_info = $this->user->get_order_info_by_oid($arguments['oid']);
        $this->load->view('orderinfo',$order_info);
    }
}