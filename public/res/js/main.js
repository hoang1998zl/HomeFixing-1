window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('header').classList.add("header-top");
    } else {
        document.getElementById('header').classList.remove("header-top");
    }
}