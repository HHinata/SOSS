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
                'uid' => $arguments['uid'],
                'usertype' => $arguments['usertype'],
            );
            if($arguments['usertype'] == 3){
                $data['gid'] = $arguments['gid'];
            }
            $this->load->view('User/edituser',$data);
            return;
        }


        $this->load->model('group');
        $this->load->model('user');
        $user_info = $this->user->update_user_info($arguments['uid'],$arguments);
        $data = array(
            'user_info' => $user_info,
            'usertype'  => $arguments['usertype'],
        );
        if($arguments['usertype'] == 3){
            $data['gid'] = $arguments['gid'];
            $this->load->view('User/userinfo',$data);
        }
        else if($arguments['usertype'] == 1){
            $data['uid'] = $arguments['uid'];
            $this->load->view('User/userinfo_u',$data);
        }
        else{
            $data['sid'] = $arguments['sid'];
            $this->load->view('User/userinfo_s',$data);
        }
    }
}