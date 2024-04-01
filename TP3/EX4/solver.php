<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EX4</title>
</head>
<body>
    

    <h1>Find roots of a Qudratic Equation </h1>
    <h2>Qudratic Equation: ax^2 + bx + c </h2>
         <h3>Enter the coefficients</h3>
                     
    <form action="" method="post">  
      
        Enter a :   <input type="number" placeholder="entrer a..... " name="para1"/><br>
        Enter b :   <input type="number" placeholder="entrer b..... " name="para2" /><br>
        Enter c :   <input type="number" placeholder="entrer c..... " name="para3" /><br>
       <button><input  type="submit" name="submit" value="Find Roots" ></button>

 </form>

    <?php

if(isset($_POST['submit'])){
    // Retrieve coefficients from  input
    $a = $_POST['para1'];
    $b = $_POST['para2'];
    $c = $_POST['para3'];

    
    $discriminant = $b * $b - 4 * $a * $c;

   
    if($discriminant > 0){
        
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Root 1: $root1, Root 2: $root2";

    } else if($discriminant == 0){
       
        $root = -$b / (2 * $a);
        echo "Root: $root (repeated)";
    } else {
        
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(abs($discriminant)) / (2 * $a);
        echo "Root 1: $realPart + $imaginaryPart i, Root 2: $realPart - $imaginaryPart i";
    }
}

?>


</body>
</html>