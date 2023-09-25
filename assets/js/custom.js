$(document).ready(function ()
{
    $('.increment-btn').click(function (e)
    {
            e.preventDefault();
            var qty = $(this).closest('.product_data').find('.input-qty').val();
            var value = parseInt(qty,10);
            value = isNaN(value) ? 0 : value;

            if(value < 10)
            {
                value ++;
                $(this).closest('.product_data').find('.input-qty').val(value);
            }
    });

    $('.decrement-btn').click(function (e)
    {
            e.preventDefault();
            var qty = $(this).closest('.product_data').find('.input-qty').val();
            var value = parseInt(qty,10);
            value = isNaN(value) ? 0 : value;

            if(value > 1)
            {
                value --;
                $(this).closest('.product_data').find('.input-qty').val(value);
            }
    });

    $('.addToCartBtn').click(function (e)
    {
            e.preventDefault();
           
            var qty = $(this).closest('.product_data').find('.input-qty').val();
            var prod_id = $(this).val();
           
            
            $.ajax({
                method:"POST",
                url:"functions/handlecart.php",
                data:{
                    "prod_id":prod_id,
                    "prod_qty":qty,
                    "scope":"add"
                },
                success: function(response)
                {
                    if(response == 201)
                    {
                        alert("produit ajoute");
                        
                    }
                    else if(response == "existing")
                    {
                        alert("produit déja ajouté");
                    }
                    else if(response == 401)
                    {
                        alert("connectez vous pour continuer");
                    }
                    else if(response == 500)
                    {
                        alert("Erreur");
                    }
                }
            })
    });

    $(document).on('click','.updateQty',function ()
    {
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var prod_id = $(this).closest('.product_data').find('.prodId').val();


        $.ajax({
            method:"POST",
            url:"functions/handlecart.php",
            data:{
                "prod_id":prod_id,
                "prod_qty":qty,
                "scope":"update"
            },
            success: function(response)
            {
               
            }
        })


    })
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
});