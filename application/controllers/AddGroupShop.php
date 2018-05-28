<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/5/28
 * Time: 11:04
 */
class AddGroupShop extends CI_Controller
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
                'gid'      => $arguments['gid'],
                'message'  => '',
            );
            $this->load->view('Group/addgroupshop',$data);
            return;
        }
        if(empty($arguments['phone'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'gid'      => $arguments['gid'],
                'message'  => '请输入餐厅编号的信息',
            );
            $this->load->view('Group/addgroupshop',$data);
            return;
        }
        $arguments['group_id'] = $arguments['gid'];
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $shop_info = $this->shop->get_shop_info_by_phone($arguments['phone']);
        if(empty($shop_info) || empty($shop_info['sid'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'gid'      => $arguments['gid'],
                'message'  => '请输入正确的信息',
            );
            $this->load->view('Group/addgroupshop',$data);
            return;
        }
        $gro_shop_info = $this->gro_shop->create_group_shop_info($arguments['gid'],$shop_info['sid']);
        $arguments['phone'] = $user_info['phone'];
        $arguments['userflag'] = 1;
        $data = $help_user->show_group($user_info,$arguments);
        $this->load->view('Group/groupuserhome',$data);
        return;
    }
}