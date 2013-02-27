$(document).ready(function() {

    $(".tab-content").hide();
    $("ul.tabs li:first").addClass("active").show();
    $(".tab-content:first").show();

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab-content").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).show();
        return false;
    });

    $(window.location.hash).click(); // super-simple, no? :)
});​