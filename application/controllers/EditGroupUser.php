<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/11
 * Time: 23:25
 */
class EditGroupUser extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->helper('user');
        $help_user = new user_helper();
        $staff_info = $this->user->get_user_info_by_user_id($arguments['staff_id']);
        if(!isset($arguments['flag'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'staff_id'      => $arguments['staff_id'],
                'staff_info' => $staff_info,
            );
            $this->load->view('Group/editgroupuser',$data);
            return;
        }
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $staff_info = $this->user->update_user_info($arguments['staff_id'],$arguments);
        $arguments['userflag'] = 1;
        $data = $help_user->show_group($user_info,$arguments);
        $this->load->view('Group/groupuserhome',$data);
        return;
    }
}