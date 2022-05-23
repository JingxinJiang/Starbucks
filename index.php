<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    
    <title>Starbucks</title>
</head>
<body>
    <div class="titleContainer">              
        <h1>Welcome to Starbucks</h1>        
        <h2>Price list of coffee:</h2>
        <ul>
            <li><h2>small size: $1.00</h2></li>       
            <li><h2>Medium size: $1.50</h2></li>
            <li><h2>large size: $2.00</h2></li>
            <li><h2>Extra-large: $2.50</h2></li>
        </ul>
        
    </div>
    <div class="contentCenter">
        <form action="order.php" method="post" name="form1">
            <fieldset>
                <div class="formcontrol">
                    <label>Number of Coffees: </label>
                    <input type="number" name="coffee" autofocus min="1" class="heightC" placeholder="1"/><br>
                </div>
                <div class="formcontrol">
                    <label>Size: </label>
                    <select name="size" id="size" class="heightC">
                        <option value="1" >Small</option>
                        <option value="2">Medium</option>
                        <option value="3">Large</option>
                        <option value="4">Extra-large</option>
                    </select><br>
                </div>
                <div class="formcontrol">
                    <label>Number of Creams: </label>
                    <input type="number"  name="cream" class="heightC" min="0" max="5" placeholder="0"/>
                    <br>
                </div>
                <div class="formcontrol">
                    <label>Number of Sugar: </label>
                    <input type="number"  name="sugar" class="heightC" min="0" max="5" placeholder="0"/>
                    <br>
                </div>            
                <input type="reset" class="button1" id="btnOne" value="reset"/> 
                <input type="submit" class="button1" value="Order coffee" />
                
            </fieldset>
        </form>
    </div>
        <hr>

</body>
</html>