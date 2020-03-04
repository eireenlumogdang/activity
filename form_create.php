<?php
	//category
	$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data = json_decode($json,true);
	$category = $data['records'];
?>

<form action="pro_create.php" method="POST">
<center>
<h1> Add Product </h1>
Name: <input type="text" name="name"/> <br/>
Description:<input type="text" name="description"/> <br/>
Price:<input type="text" name="price"/> <br/>
<select name="category">
<option value="">Choose Category</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select> <br/>
<input class="button1" type="submit" name="submit" value="submit"/>
</center>
</form>