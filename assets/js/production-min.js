jQuery(function(e){function t(e){var t=RegExp("[?&]"+e+"=([^&]*)").exec(window.location.search);return t&&decodeURIComponent(t[1].replace(/\+/g," "))}if(e("body.page-template-template-practice").length&&e(".page-header").click(function(){e("html, body").animate({scrollTop:0},"fast")}),e(".nav-toggle-button").click(function(){e(this).parent().toggleClass("open")}),e(".slides_holder").slick({prevArrow:"#slick_arrow_left",nextArrow:"#slick_arrow_right",adaptiveHeight:!0,infinite:!1,dots:!0}),e(".link_to_section").click(function(){var t="#"+e(this).attr("data-target");e("html,body").animate({scrollTop:e(t).offset().top})}),e(".page-template-template-practice").length&&e(window).on("load resize scroll",function(t){var o=e(".step_panel").offset().top-10,a=e(window).scrollTop();a>o?e("#secondary").addClass("showme"):(e("#secondary").removeClass("showme"),e(".step_panel").removeClass("active")),e(".step_panel").each(function(){var t=e(this).offset().top-10;a>t&&(e(".step_panel").removeClass("active"),e(this).addClass("active"))})}),e(".open_modal").click(function(){e(this).next(".modal").show(),e("body").addClass("modal_open")}),e(".close-modal").click(function(){e(".modal").hide(),e("body").removeClass("modal_open")}),e(".open-bp-overview").click(function(){e(".grid-overlay").addClass("open")}),e(".close-overlay").click(function(){e(".grid-overlay").removeClass("open")}),document.URL.indexOf("bw=1")!==-1&&e(".page-wrapper").removeClass("scene_element--fadeinright").addClass("scene_element--fadeinleft"),e("body.page-template-template-contact").length&&e("#headerform").validate(),document.URL.indexOf("key=")!==-1&&e(".signup_form_thanks").show(),e(".breadcrumb").toggle(document.URL.indexOf("principle=")!==-1),document.URL.indexOf("principle=")!==-1){var o="/"+t("principle");e(".breadcrumb a").attr("href",o)}setTimeout(function(){e(".page-wrapper").removeClass("scene_element--fadeinright").removeClass("scene_element--fadeinleft")},3e3)});