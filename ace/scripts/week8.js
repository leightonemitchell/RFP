/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: week8.js
Date: 08.04/18
Programmer: Leighton Mitchell
*/

// The line below is to test your link to the .js file. Please comment it out when it works.
//alert("the link to the .js file is correct!");

// The line below is to test your link to the jquery.min.js file. Please comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line first).

$(document).ready(function () {

    var imageFolder = "images";
    var imageSource = "";
    var photoCaption = "";

    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").show();

    $(".hamburger").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".hamburger").hide();
        $(".cross").show();
    });

    $("#myH1").text("jQuery Photo Gallery Menu");
    $("#myH2").text("Leighton Mitchell");

    var path = "images/";
    $("#bigPhoto").attr("src", path + "Agua_Azul.jpg");

    var thumbNames = ["Agua_Azul_small.jpg", "Burney_Falls_small.jpg", "Deer_Leap_Falls_small.jpg", "Fulmer_Falls_small.jpg", "Hopetown_Falls_small.jpg", "Jonathans_Run_small.jpg", "Manavgat_small.jpg", "Niagara_Falls_small.jpg"];

    //$.each(thumbNames, function (i) {
    //    alert(thumbNames[i]);
    //});

    $("img.thumbnail-inner").each(function (i) {

        (this).src = path + thumbNames[i];

    });

    $("img.thumbnail-inner").on("click", function () {
        //alert("You clicked and image!");

        $("img").css("opacity", "1");
        $(this).css("opacity", ".5");
        var imageSource = $(this).attr("src");
        //alert("Displays imageSource!");
        imageSource = imageSource.replace("_small", "");
        $("#bigPhoto").attr("src", imageSource);
        photoCaption = imageSource.replace(".jpg", "");
        photoCaption = photoCaption.replace("images/", "");
        $("#caption").text(photoCaption);

    });
    $(".cross").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".cross").hide();
        $(".hamburger").show();
    });

});
