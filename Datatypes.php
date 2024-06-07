<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP Variables</a> 
  </div>
</nav>
    <div class="container">
        <?php
            echo "<h2>Data types In PHP</h2>";
            echo "<br>";
            echo "Data types is tell about type of data stored in a variable";
            echo "<br>";
            echo "<h3>Basically there are 7 datatypes in php</h3>";
            echo "<ol>
                    <li><b>String datatype</b></li>
                    <li><b>Integer Datatype</b></li>
                    <li><b>Float Datatype</b></li>
                    <li><b>Boolean Datatype</b></li>
                    <li><b>Object Datatype</b></li>
                    <li><b>Array Datatype</b></li>
                    <li><b>NULL Datatype</b></li>
                </ol>
            ";

            //String Data type
            $name = "This is String Datatype:-vGatuam";
            echo $name;

            echo "<br>";

            //Integer Data type
            $income = 40000;
            echo "This is Integer datatype:- $income";

            echo "<br>";

            //Float datatype    
            $income_2 = 3445.5;
            echo "This is Float datatype:- $income_2";
            
            echo "<br>";
            //Boolean Data type
            $x = True;
            $y = False;
            echo "This is boolean True: - ";
            echo var_dump($x);
            echo "<br>";
            echo "This is boolean False: - ";
            echo var_dump($y);

            echo "<br>";

            //Object Data type
            echo " Employee is class ---> Gautam can be one object of employee class that denote the object datatype";

            echo "<br>";

            //Array datatype
            $friend_list = array("Mukesh","Vikash","Diwakar","Atul");
            echo var_dump($friend_list);
            echo "<br>";
            echo $friend_list[0];echo "<br>";
            echo $friend_list[1];echo "<br>";
            echo $friend_list[2];echo "<br>";
            echo $friend_list[3];echo "<br>";

            //Null datatype
            $cast = NULL;
            echo var_dump($cast);

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>