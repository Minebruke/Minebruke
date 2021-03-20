<!DOCTYPE HTML>
<html>
 <head>
  <title>Edu Shakirov</title>
 </head>
 <body class="fone">
  <h1  class ="b"align="center">The best student</h1>
 <form action="main.php">
  <div class="container" align="center">
    <h1 align="center">Avtorизейшн</h1>
    <label align="center" for="Eldiyar"><b>Username</b></label>
    <input align="center" type="text" placeholder="Enter Email" class="name" id="name" name="name" required><br/><br/>
    <label align="center" for="1234"><b>Password </b></label>
    <input align="center" type="password" placeholder="Enter Password" class="pass" id="pass" name="pass"required><br/><br/>
    <button align="center" type="submit" value="Submit">Submit</button>
    <button align="center" type="reset" value="Reset">Clear</button><br/><br/>
    </div>
</form>
    <script>
  
      document.forms[0].onsubmit = function(e){
        let login = document.getElementById('name').value;
        let password = document.getElementById('pass').value;
 
        if ( login === "Eldiyar" && password === "1234") 
            alert("Welcome");
        else {
            e.preventDefault();
            alert("Глаза раскрой и пиши правильный пароль или логин");
        }
    };
    
  </script> 

  <style>
   .container {
   background: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);
   border-radius: 25px;
   width: 700px;
   margin: auto;
   }
   .fone {
    background-image: url(back.jpg);
}
  .b {
    color: white;
}
  </style>
 </body>
</html>
   .container {
   background: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);
   border-radius: 25px;
   width: 700px;
   margin: auto;
   }
  </style>
 </body>
</html>
