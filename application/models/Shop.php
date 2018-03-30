<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 19:42
 */
class Shop extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_shops_info_by_sids($sids)
    {

        if(empty($sids)) {
            return array();
        }
        $this->db->where_in('sid',$sids);
        $this->db->where('status',1);
        $result = $this->db->get('shops');
        $num = $result->num_rows();
        $infos = $result->result_array();
        $infos = self::show_shops_info($infos);
        return $infos;
    }
    public function get_shop_info_by_sid($sid)
    {
        $condition = array(
            'sid'  => $sid,
            'status' => '1',
        );
        $result = $this->db->get_where('shops',$condition);
        $num = $result->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->row_array();
        $info = self::show_shop_info($info);
        return $info;
    }
    public function get_shop_info_by_uid($uid)
    {
        $condition = array(
            'uid'  => $uid,
            'status' => '1',
        );
        $result = $this->db->get_where('shops',$condition);
        $num = $result->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->row_array();
        $info = self::show_shop_info($info);
        return $info;
    }
    public function create_shop_info($param)
    {
        if(!isset($param['uid'])){
            return false;
        }
        $phone     = $param['phone'];
        $status    = isset($param['status']) ? $param['status'] : 1;
        $sid       = self::get_shop_id($phone);
        $uid       = $param['uid'];
        $sname     = isset($param['shop_name']) ? $param['shop_name'] : 'soss';
        $spassword = 'soss';
        $business  = '1';
        $address   = $param['address'];
        $condition = array(
            'phone'       => $phone,
            'status'      => $status,
            'uid'         => $uid,
            'sid'         => $sid,
            'sname'       => $sname,
            'spassword'   => $spassword,
            'business'    => $business,
            'address'     => $address,
            'available'   => 0,
            'revenue'     => 0,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('shops', $condition);
        return $condition;
    }
    public function cancellation_user_info($user_id)
    {
        $status = 0;
        $condition = array(
            'status'    => $status,
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $where     = array(
            'uid'  => $user_id,
        );
        $this->db->update('users', $condition, $where);
        return $user_id;
    }
    public function update_shop_info($sid,$param)
    {
        $condition = [];
        if(isset($param['phone']) && !empty($param['phone'])){
            $condition['phone'] = $param['phone'];
        }
        if(isset($param['sname']) && !empty($param['sname'])){
            $condition['sname'] = $param['sname'];
        }
        if(isset($param['address']) && !empty($param['address'])){
            $condition['address'] = $param['address'];
        }
        if(isset($param['business']) && !empty($param['business'])){
            $condition['business'] = $param['business'];
        }
        $condition['update_time'] = date("Y-m-d H:i:s", time());
        $where     = array(
            'sid'  => $sid,
        );
        $this->db->update('shops', $condition, $where);
        $info = $this->get_shop_info_by_sid($sid);
        return $info;
    }
    private static function get_shop_id($phone)
    {
        $uid = $phone.time();
        return $uid;
    }
    private static function show_shops_info($infos){
        foreach ($infos as $info){
            if(isset($info['spassword'])){
                unset($info['spassword']);
            }
            if(isset($info['status'])){
                unset($info['status']);
            }
            if(isset($info['id'])){
                unset($info['id']);
            }
            if(isset($info['uid'])){
                unset($info['uid']);
            }
            if(isset($info['available'])){
                unset($info['available']);
            }
            if(isset($info['revenue'])){
                unset($info['revenue']);
            }
            if(isset($info['create_time'])){
                unset($info['create_time']);
            }
            if(isset($info['update_time'])){
                unset($info['update_time']);
            }
        }
        return $infos;
    }
    private static function show_shop_info($info){

        if(isset($info['spassword'])){
            unset($info['spassword']);
        }
        if(isset($info['status'])){
            unset($info['status']);
        }
        if(isset($info['id'])){
            unset($info['id']);
        }
        if(isset($info['uid'])){
            unset($info['uid']);
        }
        if(isset($info['available'])){
            unset($info['available']);
        }
        if(isset($info['revenue'])){
            unset($info['revenue']);
        }
        if(isset($info['create_time'])){
            unset($info['create_time']);
        }
        if(isset($info['update_time'])){
            unset($info['update_time']);
        }

        return $info;
    }
}