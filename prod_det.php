<?php
	$id = $_GET['id'];
 	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 	$data = json_decode($json,true);
 	$details = array('records' => $data);
 	$result = $details['records'];

?>

<link rel="stylesheet" type="text/css" href="">

	<br>
		<h1> PRODUCT DETAILS </h1>
		<br>
	<div class = "tab">
	<table class = "tab_in">
		<tr>
			<td><h2 class = "tab_cont1">Name:</h2></td>
			<td><h2 class = "tab_cont2"><?php echo $result['name']; ?></h2></td>
		</tr>
		<tr>
			<td><h2 class = "tab_cont1">Description: </h2></td>
			<td><h2 class = "tab_cont2"><?php echo $result['description']; ?></h2></td>
		</tr>
		<tr>
			<td><h2 class = "tab_cont1">Price: </h2></td>
			<td><h2 class = "tab_cont2"><?php echo $result['price']; ?></h2></td>
		</tr>
		<tr>
			<td><h2 class = "tab_cont1">Category: </h2></td>
			<td><h2 class = "tab_cont2"><?php echo $result['category_name']; ?></h2></td>
		</tr>
	</table></div>
	<br>
	<div class = "bottom">
<a href="index.php?page=Update&id=<?php echo $id; ?>"><button class="confirm1" value="Update" type="submit">Update</button></a>
<a href="index.php?page=Delete&id=<?php echo $id; ?>"><button class="confirm1" value="Delete" type="submit">Delete</button></a>
</div>
