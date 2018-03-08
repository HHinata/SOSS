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
}