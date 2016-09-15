<?php 
function __autoload($str) {
   $path = implode('/', preg_split("/(?=[A-Z])/", $str));
   include_once 'classes'.$path.'.php';
}

$auth = new TransactionAuthorize();
$order = new Order();
$billing = new CustomerAddressBilling();