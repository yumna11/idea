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
		         <h1 style="color:#FFFFFF;text-align:center;padding-top:10px;">Contact Us</h1> 
		         <h4 style="color:#FFFFFF;text-align:center;padding-top:10px;">If you are interested in any project just send us an email here.
		         <br>We are here to answer any question you may have.</h4>
		         
	         </div>
			 
	         <div class="row wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                          <div class="contact-form">
                            <form id="contact-form" method="post" action="contactFormPhpCode.php" role="form" name="sampleform">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name*"  data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_dept" type="text" name="department" class="form-control" placeholder="Department*"  data-error="Department is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_number" type="text" name="number" class="form-control" placeholder="Contact Number" >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div >
                                             <button style = "align-content: center;"name="submit" type="submit" id="submit" >SUBMIT</button> 

                                        </div>
                                    </div>
                                </div>

                            </form>

                          </div>
                     </div>
                    
	</body>
	               
</html>