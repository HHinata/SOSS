<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/23
 * Time: 15:18
 */
class AddCommodity extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->helper('user');
        $help_user = new user_helper();
        if(!isset($arguments['flag'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
                'message'  => '',
            );
            $this->load->view('Commodity/addcommodity',$data);
            return;
        }
        if(empty($arguments['cname']) || empty($arguments['describes']) || empty($arguments['price'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
                'message'  => '请输入名称、描述和价格',
            );
            $this->load->view('Commodity/addcommodity',$data);
            return;
        }
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $arguments['phone'] = $user_info['phone'];
        $this->commodity->create_commodity_info($arguments);
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
        return;
    }
}