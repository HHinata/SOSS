<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $arguments = array_merge($this->input->post(),$this->input->get());
	    $this->load->model('user');
        $this->load->model('order');
        $this->load->model('gro_shop');
        $this->load->model('shop');
        $this->load->model('group');
        $data = array();
	    if(!isset($arguments['phone']) || !isset($arguments['password'])){
            $this->load->view('login');
            return;
        }


        $user_info = $this->user->login_phone($arguments['phone'],$arguments['password']);
        if($user_info == false){
            $this->load->view('login');
            return;
        }
        switch ($user_info['status']){
            case 1:  //普通用户
                $this->show_user($user_info);
                break;
            case 2:  //店家
                $this->show_shop($user_info);
                break;
            case 3:  //企业
                $this->show_group($user_info);
                break;
        }

	}
	public function show_user($user_info)
    {
        $uid = $user_info['uid'];
        $shop_list = $this->gro_shop->get_shop_list_by_gid($user_info['group_id']);
        $shops_info = $this->shop->get_shops_info_by_sids($shop_list);
        $order_info = $this->order->get_ord_info_by_uid($uid);
        $data = array(
            'user_info'  => $user_info,
            'order_info' => $order_info,
            'shop_info'  => $shops_info,
        );
        $this->load->view('User/userhome',$data);
    }
    public function show_shop($user_info)
    {
        $shop_info = $this->shop->get_shop_info_by_uid($user_info['uid']);
        $data = array(
            'shop_info' => $shop_info,
        );
        $this->load->view('Shop/shopuserhome',$data);
    }
    public function show_group($user_info)
    {
        $group_info = $this->group->get_group_info_by_uid($user_info['uid']);
        $data = array(
            'group_info' => $group_info,
        );
        $this->load->view('Group/groupuserhome',$data);
    }
}
