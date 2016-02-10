<?php
	function get_categories() {
	    global $db;
	    $query = 'SELECT * FROM categories
	              ORDER BY categoryID';
	    $statement = $db->prepare($query);
	    $statement->execute();
	    return $statement;    
	}
	
	function get_category_name($category_id) {
	    global $db;
	    $query = 'SELECT * FROM categories
	              WHERE categoryID = :category_id';    
	    $statement = $db->prepare($query);
	    $statement->bindValue(':category_id', $category_id);
	    $statement->execute();    
	    $category = $statement->fetch();
	    $statement->closeCursor();    
	    $category_name = $category['categoryName'];
	    return $category_name;
	}
	
	function add_category($category_id) {
		// Get the Category data
		$category = filter_input(INPUT_POST, 'category_name');
		
		// Validate inputs
		if ($category == null) {
			$error = "Invalid product data. Check all fields and try again.";
			include('error.php');
		} else {
			require_once('database.php');
		
			$query = 'INSERT
				  INTO
				 	categories (categoryName)
				  VALUES (:category_name)';
		
			$statement = $db->prepare($query);
			$statement->bindValue(':category_name', $category);
			$statement->execute();
			$statement->closeCursor();
		}
		
		
	}
		
	function delete_category($category_id) {

		// Get IDs
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
		$category = filter_input(INPUT_POST, 'category_name');
		
		
		// Delete the product from the database
		if ($category_id != false) {
		
			$query = 'DELETE FROM categories
	              WHERE categoryID = :category_id';
			 
			$statement = $db->prepare($query);
			$statement->bindValue(':category_id', $category_id);
			$success = $statement->execute();
			$statement->closeCursor();
		}
		
		
	}
?>