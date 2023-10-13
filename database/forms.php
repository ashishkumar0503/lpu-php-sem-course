<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <form action="savedb.php" method="POST">
        <h1>Student Form</h1>
        <label>Database: </label>
        <input type="text" name="database" value="LPU"><br><br>
        <label>Table: </label>
        <input type="text" name="table" value="student"><br><br>
        <label>Name: </label>
        <input type="text" name="name" placeholder="Enter name"><br><br>
        <label>Email: </label>
        <input type="email" name="email" placeholder="Enter email"><br><br>
        <label>Marks: </label>
        <input type="number" name="marks" placeholder="Enter marks"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>