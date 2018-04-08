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
        if(isset($arguments['phone'])) {
            $user_info = $this->user->get_user_info_by_phone($arguments['phone']);
        }else{
            $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        }
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