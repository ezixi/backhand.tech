$( document ).ready(function() {
    $( ".blog_content img" ).addClass( "img-fluid rounded mx-auto" );
    $( ".blog_content h1" ).addClass( "display-4" );

        //analytics
    $("a").each(function() {
        var href = $(this).attr('href');
        var target = $(this).attr('target');
        var text = $(this).attr('title');
        $(this).click(function(event) { // when someone clicks these links
            event.preventDefault(); // don't open the link yet
           gtag('event', 'select_content', text); // create a custom event
            setTimeout(function() { // now wait 300 milliseconds...
                window.open(href,(!target?"_self":target)); // ...and open the link as usual
            },300);
        });
    });
});
