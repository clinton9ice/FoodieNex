!(function (e) {
    let body = $("body"),
        app = body.attr("app-name");

    (function preloader() {
        var el = `<div class="loader-container" app-loader="active">
                        <div class="loader">
                            <div></div>
                            <div></div>
                        </div>
                    </div>`;

        if (body.find("[app-loader]").length < 1) {
            body.append(el);
        }
    })();


    e(window).on("load", function () {
        setTimeout(() => {
            if (!body.hasClass("flow")) {
                e("[app-loader]").fadeOut(500);
                body.addClass("flow");
            }
        }, 100);
    });

    $(document).ready(function () {

        $("[app-button]").click(function (e) {
            $this = $(this).attr("app-button");
            e.preventDefault();

            switch ($this) {
                case "scroll-top":
                    $("html, body").animate({
                        scrollTop: 0
                    }, 1000);
                    break;
                    case "null":
                        let errorMessage = $(this).attr("data-message");
                       var errorReport = errorMessage !== undefined? errorMessage : "Not available";
                        swal({
                            icon: "error",
                            title: errorMessage
                        });
                        break;
            }

        });

        $(".menu-btn a").on("click", function () {
            if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    html_body.animate({
                            scrollTop: target.offset().top - 50,
                        },
                        1500
                    );
                    return false;
                }
            }
        });

        $(window).scroll(function () {
            var scroll = $(this).scrollTop();
            //Toggle nav
            if (scroll >= 100) {
                $(".header").addClass("sticky");
            } else {
                $(".header").removeClass("sticky");
            }

            if (scroll >= 600) {
                $(".top-btn").fadeIn();
            } else {
                $(".top-btn").fadeOut();
            }
        });

        //Timer interval
        setInterval(function () {
            let timePlaceholder = $("[app-timer]").find("[data-time]"),
                time = new Date();
            let amd = time.getHours() >= 12 ? "PM" : "AM";

            timePlaceholder.each(function () {
                let $this = $(this);
                let this_val = $this.attr("data-time");

                switch (this_val) {
                    case "hr":
                        let hr = time.getHours();

                        if (time.getHours() > 12) {
                            hr = time.getHours() - 12;
                            let merged = hr + " " + amd;
                            $this.text(time.getHours() < 10 ? "0" + merged : merged);
                        } else {
                            $this.text(time.getHours() < 10 ? "0" + hr + " " + amd : hr + " " + amd);
                        }
                        break;

                    case "min":
                        let min = time.getMinutes();
                        $this.text(min < 10 ? "0" + min : min);
                        break;

                    case "secs":
                        $this.text(time.getSeconds());
                        break;

                    default:
                        break;
                }
            });

            //Check for open time
            let open_close = $("[app-time-state]");
            if (time.getHours() >= 8 && time.getHours() <= 22) {
                open_close.find("span").text("Open Now");
                open_close.removeClass("text-danger");
                open_close.addClass("text-success");
            } else {
                open_close.find("span").text("Closed");
                open_close.addClass("text-danger");
                open_close.removeClass("text-success");
            }

        }, 1000);


        function index() {
            $(".testimonial-slider").slick({
                autoplay: true,
                autoplaySpreed: 7000,
                arrows: true,
                prevArrow: '<i class="icofont-arrow-left arrows left-arrow"></i>',
                nextArrow: '<i class="icofont-arrow-right arrows right-arrow"></i>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        }

        try {
            AOS.init();
            switch (app) {
                case "home":
                    index();
                    break;
            }
        } catch (e) {
            console.log(e);
        }

    });

})(jQuery);