// ================= DOM LOADED =================
document.addEventListener("DOMContentLoaded", () => {

    // NAV smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });

    // HERO buttons
    window.goToMenu = function () {
        window.location.href = "menu.html";
    };

    window.scrollToReservation = function () {
        window.location.href = "contact.html";
    };

    /* DARK MODE
    const toggleBtn = document.getElementById("modeToggle");

    if (toggleBtn) {

        // Load saved theme
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark-mode");
            toggleBtn.textContent = "☀️";
        } else {
            toggleBtn.textContent = "🌙";
        }

        // Toggle theme
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
    }*/

    // ================= REVIEW FORM SUBMIT =================
    const form = document.getElementById("reviewForm");

    if(form){
        form.addEventListener("submit", function(){

    const name = this.querySelector("input[type='text']").value;

    setTimeout(() => {
        alert("✅ Thank you " + name + "! Your review submitted.");
    }, 100);

});
    }
    //update stars
   const stars = document.querySelectorAll(".rating span");
const ratingInput = document.getElementById("ratingValue");

let selectedRating = 0;

stars.forEach((star, index) => {

    // HOVER (preview)
    star.addEventListener("mouseover", () => {
        stars.forEach((s, i) => {
            if (i <= index) {
                s.classList.add("hover");
            } else {
                s.classList.remove("hover");
            }
        });
    });

    // CLICK (save rating)
    star.addEventListener("click", () => {
        selectedRating = index + 1;
        ratingInput.value = selectedRating;

        stars.forEach((s, i) => {
            if (i < selectedRating) {
                s.classList.add("active");
            } else {
                s.classList.remove("active");
            }
        });
    });
});

// REMOVE HOVER when leaving
document.querySelector(".rating").addEventListener("mouseleave", () => {
    stars.forEach(s => s.classList.remove("hover"));
});

});


// ================= REVIEW SLIDER =================
//const container = document.getElementById("reviewContainer");
//const cardWidth = 305;
document.addEventListener("DOMContentLoaded", () => {

    const container = document.getElementById("reviewContainer");
    const cardWidth = 305;

    window.nextSlide = function () {
        container.scrollBy({ left: cardWidth, behavior: "smooth" });
    };

    window.prevSlide = function () {
        container.scrollBy({ left: -cardWidth, behavior: "smooth" });
    };

    window.currentSlide = function (index) {
        container.scrollTo({
            left: index * cardWidth,
            behavior: "smooth"
        });
        updateDots(index);
    };

});

// Next
function nextSlide() {
    container.scrollBy({
        left: cardWidth,
        behavior: "smooth"
    });
}

// Prev
function prevSlide() {
    container.scrollBy({
        left: -cardWidth,
        behavior: "smooth"
    });
}

/* Dots
function currentSlide(index) {
    container.scrollTo({
        left: index * cardWidth,
        behavior: "smooth"
    });
    updateDots(index);
}
//for updating dots
function updateDots(index) {
    const dots = document.querySelectorAll(".dots span");

    dots.forEach(dot => dot.classList.remove("active"));

    if (dots[index]) {
        dots[index].classList.add("active");
    }
    updateDots(0);
}
// Auto slide
/*setInterval(() => {
    container.scrollBy({
        left: cardWidth,
        behavior: "smooth"
    });
}, 3000);
let currentIndex = 0;

setInterval(() => {
    const totalSlides = document.querySelectorAll(".review-card").length;

    currentIndex++;

    if (currentIndex >= totalSlides) {
        currentIndex = 0;
    }

    container.scrollTo({
        left: currentIndex * cardWidth,
        behavior: "smooth"
    });

    updateDots(currentIndex);

}, 3000);*/


// ================= MODAL =================
function openForm(){
    document.getElementById("reviewModal").classList.add("show");
}

function closeForm(){
    document.getElementById("reviewModal").classList.remove("show");
}

// Close on outside click
window.onclick = function(event){
    const modal = document.getElementById("reviewModal");
    if(event.target === modal){
        closeForm();
    }
};

//Audio
function playAudio() {
    var audio = document.getElementById("welcomeAudio");
    var btn = document.querySelector(".audio-btn");

    if (audio.paused) {
        audio.currentTime = 0;
        audio.play();
        btn.innerText = "⏸ Stop Audio";
    } else {
        audio.pause();
        btn.innerText = "▶ Play Audio";
    }
}

const stars = document.querySelectorAll(".rating span");
const ratingInput = document.getElementById("ratingValue");

stars.forEach(star => {
    star.addEventListener("click", function () {
        let value = this.getAttribute("data-value");
        ratingInput.value = value;

        // highlight stars
        stars.forEach(s => s.classList.remove("active"));
        for (let i = 0; i < value; i++) {
            stars[i].classList.add("active");
        }
    });
});