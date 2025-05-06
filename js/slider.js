$(document).ready(function(){
    $('#testimonial-slider').owlCarousel({
        loop: true, // Enables continuous loop
        margin: 30,
        nav: true, // Enables navigation arrows (this will work with custom buttons)
        dots: true, // Enables dots for navigation
        autoplay: true, // Enables autoplay for smooth sliding
        autoplayTimeout: 5000, // Duration for each slide (in ms)
        autoplayHoverPause: true, // Pause autoplay on hover
        responsive: {
            0: {
                items: 1 // 1 item for small screens
            },
            600: {
                items: 2 // 2 items for medium screens
            },
            1000: {
                items: 3 // 3 items for large screens
            }
        },
        navText: ['&#10094;', '&#10095;'], // Custom left and right arrows
    });
});
