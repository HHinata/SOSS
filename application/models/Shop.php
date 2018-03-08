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
    public function get_user_info_by_user_id($user_id)
    {
        $condition = array(
            'uid'  => $user_id,
            'status' => '1',
        );
        $result = $this->db->get_where('users',$condition);
        $num = $result->db->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->db->row_array();
        return $info;
    }
    public function get_user_info_by_phone($phone)
    {
        $condition = array(
            'phone'  => $phone,
            'status' => '1',
        );
        $result = $this->db->get_where('users',$condition);
        $num = $result->db->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->db->row_array();
        return $info;
    }
    public function create_user_info($param)
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
        $info = $this->get_user_info_by_user_id($user_id);
        return $info;
    }
    private static function get_user_id($phone)
    {
        $uid = $phone.time();
        return $uid;
    }
}