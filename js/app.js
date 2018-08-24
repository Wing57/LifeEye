
$(function () {
    app();
})
function app() {
    var domimg = $(".img_01").offset().top;
    $(window).scroll(function () {
        var wintop = $(window).scrollTop();
        if (wintop >= domimg) {
            $(".img_01").hide();
        }
        else {
            $(".img_01").show();
        }
    })
}