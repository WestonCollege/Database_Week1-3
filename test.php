<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- HTML COmment -->
    <?php 
    //PHP Commenting
    echo "<h1>Jason's Secret Math Lab</h1>";
    echo "<p>All the Math.  Best prices.</p>";

    $fname = "Bob";
    $lname = "Ross";
    
    echo $fname . " " . $lname;
    
    $year = date("Y");
    echo $year;
    echo "<br>";
    $today = date("l jS F Y");
    //Wednesday 16th October 2019
    echo $today;
    echo "<br>";
    
    
    
    echo "Copyright &copy; 2011-$year My Company Inc";

    
    if( date("l") === "Wednesday")
    {
        echo "Jason's lesson. Buy more Math supplies.";
    }
    else
    {
        echo "No Math required.  Attend rehab.";
    }
    
    
    
    ?>
    
    
</body>
</html>






