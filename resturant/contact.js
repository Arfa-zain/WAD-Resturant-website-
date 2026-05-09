document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector("form");

    if (form) {
        form.addEventListener("submit", function (e) {
            const name = document.getElementById("fullName").value.trim();
            const email = document.getElementById("email").value.trim();

            if (name === "" || email === "") {
                e.preventDefault();
                alert("Please fill all required fields.");
            }
        });
    }

});
