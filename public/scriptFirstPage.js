document.addEventListener("DOMContentLoaded", function() {
    const mainImage = document.getElementById("main-image");
    mainImage.addEventListener("animationend", function() {
        const textContainer = document.getElementById("text-container");
        textContainer.style.opacity = "1";
    });