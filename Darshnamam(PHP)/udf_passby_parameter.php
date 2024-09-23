<?php
//Simple parameter
function even_odd()
{
    $n=8;
    if($n%2==0)
    {
        echo $n." Given number is a even<br>";
    }
    else{
        echo $n." Given number is a odd<br>";
    }
}
even_odd();
even_odd();
even_odd();






<?php
//Pass by parameter
function even_odd()
{
    
    if($n%2==0)
    {
        echo $n." Given number is a even<br>";
    }
    else{
        echo $n." Given number is a odd<br>";
    }
}
even_odd();
even_odd();
even_odd();








//pass by Referance parameter
function even_odd(&$x)
{
    $x.="Good Morning!!";
    /*
    if($x%2==0)
    {
        echo $x." Given number is a even<br>";
    }
    else{
        echo $x." Given number is a odd<br>";
    }
        */
}
//even_odd(8);
//even_odd(5);
//even_odd(11);
$y="Hello Everyone";
even_odd($y);
echo $y;
?>
