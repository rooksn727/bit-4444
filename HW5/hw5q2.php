<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hw5q1</title>
  <?php
    // CSS
    $style = "<style> th {color: 'white'; background-color:orange;} table {color: white;} </style>";
    echo $style;
  ?>
</head>
<body>
<?php
    define('DB_HOST', "localhost");   
    define('DB_USER', "root");
    define('DB_PASS', "");
    define('DB_NAME', "northwind");
    define('DB_PORT', "3306");

    class MySQLDB {
        private $dbConn;

        public function open_connection(){
            $this->dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

            if(mysqli_connect_errno()) {
                die( "Database connection error: ".mysqli_connect_error()."(".mysqli_connect_errno().")" );
              }
            }
            
        public function close_connection() {
            if(isset($this->dbConn)) {
            mysqli_close($this->dbConn);
            unset($this->dbConn);
            }
        }

        public function query($sql) {
            $result = mysqli_query($this->dbConn, $sql);
            //error checking
            if(!$result) {
                die("Database query error: ".mysqli_error($this->dbConn)." (".mysqli_errno($this->dbConn).")");
            }
            return $result;
        }

        //constructor method
        function __construct(){
            $this->open_connection();
        }

        function CreateTable(){
            $statement = "SELECT p.ProductName, s.CompanyName, p.UnitsInStock, p.UnitPrice FROM products as p, suppliers as s WHERE p.SupplierID = s.SupplierID;";
            $result = $this->query($statement);
            if ($result->num_rows > 0) {
                echo '<table><colgroup><col span="1" style="background-color: orange"><col span="3" style="background-color: #ffbf7f;"></colgroup>';
                echo '<tr><th>Product Name</th><th>Company Name</th><th>Units in Stock</th><th>Unit Price</th></tr>';
                
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ProductName"]. "</td><td>" . $row["CompanyName"]. "</td><td>".$row["UnitsInStock"]."</td><td>".$row["UnitPrice"]."</td><td></tr>";
                }
                echo "</table>";
            } 
            else {
            echo "0 results";
            }
        }

    }

    $myDB = new MySQLDB();
    $myDB->CreateTable();
?>
</body>
</html>