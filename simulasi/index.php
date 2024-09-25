<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="../simulasi/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <form action="../simulasi/proses_login.php" method="post">
        <div class="login-container">
            <div class="box">
                <div class="container">
                    <div class="top-header">
                        <header>Login</header>
                    </div>

                    <input type="text" placeholder="Username" name="username" value="" required>
                    <input type="password" placeholder="Password" name="password" value="" required>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>