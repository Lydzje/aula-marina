"use strict";


var sliderContents = document.getElementsByClassName("slider-content");
var sliderButtons = document.getElementsByClassName("slider-button");
var sliderCounter = 0;

setInterval(
    function() {
	try {
	    var sliderCounterPrev = sliderCounter;
	    sliderContents[sliderCounter].style.opacity = 0;
	    sliderCounter = (sliderCounter + 1) % 4;
	    setTimeout(
		function() {
		    sliderContents[sliderCounterPrev].style.display = "none";
		    sliderButtons[sliderCounterPrev].style.backgroundColor = "rgba(0,0,0,0)";
		},
		600
	    );
	    setTimeout(
		function() {
		    sliderContents[sliderCounter].style.display = "inline-block";
		    sliderButtons[sliderCounter].style.backgroundColor = "white";
		},
		601
	    );
	    setTimeout(
		function() {
		    sliderContents[sliderCounter].style.opacity = 1;	    
		},
		700
	    );
	} catch (err) {}
    },
    3000+2600
);


function showSlide(target) {
    sliderContents[sliderCounter].style.display = "none";
    sliderContents[sliderCounter].style.opacity = 0;
    sliderContents[target].style.display = "inline-block";
    sliderContents[target].style.opacity = 1;
    sliderButtons[sliderCounter].style.backgroundColor = "rgba(0,0,0,0)";
    sliderButtons[target].style.backgroundColor = "white";
    sliderCounter = target;
}
