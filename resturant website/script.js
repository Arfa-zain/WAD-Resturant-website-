function showCategory(category, event) {
    let sections = document.querySelectorAll(".menu-section");
    let tabs = document.querySelectorAll(".tab");

    // hide all sections
    sections.forEach(section => {
        section.classList.remove("active-section");
    });

    // remove active tab
    tabs.forEach(tab => {
        tab.classList.remove("active");
    });

    // show selected section
    document.getElementById(category).classList.add("active-section");

    // highlight clicked tab
    if (event && event.target) {
        event.target.classList.add("active");
    }
}

// DARK MODE (shared safe version)
function initDarkMode() {
    const toggleBtn = document.getElementById("modeToggle");
    if (!toggleBtn) return;

    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
        toggleBtn.textContent = "☀️";
    } else {
        toggleBtn.textContent = "🌙";
    }

    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");

        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("theme", "dark");
            toggleBtn.textContent = "☀️";
        } else {
            localStorage.setItem("theme", "light");
            toggleBtn.textContent = "🌙";
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    initDarkMode();
});