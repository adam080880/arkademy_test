<?php

    function usernameCheck($username)
    {
        $len = strlen($username);
        if($len < 2 || $len > 12) {
            return false;
        }

        if($username[0] != '@') {
            return false;
        }

        $withoutAt = substr($username, 1, $len);
        if(preg_match('/[^a-zA-Z0-9]+/', $withoutAt)) {
            return false;
        }

        return $username;
    }

    function passwordCheck($password)
    {
        $len = strlen($password);
        if($len > 6 || $len < 6) {
            return false;
        }

        if(preg_match('/[^0-9]+/', $password)) {
            return false;
        }

        return $password;
    }

    $test = usernameCheck('@koders');
    echo "Username Check: " . ($test ? "true" : "false");    
    echo "\n";
    $test2 = usernameCheck('@programmerhandal');
    echo "Username Check: " . ($test2 ? "true" : "false");    
    
    echo "\n";

    $password = passwordCheck('212223');
    echo "Password Check: " . ($password ? "true" : "false");    
    echo "\n";
    $password = passwordCheck('2!2a3B');
    echo "Password Check: " . ($password ? "true" : "false");    
?>