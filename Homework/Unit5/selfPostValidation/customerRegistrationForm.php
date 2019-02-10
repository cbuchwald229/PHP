<?php
  $name="";
  $phoneNumber="";
  $emailAddress="";

  if(isset($_POST['prod_submit']) )
  {
    // Check for the honeypot field. If the name is set then it came from a bot
    if(isset($_POST["prod_number"])) {
      header("Location: http://www.artisticpawprint.com/");
      // FIX THIS!
    }
    echo "The form has been submitted. ";

    $name = $_POST["name"]; // Get data from name=value pair
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
  }
?>
<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>WDV341 Intro PHP - Self Posting Form</title>
		<style>

		#orderArea	{
			width:600px;
			border:thin solid black;
			margin: auto auto;
			padding-left: 20px;
		}

		#orderArea h3	{
			text-align:center;
		}
		.error	{
			color:red;
			font-style:italic;
		}

		#prod_number {
			display: none;
		}

		.displayNumber {
			display: none;
		}
		</style>
	</head>
	<body>
		<h1>WDV341 Intro PHP</h1>
		<h2>Unit-5 and Unit-6 Self Posting - Form Validation Assignment
		</h2>
		<p>&nbsp;</p>
		<div id="orderArea">
		<form name="form3" method="post" action="">
		  <h3>Customer Registration Form</h3>
		      <p>
		        <label for="name">Name:</label>
		        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
		      </p>
		      <p>
		        <label for="phoneNumber">Phone Number:</label>
		        <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber; ?>">
		      </p>
		      <p>
		        <label for="emailAddress">Email Address: </label>
		        <input type="text" name="emailAddress" id="emailAddress" value="<?php echo $emailAddress; ?>">
		      </p>
		      <p>
		        <label for="select">Registration: </label>
		        <select name="select" id="select">
		          <option value="">Choose Type</option>
		          <option value="attendee">Attendee</option>
		          <option value="Presenter">Presenter</option>
		          <option value="volunteer">Volunteer</option>
		          <option value="guest">Guest</option>
		        </select>
		      </p>
		      <p>Badge Holder:</p>
		      <p>
		        <input type="radio" name="clip" id="clip" value="clip" <?php if(isset($radio) && $radio=="clip") echo "checked"; ?>>
		        <label for="clip">Clip</label> <br>
		        <input type="radio" name="lanyard" id="lanyard" value="lanyard" <?php if(isset($radio) && $radio=="lanyard") echo "checked"; ?>>
		        <label for="lanyard">Lanyard</label> <br>
		        <input type="radio" name="magnet" id="magnet" value="magnet" <?php if(isset($radio) && $radio=="magnet") echo "checked"; ?>>
		        <label for="magnet">Magnet</label>
		      </p>
		      <p>Provided Meals (Select all that apply):</p>
		      <p>
		        <input type="checkbox" name="fridayDinner" id="fridayDinner">
		        <label for="fridayDinner">Friday Dinner</label><br>
		        <input type="checkbox" name="saturdayLunch" id="saturdayLunch">
		        <label for="saturdayLunch">Saturday Lunch</label><br>
		        <input type="checkbox" name="sundayAwardBrunch" id="sundayAwardBrunch">
		        <label for="sundayAwardBrunch">Sunday Award Brunch</label>
		      </p>
		      <p>
		        <label for="textarea">Special Requests/Requirements: (Limit 200 characters)<br>
		        </label>
		        <textarea name="textarea" cols="40" rows="5" id="textarea"></textarea>
		      </p>
					<p class="displayNumber">
						<label for="prod_number">Product Number: </label>
						<input type="text" name="prod_number" id="prod_number" value="<?php echo $prod_number; ?>">
					</p>
		  <p>
		    <input type="submit" name="submit1" id="prod_submit" value="Submit">
				<input type="reset" name="Reset" id="button" value="Reset">
		  </p>
		</form>
		</div>
	</body>
</html>
