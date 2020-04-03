<?php
$sql = "SELECT * FROM posts JOIN users ON (users.user_id = posts.user_id) ORDER BY post_date DESC";
$result = $dbc ->query($sql);
?>

  <?php while($row = $result -> fetch_assoc()){;?>
    <div  class="  max-w-sm w-full m-2 lg:max-w-full lg:flex"></div>
  <div class="card border-gray-400   bg-white rounded-b shadow-lg lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
    <div class="mb-8">

      <div class="post-header-text text-gray-900 font-bold text-xl mb-2"> <?php echo $row['user_second_name']?> írt egy gondolatot</div>
      <p class="post-text text-gray-700 text-base"><?php echo $row['post_text'];?></p>
    </div>
    <div class="flex items-center">
      <img style="object-fit:cover" class="w-10 h-10 rounded-full mr-4" src="../../storage/img/users/<?php echo $row['user_profile_puc'];?>" alt="Avatar of Jonathan Reinink">
      <div class="text-sm">
        <a href="../../php_main/inside/other_profile.php?id=<?php echo $row['user_id'];?>" class="text-gray-900 leading-none"><?php echo $row['user_first_name']. " " .$row['user_second_name'];?></a>
        <p class="text-gray-600"><?php echo $row['post_date'];?></p>
      </div>
      <div style="margin-left:2vw" class="text-red-500">
      <i <?php if (userLiked($dbc,$row['post_id'])): ?>
                class="fas fa-heart like-btn"
              <?php else: ?>
                class="far fa-heart like-btn"
              <?php endif ?>
              data-id="<?php echo $row['post_id'] ?>"></i>
              <span class="likes"><?php echo getLikes($dbc,$row['post_id']); ?></span>
      </div>
      <?php if($row['user_id'] == $_SESSION['uId']){?>
         <i id='delete-post' data-id="<?php echo $row['post_id']?>"style='margin-left: auto;' class='delete-post w-8 fas fa-trash p-2 bg-gray-200 rounded-full'></i>
       <?php }?>
    </div>
  </div>
  <?php }?>

</div>


