<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/10
 * Time: 14:30
 */
class CreateOrder extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->model('order');
        $this->load->model('ord_com');
        $this->load->model('group');
        $this->load->helper('user');
        $help_user = new user_helper();

        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $shop_info = $this->shop->get_shop_info_by_sid($arguments['sid']);
        $commoditys_info = $this->commodity->get_commodity_info_by_c_id($arguments['cid']);
        $group_info = $this->group->get_group_info_by_gid($user_info['group_id']);
        $arguments['phone'] = $user_info['phone'];
        $arguments['gid']   = $user_info['group_id'];
        $arguments['price'] = $commoditys_info['price'];
        $arguments['address'] = $group_info['address'];
        $arguments['describes'] = '';
        $order_info = $this->order->create_ord_info($arguments);
        $arguments['num'] = 1;
        $arguments['oid'] = $order_info['oid'];
        $ord_com_info = $this->ord_com->create_ord_com_info($arguments);

        $arguments['ckddxzflag'] = 1;
        $data = $help_user->show_user($user_info,$arguments);
        if($data['shop_num'] == -1){
            $this->load->view('User/userhome_ord', $data);
        }else {
            $this->load->view('User/userhome', $data);
        }
        return;
    }
}