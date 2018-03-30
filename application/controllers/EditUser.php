<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/14
 * Time: 23:59
 */
class EditUser extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        if(!isset($arguments['flag'])){
            $data = array(
                'gid' => $arguments['gid'],
                'uid' => $arguments['uid'],
            );
            $this->load->view('User/edituser',$data);
            return;
        }


        $this->load->model('group');
        $this->load->model('user');

        $user_info = $this->user->update_user_info($arguments['uid'],$arguments);
        $data = array(
            'user_info' => $user_info,
            'gid'       => $arguments['gid'],
        );
        $this->load->view('User/userinfo',$data);
    }
}