/*
 * JavaScript handler for colors and other interactivity
 */

 function setup() {

 	var $tabs = document.querySelectorAll( ".tabs-title, .tabs-link" );
	var links = document.getElementsByTagName( "a" );
 	var buttons = document.querySelectorAll( ".button" );
	
 	for( var i = 0; i < $tabs.length; i++ ) {
 		$tabs[i].addEventListener( "click", function(e) { changeColor( e, links, buttons ) } );
 	}
 	
 	makeBlue( links, buttons );

 }

 function changeColor( e, links, buttons ) {
 	//var links = document.getElementsByTagName( "a" );
 	//var buttons = document.querySelectorAll( ".button" );
 	 	
 	if ( e.target.id == "book1-label" || e.target.parentElement.id == "book1-label" ) {
 		makeBlue( links, buttons );
 	} else if ( e.target.id == "book2-label" || e.target.parentElement.id == "book2-label" ) {
 		makeGreen( links, buttons );
  	} else if ( e.target.id == "book3-label" || e.target.parentElement.id == "book3-label" ) {
 		makePurple( links, buttons );
 	}
 }
 
 function makeBlue( links, buttons ) {
 	for( var i = 0; i < links.length; i++ ) { 
 		links[i].style.color = "#4f80bf";
 	}
 	for( var j = 0; j < buttons.length; j++ ) {
 		buttons[j].style.background = "#4f80bf";
 		buttons[j].style.color = "white";
 	}
 }
 
 function makeGreen( links, buttons ) {
 	for( var i = 0; i < links.length; i++ ) { 
 		links[i].style.color = "#25b28f";
 	}
 	for( var j = 0; j < buttons.length; j++ ) {
 		buttons[j].style.background = "#25b28f";
 		buttons[j].style.color = "white";
 	}
 }
 
 function makePurple( links, buttons ) {
 	for( var i = 0; i < links.length; i++ ) { 
 		links[i].style.color = "#503ab2";
 	}
 	for( var j = 0; j < buttons.length; j++ ) {
 		buttons[j].style.background = "#503ab2";
 		buttons[j].style.color = "white";
 	}
 }
  
 setup();