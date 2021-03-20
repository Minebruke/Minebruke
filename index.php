<!DOCTYPE HTML>
<html>
 <head>
  <title>Edu Shakirov</title>
 </head>
 <body style="background-color:powderblue;">
  <h1>The best student</h1>
 <form action="main.php">
  <div class="container">
    <h1>Register</h1>
    <label for="Eldiyar"><b>login</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <label for="1234"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <br>
    <button type="submit" value="Submit">Submit</button> 
    <button type="reset" value="Reset">Clear</button>
    </div>
</form>
    <script>
  
      document.forms[0].onsubmit = function(e){
        let login = document.getElementById('fname').value;
        let password = document.getElementById('fpass').value;
 
        if ( login === "Eldiyar" && password === "1234") 
            alert("Welcome");
        else {
            e.preventDefault();
            alert("Глаза раскрой и пиши правильный пароль или логин");
        }
    };
    
  </script> 
 </body>
</html>

