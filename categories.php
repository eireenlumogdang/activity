<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<center><h1> Category list </h1></center>

<center> <table id="categories">
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
    </tr>
	</center>
<?php
foreach($list as $value){
?>
    <tr>
        <td><?php echo $value['category_id'];?></td>
        <td><?php echo $value['category_name'];?></td>
    </tr>
<?php
}
    ?>
</table>