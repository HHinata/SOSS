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

    public function get_group_info_by_uid($uid)
    {
        $condition = array(
            'uid'  => $uid,
            'status' => '1',
        );
        $result = $this->db->get_where('groups',$condition);
        $num = $result->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->row_array();
        $this->show_group($info);
        return $info;
    }
    public function get_group_info_by_gid($gid)
    {
        $condition = array(
            'gid'  => $gid,
            'status' => '1',
        );
        $result = $this->db->get_where('groups',$condition);
        $num = $result->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->row_array();
        $this->show_group($info);
        return $info;
    }
    public function update_group_info($params)
    {
        $info = [];
        $condition = array();
        if(isset($params['phone']) && !empty($params['phone'])){
            $condition['phone'] = $params['phone'];
        }
        if(isset($params['address']) && !empty($params['address'])){
            $condition['address'] = $params['address'];
        }
        if(isset($params['gname']) && !empty($params['gname'])){
            $condition['gname'] = $params['gname'];
        }
        if(isset($params['available']) && !empty($params['available'])){
            $condition['available'] = $params['available'];
        }
        if(isset($params['status']) && !empty($params['status'])){
            $condition['status'] = $params['status'];
        }
        $condition['update_time'] = date("Y-m-d H:i:s", time());
        $where = array(
            'gid' => $params['gid'],
        );
        $this->db->update('groups',$condition,$where);
        $info = $this->get_group_info_by_gid($params['gid']);
        return $info;
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
    private static function get_group_id($phone)
    {
        $gid = $phone.time();
        return $gid;
    }

    public function show_group($info)
    {
        if(isset($info['create_time'])){
            unset($info['create_time']);
        }
        if(isset($info['update_time'])){
            unset($info['update_time']);
        }
        return $info;
    }
}