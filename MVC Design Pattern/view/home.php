<?php include "inc/header.php"; ?>

<table class="tblone">
    <tr>
        <th width="10%">No</th>
        <th width="35%">Name</th>
        <th width="30%">Department</th>
        <th width="25%">ID</th>
    </tr>

<?php 
	$i = 0;
	foreach ($user as $key=>$value){
	$i++;	
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dep']; ?></td>
        <td><?php echo $value['it']; ?></td>
    </tr>
<?php } ?>

  </table>


<?php include "inc/footer.php"; ?>