<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/global/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div style="height: 11.5vh;"></div>

    <div>
        <form action="/src/register.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <button>Submit</button>
        </form>

        <h1><span>Pitshop SignUp</span><br>Your pitstop, for a quick shop</h1>
    </div>

    <div style="height: 10px;"></div>

    <a href="/login">Already have an account?</a>
</body>

</html>