$(window).load(function () {
    window.URK = $(".the-domain").attr("data-href");
    $(".the-domain").attr("href", "");
    document.onclick = function (a) {
        if (a.target.id == "keyword" || a.target.id == "flag" || a.target.id == "continue") {
            window.location.href = URK;
            return false;
        }
    };
});