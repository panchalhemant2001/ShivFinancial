<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo($title); ?></title>

<style>
#body{
	margin-top:0px; 
	background-color:#Cd9;
}

#main{
	position:relative;
	width:1150px;
	min-height:665px;
	margin:auto;
	margin-top:0px;
	top:0px;
	background-color:#FFC;
	left:0px;	
}

#logo{
	position:absolute;
	top:0px;
	left:0px;
	width:80px;
	height:80px;
	margin-top:10px;
	margin-left:10px;
	background: url("images/logo.png");	
	background-size:contain;
}

#header{
	position:absolute;
	top:0px;
	left:0px;
	width:1150px;
	height:100px;
	
}


#hornavmenu{
	position:absolute;
	top:100px;
	left:0px;
	height:50px;
	width:1150px;
	background-color:#F0C;	
}

#hornavmenu div a:link, #hornavmenu div a:active, #hornavmenu div a:visited{
	text-decoration:none;
	color:black;
	display:block;;	
	height:inherit;
}

#hornavmenu div a:hover {
		
		background: -ms-linear-gradient(top left, #CCC, #FFF);
		background: -moz-linear-gradient(top left, #CCC, #FFF);
		background: -o-linear-gradient(top left, #CCC, #FFF);
		background: -webkit-linear-gradient(top left, #CCC, #FFF);
		background: linear-gradient(top left, #CCC, #FFF);
		display:block;
		color:#000;
		font-weight:bold;
		border-style:solid;
		border-width:thin;
}

#vernavmenu{
	position:absolute;
	top:150px;
	left:0px;
	min-height:535px;
	width:200px;
	background-color:#666;	
}


#maincontents{
	position:absolute;
	top:150px;
	left:200px;
	min-height:535px;
	width:950px;
	background-color:#FFC;	
	
}

#maincontents h1, #maincontents p{
	margin:35px;	
}

#maincontents p{
	font-size:20px;	
	text-align:justify;
}


#maincontents h1{
	color:#903;
	text-shadow:1px 1px 1px rgba(255,255,0,1.0);
}

</style>
<!-- header background code

background: -ms-linear-gradient(top left, #ffc, #eff);

-->
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.accordion.custom.min.js" type="text/javascript"></script>
</head>

<body id="body">
<div id="main">

	<!--
	<div id="logo">
    	<!-- Logo Here -->
  	<!--
    </div>
	-->

  <header id="header" style="background-image:url('images/headerbg.jpg');">
    	<!-- Banner Here -->
    <?php
		include("segments/header_main.php");
	?>
  </header>
    
    
  <div id="hornavmenu" style="z-index:1;">
    	<nav>
        	<!-- Horizontal Menu Here -->

									<script src="js/createHorizontalMenu.js" type="text/javascript">
                                    </script>

   		</nav>
    </div>
    
    
  	<div id="vernavmenu">
		<?php
			include("segments/verticalMenu.php");
		?>
    </div>
    
    
    
    <div id="maincontents">
    	<?php
			include($contentfile);
		?>
    </div>
</div>


</body>
</html>