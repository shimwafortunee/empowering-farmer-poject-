<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$server = "localhost";
$users = "root";
$pass ="";
$db= "farm";
$conn = mysqli_connect($server, $users, $pass, $db);
if (!$conn) {
    $error="Connection failed: ";
}
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data and store in an array
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "No data found";
}

$conn->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background-color: #6b4545;
            color: rgb(190, 116, 116);
            padding: 15px;
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .container {
            display: flex;
        }

        aside {
            width: 15%;
        background-color: #2980b9;
            padding: 20px;
            color: rgb(108, 134, 78);
        }

        main {
            flex: 1;
            padding: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: rgb(10, 49, 121);
        }

        a:hover {
            text-decoration: underline;
        }
        #book-appointment {
            margin-top: 20px;
        }

        #book-appointment h2 {
            margin-bottom: 10px;
            color: #cc3216;
        }

        #book-appointment form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
        }

        #book-appointment label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        #book-appointment input[type="text"],
        #book-appointment input[type="email"],
        #book-appointment input[type="tel"],
        #book-appointment input[type="date"] {
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #6b4545;
            border-radius: 3px;
        }

        #book-appointment input[type="submit"] {
            padding: 10px;
            background-color: #3498db;
            color: #af6b6b;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #book-appointment input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .active {
            background-color: #3dac0a;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="dashboard-container">
        <header>
            <h1>Dashboard</h1></br>
        </header>

        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="log.php">more </a></li>
            </ul>
        </nav>
        <main>
    <hr>
    <div class="container">
        <aside>
            <h2>Navigation</h2>
            <ul>
                <li><a href="dash.php">registration</a></li>
                <li><a href="dash1.php">farmer</a></li>
                <li><a href="dash2.php">market</a></li>
                <li><a href="dash3.php">admin</a></li>
                <li><a href="dash4.php">notification</a></li>
                
            </ul>
        </aside>
        <main>
            
            <section id="schedule">
                <h2>Schedule</h2>
                <section id="search-bar">
                    <input type="text" id="search-input" placeholder="Search farmer...">
                    <button id="search-button">Search</button>
                    <script>
                        const searchInput = document.getElementById("search-input");
                const searchButton = document.getElementById("search-button");
                
                searchButton.addEventListener("click", () => {
                    const searchTerm = searchInput.value.trim();
                    fetchData(searchTerm)
                        .then(data => {
                        })
                        .catch(error => {
                            console.error("Error fetching data:", error);
                        });
                });
                
                    </script>
                    </section>

                    <?php
if (!empty($data)) {
    echo "<table border='1'>";
    echo "<tr><th>fiirstname</th><th>lastname</th><th>ID</th><th>emailaddress</th><th>phonenumber</th><th>farmlocation</th><th>farmerdistrict</th><th>farmsector</th><th>farmsize</th><th>fertiliser</th><th>typesofmaize</th></tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['emailaddress'] . "</td>";
        echo "<td>" . $row['phonenumber'] . "</td>";
        echo "<td>" . $row['farmlocation'] . "</td>";
        echo "<td>" . $row['farmerdistrict'] . "</td>";
        echo "<td>" . $row['farmersector'] . "</td>";
        echo "<td>" . $row['farmsize'] . "</td>";
        echo "<td>" . $row['fertiliser'] . "</td>";
        echo "<td>" . $row['typesofmaize'] . "</td>";
        echo"<td>

                </td>
            </tr>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
   </body>                
        
</html>