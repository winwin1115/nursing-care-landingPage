(function () {

    $ = jQuery.noConflict(false);

    $('#fullscreen-slider').slick({
        prevArrow: "<button class='slick-prev slick-arrow' type='button'><span class='chevron left'></span></button>",
        nextArrow: "<button class='slick-next slick-arrow' type='button'><span class='chevron right'></span></button>",
        dots: true,
    });

    $('.slick-slider-sc').slick({
        prevArrow: "<button class='slick-prev slick-arrow' type='button'><i class='fas fa-chevron-left'></i></button>",
        nextArrow: "<button class='slick-next slick-arrow' type='button'><i class='fas fa-chevron-right'></i></button>",
        dots: true,
    });

    document.addEventListener("DOMContentLoaded", function () {
        // make it as accordion for smaller screens
        if (window.innerWidth > 992) {

            document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

                everyitem.addEventListener('mouseover', function (e) {

                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.add('show');
                        nextEl.classList.add('show');
                    }

                });
                everyitem.addEventListener('mouseleave', function (e) {
                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.remove('show');
                        nextEl.classList.remove('show');
                    }


                })
            });

        }
        // end if innerWidth
    });



})();