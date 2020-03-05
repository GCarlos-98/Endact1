<?php
	$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
	<head>
		<title>
				API INVENTORY
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id = "Main-container">
			<div class = "Header">
				<div class = "box1"><a href = "index.php"><h3 class="HOME">HOME</h3> </a></div>
				<div class = "box2"><a href = "index.php?page=Product"><h3 class="HOME">PRODUCTS LIST</h3> </a></div>
				<div class = "box3"><a href = "index.php?page=AddProduct"><h3 class="HOME">ADD PRODUCT</h3></a></div>
			</div>
			<div class = "whitespace">
			</div>
				<?php
			switch($page){
				case 'Product':
					require_once 'prod_list.php';
				break;
				case 'Category':
					require_once 'category_list.php';
				break;
				case 'AddProduct':
					require_once 'product_add.php';
				break;
				case 'Details':
					require_once 'prod_det.php';
				break;
				case 'Update':
					require_once 'product_update.php';
				break;
				case 'Delete':
					require_once 'deldel.php';
				break;
				default:
				break;
			}
			?>
		</div>
	</body>
</html>
