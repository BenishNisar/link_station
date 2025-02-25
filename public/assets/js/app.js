document.addEventListener("DOMContentLoaded", function () {
    let cursor = document.querySelector(".custom-cursor");

    document.addEventListener("mousemove", (e) => {
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
        cursor.style.opacity = "1"; // Show cursor only when mouse moves
    });

    document.addEventListener("mouseleave", () => {
        cursor.style.opacity = "0"; // Hide cursor when mouse leaves the window
    });

    document.addEventListener("mouseenter", () => {
        cursor.style.opacity = "1"; // Show cursor when mouse enters again
    });
});


// playbtn
document.getElementById("playBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Default action rokta hai
    window.open(this.href, '_blank'); // Naya tab open karega
});

// animation
