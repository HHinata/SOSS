<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/23
 * Time: 10:34
 */
class EditShopInfo extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        if(!isset($arguments['flag'])){
            $data = array(
                'shop_info' => $arguments,
            );
            $this->load->view('Shop/editshopinfo',$data);
            return;
        }


        $this->load->model('shop');
        $shop_info = $this->shop->update_shop_info($arguments['sid'],$arguments);
        $data = array(
            'shop_info' => $shop_info,
        );
        $this->load->view('Shop/shopuserhome',$data);
    }
}