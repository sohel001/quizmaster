<?php
include_once "connection.php";
include_once "head.txt";
include_once "nav.txt";
$q="SELECT * FROM results WHERE username='$_SESSION[login]'";
$no=array();
$best=array();
$per=array();
$i=0;
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
while($row=mysqli_fetch_assoc($r)){
	$no[$i]=$row['no_of_test'];
	$best[$i]=$row['best'];
	$per[$i]=$row['percentage'];
	++$i;
}

$query="SELECT * FROM questions WHERE username='$_SESSION[login]'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($result);
?>

<?php
if(isset($_SESSION['login']) && $_SESSION['login']!=''){
	?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/20.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
	<h2  align='left'><a href='index.php' style='color:red'>Back:</a></h2>
 <h3 style='color: red'>My Scores!</h3>
	<table align='center' border='1px' cellpadding='5px'>
      <tr>
	  <th style='color: blue'> Test No </th>
	  <th style='color: blue'> Correct attempt </th>
	  <th style='color: blue'> Wro </th>
	  </tr>
	  <?php
	  for($j=0; $j<$n; $j++){
		  ?>
		  <tr>
		  <td><?php echo $no[$j]; ?></td>
		  <td><?php echo $best[$j]; ?> </td>
		  <td><?php echo $per[$j]; ?> </td>
		  </tr>
		 <?php
	  }
	  ?>
	  </table>
	  <br>
	  <?php
	  if($num_rows>0){
		  ?>
	  <h3 style='color:blue'>You have Uploaded <span style='color:red'><?php echo $num_rows;?></span> Questions</h3>
	  <?php
	  }
	  ?>
	  </div>
	  </section>
	  <?php
}else{
	header("Location: common_log.php");
}?>
	  <?php
	  include_once "foot.txt";
	  ?>