<?php
require_once("../../configuration/config.php");
require_once("../functions/functions.php");
debugTool();
$item_per_page = 3;
if(isset($_POST["page"])){
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number!');} 
}else{
	$page_number = 1; 
}

$results = $dbc->query("SELECT COUNT(*) FROM blogs");
$get_total_rows = $results->fetch_row(); 
$total_pages = ceil($get_total_rows[0]/$item_per_page);
$page_position = (($page_number-1) * $item_per_page);
if(isset($_POST['category'])){
  $cat = $_POST['category'];
  $results = $dbc->query("SELECT * FROM blogs JOIN users ON (users.user_id = blogs.user_id) WHERE blog_category = '$cat' ORDER BY blog_date DESC LIMIT $page_position, $item_per_page");
}else{
  $results = $dbc->query("SELECT * FROM blogs JOIN users ON (users.user_id = blogs.user_id) ORDER BY blog_date DESC LIMIT $page_position, $item_per_page");
}
?>
<?php while($row = $results -> fetch_assoc()){
  //TODO : NEM MEGY BE A WHILE CIKLUSBA!?>
<div style="margin-bottom:3rem;margin-top:2rem;" class="card m-5 bg-white w-full shadow-lg rounded-lg p-5">
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
</div>

<?php }?>

<?php 
echo '<div align="center">Még debugolás alatt áll az oldal.';
echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
echo '</div>';
?>
