<body>
<header>	
	<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">		
		<div class="container">			
		<!-- Menu button for smallar screens -->			
			<div class="navbar-header">				
				<button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>				
				<a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>				
				<!-- Site name for smallar screens -->				
				<a href="index.html" class="navbar-brand">CFIC<span class="bold"> Admin</span></a>			
			</div>			
			<!-- Navigation starts -->			
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation"> 
					<!-- Links -->
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown pull-right user-data"> 							
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Welcome <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>							<!-- Dropdown menu -->
							<ul class="dropdown-menu">
								<li style='cursor:pointer;'><a id='logout_button'><i class="fa fa-key"></i> Logout</a></li>							</ul>
						</li>					</ul>
				</nav>	
		</div>	 
	</div>
</header>
<!-- Main content starts -->	
<div class="content">		
<!-- Sidebar -->		
	<div class="sidebar">			
		<div class="sidebar-dropdown">
			<a href="#">Products</a>
		</div>			
		<!-- Search form -->			
		<ul id="nav">				
			<li><a href=<?php echo $dir . 'admin/navigation/' ?> ><i class="fa fa-table"></i> <span>Navigation</span></a></li>	
			<li><a href=<?php echo $dir . 'admin/pages/' ?> class=""><i class="fa fa-table"></i> <span>Pages</span></a></li>			
			<li><a href=<?php echo $dir . 'admin/products/' ?> class="open"><i class="fa fa-table"></i> <span>Products</span></a></li>	
				
		</ul>		
	</div>		
	<!-- Sidebar ends -->  	  
	<!-- Main bar -->		
	<div class="mainbar">			
	<!-- Page heading -->			
		<div class="page-head">				
			<h2 class="pull-left">Products</h2>				
			<div class="clearfix"></div>			
			<!-- Breadcrumb -->				
			<div class="bread-crumb">		
				<a href=<?php echo $dir . 'admin/navigation/' ?>><i class="fa fa-home"></i> Home</a> 		
				<!-- Divider -->					
				<span class="divider">/</span>			
				<a href=<?php echo $dir . 'admin/products/' ?> class="bread-current">Products</a>		
			</div>			
			<div class="clearfix"></div>			
		</div>		
		<!-- Page heading ends -->		
		<!-- Matter -->			
		<div class="matter">				
			<div class="container">		
			<!-- Table -->				
				<div class="row">				
					<div class="col-md-12">				
						<div class="widget">				
							<div class="widget-head">				
								<div class="pull-left">Products</div>
								<div class='btn btn-success pull-right add_row_products'>Add Row</div>								
								<div class="clearfix"></div>						
							</div>								
							<div class="widget-content">	
								<table class="table table-striped table-bordered table-hover">					
									<thead>										
										<tr>									
											<th>Id</th>		
											<th>Link</th>
											<th>Image</th>							
											<th>Heading</th>						
											<th>Description</th>					
											<th>Price</th>							
											<th>Online</th>							
											<th>Paper</th>							
											<th>Everything DiSC</th>				
											<th>DiSC Classic</th>					
											<th>Other Profiles</th>					
											<th>Control</th>									
										</tr>												
									</thead>									
								<tbody id='products_table'>											
								<?php 	
									$top_nav = mysql_query("SELECT * FROM products");	
									While($top_nav_item = mysql_fetch_array($top_nav)){	
										$top_nav_id = $top_nav_item['id'];	
										$top_nav_link = $top_nav_item['link'];										
										$top_nav_image = $top_nav_item['image'];			
										$top_nav_heading = $top_nav_item['heading'];		
										$top_nav_description = $top_nav_item['description'];		
										$top_nav_price = $top_nav_item['price'];					
										$top_nav_online = $top_nav_item['online'];					
										$top_nav_paper = $top_nav_item['paper'];					
										$top_nav_everything_disc = $top_nav_item['everything_disc'];	
										$top_nav_disc_classic = $top_nav_item['disc_classic'];			
										$top_nav_other_profiles = $top_nav_item['other_profiles'];		
										echo "<tr id='" . $top_nav_id . "' class='products'>";										
											echo "<td class='id'>" . $top_nav_id . "</td>";			
											echo "<td class='link'>" . $top_nav_link . "</td>";												
											echo "<td class='image'>" . $top_nav_image . "</td>";												
											echo "<td class='heading'>" . $top_nav_heading . "</td>";											
											echo "<td class='description'>" . $top_nav_description . "</td>";										
											echo "<td class='price'>" . $top_nav_price . "</td>";												
											echo "<td class='online'>" . $top_nav_online . "</td>";											
											echo "<td class='paper'>" . $top_nav_paper . "</td>";												
											echo "<td class='everything_disc'>" . $top_nav_everything_disc . "</td>";									
											echo "<td class='disc_classic'>" . $top_nav_disc_classic . "</td>";										
											echo "<td class='other_profiles'>" . $top_nav_other_profiles . "</td>";									
											echo '<td class="remove_button">									
											<button id="products" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 				 		
												</td>		
											</tr>';													
										}															
									?>					
								</tbody>			
							</table>				
						</div>						
					</div>							
					<div class="widget">				
						<div class="widget-head">					
							<div class="pull-left">Product Categories</div>
							<div class='btn btn-success pull-right add_row_product_categories'>Add Row</div>								
							<div class="clearfix"></div>								
						</div>						
						<div class="widget-content">					
							<table class="table table-striped table-bordered table-hover">					
								<thead>									
									<tr>									
										<th>Id</th>							
										<th>Name</th>				
										<th>Link</th>				
										<th>Control</th>			
									</tr>							
								</thead>							
								<tbody id='product_categories_table'>								
								<?php 								
									$top_nav = mysql_query("SELECT * FROM product_categories");						
									While($top_nav_item = mysql_fetch_array($top_nav)){								
										$top_nav_id = $top_nav_item['id'];											
										$top_nav_name = $top_nav_item['name'];										
										$top_nav_value = $top_nav_item['value'];									
										echo "<tr id='" . $top_nav_id . "' class='product_categories'>";																	
											echo "<td class='id'>" . $top_nav_id . "</td>";									
											echo "<td class='name'>" . $top_nav_name . "</td>";									
											echo "<td class='value'>" . $top_nav_value . "</td>";									
											echo '<td class="remove_button">						
												<button id="product_categories" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 
												</td>					
											</tr>';						
										}						
								?>								
								</tbody>						
							</table>							
						</div>						
					</div>							
					<div class="widget">			
						<div class="widget-head">				
							<div class="pull-left">Product Applications</div>
							<div class='btn btn-success pull-right add_row_product_applications'>Add Row</div>									
							<div class="clearfix"></div>						
						</div>							
						<div class="widget-content">					
							<table class="table table-striped table-bordered table-hover">					
								<thead>										
									<tr>									
										<th>Id</th>							
										<th>Name</th>					
										<th>Link</th>					
										<th>Control</th>				
									</tr>							
								</thead>						
								<tbody id='product_applications_table'>								
								<?php 								
									$top_nav = mysql_query("SELECT * FROM product_applications");				
									While($top_nav_item = mysql_fetch_array($top_nav)){							
										$top_nav_id = $top_nav_item['id'];											
										$top_nav_name = $top_nav_item['name'];					
										$top_nav_value = $top_nav_item['value'];				
										echo "<tr id='" . $top_nav_id . "' class='product_applications'>";												
											echo "<td class='id'>" . $top_nav_id . "</td>";				
											echo "<td class='name'>" . $top_nav_name . "</td>";				
											echo "<td class='value'>" . $top_nav_value . "</td>";				
											echo '<td class="remove_button">									
												<button id="product_applications" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 		
												</td>													
											</tr>';													
										}										
									?>											
								</tbody>								
							</table>								
						</div>							
					</div>	
					<div class="widget">			
						<div class="widget-head">				
							<div class="pull-left">Product Category Associations</div>
							<div class='btn btn-success pull-right add_row_product_category_associations'>Add Row</div>							
							<div class="clearfix"></div>						
						</div>							
						<div class="widget-content">					
							<table class="table table-striped table-bordered table-hover">					
								<thead>										
									<tr>									
										<th>Id</th>							
										<th>Category Id</th>					
										<th>Product Id</th>					
										<th>Control</th>				
									</tr>							
								</thead>						
								<tbody id='product_category_associations_table'>								
								<?php 								
									$top_nav = mysql_query("SELECT * FROM product_category_associations");				
									While($top_nav_item = mysql_fetch_array($top_nav)){							
										$top_nav_id = $top_nav_item['id'];											
										$top_nav_category_id = $top_nav_item['category_id'];					
										$top_nav_product_id = $top_nav_item['product_id'];				
										echo "<tr id='" . $top_nav_id . "' class='product_category_associations'>";												
											echo "<td class='id'>" . $top_nav_id . "</td>";				
											echo "<td class='category_id'>" . $top_nav_category_id . "</td>";				
											echo "<td class='product_id'>" . $top_nav_product_id . "</td>";				
											echo '<td class="remove_button">									
												<button id="product_category_associations" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 			
												</td>													
											</tr>';													
										}										
									?>											
								</tbody>								
							</table>								
						</div>							
					</div>		
					<div class="widget">			
						<div class="widget-head">				
							<div class="pull-left">Product Application Associations</div>
							<div class='btn btn-success pull-right add_row_product_application_associations'>Add Row</div>									
							<div class="clearfix"></div>						
						</div>							
						<div class="widget-content">					
							<table class="table table-striped table-bordered table-hover">					
								<thead>										
									<tr>									
										<th>Id</th>							
										<th>Product Id</th>					
										<th>Application Id</th>					
										<th>Control</th>				
									</tr>							
								</thead>						
								<tbody id='product_application_associations_table'>								
								<?php 								
									$top_nav = mysql_query("SELECT * FROM product_application_associations");				
									While($top_nav_item = mysql_fetch_array($top_nav)){							
										$top_nav_id = $top_nav_item['id'];											
										$top_nav_product_id = $top_nav_item['product_id'];					
										$top_nav_application_id = $top_nav_item['application_id'];				
										echo "<tr id='" . $top_nav_id . "' class='product_application_associations'>";												
											echo "<td class='id'>" . $top_nav_id . "</td>";				
											echo "<td class='product_id'>" . $top_nav_product_id . "</td>";				
											echo "<td class='application_id'>" . $top_nav_application_id . "</td>";				
											echo '<td class="remove_button">									
												<button id="product_application_associations" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 		 	
												</td>													
											</tr>';													
										}										
									?>											
								</tbody>								
							</table>								
						</div>							
					</div>							
				</div>					
			</div>				
		</div>			
	</div>		
	<!-- Matter ends -->		
</div>	
	<!-- Mainbar ends -->		
	<div class="clearfix"></div>	
</div>	
<!-- Content ends -->
<!-- Footer starts -->
<footer>  
<div class="container">   
	<div class="row">      
		<div class="col-md-12">           
		<!-- Copyright info -->           
			<p class="copy">Copyright &copy; 2014 | <a href="#">CFIC</a> </p>     
		</div>    
	</div>  
</div>
</footer> 
<!-- Footer ends -->
<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
<script>   
	$('#logout_button').on('click', function(){

				var url = "<?php echo $dir . 'ajax/admin-logout/' ?>";
				$.ajax({
					type: 'POST',
					//dataType: "json",	
					url: url,
					data: {
							'test':'test'						
								}, 
					success: 
					function(response){	
						location.reload();				
						
					}
				});
			});	
			
 $(document).ready(function() {		
	$('#datatable').dataTable({"sPaginationType": "full_numbers"});		
	});
	
	/*
	$(document).ready(function(){
		$('tbody').on('click', 'td', function(){
			displayForm($(this));
		
		});		
	});	
	*/
	
	$(document).ready(function(){
		$('tbody').on('click', 'td', function(){
			if($(this).hasClass('remove_button')){	
				var row = $(this).children().children().attr('id');				
				var table = $(this).children().attr('id');
				var dom_row = $(this).parent();
			
				var url = "<?php echo $dir . 'ajax/ajax-remove-record/' ?>";
				$.ajax({
					type: 'POST',
					//dataType: "json",	
					url: url,
					data: {
							'table':table,
							'row': row
								}, 
					success: 
					function(response){	
						console.log(response);					
						$(dom_row).remove();
					}
				});
			}
			else{		
			displayForm($(this));
			}
		});		
	});		
	
$('.add_row_products').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#products_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'products',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='products'><td id='id_column' class='id'>"+last_id+"</td> <td class='link'></td><td class='image'></td> <td class='heading'></td> <td class='description'></td><td class='price'></td><td class='online'></td><td class='paper'></td><td class='everything_disc'></td><td class='disc_classic'></td><td class='other_profiles'></td><td class='remove_button'><button id='products' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#products_table').append(html);
				}
			});
	});	

$('.add_row_product_categories').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#product_categories_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'product_categories',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='product_categories'><td id='id_column' class='id'>"+last_id+"</td> <td class='name'></td><td class='value'></td><td class='remove_button'><button id='product_categories' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#product_categories_table').append(html);
				}
			});
	});	

$('.add_row_product_applications').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#product_applications_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'product_applications',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='product_applications'><td id='id_column' class='id'>"+last_id+"</td> <td class='name'></td><td class='value'></td><td class='remove_button'><button id='product_applications' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#product_applications_table').append(html);
				}
			});
	});	

$('.add_row_product_category_associations').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#product_category_associations_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'product_category_associations',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='product_category_associations'><td id='id_column' class='id'>"+last_id+"</td> <td class='category_id'></td><td class='product_id'></td><td class='remove_button'><button id='product_category_associations' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#product_category_associations_table').append(html);
				}
			});
	});	

$('.add_row_product_application_associations').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#product_application_associations_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'product_application_associations',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='product_application_associations'><td id='id_column' class='id'>"+last_id+"</td> <td class='product_id'></td><td class='application_id'></td><td class='remove_button'><button id='product_application_associations' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#product_application_associations_table').append(html);
				}
			});
	});	
	
	function displayForm(cell){
	//change this to a different attribute on the column
		var column = cell.attr('class'); 
	//get id from row
		table = cell.closest('tr').attr('class');
		id = cell.closest('tr').attr('id');
		cellWidth = cell.css('width');
		prevContent = cell.text();
		
		form = '<form id="test_form" action="javascript: this.preventDefault"><input id="new_val" type="text" name="new_val" size="4" value="'+prevContent+'" /> <input type="hidden" name="id" value="'+id+'" /> <input type="hidden" name="column" value ="'+column+'" /> <input type="hidden" name="table" value ="'+table+'" /></form>';
		cell.html(form).find('input[type=text]').focus().css('width', cellWidth);
		cell.on('click', function(){
			return false;
		});
		cell.on('keydown', function(e){
			if (e.keyCode == 13){
				//they hit enter
				new_value = $('#new_val').val();
				changeField(cell, prevContent, new_value);
			}
			if( e.keyCode == 27){
				cell.text(prevContent);
				cell.off('click');
			}
			
		});
	}
	
	function changeField(cell, prevContent, new_value){
		
		cell.off('keydown');
		var url = "<?php echo $dir . 'ajax/ajax-edit/' ?>";
		input = cell.find('form').serialize();
		
		$.ajax({
			type: 'POST',
			//dataType: "json",	
			url: url,
			data: cell.find('form').serialize(),
			success: 
			function(response){				
				cell.html(new_value);
				cell.off('click');
				console.log('success');
				console.log(response);
			}
		});
		
		cell.off('click');
	}
</script>
</body>
</html>