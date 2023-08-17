var b_flag = 0;
var flag01 = 0;
var flag11 = 0;
var flag12 = 0;
var flag21 = 0;
var flag22 = 0;



$(document).ready(function() {
    // carousel functions code start
    function pro(b_flag, items, active) {
        console.log(b_flag, items, active)
        var carousel_items = $(items);
        for (i = 0; i <= carousel_items.length; i++) carousel_items.removeClass(active);
        carousel_items[b_flag].classList.add(active);
    }

    function next(b_flag, items, active) {
        console.log(b_flag, items, active)
        var carousel_items = $(items);
        for (i = 0; i <= carousel_items.length; i++) carousel_items.removeClass(active);
        carousel_items[b_flag].classList.add(active);
    }
    // carousel functions code end
    // First carousels start
    $(".u-carousel_btn-p").click(function() {
        var carousel_items = $(".u-carousel_items");
        flag01--;
        if (flag01 < 0) flag01 = carousel_items.length - 1;
        pro(flag01, ".u-carousel_items", "u-carousel-active");
    });
    $(".u-carousel_btn-n").click(function() {
        var carousel_items = $(".u-carousel_items");
        flag01++;
        if (flag01 == carousel_items.length) flag01 = 0;
        next(flag01, ".u-carousel_items", "u-carousel-active");
    });
    // First carousels end
    // 3carousel_items start
    $(".u-home-3carousel-items-btn-p").click(function() {
        var carousel_items = $(".u-home-3carousel-slides");
        flag11--;
        if (flag11 < 0) flag11 = carousel_items.length - 1;
        pro(flag11, ".u-home-3carousel-slides", "u-3carousel-active");
    });
    $(".u-home-3carousel-items-btn-n").click(function() {
        var carousel_items = $(".u-home-3carousel-slides");
        flag11++;
        if (flag11 == carousel_items.length) flag11 = 0;
        next(flag11, ".u-home-3carousel-slides", "u-3carousel-active");
    });
    // 3carousel_items  end
    // 3carousel_items responsive start
    $(".u-home-3carousel-items-btn-p-res").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive");
        flag12--;
        if (flag12 < 0) flag12 = carousel_items.length - 1;
        pro(flag12, ".u-home-3carousel-responsive", "u-3carousel-active-res");
    });
    $(".u-home-3carousel-items-btn-n-res").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive");
        flag12++;
        if (flag12 == carousel_items.length) flag12 = 0;
        next(flag12, ".u-home-3carousel-responsive", "u-3carousel-active-res");
    });
    // 3carousel_items responsive end

    // 3carousel_items-sec5 start
    $(".u-home-3carousel-items-btn-p-sec5").click(function() {
        var carousel_items = $(".u-home-3carousel-slides-sec5");
        flag21--;
        if (flag21 < 0) flag21 = carousel_items.length - 1;
        pro(flag21, ".u-home-3carousel-slides-sec5", "u-3carousel-active");
    });
    $(".u-home-3carousel-items-btn-n-sec5").click(function() {
        var carousel_items = $(".u-home-3carousel-slides-sec5");
        flag21++;
        if (flag21 == carousel_items.length) flag21 = 0;
        next(flag21, ".u-home-3carousel-slides-sec5", "u-3carousel-active");
    });
    // 3carousel_items-sec5  end
    // 3carousel_items-sec5 responsive start
    $(".u-home-3carousel-items-btn-p-res-sec5").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive-sec5");
        flag22--;
        if (flag22 < 0) flag22 = carousel_items.length - 1;
        pro(flag22, ".u-home-3carousel-responsive-sec5", "u-3carousel-active-res");
    });
    $(".u-home-3carousel-items-btn-n-res-sec5").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive-sec5");
        flag22++;
        if (flag22 == carousel_items.length) flag22 = 0;
        next(flag22, ".u-home-3carousel-responsive-sec5", "u-3carousel-active-res");
    });
    // 3carousel_items-sec5 responsive end

    // 3carousel_items-sec6 start
    //**********************************************
    $(".u-home-3carousel-items-btn-p-sec6").click(function() {
        var carousel_items = $(".u-home-3carousel-slides-sec6");
        flag21--;
        if (flag21 < 0) flag21 = carousel_items.length - 1;
        pro(flag21, ".u-home-3carousel-slides-sec6", "u-3carousel-active");
    });
    $(".u-home-3carousel-items-btn-n-sec6").click(function() {
        var carousel_items = $(".u-home-3carousel-slides-sec6");
        flag21++;
        if (flag21 == carousel_items.length) flag21 = 0;
        next(flag21, ".u-home-3carousel-slides-sec6", "u-3carousel-active");
    });
    // 3carousel_items-sec6  end
    // 3carousel_items-sec6 responsive start
  $(".u-home-3carousel-items-btn-p-res-sec6").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive-sec6");
        flag22--;
        if (flag22 < 0) flag22 = carousel_items.length - 1;
        pro(flag22, ".u-home-3carousel-responsive-sec6", "u-3carousel-active-res");
    });
    $(".u-home-3carousel-items-btn-n-res-sec6").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive-sec6");
        flag22++;
        if (flag22 == carousel_items.length) flag22 = 0;
        next(flag22, ".u-home-3carousel-responsive-sec6", "u-3carousel-active-res");
    });
  
    // 3carousel_items-sec6 responsive end
    //*******************************************

    // 3carousel_items-sec7 start
    $(".u-home-3carousel-items-btn-p-sec7").click(function() {
        var carousel_items = $(".u-home-3carousel-slides-sec7");
        flag21--;
        if (flag21 < 0) flag21 = carousel_items.length - 1;
        pro(flag21, ".u-home-3carousel-slides-sec7", "u-3carousel-active");
    });
    $(".u-home-3carousel-items-btn-n-sec7").click(function() {
        var carousel_items = $(".u-home-3carousel-slides-sec7");
        flag21++;
        if (flag21 == carousel_items.length) flag21 = 0;
        next(flag21, ".u-home-3carousel-slides-sec7", "u-3carousel-active");
    });
    // 3carousel_items-sec7  end
    // 3carousel_items-sec7 responsive start
    $(".u-home-3carousel-items-btn-p-res-sec7").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive-sec7");
        flag22--;
        if (flag22 < 0) flag22 = carousel_items.length - 1;
        pro(flag22, ".u-home-3carousel-responsive-sec7", "u-3carousel-active-res");
    });
    $(".u-home-3carousel-items-btn-n-res-sec7").click(function() {
        var carousel_items = $(".u-home-3carousel-responsive-sec7");
        flag22++;
        if (flag22 == carousel_items.length) flag22 = 0;
        next(flag22, ".u-home-3carousel-responsive-sec7", "u-3carousel-active-res");
    });
    // 3carousel_items-sec7 responsive end

});