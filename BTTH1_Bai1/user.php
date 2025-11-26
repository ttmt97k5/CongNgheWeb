<?php 
require_once "data.php"; // chứa mảng $danh_sach_hoa
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách hoa</title>
    <style>
        body { font-family: Arial; background:#fafafa; }
        .container { width: 90%; margin: auto; }
        .flower { 
            background: pink; 
            padding: 15px; 
            margin-bottom: 20px; 
            display: flex; 
            gap: 15px; 
            border-radius: 8px;
            box-shadow:0 0 5px rgba(0,0,0,0.1);
        }
        .flower img { width: 180px; border-radius: 8px; object-fit: cover; }
        .flower h2 { margin: 0; color:#333; }
        .flower p { margin-top: 8px; }
    </style>
</head>

<body>
<div class="container">
    <h1>Danh sách các loài hoa tuyệt đẹp nhất</h1>

    <?php foreach ($danh_sach_hoa as $hoa): ?>
        <div class="flower">
            <img src="<?= $hoa['hinh_anh'] ?>">
            <div>
                <h2><?= $hoa['ten_hoa'] ?></h2>
                <p><?= $hoa['mo_ta'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
