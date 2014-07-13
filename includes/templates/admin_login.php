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

				</nav>
			</div>
		</div>
	</header>
<!-- Main content starts -->
	<div class="content">
  	<!-- Sidebar -->
    <div class="sidebar">
        
		<ul id="nav">
			<li><a href=<?php echo $dir . 'admin/navigation/' ?> class=''><i class="fa fa-table"></i> <span>Navigation</span></a></li>
			<li><a href=<?php echo $dir . 'admin/pages/' ?> class=""><i class="fa fa-table"></i> <span>Pages</span></a></li>
			<li><a href=<?php echo $dir . 'admin/products/' ?> class=""><i class="fa fa-table"></i> <span>Products</span></a></li>
			
		</ul>
    </div>
    <!-- Sidebar ends -->
  	 <!-- Main bar -->
  	<div class="mainbar">
	    <!-- Page heading -->
	    <div class="page-head">
			<h2 class="pull-left">Login</h2>
			<div class="clearfix"></div>
			<!-- Breadcrumb -->
			<div class="bread-crumb">
				<a href=<?php echo $dir . 'admin/login/' ?>><i class="fa fa-home"></i> Home</a> 
				<!-- Divider -->
				<span class="divider">/</span>
				<a href=<?php echo $dir . 'admin/login/' ?> class="bread-current">Login</a>
			</div>
			<div class="clearfix"></div>		</div>
	    <!-- Page heading ends -->
	    <!-- Matter -->
	    <div class="matter">
			<div class="container">
				<!-- Table -->
				<form>
					<label id='username_label' style='float:left; margin-right:5px; margin-bottom:5px;'>Username: </label>
					<input style='margin-bottom:5px;' type='text' id='username_login' class='login_inputs' name='username'></input></br>
					<label style='float:left; margin-right:5px; margin-bottom:5px;'>Password: </label>
					<input style='margin-bottom:5px;' type='password' class='login_inputs' id='password' name='password'></input></br>
					<div style='margin-left:175px;' id='login_button' class='btn btn-primary'>Submit</div>
				</form>
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

			$('#login_button').on('click', function(){
				$('.login_error').remove();
				var username = $('#username_login').val();
				var password = $('#password').val();
				
				var url = "<?php echo $dir . 'ajax/admin-login/' ?>";
				$.ajax({
					type: 'POST',
					//dataType: "json",	
					url: url,
					data: {
							'username':username,
							'password': password
								}, 
					success: 
					function(response){	
						console.log(response);
						
						if(response == 1){
							var url_login = "<?php echo $dir . 'admin/navigation/' ?>";
							window.location = url_login;			
						}
						else{
						$('#username_label').before('<div style="margin-bottom:5px; font-size:14px;" class="login_error">The username or password are incorrect.</div>');				
						}
					}
				});
			});		

$('.login_inputs').on('keydown', function(e){			
			if (e.keyCode == 13){
				$('#login_button').click();
			}
});
</script>
</body></html>
