 // profile pic upload start
 var profilePicUpload = document.getElementById('upload_profile_pic');

 var profPicCardClose = document.getElementById('ppcbtn');

 var profilePicModal = document.getElementById('profile_card_container');

 profilePicUpload.onclick = function(){
     profilePicModal.style.display = "block";
 }
 profPicCardClose.onclick = function(){
     profilePicModal.style.display = "none";
 }

 //profile pic upload preview
 function previewImages() {

     var preview = document.querySelector('#preview');

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
             image.height = 200;
             image.title  = file.name;
             image.src    = this.result;
             preview.appendChild(image);
         });
         
         reader.readAsDataURL(file);
     }
 }
 document.querySelector('#img_input').addEventListener("change", previewImages);