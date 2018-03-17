$(document).ready(()=>{
    var count=0
    $("#addproduct").click(function(){
    console.log("hello")
    window.location.replace("/pages/add.php")
    })
    $("#getproduct").click(function(){
        $.post('../services/getproduct.php',{
            count:count
        },(data)=>{
            data = JSON.parse(data);
            if(data.auth){
                count+=1;
            }
            dataArray=data.content;
            console.log(data)
            for(i=0;i<dataArray.length;i++){
                currentData = dataArray[i]
                divtext = "<div class='product'><h4 class='product-name'>name:"+currentData.name+"</h4><img class='product-image' src='"+currentData.data+"' width='500px' height='500px' ><h4 class='product-price'>price:"+currentData.price+"</h4><h4 class='product-seller'>seller:"+currentData.username+"</h4><h4 class='product-contactno'>contactno:"+currentData.number+"</h4><h4 class='product-address'>address:"+currentData.address+"</h4></div>"
                console.log(divtext);
                $('body').append(divtext);
            }
        })
    })
})