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
// console.log(nonLinearSlider);
            noUiSlider.create(nonLinearSlider, {
                connect: true,
                behaviour: 'tap',
                start: [1000000, 10000000],
                range: {
                    // Starting at 500, step the value by 500,
                    // until 4000 is reached. From there, step by 1000.
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

//sort màu

var $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
    }
};

// bind filter on radio button click
$('.filters').on( 'click', 'input', function() {
    // get filter value from input value
    var filterValue = this.value;
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
});

//mới
//
// // External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
// $(document).ready( function() {
//
//     // Create object to store filter for each group
//     var buttonFilters = {};
//     var buttonFilter = '*';
//     // Create new object for the range filters and set default values,
//     // The default values should correspond to the default values from the slider
//     var rangeFilters = {
//         'height': {'min':150, 'max': 185},
//         'weight': {'min':50, 'max': 90}
//     };
//
//     // Initialise Isotope
//     // Set the item selector
//     var $grid = $('.grid').isotope({
//         itemSelector: '.item',
//         layout: 'masonry',
//         // use filter function
//         filter: function() {
//             var $this = $(this);
//             var height = $this.attr('data-height');
//             var weight = $this.attr('data-weight');
//             var isInHeightRange = (rangeFilters['height'].min <= height && rangeFilters['height'].max >= height);
//             var isInWeightRange = (rangeFilters['weight'].min <= weight && rangeFilters['weight'].max >= weight);
//             //console.log(rangeFilters['height']);
//             //console.log(rangeFilters['weight']);
//             // Debug to check whether an item is within the height weight range
//             //console.log('isInHeightRange:' +isInHeightRange + '\nisInWeightRange: ' + isInWeightRange );
//             return $this.is( buttonFilter ) && (isInHeightRange && isInWeightRange);
//         }
//     });
//
//
//     // Initialise Sliders
//     // Set min/max range on sliders as well as default values
//     var $heightSlider = $('#filter-height').slider({ tooltip_split: true, min: 130,  max: 220, range: true, value: [150, 180] });
//     var $weightSlider = $('#filter-weight').slider({ tooltip_split: true, min: 40,  max: 150, range: true, value: [50, 90] });
//
//
//     function updateRangeSlider(slider, slideEvt) {
//         console.log('Current slider:' + slider);
//         var sldmin = +slideEvt.value[0],
//             sldmax = +slideEvt.value[1],
//             // Find which filter group this slider is in (in this case it will be either height or weight)
//             // This can be changed by modifying the data-filter-group="age" attribute on the slider HTML
//             filterGroup = slider.attr('data-filter-group'),
//             // Set current selection in variable that can be pass to the label
//             currentSelection = sldmin + ' - ' + sldmax;
//
//         // Update filter label with new range selection
//         slider.siblings('.filter-label').find('.filter-selection').text(currentSelection);
//
//         // Set min and max values for current selection to current selection
//         // If no values are found set min to 0 and max to 100000
//         // Store min/max values in rangeFilters array in the relevant filter group
//         // E.g. rangeFilters['height'].min and rangeFilters['height'].max
//         console.log('Filtergroup: '+ filterGroup);
//         rangeFilters[filterGroup] = {
//             min: sldmin || 0,
//             max: sldmax || 100000
//         };
//         // Trigger isotope again to refresh layout
//         $grid.isotope();
//
//     }
//
//     // Trigger Isotope Filter when slider drag has stopped
//     $heightSlider.on('slideStop', function(slideEvt){
//         var $this =$(this);
//         updateRangeSlider($this, slideEvt);
//     });
//     $weightSlider.on('slideStop', function(slideEvt){
//         var $this =$(this);
//         updateRangeSlider($this, slideEvt);
//     });
//
//
//     // Look inside element with .filters class for any clicks on elements with .btn
//     $('.filters').on( 'click', '.btn', function() {
//         var $this = $(this);
//         // Get group key from parent btn-group (e.g. data-filter-group="color")
//         var $buttonGroup = $this.parents('.btn-group');
//         var filterGroup = $buttonGroup.attr('data-filter-group');
//         // set filter for group
//         buttonFilters[ filterGroup ] = $this.attr('data-filter');
//         // Combine filters or set the value to * if buttonFilters
//         buttonFilter = concatValues( buttonFilters ) || '*';
//         // Log out current filter to check that it's working when clicked
//         console.log( buttonFilter )
//         // Trigger isotope again to refresh layout
//         $grid.isotope();
//     });
//
//
//     // change is-checked class on btn-filter to toggle which one is active
//     $('.btn-group').each( function( i, buttonGroup ) {
//         var $buttonGroup = $( buttonGroup );
//         $buttonGroup.on( 'click', '.btn-filter', function() {
//             $buttonGroup.find('.is-checked').removeClass('is-checked');
//             $(this).addClass('is-checked');
//         });
//     });
//
// });
//
// // Flatten object by concatting values
// function concatValues( obj ) {
//     var value = '';
//     for ( var prop in obj ) {
//         value += obj[ prop ];
//     }
//     return value;
// }
//
//
