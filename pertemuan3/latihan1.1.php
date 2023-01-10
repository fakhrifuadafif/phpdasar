<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    
<!-- <table border="1" cellpadding="10" cellspacing="0">
    1.Normal 
    <tr>
        <td>1.1</td>
        <td>1.2</td>
        <td>1.3</td>
        <td>1.4</td>
        <td>1.5</td>
    </tr>
 </table>
 <table border="1" cellpadding="10" cellspacing="0">

    2.for-->
<?php
    // for ( $a = 1; $a <= 3; $a++ ) {
    //     echo "<tr>";
    //         for( $b = 1; $b <= 5; $b++ ){
    //             echo " <td>$a,$b</td>";
    //         }
    //     echo "</tr>";}
?>
<!-- </table> -->

<table border="1" cellpadding="10" cellspacing="0">

<!-- 3.tamplating -->

    <?php for ($i = 1; $i <= 3; $i++ ) { ?>
        <tr>
            <?php for($j =1; $j <= 5; $j++ ) {?>
                <td><?= "$i,$j"; ?> </td>
                <!-- php echo diganti dengan =  -->
            <?php } ?>
        </tr> 
    <?php } ?>
<!--  : endfor
{ bisa di ubah dengan :
} bisa di ubah dengan endfor, endif, endforeach  -->
</table>



</body>
</html>