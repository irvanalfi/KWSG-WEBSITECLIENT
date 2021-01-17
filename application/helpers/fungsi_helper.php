<?php
function check_already_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('user_name');
    if ($user_session) {
        redirect('home_c');
    }
}

function check_not_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('user_name');
    if (!$user_session) {
        redirect('auth_c/login');
    }
}

function indo_currency($nominal)
{
    $result = "Rp." . number_format($nominal, 0, ',', '.');
    return $result;
}

function indo_date($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);
    return $d . '/' . $m . '/' . $y;
}
