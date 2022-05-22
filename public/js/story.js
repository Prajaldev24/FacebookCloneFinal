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


// Uploading Story

// var story_upload_card = document.getElementById('photo_story');

function handleStoryFile(){
    var photo_story_card = document.getElementById('photo_story_card');
    return (photo_story_card.style.display = "block");
}


function previewImages() {
    var preview = document.querySelector('#story_preview');

    if (this.files) {
    [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        } // else...
        
        var reader = new FileReader();
        
        reader.addEventListener("load", function() {
            var image = new Image();
            image.width = 281;
            image.title  = file.name;
            image.src    = this.result;
            preview.appendChild(image);
        });
        
        reader.readAsDataURL(file);
    }
}
document.querySelector('#story_input').addEventListener("change", previewImages);

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