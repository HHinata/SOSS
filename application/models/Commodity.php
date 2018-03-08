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
}