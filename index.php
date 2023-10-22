<?php
$error = "";
if (isset($_POST['Send'])){
    if (!preg_match('/^\w+$/', $_POST['login'])) {
        $error = "login error";
    }
    else {
        if ($_POST['login'])
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="login" id="login">
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" name="Send" value="Send">
    </form>
</body>

</html>