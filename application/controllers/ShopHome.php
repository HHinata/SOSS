<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/8
 * Time: 11:55
 */
class ShopHome extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        if(!isset($arguments['sid']) || !isset($arguments['uid'])){
            $this->load->view('shophome_error');
            return;
        }
        $this->load->model('shops');
        $this->load->model('users');
        $this->load->model('commoditys');

        $user_info = $this->users->get_user_info_by_user_id($arguments['uid']);
        $shop_info = $this->shops->get_shop_info_by_shop_id($arguments['sid']);
       // $commodity_info = $this->commoditys->get
        if($user_info == false || $shop_info == false){
            $this->load->view('shophome_error');
            return;
        }

        $result = array();
        if(isset($arguments['uid'])){
            $user_info = $this->user->login_uid();
        }elseif(isset($arguments['phone'])){
            $user_info = $this->user->login_phone();
        }else{
            $result['errno'] = '0000001';
            $result['errmsg'] = 'need uid or phone';
            $result['data'] = array();
            echo json_encode($result);
            return;
        }
        if($user_info == false){
            $result['errno'] = '0000002';
            $result['errmsg'] = 'uid or password error';
            $result['data'] = array();
            echo json_encode($result);
            return;
        }

        $uid = $user_info['uid'];
        $this->load->model('order');
        $order_info = $this->order->get_ord_info_by_uid($uid);
        $result['errno'] = 0;
        $result['errmsg'] = '';
        $result['data'] = array(
            'user_info'  => $user_info,
            'order_info' => $order_info,
        );

        echo json_encode($result);
        //$this->load->view('welcome_message');
    }
}