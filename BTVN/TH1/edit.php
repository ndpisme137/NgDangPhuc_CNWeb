<?php
//nhan du lieu tu form
$sid = $_GET['sid'];
//ket noi csdl
require_once 'connect_DB.php';

//lenh query
$editsql = "SELECT * FROM sanpham WHERE id='$sid'";

//do du lieu vao result
$result = mysqli_query($conn,$editsql);
//lay du lieu tu result ra
$row = mysqli_fetch_assoc($result);

//hien thi thong tin len form
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang San Pham</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
        <h1>Edit Form</h1>
        <form action="update.php" method="POST">
        <input type="hidden" name="sid" value="<?php echo $row['id']; ?>" id="sid" class="hidden_id">
            <div class="form-group">
                <label for="">Tên Sản Phẩm Mới:</label>
                <input type="text" id="tensp" name="tensp" class="form-control" value="<?php echo $row['TenSP']?>">
            </div>
            <div class="form-group">
                <label for="">Giá Thành Mới:</label>
                <input type="text" id="gia" name="gia" class="form-control" value="<?php echo $row['Gia']?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
  </body>
</html>

\