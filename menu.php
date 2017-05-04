<?php
define("TITLE","Menu | Franklins Restaurant");
include('includes/header.php');
 ?>
 <div id="menu-items">
   <h1> Our Menu </h1>
   <p>Like our team, our menu is very samll &mdash; but dang, does it ever pack a punch ! </p>
   <p><em> Click any menu item to learn more about it. </em></p>

   <hr>

   <ul>
     <?php foreach ($menuItems as $dish => $item) { ?>
         <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?>
         </a><sup>$</sup><?php echo $item["price"];?></li>
     <?php   } ?>
   </ul>

 </div>
<?php
include('includes/footer.php');
?>
