<body>
	<header>
		<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
			<div class="container">
				<!-- Menu button for smallar screens -->
				<div class="navbar-header">
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
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
		<ul id="nav">
			<li><a href=<?php echo $dir . 'admin/navigation/' ?> class='open'><i class="fa fa-table"></i> <span>Navigation</span></a></li>
			<li><a href=<?php echo $dir . 'admin/pages/' ?> class=""><i class="fa fa-table"></i> <span>Pages</span></a></li>
			<li><a href=<?php echo $dir . 'admin/products/' ?> class=""><i class="fa fa-table"></i> <span>Products</span></a></li>
			
		</ul>
    </div>
    <!-- Sidebar ends -->
  	 <!-- Main bar -->
  	<div class="mainbar">
	    <!-- Page heading -->
	    <div class="page-head">
			<h2 class="pull-left">Navigation</h2>
			<div class="clearfix"></div>
			<!-- Breadcrumb -->
			<div class="bread-crumb">
				<a href=<?php echo $dir . 'admin/navigation/' ?>><i class="fa fa-home"></i> Home</a> 
				<!-- Divider -->
				<span class="divider">/</span>
				<a href=<?php echo $dir . 'admin/navigation/' ?> class="bread-current">Navigation</a>
			</div>
			<div class="clearfix"></div>		</div>
	    <!-- Page heading ends -->
	    <!-- Matter -->
	    <div class="matter">
			<div class="container">
				<!-- Table -->
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-head">
								<div class="pull-left">Top Navigation </div>
								<div class='btn btn-success pull-right add_row_top_nav'>Add Row</div>
								<div class="clearfix"></div>
							</div>
							<div class="widget-content">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Id</th>											
											<th>Order</th>
											<th>Name</th>
											<th>Link</th>
											<th>Icon</th>										
											<th>Control</th>											
										</tr>
									</thead>
									<tbody id='top_nav_table'>									
										<?php 										
											$nav_top = '0';										
											$top_nav = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_top' ");				
											While($top_nav_item = mysql_fetch_array($top_nav)){											
												$top_nav_id = $top_nav_item['id'];										
												$top_nav_order = $top_nav_item['display_order'];										
												$top_nav_name = $top_nav_item['name'];											
												$top_nav_link = $top_nav_item['link'];													
												$icon = $top_nav_item['icon'];										
											echo "<tr id='" . $top_nav_id . "' class='navbar_top_level'>";											
												echo "<td id='id_column' class='id'>" . $top_nav_id . "</td>";
												echo "<td class='display_order'>" . $top_nav_order . "</td>";
												echo "<td class='name'>" . $top_nav_name . "</td>";
												echo "<td class='link'>" . $top_nav_link . "</td>";
												echo "<td class='icon'>" . $icon . "</td>";
												echo '<td class="remove_button">
														<button id="navbar_top_level" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 				
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
				<div class="row">					
					<div class="col-md-12">						
						<div class="widget">
							<div class="widget-head">
								<div class="pull-left">Top Navigation Second Level</div>
								<div class='btn btn-success pull-right add_row_top_nav_1'>Add Row</div>
								<div class="clearfix">
								</div>							
							</div>							
							<div class="widget-content">								
								<table class="table table-striped table-bordered table-hover">									
									<thead>										
										<tr>											
											<th>Id</th>	
											<th>Order</th>											
											<th>Name</th>											
											<th>Link</th>																						
											<th>Control</th>											
										</tr>									
									</thead>									
									<tbody id='top_nav_table_1'>									
										<?php												
											$nav_top = '1';										
											$top_nav = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_top' ");		
											While($top_nav_item = mysql_fetch_array($top_nav)){								
											$top_nav_id = $top_nav_item['id'];										
											$top_nav_order = $top_nav_item['display_order'];								
											$top_nav_name = $top_nav_item['name'];										
											$top_nav_link = $top_nav_item['link'];										
											$icon = $top_nav_item['icon'];		
											echo "<tr id='" . $top_nav_id . "' class='navbar_top_level'>";											
												echo "<td id='id_column' class='id'>" . $top_nav_id . "</td>";
												echo "<td class='display_order'>" . $top_nav_order . "</td>";
												echo "<td class='name'>" . $top_nav_name . "</td>";
												echo "<td class='link'>" . $top_nav_link . "</td>";												
												echo '<td class="remove_button">
														<button id="navbar_top_level" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 	
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
				<div class="row">					
					<div class="col-md-12">						
						<div class="widget">							
							<div class="widget-head">								
								<div class="pull-left">Navigation Sub Menus</div>	
								<div class='btn btn-success pull-right add_row_sub_nav'>Add Row</div>								
								<div class="clearfix"></div>							
							</div>							
							<div class="widget-content">								
								<table class="table table-striped table-bordered table-hover">									
									<thead>										
										<tr>											
											<th>Id</th>	
											<th>Order</th>											
											<th>Parent Navigation Id</th>											
											<th>Name</th>											
											<th>Link</th>		
											<th>Control</th>
										</tr>									
									</thead>									
									<tbody id='sub_nav_table'>									
										<?php			
											$sub_nav = mysql_query("SELECT * FROM navbar_sub_level");	
											While($top_nav_item = mysql_fetch_array($sub_nav)){			
												$top_nav_id = $top_nav_item['id'];		
												$top_nav_display_order = $top_nav_item['display_order'];												
												$top_nav_parent = $top_nav_item['top_id'];					
												$top_nav_name = $top_nav_item['name'];						
												$top_nav_link = $top_nav_item['link'];						
												echo "<tr id='" . $top_nav_id . "' class='navbar_sub_level'>";												
													echo "<td id='id_column' class='id'>" . $top_nav_id . "</td>";
													echo "<td class='display_order'>" . $top_nav_display_order . "</td>";
													echo "<td class='top_id'>" . $top_nav_parent . "</td>";	
													echo "<td class='name'>" . $top_nav_name . "</td>";			
													echo "<td class='link'>" . $top_nav_link . "</td>";				
													echo '<td class="remove_button">	
														<button id="navbar_sub_level" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 
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
				<div class="row">					
					<div class="col-md-12">					
						<div class="widget">					
							<div class="widget-head">							
								<div class="pull-left">Footer 3 Column</div>
								<div class='btn btn-success pull-right add_row_footer_top'>Add Row</div>									
								<div class="clearfix"></div>				
							</div>						
							<div class="widget-content">		
								<table class="table table-striped table-bordered table-hover">		
									<thead>									
										<tr>								
											<th>Id</th>		
											<th>Page Id</th>
											<th>Heading</th>					
											<th>Icon</th>						
											<th>Link</th>						
											<th>Link Display</th>				
											<th>Content</th>						
											<th>Control</th>							
										</tr>						
										</thead>						
										<tbody id='footer_top_table'>							
										<?php												
											$top_nav = mysql_query("SELECT * FROM footer_top");			
											While($top_nav_item = mysql_fetch_array($top_nav)){				
											$top_nav_id = $top_nav_item['id'];								
											$top_nav_heading = $top_nav_item['heading'];
											$top_nav_page_id = $top_nav_item['page_id'];
											$top_nav_icon = $top_nav_item['icon'];								
											$top_nav_link = $top_nav_item['link'];								
											$top_nav_link_name = $top_nav_item['link_name'];					
											$top_nav_content = $top_nav_item['content'];						
											echo "<tr id='" . $top_nav_id . "' class='footer_top'>";															
												echo "<td id='id_column' class='id'>" . $top_nav_id . "</td>";	
												echo "<td class='page_id'>" . $top_nav_page_id . "</td>";												
												echo "<td class='heading'>" . $top_nav_heading . "</td>";							
												echo "<td class='icon'>" . $top_nav_icon . "</td>";								
												echo "<td class='link'>" . $top_nav_link . "</td>";								
												echo "<td class='link_name'>" . $top_nav_link_name . "</td>";							
												echo "<td class='content' style='width:500px;'>" . $top_nav_content . "</td>";			
												echo '<td class="remove_button">									
													<button id="footer_top" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 			
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
				<div class="row">					
					<div class="col-md-12">						
						<div class="widget">							
							<div class="widget-head">								
								<div class="pull-left">Footer Site Map Columns</div>	
								<div class='btn btn-success pull-right add_row_footer_columns'>Add Row</div>									
								<div class="clearfix"></div>							
							</div>							
							<div class="widget-content">								
								<table class="table table-striped table-bordered table-hover">									
									<thead>										
										<tr>											
											<th>Id</th>											
											<th>Title</th>											
											<th>Control</th>										
										</tr>									
										</thead>									
										<tbody id='footer_columns_table'>									
										<?php																					
											$top_nav = mysql_query("SELECT * FROM footer_bottom_columns");					
											While($top_nav_item = mysql_fetch_array($top_nav)){								
												$top_nav_id = $top_nav_item['id'];										
												$top_nav_title = $top_nav_item['title'];									
												echo "<tr id='" . $top_nav_id . "' class='footer_bottom_columns'>";																
												echo "<td id='id_column' class='id'>" . $top_nav_id . "</td>";											
												echo "<td class='title'>" . $top_nav_title . "</td>";											
												echo '<td class="remove_button">									
													<button id="footer_bottom_columns" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 						
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
				<div class="row">					
					<div class="col-md-12">						
						<div class="widget">							
							<div class="widget-head">								
								<div class="pull-left">Footer Site Map Content</div>
								<div class='btn btn-success pull-right add_row_footer_content'>Add Row</div>								
								<div class="clearfix"></div>							
							</div>							
							<div class="widget-content">								
								<table class="table table-striped table-bordered table-hover">									
									<thead>										
										<tr>											
											<th>Id</th>		
											<th>Order</th>
											<th>Parent Column Id</th>											
											<th>Value</th>											
											<th>Link</th>											
											<th>Control</th>										
										</tr>									
									</thead>									
								<tbody id='footer_content_table'>	
								<?php			
									$top_nav = mysql_query("SELECT * FROM footer_column_content");					
										While($top_nav_item = mysql_fetch_array($top_nav)){							
										$top_nav_id = $top_nav_item['id'];	
										$top_nav_display_order = $top_nav_item['display_order'];										
										$top_nav_column_id = $top_nav_item['column_id'];							
										$top_nav_value = $top_nav_item['value'];									
										$top_nav_link = $top_nav_item['link'];									
										echo "<tr id='" . $top_nav_id . "' class='footer_column_content'>";																	
											echo "<td id='id_column' class='id'>" . $top_nav_id . "</td>";
											echo "<td class='display_order'>" . $top_nav_display_order . "</td>";
											echo "<td class='column_id'>" . $top_nav_column_id . "</td>";								
											echo "<td class='value'>" . $top_nav_value . "</td>";									
											echo "<td class='link'>" . $top_nav_link . "</td>";									
											echo '<td class="remove_button">									
												<button id="footer_column_content" class="btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 
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
			<div class="clearfix"></div>
		</div>	</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="copy">Copyright &copy; 2014 | <a href="#">CFIC</a> </p>
			</div>
		</div>
	</div>
</footer> 	
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
	
	$('.add_row_top_nav').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#top_nav_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'navbar_top_level',
						'level': '0'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='navbar_top_level'><td id='id_column' class='id'>"+last_id+"</td> <td class='display_order'></td><td class='name'></td> <td class='link'></td> <td class='icon'></td><td class='remove_button'><button id='navbar_top_level' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#top_nav_table').append(html);
				}
			});
	});

		$('.add_row_top_nav_1').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#top_nav_table_1 tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'navbar_top_level',
						'level': '1'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='navbar_top_level'><td id='id_column' class='id'>"+last_id+"</td> <td class='display_order'></td><td class='name'></td> <td class='link'></td> <td class='icon'></td><td class='remove_button'><button id='navbar_top_level' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#top_nav_table_1').append(html);
				}
			});
	});
	
		$('.add_row_sub_nav').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#sub_nav_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'navbar_sub_level',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='navbar_sub_level'><td id='id_column' class='id'>"+last_id+"</td> <td class='display_order'></td> <td class='top_id'></td><td class='name'></td> <td class='link'></td> <td class='remove_button'><button id='navbar_sub_level' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#sub_nav_table').append(html);
				}
			});
	});

		$('.add_row_footer_top').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#footer_top_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'footer_top',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='footer_top'><td id='id_column' class='id'>"+last_id+"</td> <td class='page_id'></td> <td class='heading'></td> <td class='icon'></td><td class='link'></td><td class='link_name'></td> <td class='content'></td> <td class='remove_button'><button id='footer_top' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#footer_top_table').append(html);
				}
			});
	});

		$('.add_row_footer_columns').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#footer_columns_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'footer_bottom_columns',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='footer_bottom_columns'><td id='id_column' class='id'>"+last_id+"</td> <td class='title'></td> <td class='remove_button'><button id='footer_bottom_columns' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#footer_columns_table').append(html);
				}
			});
	});

		$('.add_row_footer_content').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#footer_content_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'footer_column_content',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='footer_column_content'><td id='id_column' class='id'>"+last_id+"</td> <td class='display_order'></td> <td class='column_id'></td> <td class='value'></td><td class='link'></td><td class='remove_button'><button id='footer_column_content' class='btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i> </button> </td></tr>";
					$('#footer_content_table').append(html);
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
				console.log(response);
				cell.html(new_value);
				cell.off('click');
				console.log('success');
			}
		});
		
		cell.off('click');
	}
</script>
</body></html>
