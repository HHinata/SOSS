<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/23
 * Time: 15:18
 */
class AddCommodity extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->helper('user');
        $help_user = new user_helper();
        if(!isset($arguments['flag'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
            );
            $this->load->view('Commodity/addcommodity',$data);
            return;
        }
       // echo json_encode($_SERVER);exit(0);
       // redirect('/Welcome?uid='.$arguments['uid'],'refresh');
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $arguments['phone'] = $user_info['phone'];
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
        return;
    }
}