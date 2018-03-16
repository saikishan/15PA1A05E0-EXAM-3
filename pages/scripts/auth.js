$(document).ready(()=>{
    cookie = window.sessionStorage.getItem("olxwebcookie")
    if(cookie==""){
        if(!(window.location.pathname=='/pages/login.php')){
            window.location.replace("login.php")
        }
    }
    else{
        if(!window.location.pathname=='/pages/app.php'){
            window.location.replace("app.php");
        }
    }
})