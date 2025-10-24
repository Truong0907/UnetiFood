<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $noidung = $_POST["noidung"];

    // Kiểm tra dữ liệu rỗng
    if(empty($hoten) || empty($email) || empty($noidung)){
        echo "Vui lòng nhập đầy đủ thông tin!";
    } else {
        // Xử lý lưu hoặc gửi mail
        echo "Cảm ơn bạn đã liên hệ!";
    }
}
?>
