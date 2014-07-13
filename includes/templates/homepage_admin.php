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
				<h2 class="pull-left">Edit Page Content</h2>
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
						<div id='left_column' class="col-md-6">
							<div class='row'>
							<h3 class='pull-left col-lg-6'>Main Heading</h3>
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Main Heading</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $main_heading . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="main_menu_heading" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Heading Sub Text 1</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content1 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_1" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>

							<div class='row'>
							<h3 class='pull-left col-lg-6'>Slider Screen 1</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 1 Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content4 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_4" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 1 Content</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content2 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_2" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>

							<div class='row'>
							<h3 class='pull-left col-lg-6'>Slider Screen 2</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 2 Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content5 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_5" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 2 Content</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content8 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_8" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>

							<div class='row'>
							<h3 class='pull-left col-lg-6'>Slider Screen 3</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 3 Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content8 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_6" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 3 Content</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content9 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_9" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>

							<div class='row'>
							<h3 class='pull-left col-lg-6'>Slider Screen 4</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 4 Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content7 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_7" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Slider 4 Content</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content10 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_10" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>
							
							<div class='row'>
							<h3 class='pull-left col-lg-6'>List</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];							
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">List Header</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content12 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_12" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 1</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content16 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_16" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 2</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content17 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_17" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 3</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content18 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_18" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 4</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content19 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_19" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 5</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content11 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_11" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													</br><h3 class="center col-lg-12">Text Below List</h3>
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Text Below List</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content13 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:15px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_13" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>													
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>


							<div class='row'>
							<h3 class='pull-left col-lg-6'>Blue Sub Text</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Header</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content29 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_29" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Content</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content30 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_30" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>

							<div class='row'>
								<h3 class='pull-left col-lg-6'>Training Dates Box</h3>						
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									$content31 = $top_nav_item['content_31'];
									$content32 = $top_nav_item['content_32'];
									$content33 = $top_nav_item['content_33'];
									$content34 = $top_nav_item['content_34'];
									$content35 = $top_nav_item['content_35'];
									$content36 = $top_nav_item['content_36'];
									$content37 = $top_nav_item['content_37'];
									$content38 = $top_nav_item['content_38'];
									$content39 = $top_nav_item['content_39'];
									$content40 = $top_nav_item['content_40'];
									$content41 = $top_nav_item['content_41'];
									$content42 = $top_nav_item['content_42'];
									$content43 = $top_nav_item['content_43'];
									$content44 = $top_nav_item['content_44'];
									$content45 = $top_nav_item['content_45'];
									$content46 = $top_nav_item['content_46'];
									$content47 = $top_nav_item['content_47'];									
									
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Header</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content36 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_36" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Icon</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content37 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_37" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 1</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content38 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_38" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 2</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content39 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_39" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 3</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content40 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_40" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Main Right Content</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content41 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_41" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>						
							
							<div class='row'>
							<h3 class='pull-left col-lg-6'>Black Text At Bottom</h3>	
							<!--<div class='pull-right btn btn-success add_new_row_left col-lg-2' style='margin-right:20px;' data-column='.left_append' data-table='main_menu_items'>Add Row</div>-->
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									$content31 = $top_nav_item['content_31'];
									$content32 = $top_nav_item['content_32'];
									$content33 = $top_nav_item['content_33'];
									$content34 = $top_nav_item['content_34'];
									$content35 = $top_nav_item['content_35'];
									
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content31 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_31" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>							
						</div>
						<!-- Left off here, start below this line -->
						<div id='right_column' class="col-md-6">
							<div class='row'>
							<h3 class='pull-left col-lg-6'>Related Product 1</h3>								
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									$content31 = $top_nav_item['content_31'];
									$content32 = $top_nav_item['content_32'];
									$content33 = $top_nav_item['content_33'];
									$content34 = $top_nav_item['content_34'];
									$content35 = $top_nav_item['content_35'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Heading</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content20 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_20" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Image</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content26 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_26" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Link</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content32 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_32" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Product Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content21 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_21" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>
							<div class='row'>
							<h3 class='pull-left col-lg-6'>Related Product 2</h3>							
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									$content31 = $top_nav_item['content_31'];
									$content32 = $top_nav_item['content_32'];
									$content33 = $top_nav_item['content_33'];
									$content34 = $top_nav_item['content_34'];
									$content35 = $top_nav_item['content_35'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Heading</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content22 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_22" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Image</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content27 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_27" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Link</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content33 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_33" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Product Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content23 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_23" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>		
							<div class='row'>
							<h3 class='pull-left col-lg-6'>Related Product 3</h3>							
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									$content31 = $top_nav_item['content_31'];
									$content32 = $top_nav_item['content_32'];
									$content33 = $top_nav_item['content_33'];
									$content34 = $top_nav_item['content_34'];
									$content35 = $top_nav_item['content_35'];
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Heading</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content24 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_24" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Image</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content28 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_28" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Product Link</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content34 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_34" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">Product Description</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content25 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_25" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>
							<div class='row'>
								<h3 class='pull-left col-lg-6'>Latest From Blog Box</h3>						
							</div>
								<?php									
									$row = $_GET["num"];
									$top_nav = mysql_query("SELECT * FROM content WHERE id='$row'");
									While($top_nav_item = mysql_fetch_array($top_nav)){		
									$top_nav_id = $top_nav_item['id'];						
									$top_nav_page_id = $top_nav_item['page_id'];	
									$top_nav_item_heading = $top_nav_item['item_heading'];
									$top_nav_item_content = $top_nav_item['item_content'];									
									$main_heading = $top_nav_item['main_menu_heading'];
									$content1 = $top_nav_item['content_1'];
									$content2 = $top_nav_item['content_2'];
									$content3 = $top_nav_item['content_3'];
									$content4 = $top_nav_item['content_4'];
									$content5 = $top_nav_item['content_5'];
									$content6 = $top_nav_item['content_6'];
									$content7 = $top_nav_item['content_7'];
									$content8 = $top_nav_item['content_8'];
									$content9 = $top_nav_item['content_9'];
									$content10 = $top_nav_item['content_10'];
									$content11 = $top_nav_item['content_11'];
									$content12 = $top_nav_item['content_12'];
									$content13 = $top_nav_item['content_13'];
									$content14 = $top_nav_item['content_14'];
									$content15 = $top_nav_item['content_15'];
									$content16 = $top_nav_item['content_16'];
									$content17 = $top_nav_item['content_17'];
									$content18 = $top_nav_item['content_18'];
									$content20 = $top_nav_item['content_20'];
									$content21 = $top_nav_item['content_21'];
									$content22 = $top_nav_item['content_22'];
									$content23 = $top_nav_item['content_23'];
									$content24 = $top_nav_item['content_24'];
									$content25 = $top_nav_item['content_25'];
									$content26 = $top_nav_item['content_26'];
									$content27 = $top_nav_item['content_27'];
									$content28 = $top_nav_item['content_28'];
									$content29 = $top_nav_item['content_29'];
									$content30 = $top_nav_item['content_30'];
									$content31 = $top_nav_item['content_31'];
									$content32 = $top_nav_item['content_32'];
									$content33 = $top_nav_item['content_33'];
									$content34 = $top_nav_item['content_34'];
									$content35 = $top_nav_item['content_35'];
									$content36 = $top_nav_item['content_36'];
									$content37 = $top_nav_item['content_37'];
									$content38 = $top_nav_item['content_38'];
									$content39 = $top_nav_item['content_39'];
									$content40 = $top_nav_item['content_40'];
									$content41 = $top_nav_item['content_41'];
									$content42 = $top_nav_item['content_42'];
									$content43 = $top_nav_item['content_43'];
									$content44 = $top_nav_item['content_44'];
									$content45 = $top_nav_item['content_45'];
									$content46 = $top_nav_item['content_46'];
									$content47 = $top_nav_item['content_47'];									
									
								echo '<div class="widget col-md-12"> 

								<div class="widget-content">
									<div class="padd">
										<!-- Form starts.  -->
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Header</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content42 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_42" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="row col-lg-12">
												<label class="col-lg-2 control-label ">Icon</label>
												<input name="Main_heading" class="col-lg-8 pull-left" type="text" value="' . $content43 . '"></input>
												<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_43" data-table="content"  class="col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>	
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 1</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content44 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_44" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 2</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content45 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_45" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
												<div class="col-lg-12 row">
													<label style="margin-left:0px;" class="col-lg-2 control-label pull-left">List Item 3</label>
													<div id="testing" class="col-lg-9" style="margin-left:0px; margin-right:0px;">													
														<textarea id="cleditor" class="cleditor content_value" name="input">' . $content46 . '</textarea>													
													</div>
													<div style="margin-left:0px; margin-top:0px; padding-left:0px; padding-right:0px;" id="' . $top_nav_id . '" data-column="content_46" data-table="content" class="editor_field col-lg-1 edit_main save_changes_main btn btn-success pull-right">Save</div>												
												</div></br>
											</div>											
										</form>											
									</div>
								</div>
							</div>	';
							
							}
							?>									
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

$('.edit_main').live('click', function(){
	if($(this).hasClass('save_changes_main')){
		$(this).removeClass('btn-success').addClass('btn-warning').html('Saving...').addClass('active_button');
		var table = $(this).data('table');
		var row = $(this).attr('id');
		var column = $(this).data("column");
						
		if($(this).hasClass('editor_field')){
			$(this).prev().addClass('active_cleditor');			
			window.new_value = $(".active_cleditor iframe").contents().find('body').html();			
		}
		else{
			window.new_value = $(this).prev().val();
		}
		
		var new_val = window.new_value;
		
		var url = "<?php echo $dir . 'ajax/ajax-edit/' ?>";
		$.ajax({
			type: 'POST',
			//dataType: "json",	
			url: url,
			data: {
					'table':table,
					'column': column,
					'id': row,
					'new_val': new_val
						}, 
			success: 
			function(response){	
				console.log(response);					
				$('.active_button').removeClass('active_button').removeClass('btn-warning').addClass('btn-success').html('Save');
				$('.active_cleditor').removeClass('active_cleditor');
			}
		});		
	
	}
});

  $(document).ready(function() {
	$(".cleditor").cleditor();

  });
	  
	
	$(document).ready(function(){
		$('.remove_main').live('click', function(){
			
				var row = $(this).attr('id');				
				var table = $(this).data('table');
				var dom_row = $(this).closest('.widget');
				
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
			

		});		
	});		


$('.add_new_row_left').live('click', function(){
		//need to also execute insert query to add row in database first here
			var table = $(this).data('table');
			var column = 'page_id';
			var id = '8';
			var url = "<?php echo $dir . 'ajax/ajax-add-record-2-column/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':table,
						'column': column,
						'id': id
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
								
					var html = 	'<div class="widget col-md-12"><div class="widget-content"><div class="padd"><form class="form-horizontal" role="form"><div class="form-group"><div class="row col-lg-12"><label class="col-lg-2 control-label">Header</label><input name="Main_heading" class="col-lg-7" type="text" value=""></input><div style="margin-left:0px; margin-top:15px;" id="'+last_id+'" data-column="item_heading" data-table="'+table+'"  class="col-lg-2 edit_main save_changes_main btn btn-success pull-right">Save</div></div><div class="col-lg-12 row"><label class="col-lg-1 control-label">Body</label><div id="testing" class="col-lg-9" style="margin-right:0px;"><textarea id="cleditor" class="cleditor content_value" name="input"></textarea></div><div style="margin-left:0px; margin-top:15px;" id="'+last_id+'" data-column="item_content" data-table="'+table+'" class="col-lg-2 edit_main save_changes_main btn btn-success pull-right editor_field">Save</div></div><div class="row col-lg-12"><div id="'+last_id+'" data-table="'+table+'" class="edit_main remove_main btn btn-danger pull-right">Remove Row</div></div></div></form></div></div></div>';
					
					$('#left_column').append(html);
					$(".cleditor").cleditor();
				}
			});
	});	

$('.add_new_row_right').live('click', function(){
		//need to also execute insert query to add row in database first here
			var table = $(this).data('table');
			var column = 'page_id';
			var id = '8';
			var url = "<?php echo $dir . 'ajax/ajax-add-record-2-column/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':table,
						'column': column,
						'id': id
							}, 
				success: 
				function(response){	
					console.log(response);
					last_id = parseInt(response);
								
					var html = 	'<div class="widget col-md-12"><div class="widget-content"><div class="padd"><form class="form-horizontal" role="form"><div class="form-group"><div class="row col-lg-12"><label class="col-lg-2 control-label">Header</label><input name="Main_heading" class="col-lg-7" type="text" value=""></input><div style="margin-left:0px; margin-top:15px;" id="'+last_id+'" data-column="item_heading" data-table="'+table+'"  class="col-lg-2 edit_main save_changes_main btn btn-success pull-right">Save</div></div><div class="col-lg-12 row"><label class="col-lg-1 control-label">Body</label><div id="testing" class="col-lg-9" style="margin-right:0px;"><textarea id="cleditor" class="cleditor content_value" name="input"></textarea></div><div style="margin-left:0px; margin-top:15px;" id="'+last_id+'" data-column="item_content" data-table="'+table+'" class="col-lg-2 edit_main save_changes_main btn btn-success pull-right editor_field">Save</div></div><div class="row col-lg-12"><div id="'+last_id+'" data-table="'+table+'" class="edit_main remove_main btn btn-danger pull-right">Remove Row</div></div></div></form></div></div></div>';
					
					$('#right_column').append(html);
					$(".cleditor").cleditor();
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
	
//CL Editor

</script>
</body>
</html>