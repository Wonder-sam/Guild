<script src="../javascript/popups.js"></script>
<link rel="stylesheet" type="text/css" href="../styles/popups.css" />
<ul>
    <a href="home.php"><li>Home</li></a>
    <li  onmouseover="popup(0)" onmouseout="hidePopup(0)"><a href="action.php?groups=yes">Groups</a>
        <ul class="popups">
            <li onclick="location.href='groups.php?group=Great%20Alpha'">Great Alpha</li>
            <li onclick="location.href='groups.php?group=Souls'">Souls</li>
            <li onclick="location.href='groups.php?group=Ebenezer'">Ebenezer</li>
            <li onclick="location.href='groups.php?group=Wisdom'">Wisdom</li>
            <li onclick="location.href='groups.php?group=Precious%20Members'">Precious Members</li>
        </ul>
    </li>
    <li  onmouseover="popup(1)" onmouseout="hidePopup(1)"><a href="action.php?committees=yes">Committees</a>
        <ul class = "popups">
            <li onclick="location.href='committees.php?committee=Youth%20and%20Students%20Week'">Youth & Students Week</li>
            <li onclick="location.href='committees.php?committee=Protocol'">Protocol</li>
            <li onclick="location.href='committees.php?committee=Education'">Education</li>
            <li onclick="location.href='committees.php?committee=Evangelism'">Evangelism</li>
            <li onclick="location.href='committees.php?committee=Finance'">Finance</li>
            <li onclick="location.href='committees.php?committee=Project'">Project</li>
            <li onclick="location.href='committees.php?committee=Welfare'">Welfare</li>
        </ul>
    </li>
    </a>
    <a href="executives.php"><li>Executives</li></a>
    <a href="Calendar.php"><li>Calendar</li></a>
    <a href="about.php"><li>About Us</li></a>
</ul>