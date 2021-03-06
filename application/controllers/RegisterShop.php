<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/21
 * Time: 18:02
 */
class RegisterShop extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());

        $this->load->model('user');
        $this->load->helper('user');
        $this->load->model('shop');
        $help_user = new user_helper();

        $data['message'] = '';

        if(isset($arguments['flag'])){
            $this->load->view('registershop',$data);
            return;
        }

        if(empty($arguments['phone']) || empty($arguments['password']) || empty($arguments['address'])
        || empty($arguments['shop_name'])){
            $data['message'] = '请输入完整的信息';
            $this->load->view('registershop',$data);
            return;
        }


        $reg_info['phone'] = $arguments['phone'];
        $reg_info['password'] = $arguments['password'];
        $reg_info['status'] = 2;
        $user_info = $this->user->create_user_info($reg_info);

        $arguments['uid'] = $user_info['uid'];

        $shop_info = $this->shop->create_shop_info($arguments);
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
    }
}