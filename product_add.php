<?php
	$jsonCategory = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$categoryData = json_decode($jsonCategory,true);
	$category = $categoryData['records'];

?>

<link rel="stylesheet" type="text/css" href="">

<form method="POST" action="process_create.php">
	<br>
	<center><h1 class = "hala"> ADD PRODUCT </h1><center>
	<hr style ="width: 70%;">
	<br>
	<table style="border: 3px white double;">
		<tr>
			<td><h1 class = "ad">Name:</h1></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><h1 class = "ad">Description: </h1></td>
			<td><input type="text" name="description"></td>
		</tr>
		<tr>
			<td><h1 class = "ad">Price: </h1></td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td><h1 class = "ad">Category: </h1></td>
			<td><select type="text" name="category">
					<option value="" selected> ---Category--- </option>
				<?php
					foreach($category as $catSelect)
					{
				?>
					<option value="<?php echo $catSelect['id']; ?>"> <?php echo $catSelect['name']; ?> </option>
				<?php
					}
				?>
			</select></td>
		</tr>
	</table>
	<input class = "confirm1" type = "submit" value = "Submit" name = "Submit"/>
	<?php
		if(isset($Submit)){
		$name = $_REQUEST['name'];
		$desc = $_REQUEST['description'];
		$price = $_REQUEST['price'];
		$cat = $_REQUEST['category'];

		if($name == "" && $desc == "" && $price == ""){
			$message = "Sorry you have inserted invalid information!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	?>
</form>
