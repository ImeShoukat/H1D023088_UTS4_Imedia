<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function check_login() {
    $ci =& get_instance();
    if (!$ci->session->userdata('user')) {
        redirect('admin/login');
    }
}
