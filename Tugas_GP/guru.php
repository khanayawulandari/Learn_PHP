<?php
require "koneksi.php";

function ambilSemuaGuru(){
    global $conn;

    $query = "SELECT * FROM guru";
    $result = mysqli_query($conn, $query);

    $data = [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function tambahGuru($data){
    global $conn;
    $nip = $data ["nip"];
    $nama = $data ["nama"];
    $jenis_kelamin = $data ["jenis_kelamin"];
    $mapel = $data ["mapel"];
    $no_hp = $data ["no_hp"];
    $email = $data ["email"];
    $alamat = $data ["alamat"];

    $query = "INSERT INTOguru(nip, nama, jenis_kelamin, mapel, no_hp, email, alamat) 
            VALUES('$nip', '$nama', '$jenis_kelamin', '$mapel', '$no_hp', '$email', '$alamat');";

    $result = mysqli_query($conn, $query);

    return $result;
}

function hapusGuru($id){
    global $conn;

    $query = "SELECT * FROM guru WHERE id = '$id'";
    $guru = mysqli_query($conn, $query);
    $guru = mysqli_fetch_assoc($guru);
    if(!$guru){
        die("Data Tnipak Ditemukan");
    }else{
        $query= "DELETE FROM guru WHERE id = $id";
        $hapus = mysqli_query($conn, $query);
    if(!$hapus){
        echo ("Gagal menghapus data");
        sleep(5);
        header("location:readguru.php");
    }else{
        header("location:readguru.php");
        exit;
    }
    }
}
function ambilSatuGuru($id){
    global $conn;


    $query = "SELECT * FROM guru WHERE id ='$id'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    if(!$data){
        header('location:readguru.php');
        exit;
    }else{
        return $data;
    }
}

function editGuru($data){
    global $conn;
    $id = $data['id'];
    $query = "SELECT * FROM guru WHERE id = '$id'";
    $guru = mysqli_query($conn,$query);
    $guru = mysqli_fetch_assoc($guru);
    if(!$guru){
        die( "data tidak di temukan");
    }
    $nip = $data ["nip"];
    $nama = $data ["nama"];
    $jenis_kelamin = $data ["jenis_kelamin"];
    $mapel = $data ["mapel"];
    $no_hp = $data ["no_hp"];
    $email = $data ["email"];
    $alamat = $data ["alamat"];
    $query = "UPDATE guru SET
     nip='$nip',
     nama='$nama',
     jenis_kelamin = '$jenis_kelamin',
     mapel= '$mapel',
     no_hp='$no_hp',
     email = '$email',
     alamat= '$alamat' WHERE id = '$id'
     "; 
     $result = mysqli_query($conn,$query);
     if(!$result){
      echo "<h5 style='color:red;'>Gagal Mengedit Data" . mysqli_error($conn) ." </h5>";
    }else{
        header('Location:readguru.php');
        exit;
 }
        
}


if(isset($_GET['aksi'])){
    
    if($_GET['aksi'] == 'create'){
        if(tambahGuru($_POST)){
            header('location:readguru.php');
        }else{
            echo "Gagal Menambahkan Data : " . mysqli_error($conn);
            exit;
        }
    }else if($_GET['aksi'] =='delete'){
        if(isset($_GET["id"])){
            hapusGuru($_GET["id"]);
        }else{
            die("halaman tnipak di temukan");
        }
   }else if($_GET['aksi'] == 'update'){
        if(editGuru($_POST)){
        }else{
            echo "Gagal Menambahkan Data : " . mysqli_error($conn);
        }
        exit;
   }
}


?>