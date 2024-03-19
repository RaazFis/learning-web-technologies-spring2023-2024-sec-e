<!-- reviews.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews - Travel Agency</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
        }

        .review {
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
        <h1>Reviews - Travel Agency</h1>
    </header>

    <section>
        <?php
        // Assuming you have a database connection
        // Fetch and display reviews from the database
        // Modify this section based on your actual database structure and connection
        $dbReviews = [
            ['user' => 'John Doe', 'rating' => 5, 'comment' => 'Excellent service and amazing destinations!'],
            ['user' => 'Jane Smith', 'rating' => 4, 'comment' => 'Great experience, but room for improvement.'],
            // Add more reviews as needed
        ];

        foreach ($dbReviews as $review) {
            echo '<div class="review">';
            echo '<p><strong>' . $review['user'] . '</strong> rated us ' . $review['rating'] . ' stars</p>';
            echo '<p>' . $review['comment'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </footer>
</body>
</html>
