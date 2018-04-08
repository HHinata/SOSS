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
        $this->load->model('commodity');
        $data = array();

        if(isset($arguments['uid'])){
            $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
            $this->show_user($user_info,$arguments);
            return;
        }

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
                $this->show_user($user_info,$arguments);
                break;
            case 2:  //店家
                $this->show_shop($user_info);
                break;
            case 3:  //企业
                $this->show_group($user_info);
                break;
        }

	}
	public function show_user($user_info,$arguments)
    {
        $uid = $user_info['uid'];
        $shop_list = $this->gro_shop->get_shop_list_by_gid($user_info['group_id']);
        $shops_info = $this->shop->get_shops_info_by_sids($shop_list);
        $order_info = $this->order->get_ord_info_by_uid($uid);
        $group_info = $this->group->get_group_info_by_gid($user_info['group_id']);
        $arguments['shopnum'] = isset($arguments['shopnum']) ? $arguments['shopnum'] : 0;
        $arguments['date']    = isset($arguments['date']) ? $arguments['date'] : 0;
        $num = 0;
        foreach($shops_info as &$shop){
            $commoditys_info = $this->commodity->get_commoditys_info_by_s_id($shop['sid']);
            $shop['commoditys'] = $commoditys_info;
            $shop['gaoliang'] = '';
            $shop['xuanzhong'] = '';
            if($num == $arguments['shopnum']) {
                $shop['gaoliang'] = ' qfiVW8RzFNvV_40DtFe2O-style-disabled';
                $shop['xuanzhong'] = ' _2peRTUx-l3u6QN18-rTwjp-style-active';
            }
            $num = $num + 1;
        }
        //echo json_encode($shops_info);exit(0);
        $gaoliang = array(
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        );
        $gaoliang[$arguments['date']] = 'Wt8gBIl6shObKoAik5zCI-style-active';
        $date = array(
            date("m-d",strtotime("+0 day")),
            date("m-d",strtotime("+1 day")),
            date("m-d",strtotime("+2 day")),
            date("m-d",strtotime("+3 day")),
            date("m-d",strtotime("+4 day")),
            date("m-d",strtotime("+5 day")),
            date("m-d",strtotime("+6 day")),
        );
        $date[7] = $date[$arguments['date']];
        $data = array(
            'uid'        => $user_info['uid'],
            'user_info'  => $user_info,
            'order_info' => $order_info,
            'shops_info'  => $shops_info,
            //'address'    => $group_info['gname'],
            'address'    => '黎明大厦',
            'date'       => $date,
            'gaoliang'   => $gaoliang,
            'usertype'   => 1,
            'chakandingdan' => 1,
            'date_num'   => $arguments['date'],
            'shop_num'   => $arguments['shopnum'],
        );
        $this->load->view('User/userhome',$data);
    }
    public function show_shop($user_info)
    {
        $shop_info = $this->shop->get_shop_info_by_uid($user_info['uid']);
        $data = array(
            'shop_info' => $shop_info,
            'usertype'   => 2,
        );
        $this->load->view('Shop/shopuserhome',$data);
    }
    public function show_group($user_info)
    {
        $group_info = $this->group->get_group_info_by_uid($user_info['uid']);
        $data = array(
            'group_info' => $group_info,
            'usertype'   => 3,
        );
        $this->load->view('Group/groupuserhome',$data);
    }
}
