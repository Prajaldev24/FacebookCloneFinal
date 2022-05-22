 // assigning logout card id to a variable
 var logoutCard = document.getElementById("myLogoutCard"); // dowuble quote matters? tf lol

 // assigning logout card trigger button to a variable
 var loCardBtn = document.getElementById("myBtn");

 // logoutcard close button
 var loCardCloseBtn = document.getElementById("myCloseBtn");
 
 //create a new post card 
 var postCard = document.getElementById("create_post_card");

 //close create post button
 var postCardCloseBtn = document.getElementById("close_post_btn");

 //open new post card
 var postCardOpenBtn = document.getElementById("post_card_open_btn");

 //opening the post card on btn click
 postCardOpenBtn.onclick = function(){
     postCard.style.display = "block";
 }

 //closing the post card onclick the window
 postCardCloseBtn.onclick = function(){
     postCard.style.display = "none";
 }

 // When user clicks on the button, logout card opens
 loCardBtn.onclick = function(){
     logoutCard.style.display = "block";
 }

 //When user click on this button, logout card closes
 loCardCloseBtn.onclick = function(){
     logoutCard.style.display = "none";
 }

 // When user clicks outside the logout card it closes the card
 window.onclick = function(event) {
     if (event.target == logoutCard) {
         logoutCard.style.display = "none";
     }
 }


 // Menu bar
 var menuBar = document.getElementById('menubar');
 var menuBarClose = document.getElementById('closemenubar');

 // menu link card
 var menuLinkCard = document.getElementById('menulinkcard');

 menuBar.onclick = function(){
    menuLinkCard.style.left = "0%"
    menuLinkCard.style.transition = "all 0.5s ease"
    menuBarClose.style.zIndex = 3;
 }
 menuBarClose.onclick = function(){
    menuLinkCard.style.left = "-60%"
    menuLinkCard.style.transition = "all 0.5s ease"
    menuBar.style.zIndex = 2;
    this.style.zIndex = 1;
 }