<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.medialoot.com">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><a href="#"> New Messages</a></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Fashion</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="new_store.php">New Store</a></li>
			<li class="icn_edit_article"><a href="#">Edit Store</a></li>
		</ul>
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#">Add New User</a></li>
			<li class="icn_view_users"><a href="#">View Users</a></li>
		</ul>
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">File Manage</a></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>
			<li class="icn_jump_back"><a href="login.php">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2015</strong>		</p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column"><!-- end of stats article --><!-- end of content manager article --><!-- end of messages article -->
		
	  <div class="clear"></div>
	  <article class="module width_3_quarter">
	    <header>
	      <h3 class="tabs_involved">Fashion Store</h3>
	      <ul class="tabs">
	        <li><a href="#tab1">Men</a></li>
	        <li><a href="#tab2">Woman</a></li>
	        <li><a href="#tab3">Kids</a></li>
          </ul>
        </header>
	    <div class="tab_container">
	      <div id="tab1" class="tab_content">
	        <table class="tablesorter" cellspacing="0">
	          <thead>
	            <tr>
	              <th width="27%"><div align="center">Nama Toko</div></th>
	              <th width="18%"><div align="center">Kategori Toko</div></th>
	              <th width="22%"><div align="center">Alamat Toko</div></th>
	              <th width="24%"><div align="center">Kontak Toko</div></th>
	              <th width="9%"><div align="center">Actions</div></th>
                </tr>
              </thead>
	          <tbody>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <a href="new_store.php"><input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
              </tbody>
            </table>
          </div>
	      <!-- end of #tab1 -->
	      <div id="tab2" class="tab_content">
	        <table class="tablesorter" cellspacing="0">
	          <thead>
	            <tr>
	              <th width="27%"><div align="center">Nama Toko</div></th>
	              <th width="18%"><div align="center">Kategori Toko</div></th>
	              <th width="22%"><div align="center">Alamat Toko</div></th>
	              <th width="24%"><div align="center">Kontak Toko</div></th>
	              <th width="9%"><div align="center">Actions</div></th>
                </tr>
              </thead>
	          <tbody>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
              </tbody>
            </table>
          </div>
	      <!-- end of #tab2 -->
          <div id="tab3" class="tab_content">
	        <table class="tablesorter" cellspacing="0">
	          <thead>
	            <tr>
	              <th width="27%"><div align="center">Nama Toko</div></th>
	              <th width="18%"><div align="center">Kategori Toko</div></th>
	              <th width="22%"><div align="center">Alamat Toko</div></th>
	              <th width="24%"><div align="center">Kontak Toko</div></th>
	              <th width="9%"><div align="center">Actions</div></th>
                </tr>
              </thead>
	          <tbody>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
	            <tr>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td>&nbsp;</td>
	              <td><div align="center">
	                <input type="image" src="images/icn_edit.png" title="Edit">
	                <input type="image" src="images/icn_trash.png" title="Trash">
	                </div></td>
                </tr>
              </tbody>
            </table>
          </div>
	      <!-- end of #tab3 -->
        </div>
	    <!-- end of .tab_container -->
      </article>
    <!-- end of post new article --><!-- end of styles article --></section>


</body>

</html>