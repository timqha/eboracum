$('.single .nav.osc-res-nav.nav-tabs.osc-tabs-left-ul li a').each(function () {
    $(this).addClass('title');
});
$('.single .nav.osc-res-nav.nav-tabs.osc-tabs-left-ul').removeClass().addClass('nav navbar-tabs-custom');

$('.single .tab-content .tab-pane img').each(function () {
    $(this).wrap("<div class='col-md-6'></div>");
});

// $('.tab-content .tab-pane p, .tab-content .tab-pane h3').wrapAll("<div class='col-md-4'></div>");
$('.single .tab-content .tab-pane').each(function (i,elem) {
    $("p, h3",this).wrapAll("<div class='col-md-4'><div class='row'></div></div>");
});

$('.single .tab-content .tab-pane').each(function (i,elem) {
    // wrap text in col-md-4
    // var $tmp = $(this).children().remove();
    // var tmp1 = $(this).text();
    // $(this).text("").append($tmp).append($("<div class='col-md-4'>" + tmp1 + "</div>"));

    // wrap all col-md-6 in single col-md-offset-1 col-md-7 gallery
    $(".col-md-6",this).wrapAll('<div class="col-md-offset-1 col-md-7 gallery"><div class="row"></div></div>');

    // return back in its place
    $('.col-md-offset-1.col-md-7.gallery', this).appendTo(this);

});