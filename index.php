<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENYEWAAN CAMERA</title>
</head>

<body>
<header>
    <h1>PENYEWAAN CAMERA</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Tabel camera</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Camera</th>
                    <th>Type Camera</th>
                    <th>Merk Camera</th>
                    <th>Harga Sewa</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM camera';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_camera']?></td>
                        <td><?php echo $row['type_camera']?></td>
                        <td><?php echo $row['merk_camera']?></td>
                        <td><?php echo $row['harga_sewa']?></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        
        <h2>Table penyewa</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Penyewa</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM penyewa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['nama_penyewa']?></td>
                        <td><?php echo $row['no_telepon']?></td>
                        <td><?php echo $row['alamat']?></td>
                    </tr>
                </tbody>
                <?php
            }   
            ?>            
        </table>
    
        <h2>Table Pembayaran</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Camera</th>
                    <th>ID Bayar</th>
                    <th>Tanggal Bayar</th>
                    <th>Jumlah Bayar</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM pembayaran';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_camera']?></td>
                        <td><?php echo $row['id_bayar']?></td>
                        <td><?php echo $row['tanggal_bayar']?></td>
                        <td><?php echo $row['jumlah_bayar']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>        
        </table>
        <br>
        <br>
    <footer>
        <p>&copy; 2021 - SEWA CAMERA DNA CIKARANG</p>
    </footer
</body>    
</html>