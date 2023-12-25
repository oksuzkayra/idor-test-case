<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        require("sql_connect.php");

        //Since authorization is not set, we can view each user's profile page.
        $result=$db->query("SELECT * from users where id='$id'");
        $result = $result->fetch(PDO::FETCH_ASSOC);
	echo "<ul>";	
        echo "<li><b> Username: </b>$result[username]</li><br>";
        echo "<li><b> E-mail: </b>$result[email]</li><br>";
        echo "<li><b> Password: </b>$result[password]</li><br>";
        echo "<li><b> Register Date: </b>$result[created_at]</li>";
        echo "</ul>";
    ?>
</body>
</html>
