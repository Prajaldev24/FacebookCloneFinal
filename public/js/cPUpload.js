//Cover photo 
var CoverUploadBtn = document.getElementById('cover_photo_upload');
// cover photo container
var CoverPhotoContainer = document.getElementById('cover_pic_container');
//close button
var cPCloseBtn = document.getElementById('closeBtn');

CoverUploadBtn.onclick = function(){
    CoverPhotoContainer.style.display = "block";
}
cPCloseBtn.onclick = function(){
    CoverPhotoContainer.style.display = "none";
}

function previewImages() {
var preview = document.querySelector('#coverPreview');

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
        image.height = 600;
        image.title  = file.name;
        image.src    = this.result;
        preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
}
}
document.querySelector('#cover_photo_input').addEventListener("change", previewImages);