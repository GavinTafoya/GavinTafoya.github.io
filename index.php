<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My PHP Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Home Page</h2>
            <p>Welcome to our website!</p>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website. All rights reserved.</p>
    </footer>
</body>
</html>
