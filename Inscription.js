const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");

//   js code to show/hide password and change icon
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            if (pwField.type === "password") {
                pwField.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                })
            } else {
                pwField.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})

// js code to appear signup and login form
signUp.addEventListener("click", () => {
    container.classList.add("active");
});
login.addEventListener("click", () => {
    container.classList.remove("active");
});

// js code to check matching passwords field
function validate() {
    var pass = document.getElementById('password').value;
    var checked = document.getElementById('check');
    var passcheck = false;

    if (pass.match(/[a-z]/g) && pass.match(/[A-Z]/g) && pass.match(/[0-9]/g) && pass.length >= 8) {
        checked.classList.remove("notgood")
        checked.classList.add("good");
        passcheck = true;
    } else {
        checked.classList.remove("good")
        checked.classList.add("notgood");
        passcheck = false;
    }
}

function samePassword() {
    var pass1 = document.getElementById('password').value;
    var pass2 = document.getElementById('password2').value;
    var bouton = document.getElementById('bouton');

    if (pass1 === pass2) {
        bouton.disabled = false;
    } else {
        bouton.disabled = true;
    }
}