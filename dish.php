<?php
define("TITLE", "Menu | Franklins Restaurant");
include('includes/header.php');

function stripBadChars( $input ) {
  $output = preg_replace("/[^a-zA-Z0-9_-]/", " ", $input);
  return $output;
}

if(isset($_GET['item'])){

  $menuItem = stripBadChars($_GET['item']);

  $dish = $menuItems[$menuItem];

}

// calculating suggested tri-tip

function calcTip($price, $tip){

  $totalTip = $price * $tip;
  echo money_format('%.2n', $totalTip);

}

 ?>

<hr>
<div id="dish">
  <h1> <?php echo $dish['title']; ?> <span class='price'><sup>$</sup> <?php echo $dish['price']; ?> </span></h1>
  <p> <?php echo $dish['blurb']; ?>
  <br>

  <p><strong>Suggested beverage: <?php echo $dish['drink']; ?> </strong></p>
  <p><em>Suggested tip: <sup>$</sup><?php calcTip($dish['price'], 0.20);?></em></p>

</div>
<hr>
<a href="menu.php" class="button previous">&laquo; Back to Menu </a>


<?php
include('includes/footer.php');
 ?>
