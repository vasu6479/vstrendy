document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".navbar ul");
    let hamburger = document.querySelector(".hamburger");

    // Agar hamburger element nahi mila toh create karo
    if (!hamburger) {
        hamburger = document.createElement("div");
        hamburger.classList.add("hamburger");
        hamburger.innerHTML = "☰"; // Unicode for menu icon
        document.querySelector(".navbar").appendChild(hamburger);
    }

    // Hamburger Click Event
    hamburger.addEventListener("click", function () {
        menu.classList.toggle("show");
    });
});
