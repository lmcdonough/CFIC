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
			<div class="sidebar-dropdown"><a href="#">Pages</a></div>
			<!-- Search form -->			<ul id="nav">
				<li><a href=<?php echo $dir . 'admin/navigation/' ?> ><i class="fa fa-table"></i> <span>Navigation</span></a></li>				<li><a href=<?php echo $dir . 'admin/pages/' ?> class="open"><i class="fa fa-table"></i> <span>Pages</span></a></li>				<li><a href=<?php echo $dir . 'admin/products/' ?> class=""><i class="fa fa-table"></i> <span>Products</span></a></li>				
			</ul>
		</div>
		<!-- Sidebar ends -->
  	  	<!-- Main bar -->
		<div class="mainbar">
			<!-- Page heading -->
			<div class="page-head">
				<h2 class="pull-left">Pages</h2>
				<div class="clearfix"></div>
				<!-- Breadcrumb -->
				<div class="bread-crumb">
					<a href=<?php echo $dir . 'admin/navigation/' ?>><i class="fa fa-home"></i> Home</a> 
					<!-- Divider -->
					<span class="divider">/</span>
					<a href=<?php echo $dir . 'admin/pages/' ?> class="bread-current">Pages</a>
				</div>				<div class="clearfix"></div>
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
									<div class="pull-left">Pages</div>
									<div class='btn btn-success pull-right add_row_pages'>Add Row</div>											
									<div class="clearfix"></div>								
								</div>								
								<div class="widget-content">									
									<table class="table table-striped table-bordered table-hover">										
										<thead>											
											<tr>												
												<th>Id</th>																							
												<th>HTML Template</th>												
												<th>First link Path</th>												
												<th>Second Link Path</th>												
												<th>Third Link Path</th>																							
												<th>Page Heading</th>
												<th>Title</th>
												<th>Description</th>												
												<th>Edit</th>		
												<th>Remove</th>												
											</tr>										
										</thead>										
										<tbody id='pages_table'>												
										<?php 	
											$top_nav = mysql_query("SELECT * FROM content WHERE page_id NOT LIKE 'admin' AND page_id NOT LIKE 'ajax' ORDER BY 'id' ASC");
											While($top_nav_item = mysql_fetch_array($top_nav)){		
											$top_nav_id = $top_nav_item['id'];						
											$top_nav_template = $top_nav_item['template'];					
											$top_nav_page_id = $top_nav_item['page_id'];						
											$top_nav_page_num = $top_nav_item['page_num'];							
											$top_nav_page_type = $top_nav_item['page_type'];						
											$top_nav_page_heading = $top_nav_item['page_heading'];	
											$top_nav_page_title = $top_nav_item['title'];	
											$top_nav_page_description = $top_nav_item['description'];
											
											echo "<tr id='" . $top_nav_id . "' class='content'>";																
												echo "<td class='id'>" . $top_nav_id . "</td>";								
												echo "<td class='template'>" . $top_nav_template . "</td>";								
												echo "<td class='page_id'>" . $top_nav_page_id . "</td>";								
												echo "<td class='page_num'>" . $top_nav_page_num . "</td>";								
												echo "<td class='page_type'>" . $top_nav_page_type . "</td>";								
												echo "<td class='page_heading'>" . $top_nav_page_heading . "</td>";	
												echo "<td class='title'>" . $top_nav_page_title . "</td>";	
												echo "<td class='description'>" . $top_nav_page_description . "</td>";													
												echo '<td class="edit_button">										
													<button id="' . $top_nav_id . '" class="edit_page btn btn-xs btn-warning"><i id="" class="edit_page fa fa-pencil"></i> </button>													
													</td>';
												echo '<td class="remove_button">													
													<button id="' . $top_nav_id . '" data-id="content" class="remove_record btn btn-xs btn-danger"><i id="' . $top_nav_id . '" class="remove_record fa fa-times"></i> </button> 	 			
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
	
	$(document).ready(function(){
		$('tbody').on('click', 'td', function(){
			if($(this).hasClass('remove_button') || $(this).hasClass('edit_button')){
				var row = $(this).children().attr('id');			
				var table = $(this).children().data('id');
				if($(this).hasClass('edit_button')){
					template = $(this).siblings('.template').html().slice(0,-4) + '_admin';				
					var url_redirect_sub = "<?php echo $dir . 'admin/' ?>";									
					var url_redirect = url_redirect_sub + template + '/'+row+'/';
					window.location.href = url_redirect;
				}
				else{
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
			}
			else{		
			displayForm($(this));
			}
		});		
	});		
	
$('.add_row_pages').on('click', function(){
		//need to also execute insert query to add row in database first here
		$('#pages_table tr').each(function() {
				var customerId = $(this).find("td:first").html(); 		
				window.customerId = customerId;
				});
			 	
			var url = "<?php echo $dir . 'ajax/ajax-add-record/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'content',
						'level': 'na'
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
					var html = 	"<tr id='"+last_id+"' class='content'><td id='id_column' class='id'>"+last_id+"</td> <td class='template'></td><td class='page_id'></td> <td class='page_num'></td> <td class='page_type'></td><td class='page_heading'></td><td class='edit_button'><button id='"+last_id+"' class='edit_page btn btn-xs btn-warning'><i class='edit_page fa fa-pencil'></i> </button></td><td class='remove_button'><button id='"+last_id+"' data-id='content' class='remove_record btn btn-xs btn-danger'><i id='"+last_id+"' class='remove_record fa fa-times'></i></button></td></tr>";
					$('#pages_table').append(html);
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
			}
		});
		
		cell.off('click');
	}
</script>
</body>
</html>