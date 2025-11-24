<?php
// TODO 1: Khởi động session (BẮT BUỘC ở mọi trang cần dùng SESSION)
session_start();
// TODO 2: Kiểm tra xem SESSION (lưu tên đăng nhập) có tồn tại không?
  // TODO 3: Nếu tồn tại, lấy username từ SESSION ra
  // TODO 4: In ra lời chào mừng
  // TODO 5: (Tạm thời) Tạo 1 link để "Đăng xuất" (chỉ là quay về login.html)
  // TODO 6: Nếu không tồn tại SESSION (chưa đăng nhập)
if(isset($_SESSION['username'])){
    $loggedInUser = $_SESSION['username'];
    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";
    echo '<a href="login.html">Đăng xuất (Tạm thời)</a>';
} else{
    header('Location: login.html');
    exit();
}
?>