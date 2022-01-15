var btn = document.getElementById('loginbtn');

var fcont = document.querySelector('.signupcont');
var ftitle = document.querySelector('.notsel');
var fbody = document.querySelector('#notsel');


var btn2 = document.querySelector('#signupbtn');

var fcont1 = document.querySelector('.signincont');
var ftitle1 = document.querySelector('.notsel1');
var fbody1 = document.querySelector('#notsel1');

document.addEventListener("DOMContentLoaded",function(){
    btn.addEventListener("click",function(){
        fcont.classList.add("d-none");
        ftitle.classList.add("d-none");
        fbody.classList.add("d-none");

        fcont1.classList.remove("d-none");
        ftitle1.classList.remove("d-none");
        fbody1.classList.remove("d-none");
    });

    btn2.addEventListener("click",function(){
        fcont1.classList.add("d-none");
        ftitle1.classList.add("d-none");
        fbody1.classList.add("d-none");

        fcont.classList.remove("d-none");
        ftitle.classList.remove("d-none");
        fbody.classList.remove("d-none");
    });

});