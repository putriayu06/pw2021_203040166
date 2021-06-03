<?php
//  Ayu Putri Dwi Annisa
//  2030401666
//  Jum'at, 13:00
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
    $rows = [];
    while ($row  = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $brand = htmlspecialchars($data['brand']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO products
                VALUES
                ('', '$picture', '$name', '$brand', '$description', '$category', '$price')";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data["id"]);
    $picture = htmlspecialchars($data["picture"]);
    $name = htmlspecialchars($data["name"]);
    $brand = htmlspecialchars($data["brand"]);
    $description = htmlspecialchars($data["description"]);
    $category = htmlspecialchars($data["category"]);
    $price = htmlspecialchars($data["price"]);

    $query = "UPDATE products SET
				picture = '$picture',
				name = '$name',
				brand = '$brand',
				description = '$description',
                category = '$category',
				price = '$price'
			  WHERE id = '$id'
			";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
			<script>
				alert('username sudah digunakan!');
			</script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>