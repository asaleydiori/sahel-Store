$(document).on('click','.deleteItem',function ()
    {
        var cart_id = $(this).val();
        
        $.ajax({
            method:"POST",
            url:"functions/handlecart.php",
            data:{
                "cart_id":cart_id,
                "scope":"delete"
            },
            success: function(response)
            {
                if(response == 200)
                {
                    alert("produit supprimé");
                    $('#mycart').load(location.href + " #mycart");
                    
                }
                else 
                {
                    alert("erreur de suppression");
                }
            }
            })
    });