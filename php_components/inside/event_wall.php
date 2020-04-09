<?php 
    $sql = "SELECT * FROM events JOIN users ON (users.user_id = events.user_id) ORDER BY event_date ASC";
    $result = $dbc ->query($sql);
?>

<?php while($row = $result -> fetch_assoc()){?>
<div class="max-w-sm rounded overflow-hidden shadow-lg">
<?php if(!empty($row['event_pic'])){?>
  <img class="w-full" src="../../storage/img/users/<?php echo $row['event_pic']?>">
<?php } ?>
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?php echo $row['event_name']?></div>
    <p class="text-gray-700 text-base">
    <?php echo $row['event_desc']?>
    </p>
    <p class="text-gray-700 text-base">Belépés: <?php if($row['event_type'] == "1"){ echo "Jegy";}else{echo "Ingyenes";} ?></p>
    <p class="text-gray-600">Esemény időpontja: <?php echo $row['event_date']?></p>
  </div>
</div>
<?php } ?>

