<?php include 'header.php'; ?>
<?php include 'products.php'; ?>
<main>
    <div class="d-flex flex-column align-items-center mb-3">
        <h3>Danh sách sản phẩm</h3>
    </div>
    <div class="container">
        <form action="add.php" method="post">
            <button type="submit" class="btn btn-success">Thêm</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá thành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)) : ?>
                    <p>Không có sản phẩm nào.</p>
                <?php else: ?>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['name']) ?> </td>
                            <td><?= htmlspecialchars($product['price']) ?>VND</td>
                            <td><a href="update.php?name=<?= urlencode($product['name']) ?>&price=<?= $product['price'] ?>" class="text-primary "><i class="bi bi-pencil-square"></i></a></td>
                            <td><a href="delete.php?name=<?= urlencode($product['name']) ?>&price=<?= $product['price'] ?>" class="text-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');"><i class="bi bi-trash-fill"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>