function moveSmoke(event) {
    const smoke = document.getElementById("smoke");
    smoke.style.opacity = 1;
    smoke.style.left = `${event.clientX - 150}px`;
    smoke.style.top = `${event.clientY - 150}px`;
}
function hideSmoke() {
    document.getElementById("smoke").style.opacity = 0;
}