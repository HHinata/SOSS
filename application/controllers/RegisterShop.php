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
        if(!isset($arguments['phone'])){
            $this->load->view('registershop');
            return;
        }

        $result['errno'] = 0;
        $result['errmsg'] = '';
        $result['data'] = [];

        $this->load->model('shop');
        $shop_info = $this->shop->create_shop_info($arguments);
        $data = array(
            'shop_info' => $shop_info,
        );
        $this->load->view('Shop/shopuserhome',$data);
    }
}