document.querySelector(".menu-burger").addEventListener("click", function () {
    this.classList.toggle("active");
    document.querySelector(".nav-menu").classList.toggle("active");
});

document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    });

    const skillsContainer = document.querySelector(".skills-icon-container");
    if (skillsContainer) observer.observe(skillsContainer);
});
