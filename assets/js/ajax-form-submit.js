/*
 * JavaScript file to submit the contact form
 */
var abort = false;
$(document)

  // to prevent form from submitting upon successful validation
  .on("submit", function(ev) {
    ev.preventDefault();
    console.log("Submit for form id "+ev.target.id+" submitted");
    
    // @link: http://www.lynda.com/JavaScript-tutorials/Processing-form-data-AJAX/120466/133591-4.html
    if ( abort ) { return false; } else {
    	postData = $( '#contactForm' ).serialize();
    	$.post( '../../contact.php', postData + '&action=submit&ajaxrequest=1', function( msg ) {
    		if ( msg ) {
    			$( '#contactForm' ).before( msg );
    		}
    	});
    	return false;
    }
    
  });



$( "#contactForm" ).on( 'formvalid.zf.abide', function( ev, frm ) {

	// alert( 'valid' + frm.attr('id') );

	var name = $( '#contactName' ).val();
	var email = $( '#contactEmail' ).val();
	var reason = $( '#messageSubject' ).val();
	var content = $( '#messageContent' ).val();

	// Data for response
	var dataString = 'name=' + name +
					'&email=' + email +
					'&subject=' + reason + 
					'&message=' + message;

	// Begin Ajax call
	$.ajax( {
		type: "POST",
		url: "../../contact.php",
		data: dataString,
		success: function() {
			$( '#contactForm' ).html( "<div id='thanks'></div>" );
				$( '#thanks' ).html( "<h2>Thanks!</h2>" )
				.append( "<p>Thank you for your email. We will read your message and contact you if necessary.</p>" )
				.hide()
				.fadeIn( 1500 );
		},

	}); // END Ajax
});
