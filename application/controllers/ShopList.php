<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/14
 * Time: 23:06
 */
class ShopList extends CI_Controller
{
    public function index()
    {
        $arguments = array_merge($this->input->post(),$this->input->get());
        $this->load->model('shop');
        $this->load->model('commodity');
        $this->load->model('gro_shop');
        $this->load->model('group');
        $shop_list = $this->gro_shop->get_shop_list_by_gid($arguments['gid']);
        $shops_info = $this->shop->get_shops_info_by_sids($shop_list);
        $group_info = $this->group->get_group_info_by_gid($arguments['gid']);
        $data = array(
            'shops_info' => $shops_info,
            'gid'        => $arguments['gid'],
            'group_info' => $group_info,
        );
        $this->load->view('Shop/shoplist',$data);
    }
}