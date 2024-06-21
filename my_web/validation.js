javascript
function courseValidation() {
  const form = document.login_form;
  const username = form.username.value;
  const password = form.password.value;

  if (username === "" && password === "") {
    alert("Username and password are required");
    return false;
  }

  if (username === "") {
    alert("Username is required");
    return false;
  }

  if (password === "") {
    alert("Password is required");
    return false;
  }

  // If no alerts were triggered, the input is valid
  return true;
  
}



