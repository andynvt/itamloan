$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});


$(document).ready(function () {
    "use strict";

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;


    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);

    //-------- Active Sticky Js ----------//
    $(".default-header").sticky({
        topSpacing: 0
    });


    // //------- Active Nice Select --------//
    //
    // $('select').niceSelect();
    //
    //
    // $('.navbar-nav li.dropdown').hover(function () {
    //     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    // }, function () {
    //     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    // });
    //
    // $('.img-pop-up').magnificPopup({
    //     type: 'image',
    //     gallery: {
    //         enabled: true
    //     }
    // });

    // -------   Active Mobile Menu-----//

    $(".navbar-nav li a[href^='#']").on('click', function (event) {
        var target = this.hash;

        event.preventDefault();

        var navOffset = $('#navbar').height();

        return $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 40 - navOffset
        }, 600, function () {
            return window.history.pushState(null, null, target);
        });
    });

    // $('.navbar-nav>li>a').on('click', function(){
    //     $('.navbar-collapse').collapse('hide');
    // });

    //--------- Accordion Icon Change ---------//

    $('.collapse').on('shown.bs.collapse', function () {
        $(this).parent().find(".lnr-arrow-right").removeClass("lnr-arrow-right").addClass("lnr-arrow-left");
    }).on('hidden.bs.collapse', function () {
        $(this).parent().find(".lnr-arrow-left").removeClass("lnr-arrow-left").addClass("lnr-arrow-right");
    });


    // Select all links with hashes
    $('.main-menubar a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 70
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });



    // -------   Mail Send ajax

    $(document).ready(function () {
        var form = $('#booking'); // contact form
        var submit = $('.submit-btn'); // submit button
        var alert = $('.alert-msg'); // alert div for show alert message

        // form submit event
        form.on('submit', function (e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'booking.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function () {
                    alert.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function (data) {
                    alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                    submit.attr("style", "display: none !important");; // reset submit button text
                },
                error: function (e) {
                    console.log(e)
                }
            });
        });
    });




    $(document).ready(function () {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });





    $('.quick-view-carousel-details').owlCarousel({
        loop: true,
        dots: true,
        items: 1,
    })


    //----- Active No ui slider --------//

    $(function () {

        if (document.getElementById("price-range")) {

            var nonLinearSlider = document.getElementById('price-range');
            noUiSlider.create(nonLinearSlider, {
                connect: true,
                behaviour: 'tap',
                start: [1000000, 50000000],
                range: {
                    'min': [0],
                    '10%': [1000000, 500000],
                    '50%': [50000000, 1000000],
                    'max': [100000000]
                },
                format: wNumb({
                    decimals: 3,
                    thousand: '.',
                    suffix: ' ₫',
                }),
            });

            var nodes = [
            document.getElementById('lower-value'), // 0
            document.getElementById('upper-value') // 1
        ];

            // Display the slider value and how far the handle moved
            // from the left edge of the slider.
            nonLinearSlider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
                nodes[handle].innerHTML = values[handle];

                var vallow = $('#lower-value').text().replace(/\./g,'').replace(' ₫','');
                var valup = $('#upper-value').text().replace(/\./g,'').replace(' ₫','');

                // console.log(vallow);

                var lower = parseFloat(vallow , 10);
                var upper = parseFloat(valup, 10);

                $grid.isotope({
                    filter: function() {
                        var number = $(this).find('.product-price').text();
                        return parseInt( number, 10 ) >= lower && parseInt( number, 10 ) <= upper;
                    }
                });
            });

        }

    });



    //-------- Have Cupon Button Text Toggle Change -------//

    $('.have-btn').on('click', function (e) {
        e.preventDefault();
        $('.have-btn span').text(function (i, text) {
            return text === "Have a Coupon?" ? "Close Coupon" : "Have a Coupon?";
        })
        $('.cupon-code').fadeToggle("slow");
    });

    $('.load-more-btn').on('click', function (e) {
        e.preventDefault();
        $('.load-product').fadeIn('slow');
        $(this).fadeOut();
    });

    //------- Start Quantity Increase & Decrease Value --------//

    var value,
        quantity = document.getElementsByClassName('quantity-container');

    function createBindings(quantityContainer) {
        var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
        // var quantityAmount = quantityContainer.getElementById('#quantity-amount');
        var increase = quantityContainer.getElementsByClassName('increase')[0];
        var decrease = quantityContainer.getElementsByClassName('decrease')[0];
        increase.addEventListener('click', function () {
            increaseValue(quantityAmount);
        });
        decrease.addEventListener('click', function () {
            decreaseValue(quantityAmount);
        });
    }

    function init() {
        for (var i = 0; i < quantity.length; i++) {
            createBindings(quantity[i]);
        }
    };

    function increaseValue(quantityAmount) {
        value = parseInt(quantityAmount.value, 10);

        // console.log(quantityAmount, quantityAmount.value);

        value = isNaN(value) ? 0 : value;
        value++;
        quantityAmount.value = value;
    }

    function decreaseValue(quantityAmount) {
        value = parseInt(quantityAmount.value, 10);

        value = isNaN(value) ? 0 : value;
        if (value > 0) value--;

        quantityAmount.value = value;
    }

    init();

    //------- End Quantity Increase & Decrease Value --------//
});


// filter
var $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    getSortData: {
        number: '.product-price parseInt',
    }
});

// store filter for each group
var filters = {};

$('.filters').on( 'click', 'input[type="radio"]', function( event ) {
    // alert('dm');
    var $button = $( event.currentTarget );
    // get group key
    var $buttonGroup = $button.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $button.val();
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'input[type="radio"]', function( event ) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $( event.currentTarget );
        $button.addClass('is-checked');
    });
});

// flatten object by concatting values
function concatValues( obj ) {
    var value = '';
    for ( var prop in obj ) {
        value += obj[ prop ];
    }
    return value;
}

//sắp xếp giá
$('.div-sorts-btn-grp').on('change', 'select', function(){
    var sortValue = $(this).val();
    // console.log(sortValue);
    // alert(sortValue);
    // var text = $(this).text();

    // $('#btn-sort').text(text);

    if(sortValue == 'tangdan'){
        $grid.isotope({ sortBy: 'number', sortAscending: true });
    }
    else if(sortValue == 'giamdan'){
        $grid.isotope({ sortBy: 'number', sortAscending: false });
    }
    else{
        $grid.isotope({ sortBy: sortValue});
    }
});