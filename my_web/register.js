function validateForm() {
    // Get all the input elements
    var fname = document.getElementById('fname');
    var mname = document.getElementById('mname');
    var surname = document.getElementById('surname');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('password_confirmation');
    var email = document.getElementById('email');
    var mobile = document.getElementById('mobile');
  
    // Check if all fields are filled
    if (isEmpty(fname) || isEmpty(mname) || isEmpty(surname) || isEmpty(username) || isEmpty(password) || isEmpty(confirmPassword) || isEmpty(email) || isEmpty(mobile)) {
      alert("Please fill all the required fields!");
      return false;
    }
  
    // Validate email format
    if (!validateEmail(email.value)) {
      alert("Please enter a valid email address!");
      return false;
    }
  
    // Validate password length and complexity
    /* if (!validatePassword(password.value)) {
      alert("Password must be at least 10 characters long and contain a combination of letters, numbers, and special characters!");
      return false;
    } */
  
    // Check password confirmation
    if (password.value !== confirmPassword.value) {
      alert("Passwords do not match!");
      return false;
    }
  
    // All validations passed, allow form submission
    return true;
  }
  
  function isEmpty(field) {
    return field.value.trim() === "";
  }
  
  function validateEmail(email) {
    const emailRegexregex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRegexregex.test(String(email).toLowerCase());
  }
  
  function validatePassword(password) {
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\da-zA-Z])\w{10,}$/;
    return passwordRegex.test(password);
  }
  