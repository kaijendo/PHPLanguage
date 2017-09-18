<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
</head>

<body>
<table>
<tr>ID</tr> | <tr>Name</tr> |<tr>Age</tr>| <tr>Phone</tr>
<tr>
<?php foreach ($data as $item) { ?>
<td><?php echo $item["id"] ?> | </td>
<td><?php echo $item["name"] ?> | </td>
<td><?php echo $item["age"] ?> |</td>
<td><?php echo $item["phone"] ?> |</td>
<tr>
<?php }?> 
</table>
</body>
</html>