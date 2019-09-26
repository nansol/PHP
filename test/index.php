<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<div class="board">
    <?php 
        for($row=0; $row<8; $row++) {
            echo "<div class='row'$row>";
            for($col=0; $col<8; $col++) {
                if($row == 4 && $col == 1){
                   echo "<div>
                            <img src='http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png' alt=''>
                        </div>";
                }
                $total=$row+$col;
                if($total % 2 == 0){
                echo "<div class='white'></div>";
                }elseif($total % 2 == 1){
                echo "<div class='black'></div>";
                } 
            }
        echo "</div>";
        }
    ?>
</div>
</body>

</html>