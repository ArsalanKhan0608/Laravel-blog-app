import "./bootstrap";
import "animate.css/animate.min.css";
import "../sass/app.scss";
// import Alpine from "alpinejs";

// window.Alpine = Alpine;

// Alpine.start();

import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.classList.add("animate__animated", "animate__pulse");
        });
        card.addEventListener("mouseleave", function () {
            this.classList.remove("animate__animated", "animate__pulse");
        });
    });
});
