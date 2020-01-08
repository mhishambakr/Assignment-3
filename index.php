<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="handle_login.php" method="POST">  
        <label for="username">Username:</label>
        <input type="username" name="username" id="username" placeholder="Please Enter your Username"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Please Enter your Email"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Please Enter your Password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must include small, capital letters and a minimum of 8 characters"><br>
        <input type="submit" name="login">
    </form>
</body>
</html>