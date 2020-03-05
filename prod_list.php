<?php
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
 	$data = json_decode($json,true);

	$search = (isset($_POST['search']) && $_POST['search'] != '') ? $_POST['search'] : '';

	if(isset($search)){
	$prodsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$rec = json_decode($prodsearch,true);

	$list = $rec['records'];

 }else{
	$list = $data['records'];
	$message = "Sorry you have inserted invalid information!";
	echo "<script type='text/javascript'>alert('$message');</script>";
 }

?>
<div class = "e">
<center><h1>PRODUCT LIST</h1></center>
<center><form class = "ge" method = "POST" action="index.php?page=Product">
	<input class="search" type="text" name ="search">
	<input class="submit" type="submit" name="submit" value="Search..">
</form></center>
</div>
<div class = "owo">

<center><table >
		<tr>
			<td class = "d"> <b class = "Title">Name</b> </td>
			<td class = "d"> <b class = "Title">Price</b> </td>
			<td class = "d"> <b class = "Title">Description</b> </td>
			<td class = "d"> <b class = "Title">Category</b> </td>
		</tr>
<?php
	foreach($list as $result)
	{
?>
		<tr class = "o">
			<td><b class = "Bl"><a class = "Bl" href="index.php?page=Details&id=<?php echo $result['id'];?>"> <?php echo $result['name']; ?> </a></b> </td>
      		<td><b class = "anny"><?php echo $result['price'];?></b></td>
     		<td><b class = "anny"><?php echo $result['description']; ?></b> </td>
      		<td><b class = "anny"><?php echo $result['category_name'];?></b> </td>
		</tr>
<?php
	}
?>
</table></center>
	</div>
<br>
<br>
<br>
