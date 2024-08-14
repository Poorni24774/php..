<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Form</title>

</head>
<body>
    <div class="container">
        <h1>Submit Form</h1>
        <form action="data.php" method="POST">
            <input type="hidden" id="action" name="action" value="insert">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required><br><br>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required><br><br>

            <input type="submit" value="Submit">
        </form>
        <div>
            <?php include 'view.php'; ?>
        </div>
    </div>
</body>
</html>