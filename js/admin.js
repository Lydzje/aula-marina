"use strict";


var logo = document.getElementsByClassName("login-logo")[0];
var form = document.getElementsByClassName("form-wrapper")[0];

var featureds = document.getElementsByClassName("featured");
var shownDiv = 0;


setTimeout(
    function() {
	try {
	    logo.style.opacity = 1;
	} catch (err) {}
    },
    500
);

setTimeout(
    function() {
	try {
	    form.style.opacity = 1;
	} catch (err) {} 
    },
    1500
);


function showDiv(show) {
    featureds[shownDiv].style.display = "none";
    featureds[show].style.display = "flex";
    shownDiv = show;
}
