<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="http://localhost/My Website/css/css product.css">

	<title>
	 Product Form
	</title>


</head>
		<style type="text/css">
			background-color: Tomato;
		</style>
<body>
	<script src="../js/productvalider.js"></script>
	<center>
	 <form name="productform" id="productform" method="post" onsubmit="return validate()" enctype="multipart/form-data" action="">
					<table cellspacing="40">
				        <tr><td class="tex">PRODUCT TITLE:</td>
				        	<td><input type="text" name="product_title"></td>
				        </tr>

						<tr><td class="tex">CATEGORY:</td>
							<td>					
								<select name="product_category">
									  <?php
			  							include ("../controller/category.php");
			  							?>
								</select>
							</td></tr>
					 		  
					 	<tr><td class="tex">BRAND:</td>
					 		<td>
					 		<select name="product_brand">
				  						<?php
				  							include ("../controller/brand.php");
				  							
				  						?>
							</select>
					 		</td>
					 	</tr>

					 	<tr><td class="tex">PRICE:</td>
							 		<td><input type="text" name="product_price" size="50"></td>
					 	</tr> 
				 
					 	<tr><td class="tex">DESCRIPTION</td>
							 		<td><textarea rows="3" cols="20" name="product_desc" wrap="soft"></textarea></td>
					 	</tr>

					 	<tr><td class="tex">IMAGE:</td>
							 		<td>   
							   		 <input type="file" name="product_img" id="product_img">
				    				
									</td>
						</tr> 

					    <tr><td class="tex">KEYWORDS:</td>
							    	<td><input type="text" name="product_key" maxLength="14" size="14"></td>
					    </tr>

					    <tr>
					    	<td id="LOAD" class="button"><input class="button"  type="submit" name="submit" value="ADD PRODUCT"></td>
					    </tr>

				    </table>

		 </form>   
		</center>
		<?php 
			//require "php product.php"; 
			include ("../Pages/index2.php");
		?>	
</body>
</html>


