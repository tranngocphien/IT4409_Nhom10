<html><head><title>Create Table</title>
        <style>
            th,tr,td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div>Select product we just sold</div>
        <form action="sale.php" method="post">
            <input type="radio" name="product_desc" value="Hammer">
            <label>Hammer</label><br>
            <input type="radio" name="product_desc" value="Screwdriver">
            <label>Screwdriver</label><br>
            <input type="radio" name="product_desc" value="Wrench">
            <label>Wrench</label>           
            <br>
            <input type="submit" value="Click to Submit"><input type="button" value="Reset">
        </form>
        <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $mydb = 'test';
        $table_name = 'Products';
        $connect = mysqli_connect($server, $user, $pass, $mydb);
        if (!$connect) {
            die("Cannot connect to $server using $user");
        } else {
            $SQLcmd = "SELECT * FROM $table_name";
            print "<div>The query is $SQLcmd</div>";
            print '<table>';
            print "<tr><th>Num</th><th>Product</th><th>Cost</th><th>Weight</th><th>Count</th></tr>";
            $result = mysqli_query($connect, $SQLcmd);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    print "<tr>
                    <td>" . $row['ProductID'] . "</td>
                    <td>" . $row['Product_desc'] . "</td>
                    <td>" . $row['Cost'] . "</td>
                    <td>" . $row['Weight'] . "</td>
                    <td>" . $row['Numb'] . "</td>
                   </tr>";
                }
                print "</table>";
                $result->free();
            } else {
                print "Không có bản ghi nào được tìm thấy.";
            }

            mysqli_close($connect);
        }
        ?>
    </body>
</html>