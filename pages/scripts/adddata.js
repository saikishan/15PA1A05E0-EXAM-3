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
                //window.location.replace("");
            });
        }
    });

    function getBase64Image(imgElem) {
    // imgElem must be on the same server otherwise a cross-origin error will be thrown "SECURITY_ERR: DOM Exception 18"
        var canvas = document.createElement("canvas");
        canvas.width = imgElem.clientWidth;
        canvas.height = imgElem.clientHeight;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(imgElem, 0, 0);
        var dataURL = canvas.toDataURL("image/png");
        return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}
})