<?php 
$sql = "SELECT * FROM blogs JOIN users ON (users.user_id = blogs.user_id) ORDER BY blog_date DESC LIMIT 6";
$result = $dbc -> query($sql);
?>
<?php while($row = $result -> fetch_assoc()){?>
<a style="width: 100%;margin: 22px;" href="../../php_main/inside/specific_blog.php?id=<?php echo $row['blog_id']?>" class="max-w-sm m-5 rounded overflow-hidden shadow-lg">
<?php if(!is_null($row['blog_img'])){?>
    <img style="object-fit:cover" class="w-full h-48" src="../../storage/img/users/<?php echo $row['blog_img'];?>" alt="Kép címe">
<?php } ?>
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?php echo $row['blog_header'];?></div>
    <p class="text-gray-700 text-base">
     <?php echo substr($row['blog_text'],0,150)."...";?>
    </p>
  </div>
  <div class="px-6 py-4">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#<?php echo $row['blog_category']?></span>
  </div>
</a>
<?php }?>