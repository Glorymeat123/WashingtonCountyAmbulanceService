<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace these with your actual credentials
    $valid_username = 'Tfloyd';
    $valid_password = 'WCAS2024!';

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: director_dashboard.html');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director Login - Washington County Ambulance Service</title>
    <link rel="stylesheet" href="public/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ADD8E6; /* Baby blue background */
        }
        header {
            background-color: #0000FF; /* Blue */
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .left, .right {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            background-color: black; /* Black text box */
            color: gold; /* Gold text */
            border-radius: 5px;
            margin: 10px;
        }
        .section-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .mission-statement {
            font-size: 1.2em;
            margin-top: 20px;
            background-color: black; /* Black text box */
            color: gold; /* Gold text */
            padding: 10px;
            border-radius: 5px;
        }
        .mission-statement p {
            color: black; /* Black text for the statements */
        }
        .form-container {
            background-color: black; /* Black text box */
            color: gold; /* Gold text */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }
        .form-container input[type="text"], 
        .form-container input[type="password"],
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0000FF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0000CC;
        }
        .image-placeholder {
            width: 40%;
            height: auto;
            background-color: #ccc;
            border-radius: 5px;
            margin: 0 auto 20px;
            display: block;
        }
        footer {
            background-color: #f1f1f1;
            padding: 10px 0;
            text-align: center;
        }
        @media (max-width: 600px) {
            nav ul li {
                display: block;
                margin-bottom: 10px;
            }
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Washington County Ambulance Service</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="employee.html">Employee</a></li>
                <li><a href="training.html">Training Department</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="director.html">Director</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="director" class="container">
            <div class="left">
                <h2 class="section-title">Tony Floyd</h2>
                <div class="image-placeholder">Placeholder for Tony Floyd's Picture</div>
                <p>Tony Floyd, a highly educated provider with many years of experience as a paramedic, leads our team with dedication and expertise. His commitment to excellence in emergency medical care ensures that our community receives the highest quality service. Tony's extensive knowledge and compassionate approach make him a respected leader in the field.</p>
            </div>
            <div class="right">
                <h2 class="section-title">Director's Statement</h2>
                <p>"At Washington County Ambulance Service, we strive to provide the best emergency medical services with state-of-the-art equipment and protocols. Our team is dedicated to maintaining the highest standards of care and professionalism. We are committed to serving our community with integrity and compassion." - Tony Floyd</p>
            </div>
        </section>

        <section class="form-container">
            <h2>Director Login</h2>
            <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Washington County Ambulance Service</p>
    </footer>
</body>
</html>
