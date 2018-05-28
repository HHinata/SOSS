<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 19:48
 */
class Gro_shop extends  CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_shop_list_by_gid($gid)
    {
        $condition = array(
            'gid'  => $gid,
            'status' => '1',
        );
        $result = $this->db->get_where('gro_shop',$condition);
        $num = $result->num_rows();
        $infos = $result->result_array();
        foreach ($infos as &$info){
            $info = $info['sid'];
        }
        return $infos;
    }
    public function get_group_list_by_sid($sid)
    {
        $condition = array(
            'sid'  => $sid,
            'status' => '1',
        );
        $result = $this->db->get_where('gro_shop',$condition);
        $num = $result->num_rows();
        $infos = $result->result_array();
        foreach ($infos as &$info){
            $info = $info['gid'];
        }
        return $infos;
    }
    public function create_group_shop_info($gid,$sid)
    {
        $condition = array(
            'status'      => 1,
            'gid'         => $gid,
            'sid'         => $sid,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('gro_shop', $condition);
        return $condition;
    }
}