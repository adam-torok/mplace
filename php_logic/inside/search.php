<?php
include_once("../../configuration/config.php");
require_once("../functions/functions.php");

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $sql = "SELECT * FROM posts JOIN users ON (users.user_id = posts.user_id)";
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
        $result = $dbc->query($sql);

}
?>
<?php
if ($result->num_rows > 0) { while($row = $result -> fetch_assoc()){?>
  <div  class="max-w-sm w-full m-2 lg:max-w-full lg:flex"></div>
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
    </div>
  </div>

<?php }} else{
  echo ' <img style="object-fit:cover" class="pt-16 h-64 rounded-full mr-4" src="../../storage/img/blank.svg" alt="Sajnos nincs ilyen találatunk !"><p>Sajnos nincs ilyen találatunk :(</p>';}?>
