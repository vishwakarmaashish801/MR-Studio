<?php

namespace payu;
include "payu/resources/hasher.php";
include "payu/base/payubase.php";

// namespace payu\PayUClient;
/**
 * key & salt values are provided by your AM from PayU side
 */
 $key = "";
//  sxsSlgRR
 $salt = "";
//  SPH4lamCAE
class PayUClient
{
  function __construct($key,$salt)
  {
    $this->key = $key;
    $this->salt = $salt;
     $creds = \base :: getInstance();
    $creds->set($key,$salt);
     $Array_var = (array) $creds;
    //  print_r($Array_var);

  }
}

 ?>
