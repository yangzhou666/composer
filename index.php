<?php
require "vendor/autoload.php";


try {
    $obj = new Shopyz\Test();
    $obj->test();
}catch (Exception $e){
    echo $e->getMessage();
}
