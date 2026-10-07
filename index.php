<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h1>Student Registration Form</h1>

    <form action="save.php" method="POST">

        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone" required>
        <br><br>

        <label>Message:</label>
        <textarea name="message" rows="5" cols="30" required></textarea>
        <br><br>

        <button type="submit">Register</button>

    </form>

</body>
</html>