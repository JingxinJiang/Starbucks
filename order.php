<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Starbucks' Order</title>
</head>
<body class="order">
    <div class="titleContainer">       
        <h1>Your Starbucks' Order</h1>                
    </div>
    <div class="orderContentCenter">    
        <div class="orderInfo1">
            <?php
                
                $coffeeNum=$_REQUEST['coffee'];
                $cream=$_REQUEST['cream'];
                $size1=$_REQUEST['size'];
                console.log($size1);
                $size= filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
                $sugar=$_REQUEST['sugar'];
                //echo $coffeeNum." ".$cream." ".$sugar." size: ".$size."yes";
                for($j=0;$j<$coffeeNum;$j++){
                    echo "<div class='orderInfo'>";
                    if($size==1){
                      echo "<img src='images/cup.jpg' width='50px' >";  
                      $cost=1; 
                    }else if($size==2){
                      echo "<img src='images/cup.jpg' width='80px' >";
                      $cost=1.5;  
                    }else if($size==3){
                      echo "<img src='images/cup.jpg' width='110px' >";
                      $cost=2;   
                    }else if($size==4){
                      echo "<img src='images/cup.jpg' width='140px' >"; 
                      $cost=2.5;  
                    }
                                                       
                    if($cream>0){
                        echo "<img src='images/plus.jpg' >";
                        for($k=0;$k<$cream;$k++){
                        echo "<img src='images/cream.jpg' width='50px'>";}
                    }
                    
                    if($sugar>0){
                        echo "<img src='images/plus.jpg' >";
                        for($i=0;$i<$sugar;$i++){
                        echo "<img src='images/sugar.jpg' width='50px'>";}
                    }                    
                    echo "</div>";
            }
            ?>
        </div> 
    </div>            
    <h2 id="orderCost">Cost: 
      <?php echo"$".number_format($cost,2)." * ".$coffeeNum." + $".number_format($cost*$coffeeNum*0.13,2)." (tax) = $".number_format($cost*$coffeeNum*1.13,2);?>
            
    </h2>

</body>
</html>