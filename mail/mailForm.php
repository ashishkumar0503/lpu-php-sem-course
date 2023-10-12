<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Form</title>
</head>
<body>
    <form action="outputMail.php" method="POST">
        <h5>Mail Form</h5>
        <label>To:</label>
        <input type="email" name="to" placeholder="Enter email"><br><br>
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter name"><br><br>
        <label>Subject:</label>
        <input type="text" name="subject" placeholder="Enter subject"><br><br>
        <label>Message:</label>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter message"></textarea><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>