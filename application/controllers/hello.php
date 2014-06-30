<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hello
 *
 * @author anwar
 */
class Hello extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function show(){
        echo 'hello world ';
    }
    public function index(){
        echo 'defualt browser';
    }
    public function test(){
        $this->load->view('message');
    }
}
