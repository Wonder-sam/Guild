function popup(num){
    let popups =document.getElementsByClassName("popups");
    popups[num].style.display = "block";
}
function hidePopup(num){
    let popups =document.getElementsByClassName("popups");
    popups[num].style.display = "none";
}