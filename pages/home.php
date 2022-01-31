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
                        <div class = "page" onclick="goToGroups(this)">
                            <i class="fa fa-user-friends icon"></i>
                            <p>Groups</p>
                        </div>
                        <div class = "page">
                            <i class="fa fa-users icon"></i>
                            <p>Committies</p>
                        </div>
                        <div class = "page">
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
                <h2>Groups</h2>
                <div class="pages">
                    <div class = "page">
                        <i class="fa fa-user-friends icon"></i>
                        <p>Alpha</p>
                    </div>
                    <div class = "page">
                        <i class="fa fa-users icon"></i>
                        <p>Souls</p>
                    </div>
                    <div class = "page">
                        <i class="fa fa-user-tie"></i>
                        <p>Wisdom</p>
                    </div>
                    <div class = "page">
                        <i class="far fa-calendar-alt icon"></i>
                        <p>Ebenezer</p>
                    </div>
                    <div class = "page">
                        <i class="fa fa-user-plus icon"></i>
                        <p>Precious Memebers</p>
                    </div>                    
                </div>
            </div>
        </div>
    </body>
</html>