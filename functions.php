<?php

    $conn=mysqli_connect("localhost","root","","ikhlaashul");

    if(!$conn){
        die('Koneksi Error : '.mysqli_connect_errno()
        .' - '.mysqli_connect_error());
    }

    $result=mysqli_query($conn,"SELECT * FROM pasien");


    function query($query_kedua)
    {
        
        global $conn;
        $result=mysqli_query($conn,$query_kedua);

        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah ($data)
    {
        global $conn;

        $nama=$data["Nama"];
        $alamat=$data["Alamat"];
        //$gambar=$data["Gambar"];
        
        $gambar=upload();

        if(!$gambar)
        {
            return false;
        }
        $query= " INSERT INTO pasien
                    VALUES
                    ('','$nama','$alamat','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function hapus ($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM pasien WHERE id =$id ");
        return mysqli_affected_rows($conn);
    }

    function edit ($data){
        global $conn;

        $id=$data["id"];
        $nik=htmlspecialchars($data['NIK']);
        $nama=htmlspecialchars($data["Nama"]);
        $jeniskelamin=htmlspecialchars($data['JenisKelamin']);
        $alamat=htmlspecialchars($data["Alamat"]);
        $golongandarah=htmlspecialchars($data['GolonganDarah']);
        $jenispasien=htmlspecialchars($data['JenisPasien']);
        $gambar=htmlspecialchars($data["Gambar"]);

        $query= "UPDATE pasien SET
                    NIK='$nik',
                    Nama='$nama',
                    JenisKelamin='$jeniskelamin',
                    Alamat='$alamat',
                    GolonganDarah='$golongandarah',
                    JenisPasien='$jenispasien',
                    Gambar='$gambar'
                    WHERE id= $id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword)
    {
        $sql="SELECT * FROM pasien
                WHERE
                Nama LIKE'%$keyword' OR
                Alamat LIKE'%$keyword'
                ";
        return query($sql);
    }

    function registrasi($data)
    {
        global $conn;

        $username=strtolower(stripcslashes($data['username']));

        $password=mysqli_real_escape_string($conn, $data['password']);
        $password2=mysqli_real_escape_string($conn, $data['password2']);

        $result=mysqli_query($conn, "Select username From loginadmin WHERE username='$username'");

        if(mysqli_fetch_assoc($result))
        {
            echo "
                <script>
                    alert('username sudah ada');
                </script>
            ";
            return false;
        }

        if($password!=$password2)
        {
            echo "
                <script>
                    alert('password anda tidak sama');
                </script>
            ";
            return false;
        }

        $password=md5($password);

        var_dump($password);
        
        mysqli_query($conn, "INSERT INTO loginadmin VALUES ('','$username','$password')");

        return mysqli_affected_rows($conn);
    }
?>
