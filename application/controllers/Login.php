<?php

/**
 * Created by PhpStorm.
 * User: Hinata
 * Date: 2018/3/7
 * Time: 23:25
 */
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
}