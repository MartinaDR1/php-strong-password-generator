<?php
    
    function generateRandomPassword($length, $characters){
        
       // $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
        return substr(str_shuffle($characters), 0, $length);
    };

    
?>
