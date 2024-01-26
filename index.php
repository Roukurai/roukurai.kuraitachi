<!-- index.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Roukurai - Landing Page</title>
</head>

<body>
    <header>
        <h1>Roukurai</h1>
        <p>Under construction</p>
    </header>

    <div class="main-container">
        <section class="landing-content">
            <h2>Welcome to my Landing Page!</h2>
            <p>This is a placeholder for future content. Check back soon for updates!</p>
            <button onclick="redirectToResume()">View CV</button>
        </section>

        <section>
            <h2>This is test</h2>
            <p>This is test as well</p>
            <button onclick="redirectToGame()">Test Bakemono Legacy 0.0.2</button>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Kurai Tachi</p>
    </footer>

    <script>
        function redirectToResume() {
            // Redirect to the resume page (resume.php)
            window.location.href = 'resume.php';
        }

        function redirectToGame() {
            window.location.href='/games/bakemono_legacy/0.0.2/index.html';
        }
    </script>
</body>

</html>
