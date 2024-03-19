<!-- notifications.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications - Travel Agency</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
        }

        .notification {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Notifications - Travel Agency</h1>
    </header>

    <section>
        <?php
        // Assuming you have a database connection
        // Fetch and display notifications from the database
        // Modify this section based on your actual database structure and connection
        $dbNotifications = [
            ['message' => 'Your booking has been confirmed!', 'date' => '2024-03-03'],
            ['message' => 'Special offer on vacation packages this week!', 'date' => '2024-03-02'],
            // Add more notifications as needed
        ];

        foreach ($dbNotifications as $notification) {
            echo '<div class="notification">';
            echo '<p>' . $notification['message'] . '</p>';
            echo '<p><em>Sent on ' . $notification['date'] . '</em></p>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </footer>
</body>
</html>
