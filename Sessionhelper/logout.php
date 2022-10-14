<?php
    include_once 'admin_session.php';

    $userSession = new AdminSession();
    $userSession->closeSession();

    header("location: ./index.php");

?>