<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
   <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
   <a href="logout.php" >Logout</a>
   
</body>
</html>
<?php 
}else{
    header("Location: index.php");
    exit();
}
?>