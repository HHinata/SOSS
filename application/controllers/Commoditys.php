<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/21
 * Time: 19:57
 */
class Commoditys extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('shop');
        $this->load->model('commodity');
        $commoditys_info = $this->commodity->get_commoditys_info_by_s_id($arguments['sid']);
        $shop_info = $this->shop->get_shop_info_by_sid($arguments['sid']);
        $data = array(
            'commoditys_info' => $commoditys_info,
            'sid'        => $arguments['sid'],
            'shop_info' => $shop_info,
        );
        $this->load->view('Commodity/commoditylist', $data);
        return;
    }
}