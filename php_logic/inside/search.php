<?php
include_once("../../configuration/config.php");
require_once("../functions/functions.php");
mysqli_report(MYSQLI_REPORT_ALL);


if($_SERVER['REQUEST_METHOD'] == "GET"){
    $sql = "SELECT * FROM posts";
    $input = trim($_GET['input']);
    $where_list = array();
    $search_words = explode(' ',$input);
    foreach($search_words as $word){
        $where_list[] = "post_text LIKE '%$word%'";
    }
    $where_clause = implode(' OR ', $where_list); 
    
    if (!empty($where_clause)) {
        $sql .= " WHERE $where_clause";
        }
    $results = $dbc -> query($sql);
}

?>
<?php while($row = $results -> fetch_assoc()){?>
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
