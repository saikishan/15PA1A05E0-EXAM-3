$(document).ready(()=>{
    var imgElem = document.getElementById('img');
    $('#urlText').keyup(function(){
       $('#img').attr('src',$('#urlText').val());
    });
   
    $('#senddata').click(function(){
        var file = document.getElementById("myFile").files[0];
        console.log(file)
        var reader = new FileReader();
        var price = $("#price").val();
        var name = $("#name").val();
        reader.readAsDataURL(file);
        reader.onload=()=>{
            var imgData = reader.result;
            console.log(imgData)
            var cookie =  window.sessionStorage.getItem("olxwebcookie")
        $.post('../services/addproduct.php',{
            data:imgData,
            cookie:cookie,
            price:price,
            name:name
            },function(data){
                console.log(data)
                data = JSON.parse(data)
                window.location.replace("../");
            });
        }
    });
})
