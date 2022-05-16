 // assigning logout card id to a variable
 var logoutCard = document.getElementById("myLogoutCard"); // dowuble quote matters? tf lol

 // assigning logout card trigger button to a variable
 var loCardBtn = document.getElementById("myBtn");

 // logoutcard close button
 var loCardCloseBtn = document.getElementById("myCloseBtn");

 // When user clicks on the button, logout card opens
 loCardBtn.onclick = function(){
    logoutCard.style.display = "block";
}

//When user click on this button, logout card closes
loCardCloseBtn.onclick = function(){
    logoutCard.style.display = "none";
}