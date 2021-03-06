<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php
// fungsi untuk melakukan koneksi ke database 
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040166");

    return $conn;
}

// function untuk melkukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $row = [];
    while ($row  = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();
    
    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $brand  = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO products
                VALUES 
                ('', '$picture', '$name', '$brand', '$description', '$category', '$price')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}