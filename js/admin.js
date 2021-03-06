"use strict";


var logo = document.getElementsByClassName("login-logo")[0];
var form = document.getElementsByClassName("form-wrapper")[0];

var contentNavs = document.getElementsByClassName("content-nav");
var navActive = 0;
var showDivs = document.getElementsByClassName("show-div");
var shownDiv = 0;

var featuredImgs = document.getElementsByClassName("featured-img");
var imgLinks = document.getElementsByClassName("img-link");
var imgLinkInputs = document.getElementsByClassName("img-link-input");

var imageNav = document.getElementsByClassName("image-nav-option");
var selectedImg = document.getElementsByClassName("selected-img")[0];

var colabImg = document.getElementsByClassName("colab-img");

var defBgs = [];
defBgs[0] = "../res/min/index.jpg";
defBgs[1] = "../res/min/species.jpg";
defBgs[2] = "../res/min/aula-marina.jpg";
defBgs[3] = "../res/min/people.jpg";
defBgs[4] = "../res/min/facilities.jpg";
defBgs[5] = "../res/min/about-us.jpg";
defBgs[6] = "../res/min/activities.jpg";
defBgs[7] = "../res/min/projects.jpg";
defBgs[8] = "../res/min/news.jpg";
defBgs[9] = "../res/min/contact.jpg";

/*var fileButton = document.getElementById("file-button");
var realFileButton = document.getElementById("real-file-button");
var fileVal = document.getElementById("file-val");*/

var tableStars = document.getElementsByClassName("table-star");

try {
    if (anim) {
        setTimeout(
            function () {
                try {
                    logo.style.opacity = 1;
                } catch (err) { }
            },
            500
        );
        
        
        setTimeout(
            function () {
                try {
                    form.style.opacity = 1;
                } catch (err) { }
            },
            1500
        );
    } else {
        logo.style.opacity = 1;
        form.style.opacity = 1;
    }
} catch (error) {
    //
}


/*try {
    fileButton.onclick = function () {
        realFileButton.click();
    };

    fileVal.onclick = function () {
        realFileButton.click();
    };

    realFileButton.onchange = function () {
        fileVal.innerHTML = realFileButton.value.replace(/C:\\fakepath\\/i, '');
    };
} catch (error) {
    //
}*/


/*try {
    for (let index = 0; index < tableStars.length; index++) {
        tableStars[index].onclick = function () {
            var starClass = tableStars[index].children[0].className;
            tableStars[index].children[0].className =
                starClass == "far fa-star" ? "fas fa-star" : "far fa-star";
        }
    }
} catch (error) {
    //
}*/


function active(act) {
    contentNavs[navActive].className = "content-nav";
    contentNavs[act].className = "content-nav active";
    navActive = act;
}


function loadImage(img) {
    featuredImgs[img].src = imgLinks[img].value;
    imgLinkInputs[img].value = imgLinks[img].value;
}

function showDiv(show, disp='flex') {
    showDivs[shownDiv].style.display = "none";
    showDivs[show].style.display = disp;
    shownDiv = show;
}


function selectImg(img) {
    var selImg = selectedImg.children[0];
    var selInp = selectedImg.children[1];

    selectedImg.replaceChild(imageNav[img].children[0], selectedImg.children[0]);
    imageNav[img].appendChild(selImg);

    selectedImg.replaceChild(imageNav[img].children[0], selectedImg.children[1]);
    imageNav[img].appendChild(selInp);
}


function loadSelectedImage() {
    selectedImg.children[0].src = imgLinks[0].value;
    selectedImg.children[1].value = imgLinks[0].value;
}


function loadColabImage(index = 0) {
    colabImg[index].src = imgLinks[index].value;
    imgLinkInputs[index].value = imgLinks[index].value;
}

function defaultBg(index = 0) {
    colabImg[index].src = defBgs[index];
    imgLinkInputs[index].value = defBgs[index];
}

function confirmRemove(id, table, url){
    var ok = confirm("¿Está seguro de que quiere eliminar?");
    if(ok){
        window.location='remove.php?id='+ id + '&table='+ table + '&url='+ url;
    }
}

function star(id, table, url){
    window.location='star.php?id='+ id + '&table='+ table + '&url='+ url;
}

