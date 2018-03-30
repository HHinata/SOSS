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
    public function get_ord_info_by_oid($oid)
    {
        $condition = array(
            'oid'  => $oid,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        $infos = $result->row_array();
        $infos = self::show_ord_info($infos);
        return $infos;
    }
    public function get_ord_info_by_uid($uid)
    {
        $condition = array(
            'uid'  => $uid,
        );
        $result = $this->db->get_where('orders',$condition);
        $num = $result->num_rows();
        $infos = $result->row_array();
        $infos = self::show_ord_info($infos);
        return $infos;
    }
    public function create_ord_info($param)
    {
        if(!isset($param['phone']) || !isset($param['user_pass_word'])
            || !is_numeric($param['phone'])){
            return false;
        }
        $phone     = $param['phone'];
        $status    = isset($param['status']) ? $param['status'] : 1;
        $uid       = self::get_user_id($phone);
        $sex       = isset($param['sex']) ? $param['sex'] : 0;
        $uname     = isset($param['user_name']) ? $param['user_name'] : 'soss';
        $upassword = $param['user_pass_word'];
        $group     = isset($param['group']) ? $param['group'] : 0;
        $condition = array(
            'phone'       => $phone,
            'status'      => $status,
            'uid'         => $uid,
            'sex'         => $sex,
            'uname'       => $uname,
            'upassword'   => $upassword,
            'group'       => $group,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('users', $condition);
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
    private static function get_user_id($phone)
    {
        $uid = $phone.time();
        return $uid;
    }
    public function login_uid($uid,$password)
    {
        $condition = array(
            'uid'       => $uid,
            'status'    => '1',
            'upassword' => $password,
        );
        $result = $this->db->get_where('users',$condition);
        $num = $result->db->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->db->row_array();
        $info = self::show_ord_info($info);
        return $info;
    }
    public function login_phone($phone,$password)
    {
        $condition = array(
            'phone'       => $phone,
            'status'    => '1',
            'upassword' => $password,
        );
        $result = $this->db->get_where('users',$condition);
        $num = $result->db->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->db->row_array();
        $info = self::show_ord_info($info);
        return $info;
    }

    private static function show_ord_info($infos)
    {
        if(empty($infos)){
            return $infos;
        }
        foreach ($infos as $info) {
            if (isset($info['id'])) {
                unset($info['id']);
            }
            if (isset($info['create_time'])) {
                unset($info['create_time']);
            }
            if (isset($info['update_time'])) {
                unset($info['update_time']);
            }
        }
        return $infos;
    }
}