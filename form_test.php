<!DOCTYPE html>
<html>
<head>
        <title>The form test!</title>
</head>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['username'];
            echo "Hello $name";
        }
    ?>
    <form action="form_test.php" method="POST">
        Name: <input type="text" name="username">
        <input type="submit" name="send" value="Submit">
    </form>

</body>
</html>