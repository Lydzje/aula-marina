"use strict";

var body = document.getElementsByTagName("body")[0];

var bg = document.getElementsByClassName("bg")[0];
if (!bglink.startsWith("../res") && bglink != "") {
	bg.style.background = "url('" + bglink + "')";
}

var lang           = document.getElementsByClassName("lang-resp")[0];
var navResp        = document.getElementsByClassName("nav-resp")[0];
var buttonNavResps = document.getElementsByClassName("button-nav-resp");

var sliders         = document.getElementsByClassName("slider");
var sliderContents  = document.getElementsByClassName("slider-content");
var sliderButtons   = document.getElementsByClassName("slider-button");
var sliderCounter   = [0];
var sliderIntervals = [];

if (sliders != null) {
	for (let i = 0; i < sliders.length; i++) {
		sliderCounter[i] = i * 4;
	}
}


var yearSelector = document.getElementById("year-selector");

for (let i = 0; i < sliderCounter.length; i++) {
	sliderIntervals[i] = setInterval(
		function() {
			try {
				var sliderCounterPrev = sliderCounter[i];
				sliderContents[sliderCounter[i]].style.opacity = 0;
				sliderCounter[i] = (sliderCounter[i] + 1) % 4 + 4 * i;
				setTimeout(
					function() {
						sliderContents[sliderCounterPrev].style.display = "none";
						sliderButtons[sliderCounterPrev].style.backgroundColor = "rgba(0,0,0,0)";
					},
					600
					);
					setTimeout(
					function() {
						sliderContents[sliderCounter[i]].style.display = "inline-block";
						sliderButtons[sliderCounter[i]].style.backgroundColor = "white";
					},
					600
				);
				setTimeout(
					function() {
						sliderContents[sliderCounter[i]].style.opacity = 1;	    
					},
					700
				);
			} catch (err) {}
		},
		3000+2600
	);
}


function stopSlider(section = 0) {
	clearInterval(sliderIntervals[section]);
}


function resumeSlider(section = 0) {
	sliderIntervals[section] = setInterval(
		function() {
			try {
				var sliderCounterPrev = sliderCounter[section];
				sliderContents[sliderCounter[section]].style.opacity = 0;
				sliderCounter[section] = (sliderCounter[section] + 1) % 4 + 4 * section;
				setTimeout(
					function() {
						sliderContents[sliderCounterPrev].style.display = "none";
						sliderButtons[sliderCounterPrev].style.backgroundColor = "rgba(0,0,0,0)";
					},
					600
					);
					setTimeout(
					function() {
						sliderContents[sliderCounter[section]].style.display = "inline-block";
						sliderButtons[sliderCounter[section]].style.backgroundColor = "white";
					},
					600
				);
				setTimeout(
					function() {
						sliderContents[sliderCounter[section]].style.opacity = 1;	    
					},
					700
				);
			} catch (err) {}
		},
		3000+2600
	);
}


function showSlide(target, section = 0) {
    sliderContents[sliderCounter[section]].style.display = "none";
	sliderContents[sliderCounter[section]].style.opacity = 0;
	sliderContents[target + 4 * section].style.display = "inline-block";
	sliderContents[target + 4 * section].style.opacity = 1;
    sliderButtons[sliderCounter[section]].style.backgroundColor = "rgba(0,0,0,0)";
    sliderButtons[target + 4 * section].style.backgroundColor = "white";
	sliderCounter[section] = target + 4 * section;
}


function goToYear(lan) {
	var year = yearSelector.options[yearSelector.selectedIndex].value;
	window.location = "species-of-the-month.php" + lan + "&year=" + year;
}


function toggleNavResp(){
	var display = navResp.style.display;
	if (display == '' || display == 'none') {
		body.style.overflowY = "hidden";
		navResp.style.display = 'block';
		lang.style.display = 'block';
		buttonNavResps[0].style.display = 'none';
		buttonNavResps[1].style.display = 'inline-block';
	} else {
		body.style.overflowY = "auto";
		navResp.style.display = 'none';
		lang.style.display = 'none';
		buttonNavResps[0].style.display = 'inline-block';
		buttonNavResps[1].style.display = 'none';
	}
}

