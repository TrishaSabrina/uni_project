const form = document.querySelector("form");
form.addEventListener("submit", function (event) {
  event.preventDefault(); // prevent default form submission behavior

  // validate username and password
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  if (username === "trisha" && password === "trisha123") {
    alert("Login successful!");
    window.location.href = "buy.html";
  } else {
    alert("Username or password incorrect. Please try again.");
  }
});

function handleSubmit(event) {
  event.preventDefault();

  const userName = document.getElementById("usrname").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("pass").value;
  const confirmPassword = document.getElementById("confirm_password").value;

  // Simple client-side validation
  if (password !== confirmPassword) {
    alert("Passwords do not match!");
    return;
  }
  function showSuccessAndRedirect() {
    document.getElementById("message").innerText =
      "Your account has been created successfully!";
    setTimeout(function () {
      window.location.href = "./login.html";
    }, 1000);
  }
  showSuccessAndRedirect();
  document.getElementById("signupForm").reset();
}
