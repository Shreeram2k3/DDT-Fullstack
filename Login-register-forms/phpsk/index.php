<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form action="./login.php" method="POST">
        <h3>login</h3>
        <input type=text name="username" placeholder="Username"><br>
        <input type=text name="pass" placeholder="password"><br>
        <button>submit</button>
    </form>
    <form action="./reg.php" method="POST">
    <h3>reg</h3>
        <input type=text name="username" placeholder="Username"><br>
        <input type=email name="email" placeholder="email"><br>
        <input type=text name="pass" placeholder="password"><br>
        <input type=text name="cpass" placeholder="confirm password"><br>
        <button>submit</button>
    </form>
</body>
</html>