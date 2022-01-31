function showTabs(){
    let sideBar = document.getElementById('sideBar');
    let content = document.getElementById('content');
    let updates = document.getElementById("event");
    if(sideBar.style.display == "block"){
        content.style.animation = "shiftleft 1 1s";
        updates.style.animation = "adjustLeft 1 1s";
        sideBar.style.animation = "moveleft 1 .5s";
        setTimeout(set, 500);
    }
    else{
        content.style.animation = "shiftright 1 .5s";
        updates.style.animation = "adjustRight 1 .5s";
        sideBar.style.animation = "moveright 1 .5s";
        sideBar.style.display = "block";
    }
}

function set(){
    document.getElementById('sideBar').style.display = "none";
    let pages = document.getElementsByClassName("pages");
    pages[0].style.animation = "adjust 1 .5s";
}

function goToGroups(targ){
    let target = targ.parentNode.parentNode;
    let replacement = document.getElementById("guildGroups");
    let htmlReplacement = replacement.innerHTML;
    target.innerHTML = htmlReplacement;
    target.getElementsByClassName("pages")[0].style.display = "none";
    target.getElementsByClassName("pages")[0].style.display = "flex";
    target.getElementsByClassName("pages")[0].style.animation = "fadeIn 1 1 s";
    console.log(target);
}
function calendar(year, month, months, days, firstDay){
    document.getElementById("month").innerHTML = months[month];
    document.getElementById("year").innerHTML = "\t"+year;
    let heads = "<th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>";
    $("#calendar").append("<tr>"+heads+"</tr>")
    $("#calendar").append("<tr>");
    let row = 1;
    let count = 1;
    for(let i = 1; i<firstDay;i++){
        $("#calendar").append("<td> </td>");
        if((row%7) == 0){
            $("#calendar").append("</tr><tr>");
        }
        row += 1;
    }
    while(count <= days.get(months[month])){
        $("#calendar").append("<td>"+count+"</td>");
        if((row%7) == 0){
            $("#calendar").append("</tr><tr>");
        }
        row += 1;
        console.log(count)
        count += 1;
    }
    $("#calendar").append("</tr>");

}

window.onload =function init(){
    let months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    let months30 = new Array("September", "April", "June", "November");
    let days = new Map();
    for(let currentMonth of months){
        if(months30.includes(currentMonth)){
            days.set(currentMonth, 30);
        }
        else if(currentMonth == "February"){
            days.set(currentMonth, 28);
        }
        else{
            days.set(currentMonth, 31);
        }
    }
    
    let startDate = new Date();
    let today = new Date();
    let year = today.getFullYear();
    let month = today.getMonth();
    let weekDay = today.getDay();
    let day = today.getDate();
    startDate.setFullYear(year,month,1);
    let firstDay = startDate.getDay(1)+1;
    if(firstDay>7){
        firstDay -= 7; 
    }
    calendar(year,month, months, days, firstDay);

    document.getElementById("next").onclick = nextMonth;
    document.getElementById("previous").onclick = prevMonth;
    function nextMonth(){
        month +=1;
        startDate.setFullYear(year,month,1);
        firstDay = startDate.getDay(1)+1;
        if(firstDay>7){
            firstDay -= 7; 
        }
        document.getElementById("month").innerHTML = months[month];
        document.getElementById("calendar").innerHTML = '';
        calendar(year,month,months,days,firstDay)
    }
    function prevMonth(){
        month -=1;
        startDate.setFullYear(year,month,1);
        firstDay = startDate.getDay(1)+1;
        if(firstDay>7){
            firstDay -= 7; 
        }
        document.getElementById("month").innerHTML = months[month];
        document.getElementById("calendar").innerHTML = '';
        calendar(year,month,months,days,firstDay)
    }
}
