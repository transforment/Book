<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'UBND Huyện Bến Lức';

        $this->load->view('templates/footer');
    }
}