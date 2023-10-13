<?php
$index = true;

function upload($tmp_file, $type = false){
    if(!$tmp_file){
        return false;
    }
    $mime_file_type = explode("/", mime_content_type($tmp_file));
    $result = false;
    if($type == false || $type == $mime_file_type[0]){
        $file_path = "uploads/".date("Y/M/");
        if (!file_exists($file_path)) {
            mkdir($file_path, 0777, true);
        }
        $file_name = $file_path.$mime_file_type[0]."-".time()."-".rand().".".$mime_file_type[1];
        if(move_uploaded_file($tmp_file, $file_name)){
            $result = $file_name;
        }
    }
    return $result;
}


if(isset($_GET['page'])){
    $uri = explode("/",($_GET['page']));
    $page = strtolower($uri[0]);
    isset($uri[1]) ? $path = $uri[1] : $path = NULL;
    if($page == 'json'){
        require_once"./json.php";
    }elseif($page == 'login'){
        //require_once"./page-auth.php";
    }else{
        echo $page;
    }
}else{
    require_once("./home_page.php");
}