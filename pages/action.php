<?php
    require_once '../conn.php';
    session_start();
    if(isset($_POST['next'])){
        echo "five";
        $currentMonth = $currentMonth+ 1;
    }

    if(isset($_GET['groups']) && $_GET['groups']=="yes"){
        $_SESSION['goToGroups'] = "yes";
        header("location: home.php");
    }

    if(isset($_GET['committees']) && $_GET['committees']=="yes"){
        $_SESSION['goToCommittees'] = "yes";
        header("location: home.php");
    }
?>