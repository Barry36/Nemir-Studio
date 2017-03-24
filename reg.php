<?php 
	include ('header.php');
	?>
	<!--script type="text/javascript">
		function chkinput(form){				//define a function		
			   	 if(form.email.value==""){				// check eamil
	               alert("Please Enter Your E-mail!");
	               form.email.focus();
	               return(false);
	             }		 
				 if(form.userpwd.value==""){            // check password
				 
				   alert("Please Enter Password!");   
				   form.userpwd.focus();
				   return(false);
				} 
				 if(form.userpwd.value.length<6){		// check password length
				 
				   alert("Password length should be more than six!");   
				   form.userpwd.focus();
				   return(false); 
				 
				 } 
				 
				
	             var i=form.email.value.indexOf("@");
	             var j=form.email.value.indexOf(".");
	             if((i<0)||(i-j>0)||(j<0)){				// check password validity
                   alert("Please Enter a valid E-mail");
	               form.email.select();
	               return(false);
	             }
	             if(form.first_name.value==""){				// check first name
	               alert("Please Enter Your First_Name!");
	               form.first_name.focus();
	               return(false);
	             }
	             if(form.last_name.value==""){				// check first name
	             alert("Please Enter Your Last_Name!");
	             form.last_name.focus();
	             return(false);
	             }				 			  
			    return(true);							//submit form
			     
			   }
	</script-->
	<div id="main" class="wrapper style1 bg_phone">
					<div class="container" >
							<section>
								<div class="8u 12u$(xsmall)">
								<h3>Colorful Campus Life is Awaiting You</h3>
								</div>
								<form method="post" action="savereg.php" onSubmit="return chkinput(this)">
									<div class="row uniform 50%" >
										<div class="8u 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Your Email" />
										</div>
										<div class="8u$ 12u$(xsmall)">
											<input type="password" name="userpwd" id="" value="" placeholder="Enter Your Password" />
										</div>
										<div class="8u$ 12u$(xsmall) ">
											<input type="text" name="first_name" id="" value="" placeholder="First Name" />
										</div>
										<div class="8u$ 12u$(xsmall) ">
											<input type="text" name="last_name" id="" value="" placeholder="Last Name" />
										</div>
										<div class="10u$ 12u$(xsmall)">
											<!-- ul class="actions"></ul -->
											<input type="submit" name="submit" class="special try" value="Join Now">
										</div>
										<!-- This is a pull down list template>	
										<div class="12u$">
											<div class="select-wrapper">
												<select name="category" id="category">
													<option value="">- Category -</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
										</div 			-->

										<!-- This is a radio button template
										<div class="4u 12u$(medium)">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Low Priority</label>
										</div>
										<div class="4u 12u$(medium)">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Normal Priority</label>
										</div>
										<div class="4u$ 12u$(medium)">
											<input type="radio" id="priority-high" name="priority">
											<label for="priority-high">High Priority</label>
										</div           -->

										<!-- This is a check box template
										<div class="6u 12u$(medium)">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Email me a copy of this message</label>
										</div>
										<div class="6u$ 12u$(medium)">
											<input type="checkbox" id="human" name="human" checked>
											<label for="human">I am a human and not a robot</label>
										</div                -->


										<!-- This is a notepad template
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div                -->

										<!-- This is a button template
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="special" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div-->
									</div>
								</form>
							</section>

			
			 
			<!-- 
			form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
			    <tr>
                  <td width="110" height="30"><div align="center">Username：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="usernc" size="25" class="inputcss"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">Password：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="password" name="userpwd" size="25" class="inputcss"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">Repeat Password：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="password" name="userpwd1" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">Real Name：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="truename" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">Sex：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <select name="sex">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>                  </td>
                </tr>
                <tr>
                  <td height="30"><div align="center">Email：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="email" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">Mobile：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="tel" size="25" class="inputcss"></td>
                </tr>
                <!--tr>
                  <td height="30"><div align="center">QQ号码：</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="qq" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">Profile Picture：</div></td>
                  <td width="90" height="30">&nbsp;
				  		<input type="file" name="FaceImg" class=""></td>
                </tr>
                <tr>
                  <td height="45" colspan="3"><div align="center">
                    <input name="submit" type="submit" class="buttoncss" value="Join Now">
                    &nbsp;&nbsp;&nbsp;
                    <input name="reset" type="reset" class="buttoncss" value="Reset">
                  </div></td>
                </tr>
		      </form>
				
            </table></td>
        </tr>
      </table></td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
</td>
  </tr>
</table -->
</div>
</div>
<?php 
	include ("footer.php"); 
	?>