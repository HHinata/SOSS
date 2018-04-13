<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/4/9
 * Time: 19:26
 */
class EditCommodity extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('user');
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->helper('user');
        $help_user = new user_helper();
        $commodity_info = $this->commodity->get_commodity_info_by_c_id($arguments['cid']);
        if(!isset($arguments['flag'])){
            $data = array(
                'uid'      => $arguments['uid'],
                'usertype' => $arguments['usertype'],
                'sid'      => $arguments['sid'],
                'cid'      => $arguments['cid'],
                'commodity_info' => $commodity_info,
            );
            $this->load->view('Commodity/editcommodity',$data);
            return;
        }
        $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        $arguments['phone'] = $user_info['phone'];
        $commodity = $this->commodity->update_commodity_info($arguments['cid'],$arguments);
        $data = $help_user->show_shop($user_info,$arguments);
        $this->load->view('Shop/shopuserhome',$data);
        return;
    }
}