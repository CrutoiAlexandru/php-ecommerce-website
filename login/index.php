<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Welcome</h1>

    <form action="/src/auth.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Password</label>
        <input type="password" name="password">

        <button>Submit</button>
    </form>

    <div style="height: 10px;"></div>

    <a href="/src/register.php">Don't have an account yet?</a>
</body>

</html>