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
        $this->load->helper('user');
        $help_user = new user_helper();
        $data = array(
            'message' => '',
        );

        if(isset($arguments['uid'])){
            $user_info = $this->user->get_user_info_by_user_id($arguments['uid']);
        }else {
            if (empty($arguments['phone']) || empty($arguments['password'])) {
                $data['message'] = '请输入账号和密码';
                $this->load->view('login',$data);
                return;
            }
            $user_info = $this->user->login_phone($arguments['phone'],$arguments['password']);
        }

        if($user_info == false){
            $data['message'] = '请输入正确的账号和密码';
            $this->load->view('login',$data);
            return;
        }
        switch ($user_info['status']){
            case 1:  //普通用户
                $data = $help_user->show_user($user_info,$arguments);
                if($data['shop_num'] == -1){
                    $this->load->view('User/userhome_ord', $data);
                }else {
                    $this->load->view('User/userhome', $data);
                }
                break;
            case 2:  //店家
                $data = $help_user->show_shop($user_info,$arguments);
                $this->load->view('Shop/shopuserhome',$data);
                break;
            case 3:  //企业
                $data = $help_user->show_group($user_info,$arguments);
                $this->load->view('Group/groupuserhome',$data);
                break;
        }

	}
}
