<?php 
    require_once '../conn.php';
    session_start();
    if(!isset($_SESSION["success"]) && $_SESSION["success"] != true){
        header("location: login.php");
        exit;
    }

    if(isset($_SESSION['goToGroups']) && $_SESSION['goToGroups']== "yes"){
        echo "<script> let visitGroups = '".$_SESSION['goToGroups']."';</script>";
        $_SESSION['goToGroups']="no";
    }
    else{
        echo "<script> let visitGroups = 'no';</script>";
    }
    if(isset($_SESSION['goToCommittees']) && $_SESSION['goToCommittees']== "yes"){
        echo "<script> let visitCommittees = '".$_SESSION['goToCommittees']."';</script>";
        $_SESSION['goToCommittees']="no";
    }
    else{
        echo "<script> let visitCommittees = 'no';</script>";
    }
    
?>
<!DOCTYPE html>
<html lang='eng'>
    <head>
        <title>YPG</title>
        <link rel="icon" href="../images/YPG.png" />
        <link rel="stylesheet" href="../styles/home.css" />
        <link rel="stylesheet" href="../styles/fontawesome/css/all.css" />
        <script src = "../javascript/jquery-3.5.1-min.js"></script>
        <script src = "../javascript/home.js" ></script>
    </head>
    <body>
        <div id="allcontent">
            <?php include "header.php"; ?>
            <div id="top">
                <i class="fa fa-list icon" style="color: black;" onclick="showTabs()"></i>
                <span>Service All The Way!!!</span>
            </div>
            <div id="mainContent">
                <div id="sideBar">
                    <?php include "sideTabs.php"; ?>
                </div>
                <div id="content">
                    <h2>Young Peoples' Guild</h2>
                    <div class="pages">
                        <div class = "page" onclick="goToGroups(this)" id="refreshGroups">
                            <i class="fa fa-user-friends icon"></i>
                            <p>Groups</p>
                        </div>
                        <div class = "page" onclick="goToCommittees(this)" id="refreshcommittees">
                            <i class="fa fa-users icon"></i>
                            <p>Committees</p>
                        </div>
                        <div class = "page" onclick="location.href='executives.php'">
                            <i class="fa fa-user-tie"></i>
                            <p>Executives</p>
                        </div>
                        <div class = "page">
                            <i class="far fa-calendar-alt icon"></i>
                            <p>Calendar</p>
                        </div>
                        <div class = "page">
                            <i class="fa fa-user-plus icon"></i>
                            <p>New Member</p>
                        </div>
                        
                        <div class = "page">
                            <i class="fas fa-tasks icon"></i>
                            <p>To Do</p>
                        </div>
                    </div>
                </div>
                <div id="event">
                    <h2>Upcoming Events</h2>
                    <div class="calendar_month">
                        <form method="post">
                        </b><i class="fa fa-chevron-left icon" id="previous"> </i><b id="month"></b><b id="year"></b><i class="fa fa-chevron-right icon" id="next"> </i>
                        </form>
                    </div>
                    <div class='days'>
                        <table id="calendar">
                           
                        </table>
                    </div>
                </div>
            </div>
            <div class="groups" id="guildGroups">
                <h2>Groups<i class ="fa fa-arrow-left icon" onclick="goBack(this)"></i></h2>
                <div class="pages">
                    <div class = "page" onclick="location.href='groups.php?group=Great%20Alpha'">
                        <i class="fa fa-user-friends icon"></i>
                        <p>Alpha</p>
                    </div>
                    <div class = "page" onclick="location.href='groups.php?group=Souls'">
                        <i class="fa fa-users icon"></i>
                        <p>Souls</p>
                    </div>
                    <div class = "page" onclick="location.href='groups.php?group=Wisdom'">
                        <i class="fa fa-user-tie"></i>
                        <p>Wisdom</p>
                    </div>
                    <div class = "page" onclick="location.href='groups.php?group=Ebenezer'">
                        <i class="far fa-calendar-alt icon"></i>
                        <p>Ebenezer</p>
                    </div>
                    <div class = "page" onclick="location.href='groups.php?group=Precious%20Members'">
                        <i class="fa fa-user-plus icon"></i>
                        <p>Precious Memebers </p>
                    </div>                    
                </div>
            </div>
            <div class="committees" id="guildCommittees">
                <h2>committees<i class ="fa fa-arrow-left icon" onclick="goBack(this)"></i></h2>
                <div class="pages">
                    <div class = "page" onclick="location.href='committees.php?committee=Youth%20and%20Students%20Week'">
                        <i class="fa fa-user-friends icon"></i>
                        <p>Youth and Students Week</p>
                    </div>
                    <div class = "page" onclick="location.href='committees.php?committee=Protocol'">
                        <i class="fa fa-users icon"></i>
                        <p>Protocol</p>
                    </div>
                    <div class = "page" onclick="location.href='committees.php?committee=Education'">
                        <i class="fa fa-user-tie"></i>
                        <p>Education</p>
                    </div>
                    <div class = "page" onclick="location.href='committees.php?committee=Evangelism'">
                        <i class="far fa-calendar-alt icon"></i>
                        <p>Evangelism</p>
                    </div>
                    <div class = "page" onclick="location.href='committees.php?committee=Finance'">
                        <i class="fa fa-user-plus icon"></i>
                        <p>Finance</p>
                    </div> 
                    <div class = "page" onclick="location.href='committees.php?committee=Project'">
                        <i class="fa fa-user-plus icon"></i>
                        <p>Project</p>
                    </div>  
                    <div class = "page" onclick="location.href='committees.php?committee=Welfare'">
                        <i class="fa fa-user-plus icon"></i>
                        <p>Welfare</p>
                    </div>                   
                </div>
            </div>
        </div>
    </body>
</html>