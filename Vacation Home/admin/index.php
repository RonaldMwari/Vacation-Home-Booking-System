
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/common.css">
    <style>



        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
        .brand-text {
            text-align: center;
            margin-bottom: 50px; /* Adjust the margin to move the text lower */
            font-size: 2em;
            color: white
        }

    </style>
</head>
<body class="bg-dark">

<<div class="brand-text">
        <h2>Divine Homes</h2>
    </div>

    <div class="login-form text-center rounded bg-white overflow-hidden shadow">
        <form method="POST" action="admin_login.php">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" name="admin_name" required class="form-control shadow-none text-center" placeholder="Admin Name" >
                </div>
                <div class="mb-4">
                    <input type="password" name="admin_pass" required class="form-control shadow-none text-center" placeholder="Password" >
                </div>
                <button type="submit" name="login" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>

        <?php if (!empty($authenticationMessage)): ?>
            <div class="text-danger"><?php echo $authenticationMessage; ?></div>
        <?php endif; ?>


    </div>
 
</body>
</html>