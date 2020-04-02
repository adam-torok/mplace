<?php
$sql = "SELECT * FROM users";
$stmt = $dbc -> stmt_init();
$stmt = $dbc-> prepare($sql);
$stmt -> execute();
$res = $stmt->get_result();
?>

<?php while($row = $res->fetch_assoc()){?>
<a href="../../php_main/inside/other_profile.php?id=<?php echo $row['user_id'];?>">
  <div id="person-card" class="person-card md:flex m-5 bg-white rounded-lg p-6">
  <img style="object-fit:cover"class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" src="../../storage/img/users/<?php echo $row['user_profile_puc'];?>">
  <div class="text-center md:text-left">
  <h2 class="text-lg text-gray-500"><?php echo $row['user_first_name']." ".$row['user_second_name'];?></h2>
  <div class="text-gray-500"><?php  echo  $row['user_work_place'];?></div>
  <div class="text-gray-600"><?php echo $row['user_county'];?></div>
  <div class="text-gray-600"><?php echo $row['user_city'];?></div>
  </div>
  </div>
  </a>
<?php }?>
