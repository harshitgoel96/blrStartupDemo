<?php

    if(preg_match ( "/Android/" , $_SERVER['HTTP_USER_AGENT'])){
        echo "hello android user";
    } else if (preg_match ( "/.*iPhone*./" , $_SERVER['HTTP_USER_AGENT'])){
       echo "Hello iPhone user";
    }
else {
echo "hello desktop user <br/>";

print_r($_SERVER['HTTP_USER_AGENT']);
}

?>
