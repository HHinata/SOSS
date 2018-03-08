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
        $result = array();
	    if(isset($arguments['uid'])){
            $user_info = $this->user->login_uid();
        }elseif(isset($arguments['phone'])){
            $user_info = $this->user->login_phone();
        }else{
            $result['errno'] = '0000001';
            $result['errmsg'] = 'need uid or phone';
            $result['data'] = array();
            echo json_encode($result);
            return;
        }
        if($user_info == false){
            $result['errno'] = '0000002';
            $result['errmsg'] = 'uid or password error';
            $result['data'] = array();
            echo json_encode($result);
            return;
        }

        $uid = $user_info['uid'];
        $this->load->model('order');
        $order_info = $this->order->get_ord_info_by_uid($uid);
        $result['errno'] = 0;
        $result['errmsg'] = '';
        $result['data'] = array(
            'user_info'  => $user_info,
            'order_info' => $order_info,
        );

	    echo json_encode($result);
		//$this->load->view('welcome_message');
	}
}
