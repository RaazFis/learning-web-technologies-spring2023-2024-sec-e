<!-- points.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Collection - Travel Agency</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
        }

        section {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Point Collection - Travel Agency</h1>
    </header>

    <section>
        <?php
        // Assuming you have a database connection
        // Fetch and display user's points from the database
        // Modify this section based on your actual database structure and connection
        $userPoints = 150; // Replace with actual user points

        echo '<p>Your current points: ' . $userPoints . '</p>';
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </footer>
</body>
</html>
