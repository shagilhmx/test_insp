<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'security');
    }

    public function index()
    {
        $result = array(
            'title' => 'Inspira Tropical Garden',
            'description' => 'Inspira Tropical Garden',
            'keywords' => 'Inspira Tropical Garden'
        );
        $this->load->view('includes/commonHeader', $result);
        $this->load->view('pages/home');
        $this->load->view('includes/commonFooter');
    }
}