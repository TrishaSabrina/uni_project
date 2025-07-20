function validatePasswords() {
  const pw = document.getElementById("pass").value;
  const confirmPw = document.getElementById("confirm_password").value;

  if (pw !== confirmPw) {
    alert("Passwords do not match!");
    return false;
  }
  return true;
}
