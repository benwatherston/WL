"use strict";var body=document.querySelector("body"),freeze=function(){body.classList.add("freeze")},unFreeze=function(){body.classList.remove("freeze")},header=document.querySelector(".header"),nav=document.querySelector(".main__navigation"),navOpen=document.querySelector(".navigation__open"),navClose=document.querySelector(".navigation__close");navOpen&&navOpen.addEventListener("click",function(){nav.classList.add("active"),header.classList.add("nav-active"),freeze()},!1),navClose&&navClose.addEventListener("click",function(){nav.classList.remove("active"),header.classList.remove("nav-active"),unFreeze()},!1);