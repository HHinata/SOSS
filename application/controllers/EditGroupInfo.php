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
        //echo json_encode($arguments);exit(0);
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('group');
        $this->load->helper('user');
        $help_user = new user_helper();
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $group_info = $this->group->get_group_info_by_uid($user_info['uid']);
        if(!isset($arguments['flag'])){
            $data = array(
                'group_info' => $group_info,
                'uid' => $arguments['uid'],
                'message'  => '',
            );
            $this->load->view('Group/editgroupinfo',$data);
            return;
        }
        if(empty($arguments['phone']) && empty($arguments['address']) && empty($arguments['gname'])){
            $data = array(
                'group_info' => $group_info,
                'uid' => $arguments['uid'],
                'message' => '请输入要修改的信息',
            );
            $this->load->view('Group/editgroupinfo',$data);
            return;
        }
        $arguments['gid'] = $group_info['gid'];
        $this->load->model('group');
        $group_info = $this->group->update_group_info($arguments);
        $data = $help_user->show_group($user_info,$arguments);
        $this->load->view('Group/groupuserhome',$data);
    }
}