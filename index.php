
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techfinder | Find your PC components!</title>
</head>
<body>
    <header>
        <nav>
            <!-- No links added just yet. -->
            <a href="#"><button>Home</button></a>
            <a href="#"><button>About</button></a>
            <a href="#"><button>Contact</button></a>
        </nav>
    </header>


    <main>

    <section class="loginsec">
        <h2>Good to have you back!</h2>
        <form action="include/login.inc.php" method="post">
            <label for="uid">Email or Username</label>
            <input type="text" name="uid" id="uid" required>
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>


    <br>


    <section class="signupsec">
        <h2>Sign up to TechFinder!</h2>
        <form action="include/signup.inc.php" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>


    </main>


    <footer>Developed by Dev Gustavo Ferreira&copy;</footer>
</body>
</html>