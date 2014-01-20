<?php

if (!class_exists('webdav_client')) {
    require_once('./class_webdav_client.php');
}

$wdc = new webdav_client();
$wdc->set_server('54.221.8.79', '/');
$wdc->set_port(80);
$wdc->set_user('jerem');
$wdc->set_pass('Filezone0');
// use HTTP/1.1
$wdc->set_protocol(1);
// enable debugging
$wdc->set_debug(true);


if (!$wdc->open()) {
    print 'Error: could not open server connection';
    exit;
}

// check if server supports webdav rfc 2518
if (!$wdc->check_webdav()) {
    print 'Error: server does not support webdav or user/password may be wrong';
    exit;
}