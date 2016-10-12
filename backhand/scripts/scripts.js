   
jQuery(function($){
    // Relocate Jetpack sharing buttons
    $( '#sharing' ).html( $( '.sharedaddy' ).detach() );

    //split title into two lines
    $('article h2 a').html(function(){
        var text = $(this).text().replace(/by/gi,'<br />by');
        $(this).html(text);
    });

    //analytics
    $("a.sd-button").each(function() {
        var href = $(this).attr('href');
        var target = $(this).attr('target');
        var text = $(this).attr('title');
        $(this).click(function(event) { // when someone clicks these links
            event.preventDefault(); // don't open the link yet
           ga('send', 'event', 'Sharing', 'Shared', text); // create a custom event
            setTimeout(function() { // now wait 300 milliseconds...
                window.open(href,(!target?"_self":target)); // ...and open the link as usual
            },300);
        });
    });
});