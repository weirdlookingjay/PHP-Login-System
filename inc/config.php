<?php

    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    include_once('classes/DB.php');
    $con = DB::getConnection();