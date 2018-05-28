<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/5/28
 * Time: 17:00
 */
class AddShopGroup extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('gro_shop');
        $this->load->model('group');
        $this->load->helper('user');
        $help_user = new user_helper();
        if(!isset($arguments['flag'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
                'message'  => '',
            );
            $this->load->view('Shop/addshopgroup',$data);
            return;
        }
        if(empty($arguments['phone'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
                'message'  => '请输入餐厅编号的信息',
            );
            $this->load->view('Shop/addshopgroup',$data);
            return;
        }
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $group_info = $this->group->get_group_info_by_phone($arguments['phone']);
        if(empty($group_info) || empty($group_info['gid'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
                'message'  => '请输入正确的信息',
            );
            $this->load->view('Shop/addshopgroup',$data);
            return;
        }
        $gro_shop_info = $this->gro_shop->create_group_shop_info($group_info['gid'],$arguments['sid']);
        $arguments['phone'] = $user_info['phone'];
        $arguments['userflag'] = 2;
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
        return;
    }
}