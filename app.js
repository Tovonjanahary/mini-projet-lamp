console.log("salut")

const hamburger = document.getElementById('hamburger');
const navLinks = document.querySelector(".nav-links");
const navLink = document.querySelectorAll(".nav-links li");
    
hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("nav-links-active"); 

    navLink.forEach((link, index) => {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 4 + 1.5}s`;
    })    
})
