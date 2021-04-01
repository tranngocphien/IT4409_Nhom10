<html>
    <head>
        <title> Receiving Input</title>
    </head>
    <body>
        <?php
            $name = $_POST["name"];
			$birth= $_POST["birth"];
            $university = $_POST["university"];
            $class = $_POST["class"];
            $hobby = $_POST["hobby"];
            print ("Hello, $name ");
            print ("<br>");	
			print ("Your birthday:, $birth");
			print ("<br>");
            print ("You are studing at $class, $university");
            print ("<br>");
            print ("Your hobby is: ");
            $i = 1;
            foreach ($hobby as $selected) {
                print ("<ul>$i, $selected</ul>");
                $i++;
            }
            
        ?>
    </body>
</html>