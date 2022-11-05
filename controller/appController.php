<?php
function on_off(){
    $page=current_page();
    if ($page=="login" && isset($_SESSION["id"])){
        redirect_to("home");
    }elseif ($page!="login" && $page!="auth" && !isset($_SESSION["id"])){
        redirect_to("login");
    }
}

function toastJson($color,$message,$title){
    $data=[
        "color"=>$color,
        "message"=>$message,
        "title"=>$title
    ];
    return json_encode($data);
}

function current_page(){
    $url=$_SERVER["REQUEST_URI"];
    $new=explode("/",$url);
    return end($new);
}

function redirect_to($page){
    echo "<script>window.location='".$page."'</script>";
}
function get_text($text){
    return htmlspecialchars($text);
}
function logout(){
    session_destroy();
    redirect_to("login");
}