<?php 
mysqli_report(MYSQLI_REPORT_ALL);
$post_id = intval($_GET['id']);
$sql = "SELECT * FROM blogs JOIN users ON (users.user_id = blogs.user_id) WHERE blog_id = ?";
$stmt = $dbc -> stmt_init();
$stmt = $dbc-> prepare($sql);
$stmt -> bind_param("i",$post_id);
$stmt -> execute();
$res = $stmt->get_result();
?>

<?php while($row = $res -> fetch_assoc()){;?>

<?php if(!is_null($row['blog_img'])){?>
    <div class="max-w-4xl w-11/12  lg:flex">
  <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('../../storage/img/users/<?php echo $row['blog_img'];?>')">
  </div>
<?php }?>

  <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
    <div class="mb-8">
      <p class="text-sm text-gray-600 flex items-center">
        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
        </svg>
        Csak tagoknak
      </p>
      <div class="text-gray-900 font-bold text-xl mb-2"><?php echo $row['blog_header'];?></div>
      <p class="text-gray-700 text-base"><?php echo $row['blog_text'];?></p>
    </div>
    <div class="flex items-center">
      <img style="object-fit:cover" class="w-10 h-10 rounded-full mr-4" src="../../storage/img/users/<?php echo $row['user_profile_puc']?>">
      <div class="text-sm">
        <p class="text-gray-900 leading-none"><?php echo $row['user_first_name']." " .$row['user_second_name'];?></p>
        <p class="text-gray-600"><?php echo $row['blog_date'];?></p>
      </div>
    </div>
  </div>
</div>
<?php }?>