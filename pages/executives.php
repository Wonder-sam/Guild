<?php 
    require_once '../conn.php';
    session_start();
    if(!isset($_SESSION["success"]) && $_SESSION["success"] != true){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang='eng'>
    <head>
        <title>YPG</title>
        <link rel="icon" href="../images/YPG.png" />
        <link rel="stylesheet" href="../styles/fontawesome/css/all.css" />
        <link rel='stylesheet' href="../styles/executive.css" />
        <script src = "../javascript/jquery-3.5.1-min.js"></script>
    </head>
    <body>
        <div id="allcontent">
            <?php include "header.php"; ?>
            <div id="top">
                    <?php include "menuTabs.php"; ?>
            </div>
            <div id="main">
                <img src ="../images/ypglogo.png" class ="logo" />
                <h2>Executives</h2>
                <table>
                    <?php
                        $leaderSql = "SELECT First_Name, Last_Name, Other_Names FROM members WHERE Executive_Position = 'president'";
                        $leader = mysqli_query($link, $leaderSql);
                        $groupLeader = mysqli_fetch_assoc($leader);
                    ?>
                    <tr>
                        <th>President:</th>
                        <td><?php echo $groupLeader['First_Name']." ".$groupLeader['Other_Names']." ".$groupLeader['Last_Name']; ?><td>
                        <td></td>
                        <th>Year</th>
                        <td><select name = "year">
                            <?php 
                                $year = date("Y");
                                while ($year > 2000 ){
                                    echo "<option>".$year."</option>";
                                    $year -=1;
                                }
                            ?>
                            </select> 
                        </td>
                    </tr>
                </table>
                <table class="memberList">
                    <tr>
                        <th>No.</th><th>Last Name</th><th>First Name(s)</th><th>Phone</th><th>Email</th>
                    </tr>
                    <?php 
                        $sql = "SELECT * FROM members WHERE Executive = 1";
                        $result = mysqli_query($link, $sql);
                        $num = 1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $num; ?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
                        <td><?php echo $row['First_Name']." ".$row['Other_Names']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                    </tr>
                    <?php
                        $num +=1;
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>