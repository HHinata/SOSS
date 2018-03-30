<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/13
 * Time: 17:20
 */
class UserInfo extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $user_info = $this->user->get_user_info_by_phone($arguments['phone']);
        $data = array(
            'user_info' => $user_info,
            'gid'       => $arguments['gid'],
        );
        $this->load->view('User/userinfo',$data);
    }
}