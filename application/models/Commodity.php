<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 19:45
 */
class Commodity extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_commodity_info_by_c_id($cid)
    {
        $condition = array(
            'cid'  => $cid,
            'status' => '1',
        );
        $result = $this->db->get_where('commoditys',$condition);
        $num = $result->num_rows();
        if($num != 1){
            return false;
        }
        $info = $result->row_array();
        $info = self::show_commodity_info($info);
        return $info;
    }
    public function get_commoditys_info_by_s_id($sid)
    {
        $condition = array(
            'sid'  => $sid,
            'status' => '1',
        );
        $result = $this->db->get_where('commoditys',$condition);

        $infos = $result->result_array();
        $infos = self::show_commoditys_info($infos);
        return $infos;
    }
    public function create_commodity_info($param)
    {
        $uid       = $param['uid'];
        $status    = isset($param['status']) ? $param['status'] : 1;
        $cid       = self::get_co_id($param['phone']);
        $cname     = isset($param['cname']) ? $param['cname'] : 'soss';
        $sid       = $param['sid'];
        $price     = $param['price'];
        $describes = $param['describes'];
        $condition = array(
            'status'      => $status,
            'cid'         => $cid,
            'sid'         => $sid,
            'cname'       => $cname,
            'describes'   => $describes,
            'price'       => $price,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('commoditys', $condition);
        $info = self::show_commodity_info($condition);
        return $info;
    }
    public function cancellation_commodity_info($cid)
    {
        $status = 0;
        $condition = array(
            'status'    => $status,
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $where     = array(
            'cid'  => $cid,
        );
        $this->db->update('commoditys', $condition, $where);
        return $cid;
    }
    public function off_commodity_info($cid)
    {
        $flag = 0;
        $condition = array(
            'flag'    => $flag,
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $where     = array(
            'cid'  => $cid,
        );
        $this->db->update('commoditys', $condition, $where);
        return $cid;
    }
    public function on_commodity_info($cid)
    {
        $flag = 1;
        $condition = array(
            'flag'    => $flag,
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $where     = array(
            'cid'  => $cid,
        );
        $this->db->update('commoditys', $condition, $where);
        return $cid;
    }
    public function update_commodity_info($cid,$param)
    {
        $condition = [];
        if(isset($param['cname']) && !empty($param['cname'])){
            $condition['cname'] = $param['cname'];
        }
        if(isset($param['describes']) && !empty($param['describes'])){
            $condition['describes'] = $param['describes'];
        }
        if(isset($param['price']) && !empty($param['price'])){
            $condition['price'] = $param['price'];
        }
        $condition['update_time'] = date("Y-m-d H:i:s", time());
        $where     = array(
            'cid'  => $cid,
        );
        $this->db->update('commoditys', $condition, $where);
        $info = $this->get_commodity_info_by_c_id($cid);
        $info = self::show_commodity_info($info);
        return $info;
    }
    private static function get_co_id($phone)
    {
        $cid = $phone.time();
        return $cid;
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
        $info = self::show_user_info($info);
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
        $info = self::show_user_info($info);
        return $info;
    }
    private static function show_commodity_info($info)
    {
        if(isset($info['upassword'])){
            unset($info['upassword']);
        }
        if(isset($info['status'])){
            unset($info['status']);
        }
        if(isset($info['id'])){
            unset($info['id']);
        }
        if(isset($info['create_time'])){
            unset($info['create_time']);
        }
        if(isset($info['update_time'])){
            unset($info['update_time']);
        }
        return $info;
    }
    private static function show_commoditys_info($infos)
    {
        if(empty($infos)){
            return $infos;
        }
        foreach ($infos as $info){
            if(isset($info['upassword'])){
                unset($info['upassword']);
            }
            if(isset($info['status'])){
                unset($info['status']);
            }
            if(isset($info['id'])){
                unset($info['id']);
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
}