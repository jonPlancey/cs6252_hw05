<?php include '../view/header.php'; ?>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        
        <!-- Newly added table -->        
		<?php foreach ($categories as $category) : ?>

		<tr>                
			<td><?php echo $category['categoryName']; ?></td>
		  
			<td><form action="delete_category.php" method="post">
				<input type="hidden" name="category_id"  value="<?php echo $category['categoryID']; ?>">						 	
				<input type="submit" value="Delete">
			</form></td>
		</tr>
				
		<?php endforeach; ?>  						 
        <!-- Newly added tabe -->        
    
    </table>

    <h2>Add Category</h2>
    
    <!-- Newly added form code -->   
    <form action="add_category.php" method="post"> 
	    <label>Name:</label>
	    <input type="text" name="category_name">
	
	    <label>&nbsp;</label>
	    <input type="submit" value="Add"><br>          
    </form>
    <!-- Newly added form code -->  
    
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>
<?php include '../view/footer.php'; ?>