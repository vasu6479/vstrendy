document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".navbar ul");
    const hamburger = document.createElement("div");
    hamburger.classList.add("hamburger");
    hamburger.innerHTML = "☰";
    
    document.querySelector(".navbar").appendChild(hamburger);

    hamburger.addEventListener("click", function () {
        menu.classList.toggle("show");
    });
});
