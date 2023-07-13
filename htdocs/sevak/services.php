<!DOCTYPE html>
<html>
<head>
    <title>Responsive Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Price List</h1>
    </header>

    <table>
        <tr>
            <th>Price List</th>
            <th>Area</th>
            <th>Time</th>
            <th>Milk</th>
            <th>Amount</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "responsiveform";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['price_list'] . "</td>";
                echo "<td>" . $row['area'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['milk'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>

    <footer>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
