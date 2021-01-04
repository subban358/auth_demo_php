<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="signup_db.php" method="POST">
        <table>
            <tr>
                <td><label for="username">Enter Username:</label></td>
                <td><input type="text" name="username" autocomplete="off"/></td>
            </tr>
            <tr>
                <td><label for="password">Enter Password:</label></td>
                <td><input type="password" name="password" autocomplete="off"/></td>
            </tr>
            <tr>
                <td><input type="submit"/></td>
            </tr>
        </table>
    </form>
</body>
</html>