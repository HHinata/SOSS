<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 19:27
 */
class Group extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_group_info_by_group_id($group_id)
    {
        $condition = array(
            'gid'  => $group_id,
            'status' => '1',
        );
        $result = $this->db->get_where('groups',$condition);
        $num = $result->db->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->db->row_array();
        return $info;
    }
    public function get_group_info_by_phone($phone)
    {
        $condition = array(
            'phone'  => $phone,
            'status' => '1',
        );
        $result = $this->db->get_where('groups',$condition);
        $num = $result->db->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->db->row_array();
        return $info;
    }
    public function create_group_info($param)
    {
        if(!isset($param['phone']) || !isset($param['group_pass_word'])
            || !is_numeric($param['phone'])){
            return false;
        }
        $phone     = $param['phone'];
        $status    = isset($param['status']) ? $param['status'] : 1;
        $gid       = self::get_group_id($phone);
        $gname     = isset($param['group_name']) ? $param['group_name'] : 'soss';
        $gpassword = $param['group_pass_word'];
        $address   = isset($param['address']) ? $param['address'] : '';
        $condition = array(
            'phone'       => $phone,
            'status'      => $status,
            'gid'         => $gid,
            'gname'       => $gname,
            'gpassword'   => $gpassword,
            'address'     => $address,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('users', $condition);
        return $condition;
    }
    public function cancellation_group_info($group_id)
    {
        $status = 0;
        $condition = array(
            'status'    => $status,
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $where     = array(
            'gid'  => $group_id,
        );
        $this->db->update('group', $condition, $where);
        return $group_id;
    }
    public function update_group_info($group_id,$param)
    {
        $condition = [];
        if(isset($param['phone'])){
            $condition['phone'] = $param['phone'];
        }
        if(isset($param['group_name'])){
            $condition['gname'] = $param['group_name'];
        }
        if(isset($param['group_pass_word'])){
            $condition['gpassword'] = $param['group_pass_word'];
        }
        if(isset($param['address'])){
            $condition['address'] = $param['address'];
        }
        $condition['update_time'] = date("Y-m-d H:i:s", time());
        $where     = array(
            'gid'  => $group_id,
        );
        $this->db->update('groups', $condition, $where);
        $info = $this->get_group_info_by_group_id($group_id);
        return $info;
    }
    private static function get_group_id($phone)
    {
        $gid = $phone.time();
        return $gid;
    }

}