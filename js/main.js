/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */

 /** Funcions específiques **/

$(document).ready(function() {

    $('#fullpage').fullpage({
    	continuousVertical: false,
        touchSensitivity: 30,
        normalScrollElementTouchThreshold: 5,
        loopBottom: true,
    	//fitToSectionDelay: 1000,
    	scrollBar: true,
    	//fixedElements: '#menuburger',
  		//resize : true,
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);

            //after leaving section 2
            if(index == 6 && direction =='down'){
                pauseAll();
            }

            else if(index == 6 && direction == 'up'){
                pauseAll();
            }
        }
      });

//    $(".segona").css("display", "none");
//    $(".tercera").css("display", "none");
//    $(".quarta").css("display", "none");

//    $.fn.fullpage.setAutoScrolling(false);

    $(".cinquena").css("display", "none");
    $(".sisena").css("display", "none");

var timedelay = 1;
function delayCheck()
{
    if(timedelay == 5)
    {
        $('#fletxafixe01').fadeOut();
        $('#fletxafixe02').fadeOut();
        $('#fletxafixe03').fadeOut();
        $('#fletxafixe04').fadeOut();
        //$('#fletxafixe05').fadeOut();
        //$('#more').fadeOut();
        $('#fletxafixe_amunt01').fadeOut();
        $('#fletxafixe_amunt02').fadeOut();
        $('#fletxafixe_amunt03').fadeOut();
        $('#fletxafixe_amunt04').fadeOut();      
        timedelay = 1;
    }
    timedelay = timedelay+1;
}

$(document).mousemove(function() {
    $('#fletxafixe01').fadeIn();
    $('#fletxafixe02').fadeIn();
    $('#fletxafixe03').fadeIn();
    $('#fletxafixe04').fadeIn();
    //$('#fletxafixe05').fadeIn();
    //$('#more').fadeIn();
    $('#fletxafixe_amunt01').fadeIn();
    $('#fletxafixe_amunt02').fadeIn();
    $('#fletxafixe_amunt03').fadeIn();
    $('#fletxafixe_amunt04').fadeIn();
    console.log('ara');
    timedelay = 1;
    clearInterval(_delay);
    _delay = setInterval(delayCheck, 500);
});

$('.detector').mouseover(function(){
    $('#fletxafixe_amunt02').fadeIn();
    //$('#more').fadeIn();
    $('#fletxafixe04').fadeIn();
        console.log('vimeo');
        timedelay = 1;
        clearInterval(_delay);
        _delay = setInterval(delayCheck, 500);
});

// page loads starts delay timer
_delay = setInterval(delayCheck, 500) 

});
    
function obreVideo(n) {
    $(".cinquena").css("display", "block");
    $(".sisena").css("display", "block");
	$("[class^='container_video']").css("display", "none");
	$(".container_video"+n).css("display", "block");
    //$('.Vimeo-video').css('z.index', 10000);
}

/** Burger Menu **/

var theToggle = document.getElementById('toggle');

// based on Todd Motto functions
// http://toddmotto.com/labs/reusable-js/

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}

/** Fi Burger Menu **/


