<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/5/28
 * Time: 09:29
 */
class RegisterGroup extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());

        $this->load->model('user');
        $this->load->helper('user');
        $this->load->model('group');
        $help_user = new user_helper();

        $data['message'] = '';

        if(isset($arguments['flag'])){
            $this->load->view('registergroup',$data);
            return;
        }

        if(empty($arguments['phone']) || empty($arguments['password']) || empty($arguments['address'])
            || empty($arguments['group_name'])){
            $data['message'] = '请输入完整的信息';
            $this->load->view('registergroup',$data);
            return;
        }

        $reg_info['phone'] = $arguments['phone'];
        $reg_info['password'] = $arguments['password'];
        $reg_info['status'] = 3;
        $user_info = $this->user->create_user_info($reg_info);

        $arguments['uid'] = $user_info['uid'];



        $group_info = $this->group->create_group_info($arguments);
        $data = $help_user->show_group($user_info,$arguments);
        $this->load->view('Group/groupuserhome',$data);
    }
}