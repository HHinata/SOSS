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
        $this->load->model('shop');
        $this->load->model('group');
        if(isset($arguments['phone'])) {
            $user_info = $this->user->get_user_info_by_phone($arguments['phone']);
        }else{
            $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        }
        $data = array(
            'user_info' => $user_info,
            'usertype'  => $arguments['usertype'],
            'uid'       => $arguments['uid'],
        );
        if($arguments['usertype'] == 3){
            $group_info = $this->group->get_group_info_by_uid($user_info['uid']);
            $data['group_info'] = $group_info;
            $this->load->view('User/userinfo_g',$data);
            return;
        }
        else if($arguments['usertype'] == 1){
            $data['uid'] = $arguments['uid'];
            $this->load->view('User/userinfo_u',$data);
            return;
        }
        else{
            $shop_info = $this->shop->get_shop_info_by_sid($arguments['sid']);
            $data['sid'] = $arguments['sid'];
            $data['shop_info'] = $shop_info;
            $this->load->view('User/userinfo_s',$data);
            return;
        }
    }
}