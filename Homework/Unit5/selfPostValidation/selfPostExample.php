<?php
  $prod_name="";
  $prod_price="";
  $radio="";
  $prod_number="";

  $name_errMsg="";
  $price_errMsg="";
  $radio_errMsg="";
  $number_errMsg="";

  if(isset($_POST['prod_submit']) )
  {
    // Check for the honeypot field. If is set, then it came from a bot
    if(isset($_POST["prod_number"])) {
      //header("Location: selfPostExample.php");
      //Jeff, when I uncommented this it would just always catch it and give me the blank form. So somehow
      //the prod_number is getting set without me doing so. Why is it falling into this every time?
    }
    echo "The form has been submitted. ";

    $prod_name = $_POST["prod_name"]; // Get data from name=value pair
    $prod_price = $_POST["prod_price"];
    $radio = $_POST["radio"];

    // echo "Product Name: $prod_name | ";
    // echo "Product Price: $prod_price | ";
    // echo "Selected Radio: $radio ";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Self Posting Form</title>
    <style>
      #prod_number {
        display: none;
      }
      .displayNumber {
        display: none;
      }
    </style>
    <!-- Can use javascript to hide things as well. Mine didn't work. Will need to research. -->
  </head>
  <body>
    <h1>WDV341 Intro PHP </h1>
    <h2>Unit-8 Self Posting Form</h2>
    <h3>Example Form</h3>
    <p>Converting a form to a self posting form.</p>
    <form name="form1" method="post" action="">
      <p>
        <label for="prod_name">Product Name: </label>
        <input type="text" name="prod_name" id="prod_name" value="<?php echo $prod_name; ?>">
        <span><?php echo $name_errMsg; ?></span>
      </p>
      <p>
        <label for="prod_price">Product Price: </label>
        <input type="text" name="prod_price" id="prod_price" value="<?php echo $prod_price; ?>">
        <span><?php echo $price_errMsg; ?></span>
      </p>
      <p>Product Color: <span><?php echo $radio_errMsg; ?></span></p>
      <p>
        <input type="radio" name="radio" id="prod_red" value="prod_red" <?php if(isset($radio) && $radio=="prod_red") echo "checked"; ?>>
        <label for="prod_red">Red Wagon<br>
        </label>
        <input type="radio" name="radio" id="prod_green" value="prod_green" <?php if(isset($radio) && $radio=="prod_green") echo "checked"; ?>>
        <label for="prod_green">Green Wagon</label>
      </p>
      <p class="displayNumber">
        <label for="prod_number">Product Number: </label>
        <input type="text" name="prod_number" id="prod_number" value="<?php echo $prod_number; ?>">
        <span><?php echo $number_errMsg; ?></span>
      </p>
      <p>
        <input type="submit" name="prod_submit" id="prod_submit" value="Submit">
        <input type="reset" name="Reset" id="button" value="Reset">
      </p>
    </form>
    <p>&nbsp;</p>
  </body>
</html>
