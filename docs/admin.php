<html>
<head>
    <title>Admin Page</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .hero {
            width: 80%;
            height: 450px;
            position: relative;
            margin: 100px auto;
        }

        .btn-box {
            display: flex;
            border-bottom: 5px solid #ccc;
        }

        .btn-box button {
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 15px 18px;
            margin-right: 50px;
            font-size: 20px;
            font-weight: bold;
        }
        a {
            color: black;
            text-decoration: none;
        }

        .content-right img {
            width: 450px;
            margin-right: 40px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5% auto;
        }

        .content-left {
            flex-basis: 50%;
        }

        .content-left ul li {
            color: slateblue;
            font-size: 13px;
            padding: 10px 0;
        }

        .content-left a {
            width: 150px;
            display: block;
            padding: 8px 5px;
            border-radius: 20px;
            text-decoration: none;
            background-color: #ff7846;
            color: #fff;
            text-align: center;
        }

        .content-right {
            flex-basis: 50%;
            text-align: center;
        }
        .data {
            text-align: center;
            border: 1px #CE6785;
            width: 800px;
            line-height: 30px;
            color: #ff7846;
            margin-bottom: 30px;
        }
        .data tr:nth-child(even){
            background-color: #f2f2f2;
        }
        .data tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>  
    <div class="hero">
        <div class="btn-box">
            <button>Admin Panel</button>
            <button><a href="admin.php#view">View Records</button></a>
        </div>
        <div class="content">
            <div class="content-left">
                <h1>Welcome to the Admin Page</h1>
                <p>
                    <ul>
                        <li>Add Service Provider</li>
                        <li>Delete Service Provider</li>
                    </ul>
                </p>
                <a href="index.php">Log Out</a>
            </div>
            <div class="content-right">
                <img src="http://localhost/is1109Project/Project/pics/admin.jpeg" alt="admin">
            </div>
        </div>
        <div id='view' class="content">
            <div class="content-left">
                <h1>View Records</h1>

                <table class="data">
                    <tr>
                        <th>ID</th>
                        <th>Provider ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Contact Number</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    
                    $conn = mysqli_connect("localhost", "root", "", "is1109_database");
                    $sql = "SELECT id, provider_id, Ad_catergory, title, description, contact_no, date from services";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td><td>".$row["provider_id"]."</td><td>".$row["Ad_catergory"].
                                 "</td><td>".$row["title"]."</td><td>".$row["description"]."</td><td>" .$row["contact_no"].
                                 "</td><td>".$row["date"]."</td><td><a href=delete.php?id=".$row["id"].">Delete</a></td></tr>";
                        }
                    }
                    else {
                        echo "No results";
                    }
                    $conn->close();
                    
                    ?>

                </table>

            </div>
        </div>
    </div>
</body>

</html>