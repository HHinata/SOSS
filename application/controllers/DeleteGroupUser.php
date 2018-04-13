<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/11
 * Time: 22:56
 */
class DeleteGroupUser extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('group');
        $this->load->helper('user');
        $help_user = new user_helper();
        $user_id = $this->user->cancellation_user_info($arguments['staff_id']);
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $arguments['userflag'] = 1;
        $data = $help_user->show_group($user_info,$arguments);
        $this->load->view('Group/groupuserhome',$data);
    }
}