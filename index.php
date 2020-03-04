<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<html> 
    <head>
      <title>Endterm</title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
	  <center> <h1> API TEST </h1> </center>
	<center>
      <div class="navbar">
        <a href="index.php?navigation=product"><button class="button button2">Products</button></a>
        <a href="index.php?navigation=categories"><button class="button button2">Category</button></a>
        <a href="index.php?navigation=create"><button class="button button2">Create</button></a>
      </div>
	</center>
      <div>         
      <?php 
        switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
        }
    ?>
      </div>
    </body>
</html>