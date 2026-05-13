document.addEventListener("DOMContentLoaded", () => {

    // ================= SMOOTH SCROLL =================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute("href"));

            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });


    // ================= HERO NAVIGATION =================
    window.goToMenu = function () {
        window.location.href = "menu.php";
    };

    window.scrollToReservation = function () {
        window.location.href = "contact.php";
    };


    // ================= REVIEW FORM =================
    const form = document.getElementById("reviewForm");

    if (form) {
        form.addEventListener("submit", function () {

            const name = this.querySelector("input[type='text']").value;

            setTimeout(() => {
                alert("✅ Thank you " + name + "! Your review submitted.");
            }, 100);
        });
    }


    // ================= STAR RATING SYSTEM =================
    const stars = document.querySelectorAll(".rating span");
    const ratingInput = document.getElementById("ratingValue");

    let selectedRating = 0;

    if (stars.length > 0 && ratingInput) {

        stars.forEach((star, index) => {

            // hover effect
            star.addEventListener("mouseover", () => {
                stars.forEach((s, i) => {
                    s.classList.toggle("hover", i <= index);
                });
            });

            // click to select rating
            star.addEventListener("click", () => {
                selectedRating = index + 1;
                ratingInput.value = selectedRating;

                stars.forEach((s, i) => {
                    s.classList.toggle("active", i < selectedRating);
                });
            });
        });

        // remove hover on leave
        const ratingBox = document.querySelector(".rating");

        if (ratingBox) {
            ratingBox.addEventListener("mouseleave", () => {
                stars.forEach(s => s.classList.remove("hover"));
            });
        }
    }


    // ================= REVIEW SLIDER =================
    const container = document.getElementById("reviewContainer");
    const cardWidth = 305;

    if (container) {

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
        };
    }


    // ================= MODAL =================
    window.openForm = function () {
        document.getElementById("reviewModal")?.classList.add("show");
    };

    window.closeForm = function () {
        document.getElementById("reviewModal")?.classList.remove("show");
    };


    // close modal on outside click
    window.onclick = function (event) {
        const modal = document.getElementById("reviewModal");

        if (event.target === modal) {
            closeForm();
        }
    };


    // ================= AUDIO =================
    window.playAudio = function () {
        const audio = document.getElementById("welcomeAudio");
        const btn = document.querySelector(".audio-btn");

        if (!audio || !btn) return;

        if (audio.paused) {
            audio.currentTime = 0;
            audio.play();
            btn.innerText = "⏸ Stop Audio";
        } else {
            audio.pause();
            btn.innerText = "▶ Play Audio";
        }
    };

});