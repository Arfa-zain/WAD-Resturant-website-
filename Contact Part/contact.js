// CONTACT.JS

document.addEventListener("DOMContentLoaded", () => {

    initDarkMode();

    // FORM SUBMIT
    document.getElementById('submitBtn').addEventListener('click', () => {
        const name = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const date = document.getElementById('resDate').value;
        const time = document.getElementById('resTime').value;
        const guests = document.getElementById('guests').value;

        if (!name || !email || !phone || !date || !time || !guests) {
            alert('Please fill in all required fields.');
            return;
        }

        const msg = document.getElementById('successMsg');
        msg.style.display = 'block';
        msg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

        // reset form
        ['fullName', 'email', 'phone', 'resDate', 'resTime', 'requests']
            .forEach(id => document.getElementById(id).value = '');

        document.getElementById('guests').selectedIndex = 2;

        setTimeout(() => msg.style.display = 'none', 5000);
    });
});

// DARK MODE (same logic reused)
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