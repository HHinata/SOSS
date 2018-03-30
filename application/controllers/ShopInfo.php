<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/19
 * Time: 20:54
 */
class ShopInfo extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('shop');
        $shop_info = $this->shop->get_shop_info_by_sid($arguments['sid']);
        $data = array(
            'shop_info' => $shop_info,
            'gid'       => $arguments['gid'],
        );
        $this->load->view('Shop/shopinfo',$data);
    }
}