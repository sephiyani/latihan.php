<html>
    <head><title>Login</title></head>
    <body>
    <FORM ACTION="" METHOD="POST" NAME="input">
    Email <input type="text " name="login"><br>
    password <input type="password" name="password"><br>
    <input type="submit" name="Input"  value="Input">
    </FORM>
    </body>
    </html>
    
    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['login'];
        $pass = $_POST['password'];
        if ($user == "admin@gmail.com" && $pass == "123456"){
            echo "<h2> Login Berhasil </h2>";
        } else {
            echo "<h2> Login Gagal </h2>";
    }
}
    ?>