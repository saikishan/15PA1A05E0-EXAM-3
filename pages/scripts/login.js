$(document).ready(()=>{
    $("#btn-login").click(()=>{
        console.log("in the login click");
        username=$("#username").val();
        password=$("#password").val();
        phoneno=$("#phoneno").val();
        address=$("#address").val();
        $.post('../services/authBack.php',{
            login:"login",
            username:username,
            password:password,
        },(data)=>{
            data=JSON.parse(data)
            console.log(data)
            if(data.auth){
                window.sessionStorage.setItem("olxwebcookie",data.cookie);
                console.log(window.sessionStorage.getItem("olxwebcookie"))
                console.log("the add.php")
                window.location.replace("add.php")
            }
        })
    })
    $("#btn-register").click(()=>{
        console.log("in the login click");
        username=$("#username").val();
        password=$("#password").val();
        number=$("#phoneno").val();
        address=$("#address").val();
        $.post('../services/authBack.php',{
            register:"login",
            username:username,
            password:password,
            address:address,
            number:number
        },(data)=>{
            data=JSON.parse(data)
            console.log(data)
            if(data.auth){
                window.sessionStorage.setItem("olxwebcookie",data.cookie);
                console.log(window.sessionStorage.getItem("olxwebcookie"))
                console.log("the add.php")
                window.location.replace("add.php")
            }
        })
    })
})
