<?php
// internship-home.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Internship Environment Setup - Pandu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f7f8;
            color: #333;
            margin: 0; padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 2rem 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 480px;
            text-align: center;
        }
        h1 {
            color: #007bff;
            margin-bottom: 0.5rem;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }
        footer {
            margin-top: auto;
            padding: 1rem 0;
            font-size: 0.9rem;
            color: #777;
        }
        .highlight {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Pandu's PHP Internship!</h1>
        <p>This environment has been successfully set up using:</p>
        <ul style="text-align: left;">
            <li><strong>XAMPP</strong> (Apache + MySQL)</li>
            <li><strong>PHP</strong> version: <?php echo phpversion(); ?></li>
            <li><strong>phpMyAdmin</strong> for database management</li>
            <li><strong>VS Code</strong> as the code editor</li>
        </ul>
        <p class="highlight">Ready to build amazing web apps!</p>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Pandu | Internship Task 1 - Environment Setup
    </footer>
</body>
</html>
