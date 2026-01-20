document.addEventListener("DOMContentLoaded", function () {

    const submitBtn = document.querySelector(".submit-btn");

    submitBtn.addEventListener("click", function (e) {
        e.preventDefault();  // stop form submission

        let firstName = document.querySelector("input[placeholder='First Name']").value.trim();
        let lastName = document.querySelector("input[placeholder='Last Name']").value.trim();
        let userName = document.querySelector("input[placeholder='User Name']").value.trim();
        let email = document.querySelector("input[placeholder='Email']").value.trim();
        let contact = document.querySelector("input[placeholder='Contact Number']").value.trim();
        let genderButtons = document.querySelectorAll(".gender-btn");
        let ageValue = document.querySelector(".age-slider").value;
        let password = document.querySelector("input[placeholder='Password']").value;
        let confirmPassword = document.querySelector("input[placeholder='Confirm Password']").value;

        // Validation
        if (firstName === "") return alert("Please enter First Name");
        if (lastName === "") return alert("Please enter Last Name");
        if (userName === "") return alert("Please enter User Name");

        if (email === "" || !email.includes("@"))
            return alert("Enter a valid Email with @");

        if (contact === "" || isNaN(contact))
            return alert("Contact number must contain digits only");

        // Gender check
        let genderSelected = false;
        genderButtons.forEach(btn => {
            if (btn.classList.contains("active")) {
                genderSelected = true;
            }
        });

        if (!genderSelected)
            return alert("Please select your Gender");

        if (ageValue < 1)
            return alert("Please select an Age");

        // Password validation
        if (password.length < 6)
            return alert("Password must be at least 6 characters");

        if (password !== confirmPassword)
            return alert("Passwords do not match");

        alert("Profile Updated Successfully!");
    });

    // Gender Button Toggle
    const genderBtns = document.querySelectorAll(".gender-btn");

    genderBtns.forEach(btn => {
        btn.addEventListener("click", function () {
            genderBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
        });
    });

});
