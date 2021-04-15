<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-aut.css" type="text/css">
    <title>Авторизация</title>
</head>
<body>
  <!-- login-box -->  
  <div class="login-box">
    <h2>Авторизация</h2>
    <form method="POST" action="conect.php">
      <div class="user-box">        
      <input type="text" name="login" id="login">
        <label>Логин</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" id="password">
        <label>Пароль</label>
      </div>
      <button type="submit" id="btnEnter" >
        <span></span> 
        <span></span>
        <span></span>
        <span></span>
        Войти
      </button>
    </form>
  </div>
  <!--/.login-box -->

  <script src="js/jquery-1.8.3.min.js"></script>
</body>

</html>