<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Product</h1>
    
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">


        
        <br>

        <label>Category:</label>
        <input type="text" name="category" value = "" />
        <br>


        <label>Code:</label>
        <input type="text" name="code" value = "" />
        <br>

        <label>Name:</label>
        <input type="text" name="name"  value ="" />
        <br>

        <label>List Price:</label>
        <input type="text" name="price"  value = "" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Product" />
        <br>
    </form>
    
    <p class="last_paragraph">
        <a href="index.php?action=edit_product">View Product List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>