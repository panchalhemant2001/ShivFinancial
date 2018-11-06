<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Main Title</title>

<style>
#body{
	margin-top:0px; 
	background-color:black;
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
	left:100px;
	width:1050px;
	height:100px;
	background: -ms-linear-gradient(top left, #ffc, #eff);
	
		
}


#hornavmenu{
	position:absolute;
	top:100px;
	left:0px;
	height:30px;
	width:1150px;
	background-color:#F0C;	
	display:block;
}

#hornavmenu div a:link, #hornavmenu div a:active, #hornavmenu div a:visited{
	text-decoration:none;
	height:30px;
	color:white;
	display:block;	
}

#hornavmenu div a:hover {
		
		background: -ms-linear-gradient(top left, #A11, #BCD);
		background: -moz-linear-gradient(top left, #A11, #BCD);
		background: -o-linear-gradient(top left, #A11, #BCD);
		background: -webkit-linear-gradient(top left, #A11, #BCD);
		background: linear-gradient(top left, #A11, #BCD);
		display:block;
		color:yellow;
		font-weight:bold;
		border-style:solid;
		border-width:thin;
}

#vernavmenu{
	position:absolute;
	top:130px;
	left:0px;
	min-height:535px;
	width:200px;
	background-color:#666;	
}





</style>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>
</head>

<body id="body">
<div id="main">
	<div id="logo">
    	<!-- Logo Here -->
  </div>


  <header id="header">
    	<!-- Banner Here -->
    <div style="position:absolute; left:25px; top:0px; text-align:left;width:500px;">
        	<p style="color:blue;font-size:30px;font-weight:bold;font-family:comic sans ms;background-color:rgba(102,102,102,0.2);text-align:center; ">SHIV FINANCIAL SERVICES</p>
            <!-- <h4>240 Finch West - Albion Rd Etobicoke ON M9V 3G2</h4> -->
        </div>
        
        
    <div style="position:absolute; left:525px; top:0px; text-align:right;width:500px; color:#900; text-decoration:none; display:block; font-size:20px;font-weight:bold;">
        	<p>Contact:  647-236-7620<br>
            Email: servak_2007@hotmail.com</p>
        </div>
  </header>
    
    
  <div id="hornavmenu" style="z-index:1;">
    	<nav>
        	<!-- Horizontal Menu Here -->







									<script>
                                    var mnu=[
												["one","Yahoo","Gmail","ShivFinancialServices"], 
												["1","2","3","4","5"],
												["1","2","3"],
												["1","2"],
												["1","2","3","4","5","6","7","8"]
											];
                                    
									var hlinks=[
												["#","http://wwww.yahoo.com","http://www.gmail.com","http://shivfinancialservices.ca"], 
												["#","2","3","4","5"],
												["#","2","3"],
												["#","2"],
												["#","2","3","4","5","6","7","8"]
											];
									
									//document.writeln("<h1>" + mnu.length + "</h1>");
                                    
                                    for(var row=0; row < mnu.length;row++)
                                        {
                                            var tp=0;
                                            var wdth=230;		
                                            var hgt=30;
                                            var lft=row*wdth;
                                            var mystyle="";
                                            for(var col=0; col<mnu[row].length; col++)
                                                {
                                                    mystyle="position:absolute;";
                                                    mystyle+="left:" + lft + "px;";
                                                    mystyle+="top:"+tp+"px;";
                                                    mystyle+="width:" + wdth + "px;";
                                                    mystyle+="height:" + hgt + "px;";
                                                    //mystyle+="background-color:black;";
													mystyle+="background: -ms-linear-gradient(top left, #123, #456);"; //For Microsoft IE
													mystyle+="background: -webkit-linear-gradient(top left, #123, #456);"; //For Safari 5.1 to 6.0
													mystyle+="background: -o-linear-gradient(top left, #123, #456);"; //For Opera 11.1 to 12.0
													mystyle+="background: -moz-linear-gradient(top left, #123, #456);"; //For Firefox 3.6 to 15
													mystyle+="background: linear-gradient(top left, #123, #456);";	//standard syntax
                                                    mystyle+="text-align:center;";
                                                    mystyle+="font-size:22px;";
                                                    mystyle+="color:yellow;";
                                                    //mystyle+="padding:1px;";
													//mystyle+="border-top:inset;";
													//mystyle+="border-left:inset;";
													//mystyle+="border-color:red;";
													mystyle+="";
                                                    
                                                    
                                                    if(col==0)
                                                        {
                                                        document.writeln("<div style='" + mystyle +"'  onmouseover='showMenu(" + row + ");'   onmouseout='hideMenu(" + row + ");'>" +  "<a href='" + hlinks[row][col] + "'>" + mnu[row][col] +"</a></div>" );		
                                                        }
                                                    else if(col>0)
                                                        {
                                                            mystyle+="visibility:hidden;";	
                                                            
                                                            //each div must given a name menuoption<rownumber><columnnumber>
                                                            document.writeln("<div style='" + mystyle +"' name='menuoption" + row + "" +  col + "'   onmouseover='showMenu(" + row + ");'   onmouseout='hideMenu(" + row + ");'>" + "<a href='" + hlinks[row][col] + "'>" + mnu[row][col] +"</a></div>" );
                                                        }
                                                    
                                                    
                                                    
                                                    tp+=hgt;
                                                }
                                            
                                        }
                                        
                                            
                                                    /*
                                                    var menuoptiondiv=document.getElementsByName("menuoption01");
                                                    document.write("<br><br><br><br>" + menuoptiondiv.item(0).innerHTML);
                                                    
                                                    menuoptiondiv.item(0).style.visibility="visible";
                                                    */
                                    function showMenu(row)
                                        {	
                                            for(i=1; i < mnu[row].length; i++)
                                                {
                                                    //document.write("hi");
                                                    var elementname="menuoption" + row + "" + i;
                                                    var menuoptiondiv=document.getElementsByName(elementname);
                                                    menuoptiondiv.item(0).style.visibility="visible";
                                                }
                                        }
                                        
                                    
                                    
                                    function hideMenu(row)
                                        {	
                                            for(i=1; i < mnu[row].length; i++)
                                                {
                                                    //document.write("hi");
                                                    var elementname="menuoption" + row + "" + i;
                                                    var menuoptiondiv=document.getElementsByName(elementname);
                                                    menuoptiondiv.item(0).style.visibility="hidden";
                                                }
                                        }
                                    
                                    
                                    </script>



















   		</nav>
    </div>
    
    
  <div id="vernavmenu">
    	<aside style="margin:0px; padding:0px;">
        	<img src="images/jagdishbhai.jpg" style="margin:0px; padding:0px;">
            
            <div style="background-color:#333; font-size:15px; font-weight:bold; color:pink;">
            	<p align="center">JAGDISHBHAI SEVAK<br>INSURANCE BROKER</p>
                
            </div>
        </aside>
    	<nav>
        	<!--Vertical Menu Here-->
            
        </nav>
    </div>
</div>


</body>
</html>