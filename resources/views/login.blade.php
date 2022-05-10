<html>
    <head>
        <title>Login</title>
    </head> <br><br><br><br><br>
    <h2 align="center"> Login </h1>
    <body style="background-color:Dodgerblue; max-width: max-content; margin: auto;">
    <br><br><br><br><br>
        <?php
        if($errors->any()) {
            echo "<font color='red'>".$errors."</font>";
          }
         ?>
        <form action="/loginSubmit" method="post">
            @csrf 
            
            Phone: <input name="phone" type="text" />
            Password: <input name="password" type="password" />
            <input type="submit" value="Login">
        </form>
    </body>
</html>