<!DOCTYPE HTML>
<html>
 <head>
 <title>Edu Shakirov</title>
 </head>
 <body class="fone">
  <h1  class ="b"align="center">The best student</h1>
  <formaction="main.php">
 <div class="container" align="center">
 <title>Shakirov Eldiyar SCA-18</title>
</head>
<body>

  <div class="container mt-4">
    <div class="row">
      <div class="col">
        <h1>Регистрейшн</h1>
        <form action="check.php" method="post">
          <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
          <input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
          <button class="btn btn-success">Регистрация</button><br>
        </form> 
      </div>
      
      <div class="col">
        <h1>Авторизейшн</h1>
        <form action="auth.php" method="post">
          <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
          <button class="btn btn-success">Войти</button><br>
        </form> 
      </div>

    </div>
  </div>
 </div>
</form>

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
</html
