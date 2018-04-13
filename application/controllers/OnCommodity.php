<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/9
 * Time: 20:42
 */
class OnCommodity extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->helper('user');
        $help_user = new user_helper();
        $this->commodity->on_commodity_info($arguments['cid']);
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
        return;
    }
}