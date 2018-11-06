// JavaScript Document to create Horizontal Menu

                                    var mnu=[
												["HOME"], 
												["LIFE INSURANCE","Term Life Insurance","Whole Life Insurance","Mortgage Insurance","Universal Life Insurance","Critical Illness Insurance","Disability Insurance","Funeral Insurance","None Medical Insurance","Drug and Dental Insurance","Estate Planning"],
												["SUPER VISA INSURANCE <br><font size='2'>(For Parents/Grand Parents)</font>","Super Visa Insurance Cost","Income Requirement for Super Visa","Super Visa Benefits","Eligibility for Super Visa Insurance"],
												["TRAVEL INSURANCE","Insurance for Visitor to Canada","Travel Insurance for Canadians","Insurance for students","Insurance for New Immigrants"],
												["BOOK AN APPOINTMENT"],
												["GET A QUOTE"]
											];
                                    
									var hlinks=[
												["index.php"], 
												["#","#","#","#","#","#","#","#","#","#","#","#"],
												["#","#","#","#","#"],
												["#","#","#","#","#"],
												["#"],
												["#"]
											];
											
											
				//calling function createHorizontalMenu()			
				createHorizontalMenu();
				
				
				function createHorizontalMenu()
					{									
									//document.writeln("<h1>" + mnu.length + "</h1>");
                                    
                                    for(var row=0; row < mnu.length;row++)
                                        {
                                            var tp=0;
                                            var wdth=191.66;		
                                            var hgt=50;
                                            var lft=row*wdth;
                                            var mystyle="";
                                            for(var col=0; col<mnu[row].length; col++)
                                                {													
                                                    mystyle="position:absolute;";
													
                                                    mystyle+="left:" + lft + "px;";
                                                    mystyle+="top:"+tp+"px;";
                                                    mystyle+="width:" + wdth + "px;";
                                                    mystyle+="height:" + hgt + "px;";
													mystyle+="text-align:center;";
													mystyle+="font-weight:bold;";
													mystyle+="font-family:arial;";
                                                    //mystyle+="background-color:black;";
													mystyle+="background: -ms-linear-gradient(top left, #123, #456);"; //For Microsoft IE
													mystyle+="background: -webkit-linear-gradient(top left, #123, #456);"; //For Safari 5.1 to 6.0
													mystyle+="background: -o-linear-gradient(top left, #123, #456);"; //For Opera 11.1 to 12.0
													mystyle+="background: -moz-linear-gradient(top left, #123, #456);"; //For Firefox 3.6 to 15
													mystyle+="background: linear-gradient(top left, #123, #456);";	//standard syntax
                                                    mystyle+="text-align:center;";
                                                    mystyle+="font-size:14px;";
                                                    mystyle+="color:yellow;";
													
                                                    //mystyle+="padding:1px;";
													//mystyle+="border-top:inset;";
													//mystyle+="border-left:inset;";
													//mystyle+="border-color:red;";
													mystyle+="";
                                                    
                                                    
                                                    if(col==0)
                                                        {
															
                                                        document.writeln("<div style='" + mystyle +"'  onmouseover='showMenu(" + row + ");'   onmouseout='hideMenu(" + row + ");'>" +  "<a href='" + hlinks[row][col] + "'><br>" + mnu[row][col] +"</a></div>" );		
                                                        }
                                                    else if(col>0)
                                                        {
                                                            mystyle+="visibility:hidden; width:250px";
																
                                                            
                                                            //each div must given a name menuoption<rownumber><columnnumber>
                                                            document.writeln("<div style='" + mystyle +"' name='menuoption" + row + "" +  col + "'   onmouseover='showMenu(" + row + ");'   onmouseout='hideMenu(" + row + ");'>" + "<a href='" + hlinks[row][col] + "'>" + mnu[row][col] +"</a></div>" );
                                                        }
                                                    
                                                    	if(col>0)
															hgt=30;
                                                    	tp+=hgt;
                                                }
                                            
                                        }
                                        
					}
                                                    
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
