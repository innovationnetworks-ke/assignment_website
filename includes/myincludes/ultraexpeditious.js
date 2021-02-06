function openCity(t, e) {
    var o, n, a;
    for (n = document.getElementsByClassName("tabcontent"), o = 0; o < n.length; o++) n[o].style.opacity = "0";
    for (a = document.getElementsByClassName("tablinks"), o = 0; o < a.length; o++) a[o].className = a[o].className.replace(" active", "");
    document.getElementById(e).style.opacity = "1", t.currentTarget.className += " active"
}
$(function () {
        $(".lazyload").Lazy()
    }),
    function (t) {
        "use strict";
        t(".navbar-toggle").on("click", function (e) {
                t(this).toggleClass("open"), t("#navigation").slideToggle(400)
            }),
            //			
            //			t(".navigation-menu>li").slice(-1).addClass("last-elements"), t(".navigation-menu a").each(function () {
            //			this.href == window.location.href && (t(this).parent().addClass("active"), t(this).parent().parent().parent().addClass("active"), t(this).parent().parent().parent().parent().parent().addClass("active"))
            //		}),
            t(".mouse-down").on("click", function (e) {
                var o = t(this);
                t("html, body").stop().animate({
                    scrollTop: t(o.attr("href")).offset().top - 0
                }, 1500, "easeInOutExpo"), e.preventDefault()
            }), t(window).scroll(function () {
                t(window).scrollTop() >= 50 ? t(".sticky").addClass("nav-sticky") : t(".sticky").removeClass("nav-sticky")
            }), t(window).on("scroll load", function () {
                t(window).scrollTop() >= 130 ? t(".check-out").addClass("nav-sticky") : t(".check-out").removeClass("nav-sticky")
            }), t(window).on("scroll load", function () {
                //				t(window).scrollTop() <= 400 ? t(".check-out").addClass("nav-sticky") : t(".check-out").removeClass("nav-sticky")
                t(window).scrollTop() >= 940 ? t(".check-out").addClass("nav-sticky-bottom") : t(".check-out").removeClass("nav-sticky-bottom")
            }), t(window).scroll(function () {
                t(this).scrollTop() > 100 ? t("").fadeIn() : t("").fadeOut()
            }), t(".back-to-top").click(function () {
                return t("html, body").animate({
                    scrollTop: 0
                }, 30), !1
            })
    }(jQuery), $(function () {
        (new WOW).init()
    }), second = 1e3, minute = 60 * second, hour = 60 * minute, countDown = (new Date).getTime() + 108e5, x = setInterval(function () {
        now = (new Date).getTime(), distance = countDown - now, distance < 1e3 && (countDown += 108e5), document.getElementById("hours").innerText = Math.floor(distance / hour), document.getElementById("minutes").innerText = Math.floor(distance % hour / minute), document.getElementById("seconds").innerText = Math.floor(distance % minute / second)
    }, second), $(".pop-close,.pop-close-2,.pop-close-3").click(function () {
        $(".modal-button").click()
    }),
    //    $(document).one("mouseleave", function () {
    //		if ($(window).width() > 767) {
    //			$(".modal-button").click();
    //		}
    //	}),
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            pavarte: {
                popup: {
                    background: "rgba(46,202,139,0.8)",
                    text: "#ffffff"
                },
                button: {
                    background: "white",
                    text: "#2eca8b"
                }
            },
            theme: "classic",
            position: "bottom-left",
            content: {
                message: "Our website uses cookies to enhance your experience. Read the ",
                dismiss: "Accept",
                link: "Privacy Policy.",
                href: "privacy-policy.php"
            }
        })
    }), $(window).on("scroll", function () {
        var t = 0,
            e = $("#counter").offset().top - window.innerHeight;
        0 == t && $(window).scrollTop() > e && ($(".counter-value").each(function () {
            var t = $(this),
                e = t.attr("data-count");
            $({
                countNum: t.text()
            }).animate({
                countNum: e
            }, {
                duration: 4e3,
                easing: "swing",
                step: function () {
                    t.text(Math.floor(this.countNum))
                },
                compvare: function () {
                    t.text(this.countNum)
                }
            })
        }), t = 1)
    }), $(document).ready(function () {
        $("#customer-testi").owlCarousel({
                items: 5,
                itemsDesktop: [1024, 3],
                itemsDesktopSmall: [900, 2],
                itemsTabvar: [600, 1],
                autoPlay: true
            }), $("#owl-fade").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true
            }), $("#owl-4").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true
            }), $("#owl-5").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1]
            }),
            $("#owl-6").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-7").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-8").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-9").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-10").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-11").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-12").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-13").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-14").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-15").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-16").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-17").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-18").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-19").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-20").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-21").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-22").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-23").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-24").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-25").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-26").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-27").owlCarousel({
                items: 1,
                itemsDesktop: [1024, 1],
                itemsDesktopSmall: [900, 1],
                itemsTabvar: [600, 1],
                singleItem: true,
                stagePadding: 50,
                autoPlay: true,
            }),
            $("#owl-sample").owlCarousel({
                items: 2,
                itemsDesktop: [1024, 2],
                itemsDesktopSmall: [900, 2],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                stagePadding: 600,
                autoPlay: true,
            })
    }),
    $(".element").each(function () {
        var $this = $(this);
        $this.typed({
            strings: $this.attr('data-elements').split(','),
            typeSpeed: 100,
            backDelay: 2000,
            loop: true
        });
    }), $(".navigation-menu li a").click(function () {
        $(window).width() < 992 && $(".navbar-toggle").click()
    });

$('.select').niceSelect();

$(function () {

    var $meters = $(".skills.desktop .progress-set .progress-bar > span");
    var $section = $('#third');
    var $queue = $({});
    var $protext = $('.progress-in');

    function loadDaBars() {
        $meters.each(function () {
            var $el = $(this);
            var origWidth = $el.width();
            $el.width('90%');
            $queue.queue(function (next) {
                $el.animate({
                    width: origWidth
                }, 1500, "swing", next);
            });
            var delay = 0;
            $('.progress-in:lt(5)').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).delay(delay).animate({
                    countNum: countTo
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                }, 1500);
                delay += 1500;
            });
        });
    }

    //1.firefox when refresh width is not showing 0 instead of showing inline style width, but on chrome is showing fine


    //2.on chrome when switch tab then come back to site it'll continue the counter but not the loadbar so the both are not sync, but firefox works fine.


    $(document).bind('scroll load', function (ev) {
        var scrollOffset = $(document).scrollTop();
        var containerOffset = $section.offset().top - window.innerHeight;
        if (scrollOffset >= containerOffset) {
            loadDaBars();
            // unbind event not to load scrolsl again
            $(document).unbind('scroll load');
        }
    });

});
//Writers available dropdown change
$(document).ready(function () {
    $(".subject-select").change(function () {
        $('.custom-input-subject div.available').hide();
    });
    $(".subject-select").change(function () {
        $('.custom-input-subject div.available').show();
    });
    $('.subject-select').change(function () {
        $('.review-owl').hide();
        $('#' + ($(this).val() % 22)).fadeIn(500);
    });
    $('.subject-select .list li.selected').click();
    $('.subject-select').removeClass('open');
});

//Common header/footer smooth scroll
$(document).on('click', 'a[href^="./#"]', function () {
    var __selector = this.getAttribute('href').split('#');
    $('html, body').animate({
        scrollTop: $('#' + __selector[1]).offset().top - 70
    }, 800);
});
$(document).on('click', 'a[href^="#"]', function () {
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 70
    }, 800);
});

//Sample section when click, then load
var testmethod = function (id) {
    $(id).attr("data-target");
    $(id).modal('toggle');
}
$('#Sample_Modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var file = button.data('file') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#iframe').attr('src', file);
});
