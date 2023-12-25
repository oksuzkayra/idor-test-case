<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        require("sql_connect.php");
        //Since authorization is not set, we can view each user's profile page.
        $result=$db->query("SELECT * from users where id='$id'");
        $result = $result->fetch(PDO::FETCH_ASSOC);
        echo "<b> Username: </b>$result[username]<br>";
        echo "<b> E-mail: </b>$result[email]<br>";
        echo "<b> Password: </b>$result[password]<br>";
        echo "<b> Register Date: </b>$result[created_at]";
        
    ?>
</body>
</html>