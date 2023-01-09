<?php
class substitution {
  private $encrypt_method = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
  private $decrypt_method = 'DdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzAaBbCc1234567890';
  
  public function encrypt($string, $salt, $private_key) {
    $output = '';
    $string = $salt . $string . $private_key;
    for ($i = 0; $i < strlen($string); $i++) {
      $output .= $this->encrypt_method[strpos($this->decrypt_method, $string[$i])];
    }
    return $output;
  }
  
  public function decrypt($string, $salt, $private_key) {
    $output = '';
    for ($i = 0; $i < strlen($string); $i++) {
      $output .= $this->decrypt_method[strpos($this->encrypt_method, $string[$i])];
    }
    $output = substr($output, strlen($salt), strlen($output) - strlen($private_key) - strlen($salt));
    return $output;
  }
}
?>
