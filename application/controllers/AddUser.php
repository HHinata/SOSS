<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/14
 * Time: 23:58
 */
class AddUser extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('group');
        if(!isset($arguments['flag'])){
            $data = array(
                'gid' => $arguments['gid'],
            );
            $this->load->view('User/adduser',$data);
            return;
        }
        $arguments['group_id'] = $arguments['gid'];
        $user_info = $this->user->create_user_info($arguments);
        $users_info = $this->user->get_users_info_by_gid($arguments['gid']);
        $group_info = $this->group->get_group_info_by_gid($arguments['gid']);
        $data = array(
            'gid'        => $arguments['gid'],
            'users_info' =>$users_info,
            'group_info' =>$group_info,
        );
        $this->load->view('User/userlist',$data);
    }
}