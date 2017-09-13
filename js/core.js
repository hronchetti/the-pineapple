// <![CDATA[
/*=================================
NAVIGATION: SMOOTH SCROLL
=================================*/
// SCROLL TO TOP
$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
// SCROLL TO MAIN FEATURE
$("a[href='#maintop']").click(function() {
  $("html, body").animate({ scrollTop: $("#main").offset().top }, "slow");
  return false;
});
/*=================================
NAVIGATION: DROPDOWN
=================================*/
// Pulling in variables for changing elements
var navButton =  document.getElementsByClassName('menu__link')[0];
var navDropdown = document.getElementsByClassName('navigation')[0];
var navIcon = document.getElementsByClassName('fa')[0];
var overlay = document.getElementsByClassName('overlay')[0];
// Capturing toggle functionality in a function for calling on navButton click
function navToggle(){
    if (navDropdown.style.display === 'block') {
        // Hide the dropdown
        navButton.style.color = '#220901';
        navDropdown.style.display = 'none';
        navIcon.className = 'fa fa-bars';
        overlay.style.visibility = 'hidden';
    } else{
        // Show the dropdown
        navButton.style.color = '#BA2D0B';
        navDropdown.style.display = 'block'; 
        navIcon.className = 'fa fa-times';
        overlay.style.visibility = 'visible';
    }
}
navButton.addEventListener('click', navToggle);
overlay.addEventListener('click', navToggle);
// ]]>