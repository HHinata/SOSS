<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/6
 * Time: 19:47
 */
class Ord_com extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_ord_com_info_by_oid($oid)
    {
        $condition = array(
            'oid'  => $oid,
            'status' => '1',
        );
        $result = $this->db->get_where('ord_com',$condition);

        $infos = $result->result_array();
        $infos = self::show_ord_com_info($infos);
        return $infos;
    }
    public function create_ord_com_info($param)
    {
        $oid       = $param['oid'];
        $cid       = $param['cid'];
        $num       = $param['num'];
        $price     = $param['price'];
        $status    = isset($param['status']) ? $param['status'] : 1;
        $address   = $param['address'];
        $describes = $param['describes'];

        $condition = array(
            'oid'         => $oid,
            'cid'         => $cid,
            'num'         => $num,
            'price'       => $price,
            'status'      => $status,
            'describes'   => $describes,
            'create_time' => date("Y-m-d H:i:s", time()),
            'update_time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('ord_com', $condition);
        $info = self::show_ord_com_info($condition);
        return $info;
    }
    private static function show_ord_com_info($infos)
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