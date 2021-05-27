<?php

    $name=$_POST['name'];
    $maths=$_POST['maths'];
    $eng=$_POST['eng'];
    $science=$_POST['science'];
    $history=$_POST['history'];
    $hindi=$_POST['hindi'];

    //$sum=$maths+$eng+$science+$history+$hindi;

    $sum=360;
?>

<h2>Hello <?php echo $name;?></h2>
<h3>Your marks</h3>
<p>Maths:<?php echo $maths; ?></p>
<p>English:<?php echo $eng; ?></p>
<p>Science:<?php echo $science; ?></p>
<p>History:<?php echo $history; ?></p>
<p>Hindi:<?php echo $hindi; ?></p>

<p><strong>Total: <?php echo $sum; ?></strong</p>

<?php 

    $perc=(100*$sum)/500;
    if($perc>80){
        echo "<h2>Congratulations! First class</h2>";}
    
    elseif($perc<=80 && $perc>70){
        echo "<h2>Congratulations! Second class</h2>";}
    
    elseif($perc<=70 && $perc>50){
        echo "<h2>Congratulations! Pass</h2>";}

    else{
        echo "Fail! better luck next time";}
?>
