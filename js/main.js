$(document).ready(function() {
    $('.open-popup-link').magnificPopup({
        type:'inline',
        midClick: true,
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass = 'mfp-zoom-in';
            },
            open: function() {
                $('.main-head').css({'overflow-y': 'scroll'});
            },
            close: function() {
                $('.main-head').css({'overflow-y': 'visible'});
            }
        },
    });
});
$('.slider-container').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    prevArrow: $('.slider-nav-prev'),
    nextArrow: $('.slider-nav-next'),
    responsive: [
        {
            breakpoint: 800,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 570,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

