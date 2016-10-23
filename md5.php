<?php
    if(!empty($_GET['password'])){
        echo md5($_GET['password']);
    }
?>