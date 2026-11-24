<?php
 
    $_SESSION = [];
    session_destroy();

    session_get_cookie_params();
    setcookie(session_name(), '', time() - 360, $_SESSION['COOKIE_PATH'], null);
    
    header('Location: /');