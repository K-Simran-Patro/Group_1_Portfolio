<?php
include 'fetch_data.php';

// Check if there is a message in the query string
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($user_data['name']); ?>'s Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1 class="title"><?php echo htmlspecialchars($user_data['name']); ?>'s Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="about" class="section">
        <h2>About Me</h2>
        <p><?php echo htmlspecialchars($user_data['about']); ?></p>
    </section>
    
    <section id="projects" class="section">
        <h2>Projects</h2>
        <?php foreach ($projects_data as $project): ?>
            <div class="project">
                <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </section>
    
    <section id="contact" class="section">
        <h2>Contact Me</h2>
        <form action="contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
        <?php if ($message): ?>
            <script>
                alert("<?php echo $message; ?>");
            </script>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2024 <?php echo htmlspecialchars($user_data['name']); ?>'s Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>
