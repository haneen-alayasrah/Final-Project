
$(document).ready(function ($) {

    $('.news .all-rows').bxSlider({
        minSlides: 1,
        maxSlides: 3,
        slideWidth: 350,
        slideMargin: 30,
        responsive: true,
        infiniteLoop: true,
        controls: true,
        pager: false,
        speed: 500,
        auto: false,
        touchEnabled: false, // to Enable Click on Link
    });

    //Reponsive menu
    $("body .top-header .right .responsive-links img").click(function () {
        if ($('body .top-header .right .responsive-links').hasClass('closed-menu')) {
            $('body .top-header .right .responsive-links').removeClass('closed-menu');
        } else {
            $('body .top-header .right .responsive-links').addClass('closed-menu');
        }
        if ($('body .top-header .right .top .social-icons').hasClass('add-social')) {
            $('body .top-header .right .top .social-icons').removeClass('add-social');
        } else {
            $('body .top-header .right .top .social-icons').addClass('add-social');
        }
        if ($('body .top-header .right .bottom').hasClass('add_bottom')) {
            $('body .top-header .right .bottom').removeClass('add_bottom');
        } else {
            $('body .top-header .right .bottom').addClass('add_bottom');
        }
        if ($('body .top-header .left').hasClass('remove_logo')) {
            $('body .top-header .left').removeClass('remove_logo');
        } else {
            $('body .top-header .left').addClass('remove_logo');
        }
        if ($('body .top-header .right').hasClass('full_width')) {
            $('body .top-header .right').removeClass('full_width');
        } else {
            $('body .top-header .right').addClass('full_width');
        }
        if ($('body .top-header .right .top .login').hasClass('remove_login')) {
            $('body .top-header .right .top .login').removeClass('remove_login');
        } else {
            $('body .top-header .right .top .login').addClass('remove_login');
        }
        if ($('body .top-header .right .top').hasClass('full_top')) {
            $('body .top-header .right .top').removeClass('full_top');
        } else {
            $('body .top-header .right .top').addClass('full_top');
        }
    });
    //Register/log in page
    $("body .sign-in-resiter-page .left .tabs ul li a").click(function () {
        $('body .sign-in-resiter-page .left .tabs ul li a').removeClass('active');
        if ($(this).hasClass('active')) {

        } else {
            $(this).addClass('active');
        }
    });
    $("body .sign-in-resiter-page .left .tabs ul li a.sign-in").click(function () {
        $('body .sign-in-resiter-page .left .tabs-content .tab-content').removeClass('active');
        $('body .sign-in-resiter-page .left .tabs-content  #sign-in').addClass('active');
    });
    $("body .sign-in-resiter-page .left .tabs ul li a.register").click(function () {
        $('body .sign-in-resiter-page .left .tabs-content .tab-content').removeClass('active');
        $('body .sign-in-resiter-page .left .tabs-content  #register').addClass('active');
    });
    //News inner page
    $('.slideshow.newsinner .bx-thumbnail').bxSlider({
        pagerCustom: '#bx-thumbnail-pager',
        slideWidth: 0,
        minSlides: 1,
        responsive: true,
        controls: false
    });
    $('.slideshow.newsinner #bx-thumbnail-pager').bxSlider({
        slideWidth: 160,
        minSlides: 5,
        maxSlides: 5,
        slideMargin: 30,
        responsive: true,
        controls: true,
        pager: false

    });
    //findplave inner page
    $('.slideshow.findplace .bx-thumbnail').bxSlider({
        pagerCustom: '#bx-thumbnail-pager',
        slideWidth: 0,
        minSlides: 1,
        responsive: true,
        controls: true
    });
    $('.slideshow.findplace #bx-thumbnail-pager').bxSlider({
        mode: 'vertical',
        slideWidth: 160,
        minSlides: 5,
        maxSlides: 5,
        slideMargin: 10,
        responsive: true,
        controls: true,
        infiniteLoop: false,
        pager: false

    });
    
    var viewportWidth = $(window).width();
    if (viewportWidth < 769) {
        $('.slideshow.findplace #bx-thumbnail-pager').bxSlider({
            mode: 'horizontal',
            slideWidth: 160,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 10,
            responsive: true,
            controls: false,
            pager: false

        });
    }
    $(function () {
        // $(".edit-nid").chosen();
    });

    //Accessibility tools
    $('body .top-header .right .accessibility-tools .acc-tool-link .open-tool').click(function (e) {
        $('body .top-header .right .accessibility-tools .tools-menu').css('display', 'block');
        $('body .top-header .right .accessibility-tools .acc-tool-link .open-tool').css('display', 'none');
        $('body .top-header .right .accessibility-tools .acc-tool-link .close-tool').css('display', 'block');
    });
    $('body .top-header .right .accessibility-tools .acc-tool-link .close-tool').click(function (e) {
        $('body .top-header .right .accessibility-tools .tools-menu').css('display', 'none');
        $('body .top-header .right .accessibility-tools .acc-tool-link .open-tool').css('display', 'block');
        $('body .top-header .right .accessibility-tools .acc-tool-link .close-tool').css('display', 'none');
    });
    var body_class = $.cookie('body_class');
    if (body_class) {
        $('body').addClass(body_class);
        console.log(body_class);
    }
    //hide images
    $('body .top-header .right .accessibility-tools .tools-menu .hide-imgs').click(function (e) {
        $('body .news .all-rows .row .filed-set .category , body .news-listing .bottom-content .all-rows .row .row-content .filed-set .category , body .related-news-block .all-rows .row .row-content .filed-set .category , body .findaplace-dashboard .bottom-content .all-rows .row .row-content .filed-set , body .related-findplace-block .all-rows .row .row-content .filed-set , body .findaplace-listing .bottom-content .all-rows .row .row-content .filed-set , body .savedplaces-listing .content .all-rows .row .row-content .filed-set').addClass('off');

        $("body").addClass("hide_images");
        $("body").removeClass("reset_hide_images");
        //$("body").removeClass("alternate_body");
        $.cookie('body_class', null);
        $.cookie('body_class', "hide_images");
    });



    //reset hide images
    $('body .top-header .right .accessibility-tools .tools-menu .reset-hide-imgs').click(function (e) {
        $('body .news .all-rows .row .filed-set .category , body .news-listing .bottom-content .all-rows .row .row-content .filed-set .category , body .related-news-block .all-rows .row .row-content .filed-set .category , body .findaplace-dashboard .bottom-content .all-rows .row .row-content .filed-set , body .related-findplace-block .all-rows .row .row-content .filed-set , body .findaplace-listing .bottom-content .all-rows .row .row-content .filed-set , body .savedplaces-listing .content .all-rows .row .row-content .filed-set').removeClass('off');

        $("body").addClass("reset_hide_images");
        $("body").removeClass("hide_images");
        //$("body").removeClass("alternate_body");
        $.cookie('body_class', null);
        $.cookie('body_class', "reset_hide_images", {'path': '/'});

    });
    //yellow background
    $('body .top-header .right .accessibility-tools .tools-menu .bk-color-yellow').click(function (e) {
        $('body').removeClass('black-body');
        $('body').addClass('yellow-body');
        $.cookie('body_class', null);
        $.cookie('body_class', "yellow-body", {'path': '/'});

    });
    //black background
    $('body .top-header .right .accessibility-tools .tools-menu .bk-color-black').click(function (e) {
        $('body').removeClass('yellow-body');
        $('body').addClass('black-body');
        $.cookie('body_class', null);
        $.cookie('body_class', "black-body", {'path': '/'});
    });
    //reset color background
    $('body .top-header .right .accessibility-tools .tools-menu .reset-bk-color').click(function (e) {
        $('body').removeClass('yellow-body');
        $('body').removeClass('black-body');
        $.cookie('body_class', null);
        $.removeCookie('body_class', {'path': '/'});

    });
    if ($('body').hasClass('hide_images')) {
        $('body .news .all-rows .row .filed-set .category , body .news-listing .bottom-content .all-rows .row .row-content .filed-set .category , body .related-news-block .all-rows .row .row-content .filed-set .category , body .findaplace-dashboard .bottom-content .all-rows .row .row-content .filed-set , body .related-findplace-block .all-rows .row .row-content .filed-set , body .findaplace-listing .bottom-content .all-rows .row .row-content .filed-set , body .savedplaces-listing .content .all-rows .row .row-content .filed-set').addClass('off');
    } else {
        $('body .news .all-rows .row .filed-set .category , body .news-listing .bottom-content .all-rows .row .row-content .filed-set .category , body .related-news-block .all-rows .row .row-content .filed-set .category , body .findaplace-dashboard .bottom-content .all-rows .row .row-content .filed-set , body .related-findplace-block .all-rows .row .row-content .filed-set , body .findaplace-listing .bottom-content .all-rows .row .row-content .filed-set , body .savedplaces-listing .content .all-rows .row .row-content .filed-set').removeClass('off');
    }

    //////

    var originalSize = $('h1 , a , h2 , h3 , h4 , .breif , .category, button , .copyright , .help-text , .body , .comment-body ,.user-name , .user-date , .editor , .my-info , .activity-history , .title , .value , th , td , li').css('font-size');
    // reset
    $(".reset-fontsize").click(function () {
        $('h1 , a , h2 , h3 , h4 , .breif , .category, button , .copyright , .help-text , .body , .comment-body ,.user-name , .user-date , .editor , .my-info , .activity-history , .title , .value , th , td , li').css('font-size', originalSize);

    });

    // Increase Font Size
    var i = 0;
    $(".dec-fontsize").click(function () {
        var currentSize = $('h1 , a , h2 , h3 , h4 , .breif , .category, button , .copyright , .help-text , .body , .comment-body ,.user-name , .user-date , .editor , .my-info , .activity-history , .title , .value , th , td , li').css('font-size');
        if (i < 3) {
            var currentSize = parseFloat(currentSize) * 1.1;
            $('h1 , a , h2 , h3 , h4 , .breif , .category, button , .copyright , .help-text , .body , .comment-body ,.user-name , .user-date , .editor , .my-info , .activity-history , .title , .value , th , td , li').css('font-size', currentSize);
            i++;
        }
        return false;
    });

    // Decrease Font Size
    var n = 0;
    $(".inc-fontsize").click(function () {
        var currentSize = $('h1 , a , h2 , h3 , h4 , .breif , .category, button , .copyright , .help-text , .body , .comment-body ,.user-name , .user-date , .editor , .my-info , .activity-history , .title , .value , th , td , li').css('font-size');
        if (n < 3) {
            var currentSize = parseFloat(currentSize) * 0.8;
            $('h1 , a , h2 , h3 , h4 , .breif , .category, button , .copyright , .help-text , .body , .comment-body ,.user-name , .user-date , .editor , .my-info , .activity-history , .title , .value , th , td , li').css('font-size', currentSize);
            n++;
        }
        return false;
    });


    /* DatePicker Issue Fixing for DynamicForm */
    window.initSelect2Loading = function (id, optVar) {
        initS2Loading(id, optVar)
    };
    window.initSelect2DropStyle = function (id, kvClose, ev) {
        initS2Loading(id, kvClose, ev)
    };
    $(".dynamicform_wrapper").on('afterInsert', function (e, item) {
        var datePickers = $(this).find('[data-krajee-kvdatepicker]');
        datePickers.each(function (index, el) {
            $(this).parent().removeData().kvDatepicker('initDPRemove');
            $(this).parent().kvDatepicker(eval($(this).attr('data-krajee-kvdatepicker')));
        });
    });
    /* DatePicker Issue Fixing for DynamicForm */


    $("#AdvModal").on("loaded.bs.modal", function () {
        //$(this).find(".modal-body").html("<div class=\"row text-center\"><img src=\"/images/loading.gif\"></div>");
        $(this).removeData("bs.modal");

    });
    $("#AdvModal").on("hidden.bs.modal	", function () {
        $(this).find(".modal-body").html("<div class=\"row text-center\"><img src=\"/images/bx_loader.gif\"></div>");
        //$(this).removeData("bs.modal");

    });

    // process the form
    $("#newsletter-form").submit(function (event) {

        $("#newsletter-form .alert").remove(); // remove the error text

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            "email": $("input[name=email]").val(),
            "full_name": $("input[name=full-name]").val(),
            "city_id": $("#city_id").val(),
            "_csrf": $("input[name=_csrf]").val()

        };

        $("#newsletter-form").children("button").attr("disabled", "disabled");
        var text = $("#newsletter-form").children("button").html();
        $("#newsletter-form").children("button").html("<img src='/images/bx_loader.gif'>");


        // process the form
        $.ajax({
            type: "POST", // define the type of HTTP verb we want to use (POST for our form)
            url: $(this).attr("action"), // the url where we want to POST
            data: formData, // our data object
            dataType: "json", // what type of data do we expect back from the server
            encode: true
        })
                // using the done promise callback
                .done(function (data) {

                    $("#newsletter-form").children("button").removeAttr("disabled");

                    $("#newsletter-form").children("button").html(text);

                    if (!data.success) {


                        // handle errors for email ---------------
                        if (data.errors) {
                            //$('#newsletter-form').addClass('has-error'); // add the error class to show red input
                            $('#newsletter-form').append('<div class="alert alert-danger">' + data.errors + '</div>'); // add the actual error message under our input
                        }


                    } else {

                        // ALL GOOD! just show the success message!
                        $("#newsletter-form").append('<div class="alert alert-success">' + data.message + '</div>');


                    }
                });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
        event.stopImmediatePropagation();
        return false;
    });


});


function submitAjaxForm(form_id, container_id) {
    var f = $("#" + form_id);
    $.ajax({
        url: f.attr("action"),
        type: f.attr("method"),
        enctype: f.attr("enctype"),
        data: f.serialize(),
        success: function (data) {
            // removeLoadingImage(container_id);
            $("#" + container_id).html(data);
        },
        error: function () {

        }
    });
    showLoadingImage(container_id);
}

function showLoadingImage(id) {
    $("#" + id).addClass("relative_position");
    $("#" + id).append("<div class='loader'>&nbsp;</div>");
}


function checkStatus() {
    if ($("#individualinsuranceform-social_status").val() == "Married") {
        jQuery(".dynamicform_wrapper > div").show();
    } else {
        jQuery(".dynamicform_wrapper > div").hide();
    }
}


