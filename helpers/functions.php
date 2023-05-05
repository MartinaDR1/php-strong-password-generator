<?php

    function generateRandomPassword($length){
        $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
        echo substr(str_shuffle($characters), 0, $length);
    }

?>
