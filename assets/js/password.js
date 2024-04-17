// JavaScript code to toggle password visibility

const passwordInput = document.getElementById("password-input");
const togglePassword = document.getElementById("toggle-password");

togglePassword.addEventListener("click", function() {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
});
