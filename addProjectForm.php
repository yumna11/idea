<html>
     <head>
	     <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="css/bootstrap.min.css" rel="stylesheet">
		 <link href="assets/css/project.css" rel="stylesheet"/>
     </head>
     <body style="background: linear-gradient(to right, #DC143C,#990000,#DC143C);">
         <div id="contact-form" style="background-color:#000000; margin:20px 100px 20px 100px;border-radius:10px;">
		     <div>
		         <h1 style="color:#FFFFFF;text-align:center;padding-top:10px;">Add your Project!</h1> 
		         <h4 style="color:#FFFFFF;text-align:center;padding-top:10px;">Share your project ideas with others.Showcase your innovation.</h4> 

	         </div>
			 <p id="failure">Oopsie...message not sent.</p>  
		      <p id="success">Your message was sent successfully. Thank you!</p>
	         <form action="addProjectPhpCode.php" method="post">
			     <div style="padding-left:200px;padding-right:200px;">
		             <label for="prjct">
		      	         <span class="required" >Project Title:*</span> 
		      	         <input type="text" id="prjct" name="project"  placeholder="Project Title" size="50" required="required" tabindex="1" autofocus="autofocus" />
		             </label> 
			     </div>
				 <div>
				     <h4 style="color:#FFFFFF;text-align:center;">Choose any of the following format to upload your Project IDEA.</h4>
				 </div>
				 <div style="padding-left:200px;padding-right:200px;">
		             <label for="uploadfile">
		      	         <span class="required" >Upload Project File:</span> 
		      	         <input type="file" id="uploadfile" name="file" accept=".doc/*" size="50" tabindex="1" autofocus="autofocus" />
		             </label> 
			     </div>
				 <div style="padding-left:200px;padding-right:200px;">
		             <label for="uploadvideo">
		      	         <span class="required" >Upload Project Video:</span> 
		      	         <input type="file" id="uploadvideo" name="video" accept="video/*" size="10" tabindex="1" autofocus="autofocus" />
		             </label> 
			     </div>
				 <div style="padding-left:200px;padding-right:200px;">
		             <label for="uploadimg">
		      	         <span class="required" >Upload Project Image:</span> 
		      	         <input type="file" id="uploadimg" name="picture" accept="image/*" size="10" tabindex="1" autofocus="autofocus" />
		             </label> 
			     </div>
				 <div style="padding-left:200px;padding-right:200px;">
		             <label for="uploadurl">
		      	         <span class="required" >Upload Project URL:</span> 
		      	         <input type="url" id="uploadurl" name="project_url"  size="10" tabindex="1" autofocus="autofocus" />
		             </label> 
			     </div>
			     <div style="padding-left:200px;padding-right:200px;">		          
		             <label for="prjctdes">
		      	         <span class="required">Project Description:*</span> 
		      	   
		      	         <textarea type="text" name="project_des" id="prjctdes" placeholder="Please write your Project Description here." tabindex="5" rows="6" cols="45" ></textarea>
		             </label>  
			     </div>
			     <div style="padding-left:200px;padding-right:200px;">		          
		              <label for="subject">
		                 <span class="required">Department:* </span><br>
			             <select id="dept" name="dept" tabindex="4" style="width:750px;">   
			                 <option value="SE">Software Engineering</option>
			                 <option value="TX">Textile Engineering</option>
			                 <option value="CH">Chemical Engineering </option>
					         <option value="TE">Telecommmunication Engineering</option>
			                 <option value="UE">Urban Engineering</option>
			                 <option value="PE">Petroleum Engineering </option>
					         <option value="ME">Mechanical Engineering</option>
			                 <option value="AE">Automotive Engineering</option>
			                 <option value="EE">Electrical Engineering </option>
					         <option value="EL">Electronics Engineering</option>
			                 <option value="IM">Industrial Manufacturing Engineering</option>
			                 <option value="CE">Civil Engineering </option>
					         <option value="MT">Metallurgical Engineering</option>
			                 <option value="ML">Materials Engineering</option>
			                 <option value="ET">Earthquake Engineering </option>
			             </select>
		             </label>
			     </div>
			     <div style="padding-left:200px;padding-right:200px;">
		             <label for="name">
		               	 <span class="required">Project Supervisor:</span> 
		      	         <input type="text" id="prjctspr" name="prjctspr"  placeholder="Your Project Supervisor" size="44" tabindex="1" autofocus="autofocus" />
		             </label> 
			     </div>
			<div style="padding-left:200px;padding-right:200px;">
		      <label for="name">
		      	<span class="required">Team Member 1:*</span> 
		      	<input type="text" id="tm1" name="tm1"  placeholder="Enter Team Member Name" size="47"  tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div style="padding-left:200px;padding-right:200px;">
		      <label for="name">
		      	<span class="required">Team Member 2: </span> 
		      	<input type="text" id="tm2" name="tm2"  placeholder="Enter Team Member Name" size="48" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div style="padding-left:200px;padding-right:200px;">
		      <label for="name">
		      	<span class="required">Team Member 3: </span> 
		      	<input type="text" id="tm3" name="tm3"  placeholder="Enter Team Member Name" size="48"  tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div style="padding-left:200px;padding-right:200px;">
		      <label for="email">
		      	<span class="required">Email:*</span>
		      	<input type="email" id="email" name="email"  placeholder="Your Email" size="57"  tabindex="2"  />
		      </label>
			  <br>
              <label for="contact no">
		      	<span class="required">Contact Number:*</span>
		      	<input type="Number" id="contact" name="contact"  placeholder="Your Contact Number" size="47"  tabindex="2"  />
		      </label> 			  
			</div>
			<div>		           
		        <button name="submit" type="submit" id="submit" >SUBMIT</button>        
			</div>
			 </form>
         </div>
	</body>
	               
</html>