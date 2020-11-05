<?php
include('../include/config.php');
if(!empty($_POST["specilizationid"])) 
{
  $xyz = $_POST['specilizationid'];
  echo $_POST['specilizationid'];

 $sql="SELECT name1,id from facility where cat='$xyz'";
 $result = mysqli_query($conn,$sql);?>
 <option selected="selected">Select Vendor </option>
 <?php
 while($row=mysqli_fetch_assoc($result))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['name1']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{
  $xyz1 = $_POST["doctor"];

 $sql="SELECT  rate from facility where id='$xyz1'";
 $result = mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 	{?>
 <option value="<?php echo htmlentities($row['rate']); ?>"><?php echo htmlentities($row['rate']); ?></option>
  <?php
}
}

?>

