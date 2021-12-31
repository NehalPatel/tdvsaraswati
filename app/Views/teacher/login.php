<html>
    <head>
        <title>Teacher Login</title>
    </head>
    <body>
        <center>
            <form method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    <?php if($_SESSION['failed']==1) { ?>
                    <tr>
                        <td></td>
                        <td><p>Invalid Username or Password</p></td>
                    </tr>
                    <?php unset($_SESSION['failed']); } ?>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>