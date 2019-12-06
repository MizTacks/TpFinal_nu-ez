<?php
    session_start();
    unset($_session['usuario']);
    unset($_session['password']);
    session_destroy();

    header('Location: ../index.php');
?>