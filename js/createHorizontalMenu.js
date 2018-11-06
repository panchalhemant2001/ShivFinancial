// JavaScript Document to create Horizontal Menu

                                    var mnu=[
												["HOME"], 
												["LIFE INSURANCE","Term Life Insurance","Whole Life Insurance","Mortgage Insurance","Universal Life Insurance","Critical Illness Insurance","Disability Insurance","Funeral Insurance","Drug and Dental Insurance","Estate Planning"],
												["SUPER VISA INSURANCE <br><font size='2'>(For Parents/Grand Parents)</font>"],
												["TRAVEL INSURANCE","Insurance for Visitor to<br>Canada / New Immigrants"],
												["BOOK AN APPOINTMENT"],
												["GET A QUOTE"]
											];
                                    
									var hlinks=[
												["index.php"], 
												["life_insurance.php","term_life_insurance.php","whole_life_insurance.php","mortage_insurance.php","universal_life_insurance.php","critical_illness_insurance.php","disability_insurance.php","funeral_insurance.php","drug_and_dental_insurance.php","estate_planning.php"],
												["super_visa_insurance.php"],
												["travel_insurance.php","visitor_to_canada.php"],
												["#"],
												["get_a_quote.php"]
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
													mystyle+="background: -ms-linear-gradient(top left, #fff, #ffa);"; //For Microsoft IE
													mystyle+="background: -webkit-linear-gradient(top left, #fff, #ffa);"; //For Safari 5.1 to 6.0
													mystyle+="background: -o-linear-gradient(top left, #fff, #ffa);"; //For Opera 11.1 to 12.0
													mystyle+="background: -moz-linear-gradient(top left, #fff, #ffa);"; //For Firefox 3.6 to 15
													mystyle+="background: linear-gradient(top left, #fff, #ffa);";	//standard syntax
                                                    mystyle+="text-align:center;";
                                                    mystyle+="font-size:14px;";
                                                    
													
                                                    //mystyle+="padding:1px;";
													//mystyle+="border-top:inset;";
													//mystyle+="border-left:inset;";
													mystyle+="border-style:inset;";
													
													mystyle+="border-color:grey;";
													mystyle+="border-radius:2px;"
													mystyle+="";
                                                    
                                                    
                                                    if(col==0)
                                                        {
															
                                                        document.writeln("<div style='" + mystyle +"'  onmouseover='showMenu(" + row + ");'   onmouseout='hideMenu(" + row + ");'>" +  "<a href='" + hlinks[row][col] + "'><br>" + mnu[row][col] +"</a></div>" );		
                                                        }
                                                    else if(col>0)
                                                        {
                                                            mystyle+="visibility:hidden; width:250px;font-weight:none;";
																
                                                            
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
