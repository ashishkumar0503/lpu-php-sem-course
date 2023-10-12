<!DOCTYPE html>
<html>
<head>
    <title>$_REQUEST SuperGlobal Demo</title>
</head>
<body>

<h1>$_REQUEST SuperGlobal Demo</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_REQUEST['username'];
    echo "<p>Username submitted: $username</p>";
}
?>

</body>
</html>
