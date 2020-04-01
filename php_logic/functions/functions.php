<?php

function sanitiseInput($dbc, $input){
    $sanitised_input = mysqli_real_escape_string($dbc,$input);
    return $sanitised_input;
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
           $_SESSION["uCo"] = $row["user_county"];
           $_SESSION["uBio"] = $row["user_bio"];

        }
        return true;
    }
    else{
        return false;
    }
}

function getDatetimeNow() {
    $tz_object = new DateTimeZone('Brazil/East');
    date_default_timezone_set('Brazil/East');
    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}

?>