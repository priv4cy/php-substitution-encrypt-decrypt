<?php
function encrypt_decrypt($action, $string, $salt, $private_key) {
    $output = '';
    $encrypt_method = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $decrypt_method = 'DdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzAaBbCc1234567890';

    if ($action == 'encrypt') {
        $string = $salt . $string . $private_key;
        for ($i = 0; $i < strlen($string); $i++) {
            $output .= $encrypt_method[strpos($decrypt_method, $string[$i])];
        }
    } else if ($action == 'decrypt') {
        for ($i = 0; $i < strlen($string); $i++) {
            $output .= $decrypt_method[strpos($encrypt_method, $string[$i])];
        }
        $output = substr($output, strlen($salt), strlen($output) - strlen($private_key) - strlen($salt));
    }

    return $output;
}
?>