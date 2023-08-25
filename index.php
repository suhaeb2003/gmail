<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact From with php </title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="getinfo.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id=""><br><br>
                <label for="email">Email</label>
                <input type="email" name="email" id=""><br><br>
                <label for="phn">Phone Number</label>
                <input type="tel" name="phn" id=""><br><br>
                <label for="msg">Message</label><br>
                <textarea name="msg" id="" cols="30" rows="10"></textarea><br><br>
                <input type="submit" name="send" value="Send"><br><br>
            </form>
            <div class="success">
            <?php if (isset($_REQUEST["send"])) {
                echo "<p>Your Message is received successfully.</p>";
            } ?>
            </div>
        </div>
    </div>
</body>
</html>