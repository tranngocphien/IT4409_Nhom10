<html><head><title>Create Table</title>
        <style>
            th,tr,td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        $product = $_POST['product_desc'];
        
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $mydb = 'test';
        $table_name = 'Products';
        $connect = mysqli_connect($server, $user, $pass, $mydb);
        if (!$connect) {
            die("Cannot connect to $server using $user");
        } else {
            
            $SQLcmd1 = "UPDATE $table_name SET Numb = Numb -1 WHERE Product_desc = '$product'";
            mysqli_query($connect, $SQLcmd1);
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