<html>
<head></head>
<body>
<form action = "index.php?controller=Controller&action=editPost&id=<?php echo $result['id']?>" method ="POST">

Name: <input type = "text" name = "name" value = "<?php echo $result['name'] ?>">
Age: <input type = "text" name = "age" value = "<?php echo $result['age']?>">
Phone: <input type = "text" name = "phone" value = "<?php echo $result['phone']?>">
<input type= "submit" name = "post" value ="sua">
</form>
</body>
</html>
