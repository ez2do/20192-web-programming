<?php
    $email = $_POST["email"];
    $url = $_POST["url"];
    $phone = $_POST["phone"];


    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $url_regex = "/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
    $phone_regex = "/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/";
    
    if (preg_match($email_regex, $email)) {
        print "Valid Email: $email <br/>";
    } else {
        print "Invalid Email: $email <br/>";
    }

    if (preg_match($url_regex, $url)) {
        print "Valid url: $url <br/>";
    } else {
        print "Invalid url: $url <br/>";
    }

    if (preg_match($phone_regex, $phone)) {
        print "Valid phone: $phone <br/>";
    } else {
        print "Invalid phone: $phone <br/>";
    }
?>