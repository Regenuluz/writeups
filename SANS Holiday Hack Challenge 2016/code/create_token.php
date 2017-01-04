<?php
define('KEY', "\x61\x17\xa4\x95\xbf\x3d\xd7\xcd\x2e\x0d\x8b\xcb\x9f\x79\xe1\xdc");

function encrypt($data) {
    return mcrypt_encrypt(MCRYPT_ARCFOUR, KEY, $data, 'stream');
}

$auth = bin2hex(encrypt(json_encode([
    'username' => "administrator",
    'date' => "2016-12-26T19:01:59+0000",
])));
echo $auth;
?>