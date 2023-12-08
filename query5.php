<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 4</title>

    <style>
        
        body {
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
            font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
            display: flex;
            flex-direction: column; /* Mengatur tata letak menjadi kolom */
            align-items: center; /* Menyusun elemen secara horizontal di tengah */
            height: 100vh;
        }

        .navbar {
            background-color: black;
            padding: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%; /* Mengisi lebar penuh */
            position: fixed; /* Menjadikan navbar tetap di posisi atas */
            top: 0; /* Menempatkan navbar di bagian atas */
            z-index: 1000;
        }

        .web-name {
            margin-top: 0;
            margin-left: 20px;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
        }

        .button-group {
            display: flex;
            align-items: center;
            margin-right: 38px;
        }

        .button-group .button {
            background-color: black;
            border: none;
            color: #fff;
            margin-left: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button-group .button:hover {
            color: #5d68f1;
        }

        .content-text {
            margin: 120px auto 20px auto; /* Menyesuaikan margin */
            max-width: 60%; /* Sesuaikan lebar teks sesuai kebutuhan */
            text-align: center; /* Menyusun teks di tengah */
        }
        
        table {
            border-collapse: collapse;
            width: 500px;
            border-radius: 10px;
            overflow: hidden;
            background-color: brown;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid whitesmoke;
            padding: 10px;
            text-align: left;
            width: 50%;
        }

        th {
            background-color: brown;
            color: #ffffff;
        }

    </style>
</head>
<body>

    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'university') or die('koneksi gagal');
    ?>
    
    <!-- Menambahkan navigation bar -->
    <div class="navbar">
        <a class="web-name"></a>
        <!-- Menambahkan tombol -->
        <div class="button-group">
            <a href="login.php" class="button">Home</a>
            <a href="query1.php" class="button">Query 1</a>
            <a href="query2.php" class="button">Query 2</a>
            <a href="query3.php" class="button">Query 3</a>
            <a href="query4.php" class="button">Query 4</a>
            <a href="query5.php" class="button">Query 5</a>
        </div>
    </div>
    <div class="content-text">
        <h3>Query 4</h3>
        <p>Give the top 5 courses which have more students involved.</p>
    </div>
    <div>
        <table>
            <tr>
                <th>Lecturer Name</th>
                <th>Course Title</th>
            </tr>
            <tbody>
    
            <?php
            $Datas = mysqli_query($koneksi, "SELECT Course.Course_Code, COUNT(course_student.Student_ID) AS Student_Number
FROM course_student 
LEFT JOIN Course S ON  course_student.Course_Code = S.Course_Code
LEFT JOIN Course ON S.Course_Code = Course.Course_Code
GROUP BY Course.Course_Code
ORDER BY Student_Number DESC
LIMIT 5" );
            $counter = 0;
    
            while ($Data = mysqli_fetch_array($Datas)) {
                $bg = $counter % 2 == 0 ? "style='background: #e0ebf2'" : "style='background: #cfd8dc'";
                $counter++;
                ?>
                <tr <?php echo $bg?>>
                    <td><?php echo $Data["Course_Code"] ?></td>
                    <td><?php echo $Data["Student_Number"] ?></td>
                    
                    
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</div>
</body>
</html>