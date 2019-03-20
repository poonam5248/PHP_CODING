<?php 

$a=20;
$b=30;
$c=10;
?>

<h1><pre>                  


	                         <?php echo "Numbers are a= " .$a. ",b= " .$b. " and c= " .$c; ?></pre></h3><br>

<?php
if(($a>$b)&&($a>$c))
{?>
	<h2><pre>                                             <?php echo "Number 'a' is Greater";?></pre></h2>
	<h2><pre>                                             <?php echo "The value of 'a' is: " .$a;?></pre></h2>
<?php
}

else if(($b>$a)&&($b>$c))
{?>
	<h2><pre>                                             <?php echo "Number 'b' is Greater";?></pre></h2>
	<h2><pre>                                             <?php echo "The value of 'b' is: " .$b;?></pre></h2>
<?php
}

else
{?>
	<h2><pre>                                             <?php echo "Number 'c' is Greater";?></pre></h2> 
	<h2><pre>                                             <?php echo "The value of 'c' is: " .$c;?></pre></h2>
<?php
}
?>

<html>
 <head>
    <style>
	body{
	  background-color:PeachPuff;
	  }
	  </style>
  </head>
  <body>