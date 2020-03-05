<?php
	$id = $_GET['id'];
 	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 	$data = json_decode($json,true);
 	$details = array('records' => $data);
 	$result = $details['records'];
?>

<link rel="stylesheet" type="text/css" href="">

<html>
	<head>
		<title> Delete Confirm </title>
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		<br>
		<br>
		<center><h1>Are you sure to delete :><?php echo $result['name']?>?</h1></h1></center>
		<br>
		<form action = "process_delete.php?id=<?php echo $id?>" method = "POST">
			<center><input class="confirm1" type="Submit" name="Submit" value="Yes"></center>
		</form>
		<form action="index.php?page=Product">
				<center><button class="confirm1" type="submit"> No </button></center>
		</form>
	</body>
</html>
