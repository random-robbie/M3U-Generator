
<!DOCTYPE html> 
<html> 
<head> 
	<title>Add Link.</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head> 

 
<body>
<div data-role="page" id="home" data-theme="a" data-title="RPi Control">
         <div data-role="header">
            <h1>VLC Stream Link</h1>
<div align="center" data-role="content">         
<form action="submit.php" method="post"  class="ui-body ui-body-a ui-corner-all">
<fieldset>
					<div data-role="fieldcontain">
 <label for="name">Name:</label><br><br>
				<input type="text" name="name" id="name" placeholder="Name Of Link" data-inline="true" value="" />
			</div>
<div data-role="fieldcontain">
 <label for="Link">Link:</label><br><br>
				<input type="text" name="link" id="link" placeholder="Link" data-inline="true" value="" />
			</div>
<div data-role="fieldcontain">
<button type="submit" data-theme="b" name="submit" data-ajax="true" data-inline="true" value="submit-value">Submit</button>
</div>
				</fieldset>
			</form>
			</div>
			<div align="center" data-role="footer"> 
			<button data-inline="true"><a href="generate.php">Get Play List</a></button><br><br>
 
    </div>

</body>
</html>