$(window).on("load", function () {
    $(".tf-swiper").each(function (index, element) {
        var $this = $(element);
        var laptop = $this.data("laptop") || 1;
        var preview = $this.data("preview") || 1;
        var tablet = $this.data("tablet") || 1;
        var mobile = $this.data("mobile") || 1;
        var mobileSm = $this.data("mobile-sm") !== undefined ? $this.data("mobile-sm") : mobile;

        // Spacing
        var spacing = $this.data("space");
        var spacingMd = $this.data("space-md");
        var spacingLg = $this.data("space-lg");
        var spacingXxl = $this.data("space-xxl");

        if (spacing !== undefined && spacingMd === undefined && spacingLg === undefined) {
            spacingMd = spacing;
            spacingLg = spacing;
        } else if (spacing === undefined && spacingMd !== undefined && spacingLg === undefined) {
            spacing = 0;
            spacingLg = spacingMd;
        }
        spacing = spacing || 0;
        spacingMd = spacingMd || 0;
        spacingLg = spacingLg || 0;
        spacingXxl = spacingXxl || 1;

        var perGroup = $this.data("pagination") || 1;
        var perGroupSm = $this.data("pagination-sm") || 1;
        var perGroupMd = $this.data("pagination-md") || 1;
        var perGroupLg = $this.data("pagination-lg") || 1;
        var gridRows = $this.data("grid") || 1;
        var cursorType = $this.data("cursor") ?? false;
        var loop = $this.data("loop") ?? false;
        var loopMd = $this.data("loop-md") ?? false;
        var effect = $this.data("effect") || "slide";
        var atPlay = $this.data("auto"); // True || False
        var speed = $this.data("speed") || 800;
        var delay = $this.data("delay") || 1000;
        var direction = $this.data("direction") || "horizontal";
        var centered = $this.data("center") ?? false;
        var init = $this.data("init") || 0;

        var swiperT = new Swiper($this[0], {
            direction: direction,
            speed: speed,
            centeredSlides: centered,
            slidesPerView: mobile,
            spaceBetween: spacing,
            slidesPerGroup: perGroup,
            grabCursor: cursorType,
            loop: loop,
            effect: effect,
            initialSlide: init,
            autoplay: atPlay
                ? {
                      delay: delay,
                      disableOnInteraction: false,
                      pauseOnMouseEnter: true,
                  }
                : false,
            grid: {
                rows: gridRows,
                fill: "row",
            },
            pagination: {
                el: [$this.find(".tf-sw-pagination")[0], $this.closest(".tf-pag-swiper").find(".tf-sw-pagination")[0]],
                clickable: true,
            },
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: [
                    $this.closest(".tf-btn-swiper-main").find(".nav-next-swiper")[0],
                    $this.closest(".container").find(".group-btn-slider .nav-next-swiper")[0],
                ],
                prevEl: [
                    $this.closest(".tf-btn-swiper-main").find(".nav-prev-swiper")[0],
                    $this.closest(".container").find(".group-btn-slider .nav-prev-swiper")[0],
                ],
            },
            breakpoints: {
                575: {
                    slidesPerView: mobileSm,
                    spaceBetween: spacing,
                    slidesPerGroup: perGroupSm,
                    grid: {
                        rows: gridRows,
                        fill: "row",
                    },
                },
                768: {
                    slidesPerView: tablet,
                    spaceBetween: spacingMd,
                    slidesPerGroup: perGroupMd,
                    grid: {
                        rows: gridRows,
                        fill: "row",
                    },
                },
                1200: {
                    slidesPerView: preview,
                    spaceBetween: spacingLg,
                    slidesPerGroup: perGroupLg,
                    grid: {
                        rows: gridRows,
                        fill: "row",
                    },
                },
                1600: {
                    slidesPerView: laptop === 1 ? preview : laptop,
                    spaceBetween: spacingXxl === 1 ? spacingLg : spacingXxl,
                    slidesPerGroup: perGroupLg,
                    grid: {
                        rows: gridRows,
                        fill: "row",
                    },
                },
            },
        });
        $(".swiper-button")
            .on("mouseenter", function () {
                var slideIndex = $(this).data("slide");
                swiperT.slideTo(slideIndex, 500, false);

                $(".tf-swiper .card_product--V01.style_2").removeClass("active");
                $(".tf-swiper .card_product--V01.style_2").eq(slideIndex).addClass("active");
            })
            .on("mouseleave", function () {
                $(".tf-swiper .card_product--V01.style_2").removeClass("active");
            })
            .on("click", function () {
                var slideIndex = $(this).data("slide");
                $(".tf-swiper .card_product--V01.style_2").eq(slideIndex).toggleClass("clicked");
            });
    });
});

if ($(".modal-quick-view").length > 0) {
    var $modalRoot = $(".modal-quick-view");
    var mainQV = new Swiper(".modal-quick-view .tf-single-slide", {
        slidesPerView: 1,
        spaceBetween: 0,
        observer: true,
        observeParents: true,
        speed: 800,
        navigation: {
            nextEl: ".modal-quick-view .single-slide-next",
            prevEl: ".modal-quick-view .single-slide-prev",
        },
    });

    function updateModalActiveButton(type, activeIndex) {
        var btnClass = `.${type}-btn`;
        var dataAttr = `data-${type}`;
        var currentClass = `.value-current${capitalizeFirstLetter(type)}`;
        var selectClass = `.select-current${capitalizeFirstLetter(type)}`;
        $modalRoot.find(btnClass).removeClass("active");

        var currentSlide = $modalRoot.find(".tf-single-slide .swiper-slide").eq(activeIndex);
        var currentValue = currentSlide.attr(dataAttr);

        if (currentValue) {
            $modalRoot.find(`${btnClass}[${dataAttr}='${currentValue}']`).addClass("active");
            $modalRoot.find(currentClass).text(currentValue);
            $modalRoot.find(selectClass).text(currentValue);
        }
    }

    function scrollToModalSlide(type, value, color) {
        if (!value || !color) return;

        var matchingSlides = $modalRoot.find(".tf-single-slide .swiper-slide").filter(function () {
            return $(this).attr(`data-${type}`) === value && $(this).attr("data-color") === color;
        });

        if (matchingSlides.length > 0) {
            var firstIndex = matchingSlides.first().index();
            mainQV.slideTo(firstIndex, 1000, false);
        } else {
            var fallbackSlides = $modalRoot.find(".tf-single-slide .swiper-slide").filter(function () {
                return $(this).attr(`data-${type}`) === value;
            });

            if (fallbackSlides.length > 0) {
                var fallbackIndex = fallbackSlides.first().index();
                mainQV.slideTo(fallbackIndex, 1000, false);
            }
        }
    }

    function setupModalVariantButtons(type) {
        $modalRoot.find(`.${type}-btn`).on("click", function (e) {
            var value = $(this).data(type);
            var color = $modalRoot.find(".value-currentColor").text();

            $modalRoot.find(`.${type}-btn`).removeClass("active");
            $(this).addClass("active");

            scrollToModalSlide(type, value, color);
        });
    }

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    ["color"].forEach((type) => {
        mainQV.on("slideChange", function () {
            updateModalActiveButton(type, this.activeIndex);
        });
        setupModalVariantButtons(type);
        updateModalActiveButton(type, mainQV.activeIndex);
    });
}

if ($(".tf-sw-thumbs").length > 0) {
    var thumbSwiper = new Swiper(".sw-thumb", {
        slidesPerView: 1,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        speed: 800,
        spaceBetween: 10,
        centeredSlides: true,
    });

    var mainSwiper = new Swiper(".sw-main-thumb", {
        grabCursor: true,
        speed: 800,
        navigation: {
            nextEl: ".tes_thumb .nav-next-swiper",
            prevEl: ".tes_thumb .nav-prev-swiper",
        },
        pagination: {
            el: ".sw-pg-thumb",
            clickable: true,
        },
    });
    thumbSwiper.controller.control = mainSwiper;
    mainSwiper.controller.control = thumbSwiper;
}
if ($(".slider-thumb-wrap").length > 0) {
    const contentThumbSlider = new Swiper(".slider-content-thumb", {
        slidesPerView: 1,
        loop: true,
        grabCursor: true,
        speed: 800,
        on: {
            slideChange: function () {
                const activeIndex = this.realIndex;
                $(".btn-thumbs").removeClass("active");
                $(".btn-thumbs").eq(activeIndex).addClass("active");
            },
        },
    });

    $(".btn-thumbs").on("click", function () {
        const index = $(this).index();
        $(".btn-thumbs").removeClass("active");
        $(this).addClass("active");
        contentThumbSlider.slideToLoop(index);
    });
}

if ($(".tf-sw-lookbook").length > 0) {
    var tfSwLb = $(".tf-sw-lookbook");
    var preview = tfSwLb.data("preview");
    var tablet = tfSwLb.data("tablet");
    var mobile = tfSwLb.data("mobile");
    var spacingLg = tfSwLb.data("space-lg");
    var spacingMd = tfSwLb.data("space-md");
    var spacing = tfSwLb.data("space");
    var perGroup = tfSwLb.data("pagination");
    var perGroupMd = tfSwLb.data("pagination-md");
    var perGroupLg = tfSwLb.data("pagination-lg");
    var mobileSm = tfSwLb.data("mobile-sm") !== undefined ? tfSwLb.data("mobile-sm") : mobile;
    var swiperLb = new Swiper(".tf-sw-lookbook", {
        slidesPerView: mobile,
        spaceBetween: spacing,
        observer: true,
        observeParents: true,
        speed: 1000,
        pagination: {
            el: ".sw-pagination-lookbook",
            clickable: true,
        },
        slidesPerGroup: perGroup,
        navigation: {
            clickable: true,
            nextEl: ".nav-prev-lookbook",
            prevEl: ".nav-next-lookbook",
        },
        breakpoints: {
            575: {
                slidesPerView: mobileSm,
                spaceBetween: spacing,
                slidesPerGroup: perGroup,
            },
            768: {
                slidesPerView: tablet,
                spaceBetween: spacingMd,
                slidesPerGroup: perGroupMd,
            },
            1200: {
                slidesPerView: preview,
                spaceBetween: spacingLg,
                slidesPerGroup: perGroupLg,
            },
        },
    });

    $(".swiper-button").click(function () {
        var slideIndex = $(this).data("slide");
        swiperLb.slideTo(slideIndex, 500, false);
    });
}
