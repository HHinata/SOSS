<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/11
 * Time: 14:47
 */
class AddGroupUser extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('group');
        $this->load->helper('user');
        $help_user = new user_helper();
        if(!isset($arguments['flag'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'gid'      => $arguments['gid'],
            );
            $this->load->view('Group/addgroupuser',$data);
            return;
        }
        $arguments['group_id'] = $arguments['gid'];
        $user_info_add = $this->user->create_user_info($arguments);
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $arguments['phone'] = $user_info['phone'];
        $arguments['userflag'] = 1;
        $data = $help_user->show_group($user_info,$arguments);
        $this->load->view('Group/groupuserhome',$data);
        return;
    }
}