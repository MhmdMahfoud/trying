<?php
include('conn.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `user` where userid='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mangment</title>
    

</head>

<body>
    <h2 >Edit</h2>
    <form method="POST" action="update.php?id=<?php echo $id; ?>">
    <div class="s">
        <label>Firstname:</label><br><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname"><br>
        <label>Lastname:</label><br><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname"><br>
        <label>phoneNumber:</label><br><input type="text" value="<?php echo $row['phoneNumber']; ?>" name="phoneNumber"><br>
        <input type="submit" name="submit"><br>
    </div>
    <div class="l">
        <a href="index.php">Back</a>
        <div>
    </form>
</body>

</html>