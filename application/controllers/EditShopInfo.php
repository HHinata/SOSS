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
        $this->load->model('shop');
        $this->load->model('user');
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $shop_info = $this->shop->get_shop_info_by_uid($user_info['uid']);
        if(!isset($arguments['flag'])){
            $data = array(
                'shop_info' => $shop_info,
                'uid' => $user_info['uid'],
                'message' => '',
            );
            $this->load->view('Shop/editshopinfo',$data);
            return;
        }
        if(empty($arguments['phone']) && empty($arguments['address']) && empty($arguments['sname'])){
            $data = array(
                'shop_info' => $shop_info,
                'uid' => $user_info['uid'],
                'message' => '请输入要修改的信息',
            );
            $this->load->view('Shop/editshopinfo',$data);
            return;
        }
        $shop_info = $this->shop->update_shop_info($shop_info['sid'],$arguments);
        $data = array(
            'shop_info' => $shop_info,
            'usertype' => 2,
            'uid' => $user_info['uid'],
            'sid' => $shop_info['sid'],
            'user_info' => $user_info,
        );
        $this->load->view('User/userinfo_s',$data);
    }
}