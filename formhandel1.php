<?php 

if(isset($_POST["login"])){//button click , value send
    $username=$_POST["username"];//name
    $password=$_POST["password"];//name

    echo "username is {$username}";
    echo "<br/>";
    echo "password is {$password}";
}

echo "<hr/>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Handelaing 1</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">

    <table border="1">
    <thead>
        <tr>
            <th colspan="2">Login Form</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><label for="username">User Name</label>
            </td>
            <td><input type="text"  name="username" id="username" class="" required />
            </td>
        </tr>
        <tr>
            <td><label for="password">Password</label>
            </td>
            <td><input type="password"  name="password" id="password" class="" required />
            </td>
        </tr>
    </body>
    <tfoot>
        <tr>
            <td colspan="2" align="right"><input type="reset" name="reset" id="reset" class="" value="Reset" />
                <input type="submit" name="login" id="login" class="" value="Login" />
            </td>
        </tr>
    </foot>
    </table>    
    </form>
</body>
</html>
