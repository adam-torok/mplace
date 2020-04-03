<?php 
$sql = "SELECT * FROM blogs JOIN users ON (users.user_id = blogs.user_id) ORDER BY blog_date DESC";
$result = $dbc -> query($sql);
?>
<?php while($row = $result -> fetch_assoc()){?>
<div class="max-w-sm m-5 rounded overflow-hidden shadow-lg">
<?php if(!is_null($row['blog_img'])){?>
    <img style="object-fit:cover" class="w-full h-48" src="../../storage/img/users/<?php echo $row['blog_img'];?>" alt="Kép címe">
<?php } ?>
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?php echo $row['blog_header'];?></div>
    <p class="text-gray-700 text-base">
     <?php echo $row['blog_text'];?>
    </p>
  </div>
  <div class="px-6 py-4">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#<?php echo $row['blog_category']?></span>
  </div>
</div>
<?php }?>