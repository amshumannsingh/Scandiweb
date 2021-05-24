<!DOCTYPE html>
<html>
<head>
    <title>Product Add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function(){
            console.log("test");
            jQuery("select").change(function(){
                jQuery( "select option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        jQuery(".box").not("." + optionValue).hide();
                        console.log("selected" + optionValue)
                        jQuery("." + optionValue).show();
                    } else{
                        jQuery(".box").hide();
                    }
                });
            }).change();
        });
    </script>
    <link rel="stylesheet" href="css/site.css">

</head>
<body>

<h1> Product Add</h1>

<form class="product-list" action="index.php" >
    <p align="right"><button type="submit" name="cancel">Cancel</button></p>
</form>
<form class="product-add" action="contactform.php" method="post">
    <p align="right"><button type="submit" name="submit">Save</button></p>
    <hr>
    <p>SKU: </p><div class="sku" >  <input type="text" name="sku" placeholder="SKU"></div>
    <p>Name:</p> <div class="name">  <input type="text" name="name" placeholder="Name of Product"></div>
    <p>Price($):</p> <div class="price"> <input type="text" name="price" placeholder="Price of Product"></div>
    <p>Type Switcher:</p>
    <div>
        <select name="type">
            <option>Choose Type</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
    </div>
    <div class="disc box" >Enter Size of Disc:</div>
    <div class="book box">Enter weight of book</div>
    <div class="furniture box">Enter dimensions of Furniture:</div>
    <div class="type"> <input type="text" name="dimension" placeholder="Value"></div>
    <hr>

</form>
<?php require_once 'includes/footer.php'; ?>

</body>
</html>