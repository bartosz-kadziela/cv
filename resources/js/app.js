import './bootstrap';

let currentPath = window.location.pathname;

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
