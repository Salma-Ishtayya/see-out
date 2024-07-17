<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
  }
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  .form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
  }
  .form-container h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  .form-group input[type="text"],
  .form-group input[type="password"],
  .form-group input[type="email"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  .btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .btn:hover {
    background-color: #0056b3;
  }
  .hidden {
    display: none;
  }
</style>
</head>
<body>

<div class="container">
  <div id="firstContainer" class="form-container">
    <h2>Sign Up - Step 1</h2>
    <form action="formhandler.ali.copy.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="cpassword" required>
    </div>
    <button class="btn" onclick="validateStep1()">Next</button>
  </div>
</form>
<form action="formhandler.ali.copy.php" method="post">
  <div id="secondContainer" class="form-container hidden">
    <h2>Sign Up - Step 2</h2>
    <div class="form-group">
      <label for="configCode">Configuration Code:</label>
      <input type="text" id="configCode" required>
    </div>
    <button class="btn" onclick="submitForm()">Submit</button>
    <button class="btn" onclick="showFirstContainer()">Back</button>
  </div>
</div>
</form>
<script>
  function validateStep1() {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const  configCode= document.getElementById('configCode').value;

    
    if (username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
      alert('Username must be at least 5 characters long and contain only letters or numbers.');
      return;
    }

    if (password.length < 8 || !/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/\d/.test(password) || !/[^a-zA-Z0-9]/.test(password)) {
      alert('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.');
      return;
    }

    if (password !== confirmPassword) {
      alert('Passwords do not match.');
      return;
    }

    document.getElementById('firstContainer').classList.add('hidden');
    document.getElementById('secondContainer').classList.remove('hidden');
  }

  function submitForm() {
    const configCode = document.getElementById('configCode').value;
    
    console.log('Username:', document.getElementById('username').value);
    console.log('Email:', document.getElementById('email').value);
    console.log('Password:', document.getElementById('password').value);
    console.log('confirmPassword:', document.getElementById('confirmPassword').value);
    console.log('code:', document.getElementById('configCode').value);


    
    

    // Here you can handle submission of the form, e.g., sending data to a server

    alert('Form submitted successfully! Configuration Code: ' + configCode);
  }

  function showFirstContainer() {
    document.getElementById('secondContainer').classList.add('hidden');
    document.getElementById('firstContainer').classList.remove('hidden');
  }
</script>

</body>
</html>
