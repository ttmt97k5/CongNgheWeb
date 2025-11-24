<?php
// TODO 1: (Cực kỳ quan trọng) Khởi động session
session_start();
// TODO 2: Kiểm tra xem người dùng đã nhấn nút "Đăng nhập" (gửi form) chưa
  // TODO 3: Nếu đã gửi form, lấy dữ liệu 'username' và 'password' từ $_POST
  // TODO 4: (Giả lập) Kiểm tra logic đăng nhập
    // TODO 5: Nếu thành công, lưu tên username vào SESSION
    // TODO 6: Chuyển hướng người dùng sang trang "chào mừng"
// TODO 7: Nếu người dùng truy cập trực tiếp file này (không qua POST), "đá" họ về trang login.html
if(isset($_POST['username']) && isset($_POST['password'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user === 'admin' && $pass === '123'){
        $_SESSION['username'] = $user;
        header('Location: welcome.php');
        exit;
    } else{
        header('Location: login.html?error=1');
        exit();
    }
} else{
    header('Location: login.html');
    exit();
}
?>
