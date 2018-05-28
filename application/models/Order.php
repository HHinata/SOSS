<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 19:45
 */
class Order extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function accept_order($oid)
    {
        $flag = 1;
        $condition = array(
            'flag'    => $flag,
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $where     = array(
            'oid'  => $oid,
        );
        $this->db->update('orders', $condition, $where);
        return $oid;
    }
    public function get_ord_info_by_oid($oid)
    {
        $condition = array(
            'oid'  => $oid,
            'status' => 1,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        if($num == 0){
            return false;
        }
        $info = $result->row_array();
        $info = self::show_ord_info($info);
        return $info;
    }
    public function get_ord_info_by_uid($uid)
    {
        $condition = array(
            'uid'  => $uid,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        $infos = $result->result_array();
        $infos = self::show_ord_info($infos);
        return $infos;
    }
    public function get_ord_info_by_uid_day($uid,$date)
    {
        //echo json_encode($date);exit(0);
        $condition = array(
            'uid '  => $uid,
            'status' => 1,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        if($num == 0){
            return [];
        }
        $infos_tmp = $result->result_array();
        $info = [];
        foreach ($infos_tmp as $info_tmp){
            if($info_tmp['create_time'] < $date){
                continue;
            }
            $info = $info_tmp;
        }
        $info = self::show_ord_info($info);
        return $info;
    }
    public function get_ord_info_by_gid($gid)
    {
        $condition = array(
            'gid'  => $gid,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        $infos = $result->result_array();
        $infos = self::show_ord_info($infos);
        return $infos;
    }
    public function get_price_by_gid_sid($gid,$sid)
    {
        $condition = array(
            'gid'  => $gid,
            'sid'  => $sid,
            'flag' => 1,
            'status' => 1,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        $infos = $result->result_array();
        $infos = self::show_ord_info($infos);
        $price = 0;
        foreach ($infos as $info){
            $price += $info['price'];
        }
        return $price;
    }
    public function get_ord_info_by_sid_day($sid,$date)
    {
        $condition = array(
            'sid '  => $sid,
            'status' => 1,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        if($num == 0){
            return [];
        }
        $infos_tmp = $result->result_array();
        $infos = [];
        foreach ($infos_tmp as $info_tmp){
            if($info_tmp['create_time'] < $date){
                continue;
            }
            $infos[] = $info_tmp;
        }
        $infos = self::show_ords_info($infos);
        return $infos;
    }
    public function create_ord_info($param)
    {
        $oid       = self::get_order_id($param['phone']);
        $uid       = $param['uid'];
        $gid       = $param['gid'];
        $sid       = $param['sid'];
        $price     = $param['price'];
        $status    = isset($param['status']) ? $param['status'] : 1;
        $address   = $param['address'];
        $describes = $param['describes'];

        $condition = array(
            'oid'         => $oid,
            'uid'         => $uid,
            'gid'         => $gid,
            'sid'         => $sid,
            'price'       => $price,
            'status'      => $status,
            'address'     => $address,
            'describes'   => $describes,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('orders', $condition);
        $info = self::show_ord_info($condition);
        return $info;
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
    public function update_user_info($user_id,$param)
    {
        $condition = [];
        if(isset($param['phone'])){
            $condition['phone'] = $param['phone'];
        }
        if(isset($param['user_name'])){
            $condition['uname'] = $param['user_name'];
        }
        if(isset($param['sex'])){
            $condition['sex'] = $param['sex'];
        }
        if(isset($param['group'])){
            $condition['group'] = $param['group'];
        }
        if(isset($param['user_pass_word'])){
            $condition['upassword'] = $param['user_pass_word'];
        }
        $condition['update_time'] = date("Y-m-d H:i:s", time());
        $where     = array(
            'uid'  => $user_id,
        );
        $this->db->update('users', $condition, $where);
        $info = $this->get_ord_info_by_oid($user_id);
        $info = self::show_ord_info($info);
        return $info;
    }
    private static function get_order_id($phone)
    {
        $oid = $phone.time();
        return $oid;
    }

    private static function show_ords_info($infos)
    {
        if(empty($infos)){
            return $infos;
        }
        foreach ($infos as $info) {
            if (isset($info['id'])) {
                unset($info['id']);
            }
            if (isset($info['update_time'])) {
                unset($info['update_time']);
            }
        }
        return $infos;
    }
    private static function show_ord_info($info)
    {

        if (isset($info['id'])) {
            unset($info['id']);
        }
        if (isset($info['update_time'])) {
            unset($info['update_time']);
        }

        return $info;
    }
}