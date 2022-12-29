<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $nama= $_POST['nama'];
    $email= $_POST['email'];
    $alamat= $_POST['alamat'];
    $jenisKelamin= $_POST['jenisKelamin'];
    $posisi= $_POST['posisi'];
    $status= $_POST['status'];

    $sql = "INSERT INTO `karyawan`(`id`, `name`, `email`, `address`, `gender`, `position`, `status`) VALUES ('','$nama','$email','$alamat','$jenisKelamin','$posisi','$status')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=Berhasil ditambah!");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style="background-color: #FFBDE6;">
        Daftar Karyawan
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Tambah Karyawan</h3>
            <p class="text-muted">Mohon isi formulir di bawah untuk menambah karyawan baru</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Panjang">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Alamat E-mail">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat rumah">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Jenis Kelamin:</label>
                    <select class="form-select" name="jenisKelamin">
                        <option selected>Pilih jenis kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Posisi:</label>
                    <input type="text" class="form-control" name="posisi" placeholder="Posisi pekerjaan">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Status:</label>
                    <select class="form-select" name="status">
                        <option selected>Pilih status bekerja</option>
                        <option value="fulltime">Full-time</option>
                        <option value="parttime">Part-time</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="index.php" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>