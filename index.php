<script src="/pages/scripts/jqurey.js"></script>
<script>
    $(document).ready(()=>{
        $("#addproduct").click(function(){
        console.log("hello")
        window.location.replace("/pages/add.php")
        })
    })
    
</script>
<input  id="addproduct" type="button" value="Add Product"/>
<h1>you are in index page</h1>

