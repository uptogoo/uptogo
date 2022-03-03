/* Image Gallery */
/* Switching between the full image and the rest of the images  */

function myFunction(smallImg)
{
    var fullImg = document.getElementById("Full");
    fullImg.src = smallImg.src;
}
/* sticky navbar */
window.onscroll = function() {stick()};
		
var navigation = document.getElementById("navigation");
var sticky = navigation.offsetTop;

function stick() {
  if (window.pageYOffset >= sticky) {
    navigation.classList.add("sticky")
  } else {
    navigation.classList.remove("sticky");
  }
}
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
