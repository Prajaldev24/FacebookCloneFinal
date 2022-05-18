//left arrow
var leftArrow = document.getElementById('larrow');

//right arrow
var rightArrow = document.getElementById('rarrow');

// story container to slide
var storyContainer = document.getElementById('story_container');

if(storyContainer.style.width > "455px"){
    rightArrow.style.display = "block";
}

// when clicked on right arrow the container slide to the left
rightArrow.onclick = function(){
    storyContainer.style.transform = "translateX(-" + 20 + "%)";
    storyContainer.style.transition = "all 0.5s ease";
    leftArrow.style.transition = "all 2s ease"
    leftArrow.style.display = "block"
}
leftArrow.onclick = function(){
    storyContainer.style.transform = "translateX(+"+0+"%)";
    storyContainer.style.transition = "all 0.5s ease";
    this.style.display ="none";
    this.style.transition = "all 0.5s ease";
}