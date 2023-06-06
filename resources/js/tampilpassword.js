const passwordInput = document.getElementById("passwordInput");
const togglePassword = document.getElementById("togglePassword");

togglePassword.addEventListener("click", function () {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    togglePassword.classList.add("hide");
  } else {
    passwordInput.type = "password";
    togglePassword.classList.remove("hide");
  }
});
