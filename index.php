<!DOCTYPE HTML>
<html>
 <head>
  <title>Edu Shakirov</title>
 </head>
 <body style="background-color:;">
  <div style="background-image: url('https://yandex.ru/images/search?pos=2&from=tabbar&img_url=https%3A%2F%2Fwww.ppt-backgrounds.net%2Fthumbs%2Fwallpaper-web-fractal21s-3dfiction-images-4k-full---design-ppt.jpeg&text=фоновое+красивое+изображение+для+сайта&rpt=simage');">
  <h1>The best student</h1>
 <form action="main.php">
  <div class="container">
    <h1>Register</h1>
    <label for="Eldiyar"><b>login</b></label>
    <input type="text" placeholder="Enter Email" class="name" id="name" name="name" required>
    <label for="1234"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" class="pass" id="pass" name="pass"required>
    <br>
    <button type="submit" value="Submit">Submit</button> 
    <button type="reset" value="Reset">Clear</button>
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
 </body>
</html>

