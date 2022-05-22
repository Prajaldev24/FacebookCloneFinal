 // assigning logout card id to a variable
 var logoutCard = document.getElementById("myLogoutCard"); // dowuble quote matters? tf lol

 // assigning logout card trigger button to a variable
 var loCardBtn = document.getElementById("myBtn");

 // logoutcard close button
 var loCardCloseBtn = document.getElementById("myCloseBtn");

 //edit profile card
 var editProfileCard = document.getElementById("edit_profile_card");

 //edit profle button, opens on click
 var editProfileEdit = document.getElementById("edit_profle_btn");

 var editProfileCloseBtn = document.getElementById("edit_profile_close_btn");

 editProfileCloseBtn.onclick = function(){
     editProfileCard.style.display = "none";
 }
 //when user click on the edit profile button, the edit card opens
 editProfileEdit.onclick = function(){
     editProfileCard.style.display = "block";
 }

 // When user clicks on the button, logout card opens

 loCardBtn.onclick = function(){
     logoutCard.style.display = "block";
 }

 loCardCloseBtn.onclick = function(){
     logoutCard.style.display = "none";
 }

 // When user clicks outside the logout card it closes the card
 window.onclick = function(event) {
     if (event.target == editProfileCard) {
         editProfileCard.style.display = "none";
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
     menuLinkCard.style.left = "-50%"
     menuLinkCard.style.transition = "all 0.5s ease"
     menuBar.style.zIndex = 2;
     this.style.zIndex = 1;
  }