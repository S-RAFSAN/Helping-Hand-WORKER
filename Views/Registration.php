<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="registration-page">
        <div class="reg-title">
            <h3 class=""><u>WORKER REGISTRATION</u></h3>
        </div>

        <div class="reg-options">
            <form action="../Controllers/regCheckController.php" method="POST">

                <div class="reg-info">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" placeholder="Your First Name"
                        value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>" />
                </div>

                <div class="reg-info">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" placeholder="Your Last Name"
                        value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ''; ?>" />
                </div>

                <div class="reg-info">
                    <label for="id">User Name:</label>
                    <input type="text" name="user_name" placeholder="Your User Name" value="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] : ''; ?>" />
                </div>

                <div class="reg-info">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Enter your email"
                        value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" />
                </div>

                <div class="reg-info">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter password"
                        value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" />
                </div>

                <div class="reg-info">
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'female') ? 'checked' : ''; ?> /> Female
                    <input type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'male') ? 'checked' : ''; ?> /> Male
                    <input type="radio" name="gender" value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'other') ? 'checked' : ''; ?> /> Other
                </div>

                <div class="reg-info">
                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" name="date_of_birth"
                        value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : ''; ?>" />
                </div>

                <div class="reg-info">
                    <label for="expert_work">Expert at:</label>
                    <div id="expert_work">
                        <label><input type="checkbox" name="expert_work" value="A-"> Sweeping Floor</label>
                        <label><input type="checkbox" name="expert_work" value="A+"> Washing Dishes</label>
                        <label><input type="checkbox" name="expert_work" value="B-"> Doing Laundry</label>
                        <label><input type="checkbox" name="expert_work" value="B+"> Cleaning Toilet</label>
                        <label><input type="checkbox" name="expert_work" value="AB-"> Cooking</label>
                        <label><input type="checkbox" name="expert_work" value="AB+"> Dusting and Polishing</label>
                        
                    </div>
                </div>
                <div id="selectedOptions"></div>

                <script>
                    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                    const selectedOptionsContainer = document.getElementById('selectedOptions');

                    checkboxes.forEach(checkbox => {
                        checkbox.addEventListener('change', function () {
                            const selectedOptions = Array.from(document.querySelectorAll('input[name="expert_work"]:checked')).map(checkbox => checkbox.value);
                            selectedOptionsContainer.innerHTML = '<strong>Selected Blood Groups:</strong> ' + selectedOptions.join(', ');
                        });
                    });
                </script>

                <div class="reg-sign">
                    <button name="submit">Sign Up</button>
                </div>

                <div class="reg-login">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>