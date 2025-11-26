<?php 
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách các loài hoa</title>
    <style>
        body { font-family: Arial; margin: 0; padding: 0; background-color: #ffdcdcff; }
        .navbar { background-color: #f17a7aff; color: white; padding: 10px; display: flex; justify-content: space-between; align-items: center; }
        .navbar a { color: white; margin-left: 20px; gap: 15px;}
        .navbar a:hover {color: #007bff;}
        .container { width: 90%; margin: 20px auto; background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(9, 7, 7, 0.1);}
        .container h1 {text-align: center;}
        .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table th, .table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        .table th { background-color: #f2f2f2; }
        .actions a { 
            margin-right: 10px; 
            padding: 5px 10px; 
            border-radius: 4px; 
            text-decoration: none;
            color: white;
            display: inline-block; 
            font-size: 14px;
            transition: background-color 0.3s ease; 
        }
        .actions .edit {
            background-color: #007bff; 
        }
        .actions .edit:hover {
            background-color: #0056b3; 
        }
        .actions .delete {
            background-color: #dc3545;
        }
        .actions .delete:hover {
            background-color: #c82333;
        }
        .add-new {
            background-color: #4ada62ff; 
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }
        .add-new:hover {
            background-color: #1e7e34;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <div><h2>Danh sách các loài hoa</h2></div>
        <div>
            <a href="admin.php">Bảng hoa</a>
            <a href="?action=create" class="add-new">➕ Thêm Hoa Mới</a>
        </div>
    </div>

    <div class="container">
        <h1>Bảng hoa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên hoa</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($danh_sach_hoa)): ?>
                <?php foreach ($danh_sach_hoa as $i): ?>
                    <tr>
                        <td><?= $i['id'] ?></td>
                        <td><?= $i['ten_hoa'] ?></td>
                        <td><?= $i['mo_ta'] ?></td>
                        <td><img src="<?= $i['hinh_anh'] ?>" width="100"></td>
                        <td class="actions">
                            <a href="?action=update&id=<?= $i['id'] ?>" class="edit">Sửa</a>
                            <a 
                                href="?action=delete&id=<?= $i['id'] ?>" 
                                class="delete" 
                                onclick="return confirm('Bạn có chắc chắn muốn xóa hoa <?= $i['ten_hoa'] ?>?');"
                            >Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Chưa có loài hoa nào trong mảng</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        
    </div>
        <p class="back-link"><a href="user.php">Quay lại Trang Khách</a></p>

</body>
</html>
