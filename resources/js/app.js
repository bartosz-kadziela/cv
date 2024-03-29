import './bootstrap';

let currentPath = window.location.pathname;

//Collapsible

if (currentPath === "/") {
    var collapsibles = document.getElementsByClassName("collapsible");

    for (var i = 0; i < collapsibles.length; i++) {
        collapsibles[i].addEventListener("click", function() {
            this.classList.toggle("active");

            var content = this.nextElementSibling;

            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
}

//Scroll page

document.addEventListener("DOMContentLoaded", function() {

    var scrollToBottomBtn = document.getElementById("scrollToBottomBtn");

    scrollToBottomBtn.addEventListener("click", function() {

        var body = document.body;
        var html = document.documentElement;
        var height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        var scrollHeight = 0.44 * height;

        window.scrollTo({
            top: scrollHeight,
            behavior: "smooth"
        });
    });
});
