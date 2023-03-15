<?php
session_start();

if(isset($_SESSION['submit'])){
    header("location: beranda.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="beranda.php" method="post">
        <table>
            <tr>
                <td><label for="email">email: </label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="pass">password: </label></td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
        </table>

            <button type="submit" name="submit">Kirim euy</button>

</form>

</body>
</html>