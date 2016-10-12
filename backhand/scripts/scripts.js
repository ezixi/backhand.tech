$( document ).ready( function( ) {
    // Relocate Jetpack sharing buttons down into the comments form
    $( '#sharing' ).html( $( '.sharedaddy' ).detach() );

    //split title into two lines
    $('article h2 a').html(function(){
        var text = $(this).text().replace('by','<br />by');
        $(this).html(text);
    });
} );