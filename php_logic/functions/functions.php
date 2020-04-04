<?php
session_start();

function sanitiseInput($dbc, $input){
    $sanitised_input = mysqli_real_escape_string($dbc,$input);
    return $sanitised_input;
}

function isLogged(){
    if(empty($_SESSION['uId'])){
        header("Location: ../../php_main/out/index.php");
    }
}

function debugTool(){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

function registrateUser($dbc, $userFirstName, $userLastName, $userPassword, $userEmail, $userCity, $userCounty, $userZip){
    $sql = "INSERT INTO users (user_first_name, user_second_name, user_password, user_email, user_city, user_county, user_zipcode, user_regdate) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($dbc);
    mysqli_stmt_prepare($stmt,$sql);
    $timezone = getDatetimeNow();
    mysqli_stmt_bind_param($stmt,"ssssssis",$userFirstName,$userLastName,$userPassword,$userEmail,$userCity,$userCounty,$userZip,$timezone);
    if(mysqli_stmt_execute($stmt)){
        return true;
    }else{
        return false;
    }
}

function loginUser($dbc,$userEmail,$userPassword){
    $sql = "SELECT * FROM users WHERE user_email = ? AND user_password = ?";
    $stmt = mysqli_stmt_init($dbc);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"ss",$userEmail,$userPassword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 1){
        session_start();
        while($row = mysqli_fetch_assoc($result)){
           $_SESSION["uId"] = $row["user_id"];
           $_SESSION["uFN"] = $row["user_first_name"];
           $_SESSION["uEmail"] = $row["user_email"];
           $_SESSION["uLN"] = $row["user_second_name"];
           $_SESSION["uCi"] = $row["user_city"];
           $_SESSION["uZip"] = $row["user_zip"];
           $_SESSION["uPp"] = $row["user_profile_puc"];
           $_SESSION["uBgp"] = $row["user_profile_puc"];
           $_SESSION["uCo"] = $row["user_county"];
           $_SESSION["uBio"] = $row["user_bio"];
           $_SESSION["uWp"] = $row["user_work_place"];
           $_SESSION["uSc"] = $row["user_school"];
        }
        return true;
    }
    else{
        echo "<script type='text/javascript'>
        $(document).ready(function(){
        $('#Modal').modal('show');
        });
        </script>";
    }
}



function getDatetimeNow() {
    $tz_object = new DateTimeZone('Brazil/East');
    date_default_timezone_set('Brazil/East');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}


function getLikes($dbc,$id)
{
  $sql = "SELECT COUNT(*) FROM likes
  		  WHERE post_id = $id AND action='like'";
  $rs = mysqli_query($dbc, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}


function getRating($dbc,$id)
{
  $user_id = $_SESSION['uId'];
  $rating = array();
  $likes_query = "SELECT COUNT(*) FROM likes WHERE post_id = $id AND action='like'";

  $likes_rs = mysqli_query($dbc, $likes_query);
  $likes = mysqli_fetch_array($likes_rs);
  $rating = [
  	'likes' => $likes[0]
  ];
  return json_encode($rating);
}

function userLiked($dbc,$post_id)
{
  $user_id = $_SESSION['uId'];
  $sql = "SELECT * FROM likes WHERE user_id = $user_id
  		  AND post_id= $post_id AND action='like'";
  $result = mysqli_query($dbc, $sql);
  if (mysqli_num_rows($result) > 0) {
  	return true;
  }else{
  	return false;
  }
}

function getBlogCount($dbc)
{
  $sql = "SELECT COUNT(*) FROM blogs";
  $result = mysqli_query($dbc, $sql);
  $count =  mysqli_num_rows($result);
  echo $count;
}

function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ 
        $pagination .= '<ul style="display: flex;
        align-items: center;
        justify-content: center;
        margin: 2rem;" class="pagination">';
        
        $right_links    = $current_page + 3; 
        $previous       = $current_page - 3; 
        $next           = $current_page + 1; 
        $first_link     = true;
        
        if($current_page > 1){
			$previous_link = ($previous==0)?1:$previous;
            $pagination .= '<li class="first mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg"><a href="#" data-page="1" title="First">«</a></li>';
            $pagination .= '<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg"><a href="#" class="" data-page="'.$previous_link.'" title="Previous"><</a></li>';
                for($i = ($current_page-2); $i < $current_page; $i++){ 
                    if($i > 0){
                        $pagination .= '<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg"><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; 
        }
        
        if($first_link){
            $pagination .= '<li class="first active mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">'.$current_page.'</li>';
        }elseif($current_page == $total_pages){
            $pagination .= '<li class="last active mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">'.$current_page.'</li>';
        }else{ 
            $pagination .= '<li class="active mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">'.$current_page.'</li>';
        }
                
        for($i = $current_page+1; $i < $right_links ; $i++){ 
            if($i<=$total_pages){
                $pagination .= '<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg"><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
				$next_link = ($i > $total_pages)? $total_pages : $i;
                $pagination .= '<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg"><a href="#" data-page="'.$next_link.'" title="Next">></a></li>';
                $pagination .= '<li class="last mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg"><a href="#" data-page="'.$total_pages.'" title="Last">»</a></li>';
        }
        
        $pagination .= '</ul>'; 
    }
    return $pagination; 
}

?>