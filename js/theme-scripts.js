/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Main Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */

String.prototype.lpad = function(padString, length) {
    var str = this;
    while (str.length < length)
        str = padString + str;
    return str;
}

tjq.fn.removeClassPrefix = function(prefix) {
    this.each(function(i, el) {
        var classes = el.className.split(" ").filter(function(c) {
            return c.lastIndexOf(prefix, 0) !== 0;
        });
        el.className = classes.join(" ");
    });
    return this;
};

// middle block plugin(set image in the middle of its parent object)
;(function(window, document, $) {
    var middleblock;
    var prototype = $.fn;
    middleblock = prototype.middleblock = function() {
        var $this = this;
        if ($(this).is(":visible")) {
            $this.bind("set.middleblock", set_middle_block).trigger('set.middleblock');
        }
        return $this;
    };

    function set_middle_block(event, value) {
        var $this = $(this);
        var $middleItem = $this.find(".middle-item");
        if ($middleItem.length < 1) {
            $middleItem = $this.children("img");
        }
        if ($middleItem.length < 1) {
            return;
        }
        var width = $middleItem.width();
        var height = $middleItem.height();
        if ($this.width() <= 1) {
            var parentObj = $this;
            while (parentObj.width() <= 1) {
                parentObj = parentObj.parent();
            }
            $this.css("width", parentObj.width() + "px");
        }
        $this.css("position", "relative");
        $middleItem.css("position", "absolute");

        if ($this.hasClass("middle-block-auto-height")) {
            $this.removeClass("middle-block-auto-height");
            $this.height(0);
        }
        if ($this.height() <= 1) {
            var parentObj = $this;
            while (parentObj.height() <= 1) {
                if (parentObj.css("float") =="left" && parentObj.index() == 0 && parentObj.next().length > 0) {
                    parentObj = parentObj.next();
                } else if (parentObj.css("float") == "left" && parentObj.index() > 0) {
                    parentObj = parentObj.prev();
                } else {
                    parentObj = parentObj.parent();
                }
            }
            $this.css("height", parentObj.outerHeight() + "px");
            $this.addClass("middle-block-auto-height");

            width = $middleItem.width();
            height = $middleItem.height();
            if (height <= 1) {
                height = parentObj.outerHeight();
            }
        }
        $middleItem.css("top", "50%");
        $middleItem.css("margin-top", "-" + (height / 2) + "px");
        if (width >= 1) {
            /*if ($this.width() == width) {
                $this.width(width);
            }*/
            $middleItem.css("left", "50%");
            $middleItem.css("margin-left", "-" + (width / 2) + "px");
        } else {
            $middleItem.css("left", "0");
        }
    }
}(this, document, jQuery));

/* jQuery CounTo plugin */
(function(a){a.fn.countTo=function(g){g=g||{};return a(this).each(function(){function e(a){a=b.formatter.call(h,a,b);f.html(a)}var b=a.extend({},a.fn.countTo.defaults,{from:a(this).data("from"),to:a(this).data("to"),speed:a(this).data("speed"),refreshInterval:a(this).data("refresh-interval"),decimals:a(this).data("decimals")},g),j=Math.ceil(b.speed/b.refreshInterval),l=(b.to-b.from)/j,h=this,f=a(this),k=0,c=b.from,d=f.data("countTo")||{};f.data("countTo",d);d.interval&&clearInterval(d.interval);d.interval=
setInterval(function(){c+=l;k++;e(c);"function"==typeof b.onUpdate&&b.onUpdate.call(h,c);k>=j&&(f.removeData("countTo"),clearInterval(d.interval),c=b.to,"function"==typeof b.onComplete&&b.onComplete.call(h,c))},b.refreshInterval);e(c)})};a.fn.countTo.defaults={from:0,to:0,speed:1E3,refreshInterval:100,decimals:0,formatter:function(a,e){return a.toFixed(e.decimals)},onUpdate:null,onComplete:null}})(jQuery);

if (typeof enableChaser == "undefined") {
    enableChaser = 1 // Enable Chaser menu (open on scroll) ?   1 - Yes / 0 - No
}

/* on stage plugin */
;(function(window, document, $) {
    var onstage;
    var prototype = $.fn;
    onstage = prototype.onstage = function() {
        var scrollTop = tjq(window).scrollTop();
        var windowHeight = tjq(window).height();
        var $this = this;
        if ($this.offset().top + $this.height() * 0.9 <= scrollTop + windowHeight && $this.offset().top + $this.height() * 0.9 > scrollTop) {
            return true;
        }
        return false;
    };
}(this, document, jQuery));

/*if(enableChaser == 1) {
    tjq(window).load(function() {
        
    });
}*/

/* disable click before loading page */
tjq("body").on("click", "a.popup-gallery", function(e) {
    e.preventDefault();
    return false;
});

function changeTraveloElementUI() {
    // change UI of select box
    tjq(".selector select").each(function() {
        var obj = tjq(this);
        if (obj.parent().children(".custom-select").length < 1) {
            obj.after("<span class='custom-select'>" + obj.children("option:selected").html() + "</span>");
            
            if (obj.hasClass("white-bg")) {
                obj.next("span.custom-select").addClass("white-bg");
            }
            if (obj.hasClass("full-width")) {
                //obj.removeClass("full-width");
                //obj.css("width", obj.parent().width() + "px");
                //obj.next("span.custom-select").css("width", obj.parent().width() + "px");
                obj.next("span.custom-select").addClass("full-width");
            }
        }
    });
    tjq("body").on("change", ".selector select", function() {
        if (tjq(this).next("span.custom-select").length > 0) {
            tjq(this).next("span.custom-select").text(tjq(this).children("option:selected").text());
        }
    });
    
    tjq("body").on("keydown", ".selector select", function() {
        if (tjq(this).next("span.custom-select").length > 0) {
            tjq(this).next("span.custom-select").text(tjq(this).children("option:selected").text());
        }
    });

    // change UI of file input
    tjq(".fileinput input[type=file]").each(function() {
        var obj = tjq(this);
        if (obj.parent().children(".custom-fileinput").length < 1) {
            obj.after('<input type="text" class="custom-fileinput" />');
            if (typeof obj.data("placeholder") != "undefined") {
                obj.next(".custom-fileinput").attr("placeholder", obj.data("placeholder"));
            }
            if (typeof obj.prop("class") != "undefined") {
                obj.next(".custom-fileinput").addClass(obj.prop("class"));
            }
            obj.parent().css("line-height", obj.outerHeight() + "px");
        }
    });

    tjq(".fileinput input[type=file]").on("change", function() {
        var fileName = this.value;
        var slashIndex = fileName.lastIndexOf("\\");
        if (slashIndex == -1) {
            slashIndex = fileName.lastIndexOf("/");
        }
        if (slashIndex != -1) {
            fileName = fileName.substring(slashIndex + 1);
        }
        tjq(this).next(".custom-fileinput").val(fileName);
    });
    // checkbox
    tjq(".checkbox input[type='checkbox'], .radio input[type='radio']").each(function() {
        if (tjq(this).is(":checked")) {
            tjq(this).closest(".checkbox").addClass("checked");
            tjq(this).closest(".radio").addClass("checked");
        }
    });
    tjq(".checkbox input[type='checkbox']").bind("change", function() {
        if (tjq(this).is(":checked")) {
            tjq(this).closest(".checkbox").addClass("checked");
        } else {
            tjq(this).closest(".checkbox").removeClass("checked");
        }
    });
    //radio
    tjq(".radio input[type='radio']").bind("change", function(event, ui) {
        if (tjq(this).is(":checked")) {
            var name = tjq(this).prop("name");
            if (typeof name != "undefined") {
                tjq(".radio input[name='" + name + "']").closest('.radio').removeClass("checked");
            }
            tjq(this).closest(".radio").addClass("checked");
        }
    });

    // datepicker
    tjq('.datepicker-wrap input').datepicker({
        showOn: 'button',
        buttonImage: 'images/icon/blank.png',
        buttonText: '',
        buttonImageOnly: true,
        /*showOtherMonths: true,*/
        minDate: 0,
        dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
        beforeShow: function(input, inst) {
            var themeClass = tjq(input).parent().attr("class").replace("datepicker-wrap", "");
            tjq('#ui-datepicker-div').attr("class", "");
            tjq('#ui-datepicker-div').addClass("ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all");
            tjq('#ui-datepicker-div').addClass(themeClass);
        }
    });
    
    // placeholder for ie8, 9
    try {
        tjq('input, textarea').placeholder();
    } catch (e) {}
}

tjq(document).ready(function() {
    changeTraveloElementUI();
});

/* display photo gallery */
function displayPhotoGallery($item) {
    if (!tjq.fn.flexslider || $item.length < 1 || $item.is(":hidden")) {
        return;
    }
    var dataAnimation = $item.data("animation");
    var dataSync = $item.data("sync");
    if (typeof dataAnimation == "undefined") {
        dataAnimation = "slide";
    }
    var dataFixPos = $item.data("fix-control-nav-pos");
    
    $item.flexslider({
        animation: dataAnimation,
        controlNav: true,
        animationLoop: true,
        slideshow: true,
        pauseOnHover: true,
        sync: dataSync,
        start: function(slider) {
            if (typeof dataFixPos != "undefined" && dataFixPos == "1") {
                var height = tjq(slider).find(".slides img").height();
                tjq(slider).find(".flex-control-nav").css("top", (height - 44) + "px");
            }
        },
    });
}

/* display image carousel */
function displayImageCarousel($item) {
    if (!tjq.fn.flexslider || $item.length < 1 || $item.is(":hidden")) {
        return;
    }
    var dataAnimation = $item.data("animation");
    var dataItemWidth = $item.data("item-width");
    var dataItemMargin = $item.data("item-margin");
    var dataSync = $item.data("sync");
    if (typeof dataAnimation == "undefined") {
        dataAnimation = "slide";
    }
    if (typeof dataItemWidth == "undefined") {
        dataItemWidth = 70;
    }
    if (typeof dataItemMargin == "undefined") {
        dataItemMargin = 10;
    }
    dataItemWidth = parseInt(dataItemWidth, 10);
    dataItemMargin = parseInt(dataItemMargin, 10);

    var dataAnimationLoop = true;
    var dataSlideshow = false;
    if (typeof dataSync == "undefined") {
        dataSync = "";
        //dataAnimationLoop = true;
        dataSlideshow = true;
    }
    $item.flexslider({
        animation: dataAnimation,
        controlNav: true,
        animationLoop: dataAnimationLoop,
        slideshow: dataSlideshow,
        itemWidth: dataItemWidth,
        itemMargin: dataItemMargin,
        minItems: 2,
        pauseOnHover: true,
        asNavFor: dataSync,
        start: function(slider) {
            if (dataSync != "") {
                tjq(slider).find(".slides > li").height(dataItemWidth);
                tjq(slider).find(".slides > li > img").each(function() {
                    if(tjq(this).width() < 1) {
                        tjq(this).load(function() {
                            tjq(this).parent().middleblock();
                        });
                    } else {
                        tjq(this).parent().middleblock();
                    }
                });
            } else {
                tjq(slider).find(".middle-block img, .middle-block .middle-item").each(function() {
                    if(tjq(this).width() < 1) {
                        tjq(this).load(function() {
                            tjq(this).closest(".middle-block").middleblock();
                        });
                    } else {
                        tjq(this).closest(".middle-block").middleblock();
                    }
                });
            }
        },
        after: function(slider) {
            if (slider.currentItem == 0) {
                target = 0;
                if (slider.transitions) {
                    target = (slider.vars.direction === "vertical") ? "translate3d(0," + target + ",0)" : "translate3d(" + target + ",0,0)";
                    slider.container.css("-" + slider.pfx + "-transition-duration", "0s");
                    slider.container.css("transition-duration", "0s");
                }
                slider.args[slider.prop] = target;
                slider.container.css(slider.args);
                slider.container.css('transform',target);
            }
        }

    });
}

tjq(window).load(function() {

    // back to top
    tjq("body").on("click", "#back-to-top", function(e) {
        e.preventDefault();
        tjq("html,body").animate({scrollTop: 0}, 1000);
    });
    
    // Mobile search
    if (tjq('#mobile-search-tabs').length > 0) {
        var mobile_search_tabs_slider = tjq('#mobile-search-tabs').bxSlider({
            mode: 'fade',
            infiniteLoop: false,
            hideControlOnEnd: true,
            touchEnabled: true,
            pager: false,
            onSlideAfter: function($slideElement, oldIndex, newIndex) {
                tjq('a[href="' + tjq($slideElement).children("a").attr("href") + '"]').tab('show');
            }
        });
    }
    
    // Mobile menu
    tjq(".mobile-menu ul.menu > li.menu-item-has-children").each(function(index) {
        var menuItemId = "mobile-menu-submenu-item-" + index;
        tjq('<button class="dropdown-toggle collapsed" data-toggle="collapse" data-target="#' + menuItemId + '"></button>').insertAfter(tjq(this).children("a"));
        /*tjq(this).children(".dropdown-toggle").click(function(e) {
            if (tjq(this).hasClass("collapsed")) {
                tjq(this).parent().addClass("open");
            } else {
                tjq(this).parent().removeClass("open");
            }
        });*/
        tjq(this).children("ul").prop("id", menuItemId);
        tjq(this).children("ul").addClass("collapse");

        tjq("#" + menuItemId).on("show.bs.collapse", function() {
            tjq(this).parent().addClass("open");
        });
        tjq("#" + menuItemId).on("hidden.bs.collapse", function() {
            tjq(this).parent().removeClass("open");
        });
    });

    // middle block
    tjq(".middle-block").middleblock();

    // third level menu position to left
    function fixPositionSubmenu() {
        tjq("#main-menu .menu li.menu-item-has-children > ul, .ribbon ul.menu.mini").each(function(e) {
            if (tjq(this).closest(".megamenu").length > 0) {
                return;
            }
            var leftPos = tjq(this).parent().offset().left + tjq(this).parent().width();
            if (leftPos + tjq(this).width() > tjq("body").width()) {
                tjq(this).addClass("left");
            } else {
                tjq(this).removeClass("left");
            }
        });
    }
    fixPositionSubmenu();
    
    // chaser
    if (enableChaser == 1 && tjq('#content').length > 0 && tjq('#main-menu ul.menu').length > 0) {
        var forchBottom;
        var chaser = tjq('#main-menu ul.menu').clone().hide().appendTo(document.body).wrap("<div class='chaser hidden-mobile'><div class='container'></div></div>");
        tjq('<h1 class="logo navbar-brand"><a title="Travelo - home" href="index.html"><img alt="" src="images/logo.png"></a></h1>').insertBefore('.chaser .menu');
        var forch = tjq('#content').first();
        forchBottom = forch.offset().top + 2;
        tjq(window).on('scroll', function () {
            var top = tjq(document).scrollTop();
            if (tjq(".chaser").is(":hidden") && top > forchBottom) {
                tjq(".chaser").slideDown(300);
                //chaser.fadeIn(300, shown);
            } else if (tjq(".chaser").is(":visible") && top < forchBottom) {
                tjq(".chaser").slideUp(200);
                //chaser.fadeOut(200, hidden);
            }
        });
        tjq(window).on('resize', function () {
            var top = tjq(document).scrollTop();
            if (tjq(".chaser").is(":hidden") && top > forchBottom) {
                tjq(".chaser").slideDown(300);
            } else if (tjq(".chaser").is(":visible") && top < forchBottom) {
                tjq(".chaser").slideUp(200);
            }
        });
        
        tjq(".chaser").css("visibility", "hidden");
        chaser.show();
        fixPositionMegaMenu(".chaser");
        tjq(".chaser .megamenu-menu").removeClass("light");
        //chaser.hide();
        tjq(".chaser").hide();
        tjq(".chaser").css("visibility", "visible");
    }
    
    // accordion & toggles
    tjq(".toggle-container .panel-collapse").each(function() {
        if (!tjq(this).hasClass("in")) {
            tjq(this).closest(".panel").find("[data-toggle=collapse]").addClass("collapsed");
        }
    });
    
    tjq(".toggle-container.with-image").each(function() {
        var type = "";
        var duration = "1s";
        if (typeof tjq(this).data("image-animation-type") != "undefined") {
            type = tjq(this).data("image-animation-type");
        }
        if (typeof tjq(this).data("image-animation-duration") != "undefined") {
            duration = tjq(this).data("image-animation-duration");
        }
        var imageHtml = '<div class="image-container';
        if (type != "") {
            imageHtml += ' animated" data-animation-type="' + type + '" data-animation-duration="' + duration;
        }
        imageHtml += '"><img src="" alt="" /></div>';
        tjq(this).prepend(imageHtml);
        if (tjq(this).find(".panel-collapse.in").length > 0) {
            var activeImg = tjq(this).find(".panel-collapse.in").parent().children("img");
            var src = activeImg.attr("src");
            var width = activeImg.attr("width");
            var height = activeImg.attr("height");
            var alt = activeImg.attr("alt");
            
            var imgObj = tjq(this).find(".image-container img");
            imgObj.attr("src", src);
            if (typeof width != "undefined") {
                imgObj.attr("width", width);
            }
            if (typeof height != "undefined") {
                imgObj.attr("height", height);
            }
            if (typeof alt != "undefined") {
                imgObj.attr("alt", alt);
            }
            tjq(this).children(".image-container").show();
        }
    });
    
    tjq('.toggle-container.with-image').on('show.bs.collapse', function (e) {
        var activeImg = tjq(e.target).parent().children("img");
        if (activeImg.length > 0) {
            var src = activeImg.attr("src");
            var width = activeImg.attr("width");
            var height = activeImg.attr("height");
            var alt = activeImg.attr("alt");
            
            var imgObj = tjq(this).find(".image-container img");
            imgObj.attr("src", src);
            if (typeof width != "undefined") {
                imgObj.attr("width", width);
            }
            if (typeof height != "undefined") {
                imgObj.attr("height", height);
            }
            if (typeof alt != "undefined") {
                imgObj.attr("alt", alt);
            }
            
            imgObj.parent().css("visibility", "hidden");
            imgObj.parent().removeClass(imgObj.parent().data("animation-type"));
            setTimeout(function() {
                imgObj.parent().addClass(imgObj.parent().data("animation-type"));
                imgObj.parent().css("visibility", "visible");
            }, 10);
        }
    });
    
    tjq('.toggle-container.with-image').on('shown.bs.collapse', function (e) {
        //e.target
    });

    // alert, info box
    tjq("body").on("click", ".alert > .close, .info-box > .close", function() {
        tjq(this).parent().fadeOut(300);
    });
    
    // tooltip
    tjq("[data-toggle=tooltip]").tooltip();
    
    // testimonials
    function fixTestimonialHeight(slider) {
        var maxHeight = 0;
        tjq(slider).find(".slides > li").each(function() {
            tjq(this).css("height", "auto");
            if (tjq(this).height() > maxHeight) {
                maxHeight = tjq(this).height();
            }
        });
        tjq(slider).find(".slides > li").height(maxHeight);
    }
    function displayTestimonials() {
        try {
            if (tjq('.testimonial.style1').length > 0 && tjq('.testimonial.style1').is(":visible")) {
                tjq('.testimonial.style1').flexslider({
                    namespace: "testimonial-",
                    animation: "slide",
                    controlNav: true,
                    animationLoop: false,
                    directionNav: false,
                    slideshow: false,
                    start: fixTestimonialHeight
                });
            }
        } catch (e) {}
        try {
            if (tjq('.testimonial.style2').length > 0 && tjq('.testimonial.style2').is(":visible")) {
                tjq('.testimonial.style2').flexslider({
                    namespace: "testimonial-",
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    directionNav: true,
                    slideshow: false,
                    start: fixTestimonialHeight
                });
            }
        } catch (e) {}
        try {
            if (tjq('.testimonial.style3').length > 0 && tjq('.testimonial.style3').is(":visible")) {
                tjq('.testimonial.style3').flexslider({
                    namespace: "testimonial-",
                    controlNav: false,
                    animationLoop: false,
                    directionNav: true,
                    slideshow: false,
                    start: fixTestimonialHeight
                });
            }
        } catch (e) {}
    }
    displayTestimonials();
    
    /* photo gallery and slideshow */
    // photo gallery with thumbnail
    tjq('.image-carousel').each(function() {
        displayImageCarousel(tjq(this));
    });
    tjq('.photo-gallery').each(function() {
        displayPhotoGallery(tjq(this));
    });

    tjq('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var contentId = tjq(e.target).attr("href");
        if (tjq(contentId).find(".image-carousel").length > 0) {
            displayImageCarousel(tjq(contentId).find(".image-carousel"));
        }
        if (tjq(contentId).find(".photo-gallery").length > 0) {
            displayPhotoGallery(tjq(contentId).find(".photo-gallery"));
        }
        if (tjq(contentId).find(".testimonial").length > 0) {
            displayTestimonials();
        }
        tjq(contentId).find(".middle-block").middleblock();
    });

    // popup
    tjq(document).bind('keydown', function (e) {
        var key = e.keyCode;
        if (tjq(".opacity-overlay:visible").length > 0 && key === 27) {
            e.preventDefault();
            tjq(".opacity-overlay").fadeOut();
        }
    });
    
    tjq(document).on("click", ".opacity-overlay", function(e) {
        if (!tjq(e.target).is(".opacity-overlay .popup-content *")) {
            tjq(".opacity-overlay").fadeOut();
        }
    });
    
    tjq("body").on("click", "a.popup-gallery", function(e) {
        e.preventDefault();
        if (tjq("#soap-gallery-popup").length < 1) {
            tjq("<div class='opacity-overlay' id='soap-gallery-popup'><div class='container'><div class='popup-wrapper'><i class='fa fa-spinner fa-spin spinner'></i><div class='col-xs-12 col-sm-9 popup-content'></div></div></div></div>").appendTo("body");
        }
        tjq("#soap-gallery-popup .popup-content").html('');
        tjq("#soap-gallery-popup .popup-content").height('auto').css("visibility", "hidden");
        tjq("#soap-gallery-popup").fadeIn();
        tjq("#soap-gallery-popup .spinner").show();
        var obj = tjq(this);
        tjq.ajax({
            url: obj.attr("href"),
            type: 'post',
            dataType: 'html',
            success: function(html) {
                tjq("#soap-gallery-popup .popup-content").html(html);
                if (tjq('#soap-gallery-popup .image-carousel').length > 0) {
                    displayImageCarousel(tjq('#soap-gallery-popup .image-carousel'));
                }
                if (tjq('#soap-gallery-popup .photo-gallery').length > 0) {
                    displayPhotoGallery(tjq('#soap-gallery-popup .photo-gallery'));
                    setTimeout(function() {
                        tjq("#soap-gallery-popup .popup-content").css("visibility", "visible");
                        tjq("#soap-gallery-popup .spinner").hide();
                    }, 100);
                }
            }
        });
    });
    
    tjq("body").on("click", ".popup-map", function(e) {
        var lngltd = tjq(this).data("box");
        if (typeof lngltd != "undefined") {
            e.preventDefault();
            if (tjq("#soap-map-popup").length < 1) {
                tjq("<div class='opacity-overlay' id='soap-map-popup'><div class='container'><div class='popup-wrapper'><i class='fa fa-spinner fa-spin spinner'></i><div class='col-xs-12 col-sm-9 popup-content'></div></div></div></div>").appendTo("body");
            }
            tjq("#soap-map-popup").fadeIn();
            tjq("#soap-map-popup .spinner").show();
            
            lngltd = lngltd.split(",");
            var contentWidth = tjq("#soap-map-popup .popup-content").width()
            
            tjq("#soap-map-popup .popup-content").gmap3({
                clear: {
                    name: "marker",
                    last: true
                }
            });
            tjq("#soap-map-popup .popup-content").height(contentWidth * 0.5).gmap3({
                map: {
                    options: {
                        center: lngltd,
                        zoom: 12
                    }
                },
                marker: {
                    values: [
                        {latLng: lngltd}

                    ],
                    options: {
                        draggable: false
                    },
                }
            });
        }
    });
    
    tjq("body").on("click", ".soap-popupbox", function(e) {
        e.preventDefault();
        var sourceId = tjq(this).attr("href");
        if (typeof sourceId == "undefined") {
            sourceId = tjq(this).data("target");
        }
        if (typeof sourceId == "undefined") {
            return;
        }
        if (tjq(sourceId).length < 1) {
            return;
        }
        if (tjq("#soap-popupbox").length < 1) {
            tjq("<div class='opacity-overlay' id='soap-popupbox' tabindex='-1'><div class='container'><div class='popup-wrapper'><div class='popup-content'></div></div></div></div>").appendTo("body");
        }
        tjq("#soap-popupbox .popup-content").children().hide();
        if (tjq("#soap-popupbox .popup-content").children(sourceId).length > 0) {
            // ignore
        } else {
            tjq(sourceId).appendTo(tjq("#soap-popupbox .popup-content"));
        }
        tjq(sourceId).show();
        tjq("#soap-popupbox").fadeIn(function() {
            tjq(sourceId).find(".input-text").eq(0).focus();
        });
    });

    // style changer
    tjq(".style-changer .design-skins a").click(function(e) {
        e.preventDefault();
        tjq(this).closest("ul").children("li").removeClass("active");
        tjq(this).parent().addClass("active");
    });
    tjq("#style-changer .style-toggle").click(function(e) {
        e.preventDefault();
        if (tjq(this).hasClass("open")) {
            tjq("#style-changer").css("left", "0");
            tjq(this).removeClass("open");
            tjq(this).addClass("close");
        } else {
            tjq("#style-changer").css("left", "-275px");
            tjq(this).removeClass("close");
            tjq(this).addClass("open");
        }
    });
    
    // filters option
    tjq(".filters-container .filters-option a").click(function(e) {
        e.preventDefault();
        if (tjq(this).parent().hasClass("active")) {
            tjq(this).parent().removeClass("active");
        } else {
            tjq(this).parent().addClass("active");
        }
    });
    
    // sort of trip
    tjq(".sort-trip a").click(function(e) {
        e.preventDefault();
        tjq(this).parent().parent().children().removeClass("active");
        tjq(this).parent().addClass("active");
    });
    
    // redirect to the location
    tjq(".location-reload").click(function(e) {
        e.preventDefault();
        var url = tjq(this).prop("href").split("#")[0];
        if (window.location.href.indexOf(url) != -1) {
            var hash = tjq(this).prop("href").split("#")[1];
            if (typeof hash != "undefined" && hash != "" && tjq("a[href='#" + hash + "']").length > 0) {
                tjq("a[href='#" + hash + "']").tab('show');
            }
        } else {
            window.location.href = tjq(this).prop("href");
        }
    });

    // promo box
    function fixPromoBoxHeight() {
        tjq(".promo-box").each(function() {
            if (tjq(this).find(".content-section").css("float") == "right") {
                var maxHeight = tjq(this).find(".image-container > img").height();
                tjq(this).find(".content-section .table-wrapper").css("height", "auto");
                var calcPaddingTop = tjq(".content-section").css("padding-top");
                var calcPaddingBottom = tjq(".content-section").css("padding-bottom");
                var calcPadding = 0;
                try {
                    calcPadding = parseInt(calcPaddingTop, 10) + parseInt(calcPaddingBottom, 10);
                } catch (e) {  }
                var contentHeight = tjq(this).find(".content-section >.table-wrapper").length > 0 ? tjq(this).find(".content-section > .table-wrapper").height() + calcPadding : tjq(this).find(".content-section").innerHeight();
                if (maxHeight < contentHeight) {
                    maxHeight = contentHeight;
                } else {
                    maxHeight += 15;
                }
                tjq(this).find(".image-container").height(maxHeight);
                tjq(this).find(".content-section").innerHeight(maxHeight);
                tjq(this).find(".content-section .table-wrapper").css("height", "100%");
                tjq(this).find(".image-container").css("margin-left", "-5%");
                tjq(this).find(".image-container").css("position", "relative");
                tjq(this).find(".image-container > img").css("position", "absolute");
                tjq(this).find(".image-container > img").css("bottom", "0");
                tjq(this).find(".image-container > img").css("left", "0");
            } else {
                tjq(this).find(".image-container").css("height", "auto");
                tjq(this).find(".image-container").css("margin", "0");
                tjq(this).find(".content-section").css("height", "auto");
                tjq(this).find(".image-container > img").css("position", "static");
            }
            if (!tjq(this).find(".image-container > img").hasClass("animated")) {
                tjq(this).find(".image-container > img").css("visibility", "visible");
            }
        });
    }
    fixPromoBoxHeight();

    // fit video
    if (tjq.fn.fitVids) {
        tjq('.full-video').fitVids();
    }

    // go back
    tjq(".go-back").click(function(e) {
        e.preventDefault();
        window.history.go(-1);
    });

    // activate tab
    if (window.location.hash != "" && tjq('a[href="' + window.location.hash + '"]').length > 0) {
        setTimeout(function() {
            tjq('a[href="' + window.location.hash + '"]').tab('show');
        }, 100);
    }

    // parallax
    if(tjq(".parallax").length > 0) {
        tjq.stellar({
            responsive: true,
            horizontalScrolling: false
        });
    }

    if(tjq().waypoint) {
        // animation effect
        tjq('.animated').waypoint(function() {
            var type = tjq(this).data("animation-type");
            if (typeof type == "undefined" || type == false) {
                type = "fadeIn";
            }
            tjq(this).addClass(type);
            
            var duration = tjq(this).data("animation-duration");
            if (typeof duration == "undefined" || duration == false) {
                duration = "1";
            }
            tjq(this).css("animation-duration", duration + "s");
            
            var delay = tjq(this).data("animation-delay");
            if (typeof delay != "undefined" && delay != false) {
                tjq(this).css("animation-delay", delay + "s");
            }
            
            tjq(this).css("visibility", "visible");

            setTimeout(function() { tjq.waypoints('refresh'); }, 1000);
        }, {
            triggerOnce: true,
            offset: 'bottom-in-view'
        });

        // display counter
        tjq('.counters-box').waypoint(function() {
            tjq('.display-counter').each(function() {
                var value = tjq(this).data('value');
                tjq(this).countTo({from: 0, to: value, speed: 3000, refreshInterval: 10});
            });
            setTimeout(function() { tjq.waypoints('refresh'); }, 1000);
        }, {
            triggerOnce: true,
            offset: '100%'
        });
    }

    // mobile top nav(language and currency)
    tjq("body").on("click", function(e) {
        var target = tjq(e.target);
        if (!target.is(".mobile-topnav .ribbon.opened *")) {
            tjq(".mobile-topnav .ribbon.opened > .menu").toggle();
            tjq(".mobile-topnav .ribbon.opened").removeClass("opened");
        }
    });
    tjq(".mobile-topnav .ribbon > a").on("click", function(e) {
        e.preventDefault();
        if (tjq(".mobile-topnav .ribbon.opened").length > 0 && !tjq(this).parent().hasClass("opened")) {
            tjq(".mobile-topnav .ribbon.opened > .menu").toggle();
            tjq(".mobile-topnav .ribbon.opened").removeClass("opened");
        }
        tjq(this).parent().toggleClass("opened");
        tjq(this).parent().children(".menu").toggle(200);
        if (tjq(this).parent().hasClass("opened") && tjq(this).parent().children(".menu").offset().left + tjq(this).parent().children(".menu").width() > tjq("body").width()) {
            var offsetX = tjq(this).parent().children(".menu").offset().left + tjq(this).parent().children(".menu").width() - tjq("body").width();
            offsetX = tjq(this).parent().children(".menu").position().left - offsetX - 1;
            tjq(this).parent().children(".menu").css("left", offsetX + "px");
        } else {
            tjq(this).parent().children(".menu").css("left", "0");
        }
    });

    // fix position in resize
    tjq(window).resize(function() {
        tjq(".middle-block").middleblock();
        fixPositionMegaMenu();
        fixPositionSubmenu();
        fixPromoBoxHeight();
        fixTestimonialHeight('.testimonial');
        // fix slider position of gallery slideshow style2
        if (tjq(".photo-gallery.style2").length > 0) {
            tjq(".photo-gallery.style2").each(function() {
                var height = tjq(this).find(".slides img").height();
                tjq(this).find(".flex-control-nav").css("top", (height - 44) + "px");
            });
        }
    });
});

// mega menu
var megamenu_items_per_column = 6;
function fixPositionMegaMenu(parentObj) {
    if (typeof parentObj == "undefined") {
        parentObj = "";
    } else {
        parentObj += " ";
    }
    tjq(parentObj + ".megamenu-menu").each(function() {
        var paddingLeftStr = tjq(this).closest(".container").css("padding-left");
        var paddingLeft = parseInt(paddingLeftStr, 10);
        var offsetX = tjq(this).offset().left - tjq(this).closest(".container").offset().left - paddingLeft;
        if (offsetX == 0) { return; }
        tjq(this).children(".megamenu-wrapper").css("left", "-" + offsetX + "px");
        tjq(this).children(".megamenu-wrapper").css("width", tjq(this).closest(".container").width() + "px");
        if (typeof tjq(this).children(".megamenu-wrapper").data("items-per-column") != "undefined") {
            megamenu_items_per_column = parseInt(tjq(this).children(".megamenu-wrapper").data("items-per-column"), 10);
        }
        //tjq(this).children(".megamenu-wrapper").show();
        var columns_arr = new Array();
        var sum_columns = 0;
        tjq(this).find(".megamenu > li").each(function() {
            var each_columns = Math.ceil(tjq(this).find("li > a").length / megamenu_items_per_column);
            if (each_columns == 0) {
                each_columns = 1;
            }
            columns_arr.push(each_columns);
            sum_columns += each_columns;
        });
        tjq(this).find(".megamenu > li").each(function(index) {
            tjq(this).css("width", (columns_arr[index] / sum_columns * 100) + "%");
            tjq(this).addClass("megamenu-columns-" + columns_arr[index]);
        });

        tjq(this).find(".megamenu > li.menu-item-has-children").each(function(index) {
            if (tjq(this).children(".sub-menu").length < 1) {
                tjq(this).append("<ul class='sub-menu'></ul>");
                for (var j = 0; j < columns_arr[index]; j++) {
                    tjq(this).children(".sub-menu").append("<li><ul></ul></li>")
                }
                var lastIndex = tjq(this).children("ul").eq(0).children("li").length - 1;
                tjq(this).children("ul").eq(0).children("li").each(function(i) {
                    var parentIndex = Math.floor(i / megamenu_items_per_column);
                    tjq(this).closest("li.menu-item-has-children").children(".sub-menu").children("li").eq(parentIndex).children("ul").append(tjq(this).clone());
                    if (i == lastIndex) {
                        tjq(this).closest(".menu-item-has-children").children("ul").eq(0).remove();
                    }
                });
            }
        });
        tjq(this).children(".megamenu-wrapper").show();
    });
}
fixPositionMegaMenu();

// menu position to top
tjq("#footer #main-menu .menu >  li.menu-item-has-children").each(function(e) {
    var height = tjq(this).children("ul, .megamenu-wrapper").height();
    tjq(this).children("ul, .megamenu-wrapper").css("top", "-" + height + "px");
});

// login box
tjq("body").on("click", ".travelo-signup-box .signup-email", function(e) {
    e.preventDefault();
    tjq(this).closest(".travelo-signup-box").find(".simple-signup").hide();
    tjq(this).closest(".travelo-signup-box").find(".email-signup").show();
    tjq(this).closest(".travelo-signup-box").find(".email-signup").find(".input-text").eq(0).focus();
});

// THIS SCRIPT DETECTS THE ACTIVE ELEMENT AND ADDS ACTIVE CLASS (This should be removed in the php version.)
tjq(document).ready(function(){
    var pathname = window.location.pathname,
        page = pathname.split(/[/ ]+/).pop(),
        menuItems = tjq('#main-menu a, #mobile-primary-menu a');
    menuItems.each(function(){
        var mi = tjq(this),
            miHrefs = mi.attr("href"),
            miParents = mi.parents('li');
        if(page == miHrefs) {
            miParents.addClass("active").siblings().removeClass('active');
        }
    });
});