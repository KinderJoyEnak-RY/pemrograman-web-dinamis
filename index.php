<?php
    // Create database connection using config file
    include_once("../Prak7/praktik/koneksi.php");
    // Fetch all users data from database
    $result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>

<html>
    <head> 
        <title>Halaman Utama</title>
    </head>
    <body>
        <a href="tambah.php">Tambah Data Baru</a><br/><br/>
        <a href="lap_mhs.php">Cetak</a><br/><br/>
        <table width='80%' border=1>
            <tr>
                <th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th> 
                <th>tgl lahir</th> <th>Semester</th> <th>Action</th>
            </tr>
<?php 
    while($user_data = mysqli_fetch_array($result)) { 
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jkel']."</td>";
        echo "<td>".$user_data['alamat_mhs']."</td>"; 
        echo "<td>".$user_data['tgllhr']."</td>"; 
        echo "<td>".$user_data['semester']."</td>";
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a 
        href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; 
    }
?>
        </table>
    </body>
</html>