<?php
$filename = "65HTTT_Danh_sach_diem_danh.csv";

if (!file_exists($filename)) {
    die("<p style='color:red;'>⚠️ Lỗi: Không tìm thấy file CSV.</p>");
}

$data = [];
if (($handle = fopen($filename, "r")) !== false) {
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $data[] = $row;
    }
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên </title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 10px;
            text-align: left;
        }
        th {
            background: #eee;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<h1>Danh sách sinh viên</h1>
<table>
    <thead>
        <tr>
            <?php
            foreach ($data[0] as $col) {
                echo "<th>" . htmlspecialchars($col) . "</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i < count($data); $i++) {
            echo "<tr>";
            foreach ($data[$i] as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
