<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 20:37
 */
class user_helper
{
    public function login()
    {
        return true;
    }
    public function show_shop($user_info,$arguments)
    {
        $CI=&get_instance();
        $CI->load->model('order');
        $CI->load->model('order');
        $CI->load->model('gro_shop');
        $CI->load->model('shop');
        $CI->load->model('group');
        $CI->load->model('commodity');
        $CI->load->model('ord_com');

        if(!isset($arguments['groupflag'])){
            if(!isset($arguments['orderflag'])){
                $arguments['orderflag'] = 0;
                $arguments['shopflag'] = 1;
                $arguments['groupflag'] = 0;
            }else{
                $arguments['orderflag'] = 1;
                $arguments['shopflag'] = 0;
                $arguments['groupflag'] = 0;
            }
        }else{
            $arguments['groupflag'] = 1;
            $arguments['orderflag'] = 0;
            $arguments['shopflag'] = 0;
        }
        if(!isset($arguments['date'])){
            $arguments['date'] = 0;
        }
        $date = array(
            date("m-d",strtotime("+0 day")),
        );
        $gaoliang[$arguments['date']] = 'Wt8gBIl6shObKoAik5zCI-style-active';

        $shop_info = $CI->shop->get_shop_info_by_uid($user_info['uid']);
        $commoditys_info = $CI->commodity->get_commoditys_info_by_s_id($shop_info['sid']);
        $orders_info = $CI->order->get_ord_info_by_sid_day($shop_info['sid'],date('Y-m-d H:i:s',strtotime(date('Y-m-d',strtotime('+'.$arguments['date'].' day')))));
        $group_infos = $CI->gro_shop->get_group_list_by_sid($shop_info['sid']);


        $three_list_mark = 0;
        $cid = 0;
        $three_list_ord_mark = -1;

        //echo json_encode($orders_info);exit(0);

        foreach ($group_infos as $key => $info){
            $info = $CI->group->get_group_info_by_gid($info);
            $info['xuanzhong'] = '';
            $info['huise'] = '';
            $info['price'] = $CI->order->get_price_by_gid_sid($info['gid'],$shop_info['sid']);
            $group_infos[$key] = $info;
        }

        foreach ($orders_info as $key => $info){
            $info['num'] = 'T558';
            $info['xuanzhong'] = '';
            $info['huise'] = '';

            if($info['flag'] == 1){
                $info['huise'] = '_3lTmiaVKGwuA9EzB2pZdew-style-isDisabled';
            }
            if(isset($arguments['order_num']) && $arguments['order_num'] == $key){
                $info['xuanzhong'] = '_1CNBBL8BNPEdFC_d4oMRlw-style-isChecked';
                $three_list_ord_mark = $key;
            }
            $list = $CI->ord_com->get_ord_com_info_by_oid($info['oid']);
            $u_info = $CI->user->get_user_info_by_user_id($info['uid']);
            $info['num'] = $u_info['num'];
            foreach ($list as $id){
                $info['commoditys_info'][] = $CI->commodity->get_commodity_info_by_c_id($id['cid']);
            }
            foreach ($info['commoditys_info'] as $key_c => $info_tmp){
                if($key_c == 0){
                    $info['cname'] = $info_tmp['cname'];
                }else{
                    $info['cname'] = $info['cname'].'、'.$info_tmp['cname'];
                }
            }
            $orders_info[$key] = $info;
        }


        foreach ($commoditys_info as $key => $info){
            $commoditys_info[$key]['xuanzhong'] = '';
            $commoditys_info[$key]['huise'] = '';
            if(isset($arguments['commodity_num']) && $arguments['commodity_num'] == $key){
                $commoditys_info[$key]['xuanzhong'] = '_1CNBBL8BNPEdFC_d4oMRlw-style-isChecked';
                $three_list_mark = 1;
                if($info['flag'] == 0){
                    $three_list_mark = 2;//选中的是下架菜品
                }
                $cid = $info['cid'];
            }
            if($info['flag'] == 0) {
                $commoditys_info[$key]['huise']  = '_3lTmiaVKGwuA9EzB2pZdew-style-isDisabled';
            }
        }
        $shop_info['commoditys'] = $commoditys_info;
        if(isset($arguments['shopflag']) && $arguments['shopflag'] == 1) {  //选中店铺
            $shop_info['gaoliang'] = ' qfiVW8RzFNvV_40DtFe2O-style-disabled';
            $shop_info['xuanzhong'] = ' _2peRTUx-l3u6QN18-rTwjp-style-active';
        }
        $ckqyxz = '';
        $ckddxz = '';
        $three_list_top = '套餐';
        if(isset($arguments['orderflag']) && $arguments['orderflag'] == 1){ //选中查看订单
            $commoditys_info = [];
            $group_infos = [];
            $ckddxz = '_2peRTUx-l3u6QN18-rTwjp-style-active';
            $three_list_top = '订单';
        }else if(isset($arguments['groupflag']) && $arguments['groupflag'] == 1){ //选择查看企业
            $orders_info = [];
            $commoditys_info = [];
            $ckqyxz = '_2peRTUx-l3u6QN18-rTwjp-style-active';
            $three_list_top = '企业';
        }else{
            $orders_info = [];
            $group_infos = [];
        }

        //echo json_encode($group_infos);exit(0);

        //echo json_encode($orders_info);exit(0);
        $data = array(
            'uid'        => $user_info['uid'],
            'sid'        => $shop_info['sid'],
            'shop_info'  => $shop_info,
            'commoditys_info' => $commoditys_info,
            'usertype'   => 2,
            'date'       => $date,  //展示的日期
            'chakandingdan' => 1, //是否有查看订单
            'addcommodity' => 1, //是否有添加菜品
            'gaoliang'   => $gaoliang, //日期的高亮
            'date_num'   => 0,  //选中的日期
            'three_list_mark' => $three_list_mark,//第三列是否有选中
            'three_list_ord_mark' => $three_list_ord_mark,//第三列订单是否有选中
            'cid'        => $cid,
            'ckddxz'     => $ckddxz,
            'ckqyxz'     => $ckqyxz,
            'orders_info'=> $orders_info,
            'three_list_top' => $three_list_top,
            'groups_info' => $group_infos,
        );
        //exit(0);
        return $data;
    }
    public function show_group($user_info,$arguments)
    {
        $CI=&get_instance();
        $CI->load->model('order');
        $CI->load->model('user');
        $CI->load->model('gro_shop');
        $CI->load->model('shop');
        $CI->load->model('group');
        $CI->load->model('commodity');
        $CI->load->model('ord_com');

        $group_info = $CI->group->get_group_info_by_uid($user_info['uid']);
        $shop_list = $CI->gro_shop->get_shop_list_by_gid($group_info['gid']);
        $shop_info = $CI->shop->get_shops_info_by_sids($shop_list);
        $staffs_info = $CI->user->get_users_info_by_gid($group_info['gid']);
        $orders_info = $CI->order->get_ord_info_by_gid($group_info['gid']);
        $commoditys_info = [];

        //左侧
        if(!isset($arguments['date'])){
            $arguments['date'] = 0;
        }
        $date = array(
            date("Y-m-d",strtotime("+0 day")),
        );
        $gaoliang[$arguments['date']] = 'Wt8gBIl6shObKoAik5zCI-style-active';

        //中间
        if(!isset($arguments['orderflag']) && !isset($arguments['userflag']) && !isset($arguments['shopflag'])){ //默认选中查看订单
            $arguments['orderflag'] = 1;
            $arguments['userflag'] = -1;
            $arguments['shopflag'] = -1;
        }
        $arguments['orderflag'] = isset($arguments['orderflag']) ? $arguments['orderflag'] : -1;
        $arguments['userflag'] = isset($arguments['userflag']) ? $arguments['userflag'] : -1;
        $arguments['shopflag'] = isset($arguments['shopflag']) ? $arguments['shopflag'] : -1;
        $arguments['user_num'] = isset($arguments['user_num']) ? $arguments['user_num'] : -1;
        $three_list_mark = -1;
        $cid = 0;
        $three_list_user_mark = -1;
        $staff_id = 0;

        foreach ($orders_info as $key => $info){
            $info['num'] = 'T558';
            $info['xuanzhong'] = '';
            $info['huise'] = '';
            $info['uname_phone'] = '';
            if($info['flag'] == 1){
              //  $info['huise'] = '_3lTmiaVKGwuA9EzB2pZdew-style-isDisabled';
            }
            $list = $CI->ord_com->get_ord_com_info_by_oid($info['oid']);
            $u_info = $CI->user->get_user_info_by_user_id($info['uid']);
            $info['uname_phone'] = $u_info['uname'].'·····'.$u_info['phone'];
            $info['num'] = $u_info['num'];
            foreach ($list as $id){
                $info['commoditys_info'][] = $CI->commodity->get_commodity_info_by_c_id($id['cid']);
            }
            foreach ($info['commoditys_info'] as $key_c => $info_tmp){
                if($key_c == 0){
                    $info['cname'] = $info_tmp['cname'];
                }else{
                    $info['cname'] = $info['cname'].'、'.$info_tmp['cname'];
                }
            }
            $orders_info[$key] = $info;
        }
        foreach ($staffs_info as $key => $info){
            $info['xuanzhong'] = '';
            $info['huise'] = '';
            if($key == $arguments['user_num']){
                $info['xuanzhong'] = '_1CNBBL8BNPEdFC_d4oMRlw-style-isChecked';
                $three_list_user_mark = 1;
                $staff_id = $info['uid'];
            }
            $staffs_info[$key] = $info;
        }
        //echo json_encode($staffs_info);exit(0);
        foreach ($shop_info as $key => $info){
            $info['gaoliang'] = '';
            $info['xuanzhong'] = '';
            $info['commoditys_info'] = $CI->commodity->get_commoditys_info_by_s_id($info['sid']);
            foreach ($info['commoditys_info'] as $key_c => $info_c){
                $info_c['xuanzhong'] = '';
                $info_c['huise'] = '';
                $info['commoditys_info'][$key_c] = $info_c;
            }
            if(isset($arguments['shopflag']) && $arguments['shopflag'] == $key) {  //选中店铺
                $info['xuanzhong'] = ' _2peRTUx-l3u6QN18-rTwjp-style-active';
                $commoditys_info = $info['commoditys_info'];
            }
            $shop_info[$key] = $info;
        }
        $ckddxz = '';
        $ckygxz = '';
        $three_list_top = '套餐';
        if(isset($arguments['orderflag']) && $arguments['orderflag'] == 1){ //选中查看订单
            $commoditys_info = [];
            $staffs_info = [];
            $ckddxz = '_2peRTUx-l3u6QN18-rTwjp-style-active';
            $three_list_top = '订单';
        }else if(isset($arguments['userflag']) && $arguments['userflag'] == 1){
            $orders_info = [];
            $commoditys_info = [];
            $ckygxz = '_2peRTUx-l3u6QN18-rTwjp-style-active';
            $three_list_top = '用户';
        }else{
            $orders_info = [];
            $staffs_info = [];
        }

        $onclick_url = array(
            '/Welcome?usertype=3&date=0&uid='.$user_info['uid'],   //点击左侧卡片
            '/AddGroupUser?uid='.$user_info['uid'].'&usertype=3&gid='.$group_info['gid'], //点击添加员工
            '/Welcome?flag=1&date=0&uid='.$user_info['uid'].'&usertype=3', //点击店铺
            '/Welcome?flag=1&date=0&uid='.$user_info['uid'].'&usertype=3&userflag=1', //点击查看员工
            '/Welcome?userflag=1&flag=1&date=0&uid='.$user_info['uid'].'&usertype=3&user_num=',//点击员工
            'DeleteGroupUser?uid='.$user_info['uid'].'&usertype=3&staff_id='.$staff_id,//点击删除员工
            'EditGroupUser?uid='.$user_info['uid'].'&usertype=3&staff_id='.$staff_id,//点击修改员工
            '/AddGroupShop?&uid='.$user_info['uid'].'&usertype=3&gid='.$group_info['gid'], //点击添加餐厅
        );
        $data = array(
            'uid'        => $user_info['uid'],
            //'sid'        => $shop_info['sid'],
            'group_info' => $group_info,
            'sid'        => '',
            'shops_info'  => $shop_info,
            'commoditys_info' => $commoditys_info,
            'staffs_info' => $staffs_info,
            'usertype'   => 2,
            'date'       => $date,  //展示的日期
            'chakandingdan' => 1, //是否有查看订单
            'chakanyuangong' => 1,
            'addgroupuser' => 1, //是否有添加员工
            'gaoliang'   => $gaoliang, //日期的高亮
            'date_num'   => 0,  //选中的日期
            'three_list_mark' => $three_list_mark,//第三列是否有选中
            'three_list_user_mark' => $three_list_user_mark,//第三列用户是否有选中
            'cid'        => $cid,
            'ckddxz'     => $ckddxz,
            'ckygxz'     => $ckygxz,
            'orders_info'=> $orders_info,
            'three_list_top' => $three_list_top,
            'onclick_url' => $onclick_url,
            'addgroupshop' => 1,
        );
        //echo json_encode($staffs_info);exit(0);
        //exit(0);
        return $data;
    }
    public function show_group_user($user_info,$group_info)
    {
        $data = array(
            'group_info' => $group_info,
            'usertype'   => 3,
        );
        return $data;
    }
    public function show_user($user_info,$arguments)
    {

        $CI=&get_instance();
        $CI->load->model('order');
        $CI->load->model('order');
        $CI->load->model('gro_shop');
        $CI->load->model('shop');
        $CI->load->model('group');
        $CI->load->model('commodity');
        $CI->load->model('ord_com');

        $shop_list = $CI->gro_shop->get_shop_list_by_gid($user_info['group_id']);
        $shops_info = $CI->shop->get_shops_info_by_sids($shop_list);
        $group_info = $CI->group->get_group_info_by_gid($user_info['group_id']);
        $three_list_mark = 0;
        $cid = 0;
        $sid = 0;
        $uid = $user_info['uid'];
        $arguments['shopnum'] = isset($arguments['shopnum']) ? $arguments['shopnum'] : 0;
        $arguments['date']    = isset($arguments['date']) ? $arguments['date'] : 0;
        $num = 0;
        $commoditys_info = [];
        $ckddxzflag = isset($arguments['ckddxzflag']) ? $arguments['ckddxzflag'] : 0;
        $ckddxz = '';
        $chakandingdan = 0;
        $order_info = $CI->order->get_ord_info_by_uid_day($user_info['uid'],date('Y-m-d H:i:s',strtotime(date('Y-m-d',strtotime('+'.$arguments['date'].' day')))));
        $three_list_top_top = '';
        $ckddxz_info = [];
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


        if(!empty($order_info)){
            $list = $CI->ord_com->get_ord_com_info_by_oid($order_info['oid']);
            foreach ($list as $id){
                $order_info['commoditys_info'][] = $CI->commodity->get_commodity_info_by_c_id($id['cid']);
            }
            $chakandingdan = 1;
        }
        if($ckddxzflag){
            $chakandingdan = 1;
            $arguments['shopnum'] = -1;
            $ckddxz = '_2peRTUx-l3u6QN18-rTwjp-style-active';
            $ckddxz_info['num'] = 'T558';
            $ckddxz_info['address'] = $group_info['address'];
            $ckddxz_info['date'] = date('Y-m-d',strtotime($order_info['create_time']));
            $ckddxz_info['cname'] = '';
            $ckddxz_info['create_time'] = date('H:i:s',strtotime($order_info['create_time']));

            foreach ($order_info['commoditys_info'] as $key => $info){
                if($key == 0){
                    $ckddxz_info['cname'] = $info['cname'];
                }else{
                    $ckddxz_info['cname'] = $ckddxz_info['cname'].'、'.$info['cname'];
                }
            }
        }

        foreach($shops_info as &$shop){
            $info = $CI->commodity->get_commoditys_info_by_s_id($shop['sid']);
            $shop['commoditys'] = $info;
            $shop['gaoliang'] = '';
            $shop['xuanzhong'] = '';
            if($chakandingdan == 1){
                $shop['gaoliang'] = ' qfiVW8RzFNvV_40DtFe2O-style-disabled';
            }
            if($num == $arguments['shopnum']) {
                $shop['xuanzhong'] = ' _2peRTUx-l3u6QN18-rTwjp-style-active';
                $commoditys_info = $info;
                $three_list_top_top = $shop['sname'];

                foreach ($info as $key => $value){
                    $commoditys_info[$key]['xuanzhong'] = '';
                    $commoditys_info[$key]['huise'] = '';
                    if($value['flag'] == 0 || $chakandingdan == 1){
                        $commoditys_info[$key]['huise']  = '_3lTmiaVKGwuA9EzB2pZdew-style-isDisabled';
                    }
                    if(isset($arguments['commodity_num']) && $key == $arguments['commodity_num']){
                        $commoditys_info[$key]['xuanzhong'] = '_1CNBBL8BNPEdFC_d4oMRlw-style-isChecked';
                        $three_list_mark = 1;
                        $cid = $value['cid'];
                        $sid = $value['sid'];
                    }
                }

            }
            $num = $num + 1;

        }
        //echo json_encode($shops_info);exit(0);
        $data = array(
            'uid'        => $user_info['uid'],
            'user_info'  => $user_info,
            'order_info' => $order_info,
            'shops_info'  => $shops_info,
            'commoditys_info' => $commoditys_info,
            //'address'    => $group_info['gname'],
            'address'    => '黎明大厦',
            'date'       => $date,
            'gaoliang'   => $gaoliang,
            'usertype'   => 1,
            'chakandingdan' => $chakandingdan,
            'date_num'   => $arguments['date'],
            'shop_num'   => $arguments['shopnum'],
            'three_list_mark' => $three_list_mark,
            'cid'       => $cid,
            'sid'       => $sid,
            'ckddxz'    => $ckddxz,
            'three_list_top_top' => $three_list_top_top,
            'ckddxz_info'    => $ckddxz_info,
        );
        return $data;
    }
}