<?php

$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];

if(($a>$b)&&($a>$c))
{?>
	<h1><pre>               <?php echo "Number 'a' is Greater";?></pre></h1>
	<h1><pre>               <?php echo "The value of 'a' is: " .$a;?></pre></h1>
<?php
}

else if(($b>$a)&&($b>$c))
{?>
	<h1><pre>               <?php echo "Number 'b' is Greater";?></pre></h1>
	<h1><pre>               <?php echo "The value of 'b' is: " .$b;?></pre></h1>
<?php
}

else
{?>
	<h1><pre>               <?php echo "Number 'c' is Greater";?></pre></h1> 
	<h1><pre>               <?php echo "The value of 'c' is: " .$c;?></pre></h1>
<?php
}
?>

<html>
 <head>
    <style>
	body{
	  background-color:PeachPuff;
	  background-image: url("Smiley.png");
	  background-position: center;
	  background-repeat: no-repeat;
	  }
	  </style>
  </head>
  <body>