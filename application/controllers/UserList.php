<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/14
 * Time: 23:53
 */
class UserList extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('group');
        if(isset($arguments['flag']) && $arguments['flag'] == 1) {
            $users_info = $this->user->get_users_info_by_gid($arguments['gid']);
            $group_info = $this->group->get_group_info_by_gid($arguments['gid']);
            $data = array(
                'users_info' => $users_info,
                'gid'        => $arguments['gid'],
                'group_info' => $group_info,
            );
            $this->load->view('User/userlist', $data);
            return;
        }
    }
}