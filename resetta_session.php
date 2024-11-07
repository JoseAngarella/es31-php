<?php
    session_start();
    unset($_SESSION['tentativi_vinti']);
    unset($_SESSION['tentativi_fatti']);
    header ("Location: scelta.html");
?>