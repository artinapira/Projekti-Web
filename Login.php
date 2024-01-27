<?php

session_start();

include_once 'controller/registerController.php';
include_once 'models/user.php';
include_once 'repository/userRepository.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRepository = new UserRepository();
    $users = $userRepository->getAllUsers();

    // Check if the user exists
    $userExists = false;
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $userExists = true;

            var_dump($user);

            $userType = str_replace("'", "", $user['user_type']);
            // Check the user type
            if ($user['user_type'] == 'admin') {
                $_SESSION['admin_id'] = $user['id'];
                header('location: admin_destinations.php');
                exit();
            } elseif ($user['user_type'] == 'user') {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['password'] =$user['password'];
                header('location: home.php');
                exit();
            } else {
                $message[] = 'Invalid user type: ' . $user['user_type'];
            }
            break; // Break out of the loop once the user is found
        }
    }

    if (!$userExists) {
        $message[] = 'Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swissaround</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <box-icon type='solid' name='envelope'></box-icon>
</head>
<body>
<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<div class="message">' . $msg . '</div>';
    }
}
?>   
   
        <div class="wrapper">
            <div class="form-box login">
                <h1>Login</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="inputbox">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
                <div class="error-message" id="usernameError"></div>
            </div>
            <div class="inputbox">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
                <div class="error-message" id ="passwordError"></div>

            </div>
           
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me
                </label>
                <a href="#">Forgot password? </a>
            </div>
            <button type="submit" class="btn" name="submit" onclick="validateForm()"> Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="signup.php" class="register-link">Register</a></p>
            </div>
                <p class="liw">Log in with</p>
                <div class="contanier"></div>
            
            <div class="icons">
                <a href="https://www.facebook.com/"><ion-icon name ="logo-facebook"></ion-icon></a>
                <a href="https://www.instagram.com/"><ion-icon name ="logo-instagram"></ion-icon></a>
                <a href="https://twitter.com/"><ion-icon name ="logo-twitter"></ion-icon></a>
                <a href="https://www.google.com/"><ion-icon name ="logo-google"></ion-icon></a>
                <a href="https://www.skype.com/en/"><ion-icon name ="logo-skype"></ion-icon></a>

            </div>
    </form>
        </div>
       <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

        <script>
            let usernameRegex = /^[A-Z][a-z]{7,15}$/;
            let passwordRegex = /[a-zA-Z0-9]{8,15}$/;
            function validateForm() {
                let usernameInput = document.getElementById('username');
                let passwordInput = document.getElementById('password');

                usernameError.innerText = '';
                passwordError.innerText = '';

         
                if (!usernameRegex.test(usernameInput.value)) {
                    usernameError.innerText = 'invalid username';
                    return false;
                }
            
                if (!passwordRegex.test(passwordInput.value)) {
                    passwordError.innerText = 'invalid password';
                    return false;
                }
                return true;
            }
        </script>
</body>
</html>