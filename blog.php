<!-- blog.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog - Travel Agency</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
        }

        .blog-post {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }

        .button-container {
            text-align: center;
        }

        .button-container a {
            text-decoration: none;
            color: #fff;
        }

        .add-post-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Travel Blog - Travel Agency</h1>
    </header>

    <div class="button-container">
        <button class="add-post-button"><a href="add_post.php">Add New Post</a></button>
    </div>

    <section>
        <?php
        // Assuming you have a database connection
        // Fetch and display blog posts from the database
        // Modify this section based on your actual database structure and connection
        $dbPosts = [
            ['title' => 'Exploring Paradise Beach', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...', 'author' => 'John Doe', 'date' => '2024-03-03'],
            ['title' => 'A Journey Through the Mountains', 'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...', 'author' => 'Jane Smith', 'date' => '2024-03-02'],
            // Add more posts as needed
        ];

        foreach ($dbPosts as $post) {
            echo '<div class="blog-post">';
            echo '<h2>' . $post['title'] . '</h2>';
            echo '<p>By ' . $post['author'] . ' on ' . $post['date'] . '</p>';
            echo '<p>' . $post['content'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </footer>
</body>
</html>
