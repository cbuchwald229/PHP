<?php
  $name="";
  $phoneNumber="";
  $radio="";
  $emailAddress="";
  $registration="";
  $fridayDinner="";
  $saturdayLunch="";
  $sundayAwardBrunch="";
  $special="";

  if(isset($_POST['prod_submit']) )
  {
    // Check for the honeypot field. If the name is set then it came from a bot
    if(isset($_POST["prod_number"])) {
      //header("Location: customerRegistrationForm.php");
      //Jeff, when I uncommented this it would just always catch it and give me the blank form. So somehow
      //the prod_number is getting set without me doing so. Why is it falling into this every time?
    }
    echo "The form has been submitted. ";

    $name = $_POST["name"]; // Get data from name=value pair
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $radio = $_POST["radio"];
    $registration = $_POST["registration"];
    $fridayDinner = isset($_POST["fridayDinner"]) ? $_POST["fridayDinner"] : "";
    $saturdayLunch = isset($_POST["saturdayLunch"]) ? $_POST["saturdayLunch"] : "";
    $sundayAwardBrunch = isset($_POST["sundayAwardBrunch"]) ? $_POST["sundayAwardBrunch"] : "";
    $special = $_POST["special"];
  }
?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
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
		<h2>Unit-5 and Unit-6 Self Posting - Form Validation Assignment</h2>
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
		        <label for="registration">Registration: </label>
		        <select name="registration" id="registration">
		          <option value="" <?php if(isset($registration) && $registration=="") echo "selected"; ?>>Choose Type</option>
		          <option value="attendee" <?php if(isset($registration) && $registration=="attendee") echo "selected"; ?>>Attendee</option>
		          <option value="Presenter" <?php if(isset($registration) && $registration=="Presenter") echo "selected"; ?>>Presenter</option>
		          <option value="volunteer" <?php if(isset($registration) && $registration=="volunteer") echo "selected"; ?>>Volunteer</option>
		          <option value="guest" <?php if(isset($registration) && $registration=="guest") echo "selected"; ?>>Guest</option>
		        </select>
		      </p>
		      <p>Badge Holder:</p>
		      <p>
		        <input type="radio" name="radio" id="clip" value="clip" <?php if(isset($radio) && $radio=="clip") echo "checked"; ?>>
		        <label for="clip">Clip</label> <br>
		        <input type="radio" name="radio" id="lanyard" value="lanyard" <?php if(isset($radio) && $radio=="lanyard") echo "checked"; ?>>
		        <label for="lanyard">Lanyard</label> <br>
		        <input type="radio" name="radio" id="magnet" value="magnet" <?php if(isset($radio) && $radio=="magnet") echo "checked"; ?>>
		        <label for="magnet">Magnet</label>
		      </p>
		      <p>Provided Meals (Select all that apply):</p>
		      <p>
		        <input type="checkbox" name="fridayDinner" value="fridayDinner" <?php if($fridayDinner=="fridayDinner") echo "checked"; ?>>
		        <label for="fridayDinner">Friday Dinner</label><br>
		        <input type="checkbox" name="saturdayLunch" value="saturdayLunch" <?php if(isset($saturdayLunch) && $saturdayLunch=="saturdayLunch") echo "checked"; ?>>
		        <label for="saturdayLunch">Saturday Lunch</label><br>
		        <input type="checkbox" name="sundayAwardBrunch" value="sundayAwardBrunch" <?php if(isset($sundayAwardBrunch) && $sundayAwardBrunch=="sundayAwardBrunch") echo "checked"; ?>>
		        <label for="sundayAwardBrunch">Sunday Award Brunch</label>
		      </p>
		      <p>
		        <label for="special">Special Requests/Requirements: (Limit 200 characters)</label><br>
		        <textarea name="special" cols="40" rows="5" id="special"></textarea>
		      </p>
					<p class="displayNumber">
						<label for="prod_number">Product Number: </label>
						<input type="text" name="prod_number" id="prod_number" value="<?php echo $prod_number; ?>">
					</p>
		  <p>
		    <input type="submit" name="prod_submit" id="prod_submit" value="Submit">
				<input type="reset" name="Reset" id="button" value="Reset">
		  </p>
		</form>
		</div>
	</body>
</html>
