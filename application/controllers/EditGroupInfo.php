<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/13
 * Time: 22:18
 */
class EditGroupInfo extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('group');
        $user_info = $this->user->get_user_info_by_phone($arguments['phone']);
        $group_info = $this->group->get_group_info_by_uid($user_info['uid']);
        if(!isset($arguments['flag'])){
            $data = array(
                'group_info' => $group_info,
                'uid' => $arguments['uid'],
            );
            $this->load->view('Group/editgroupinfo',$data);
            return;
        }


        $this->load->model('group');
        $group_info = $this->group->update_group_info($arguments);
        $data = array(
            'group_info' => $group_info,
        );
        $this->load->view('Group/groupuserhome',$data);
    }
}