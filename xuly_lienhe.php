<?php
// Kiểm tra yêu cầu có phải là POST không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Lấy dữ liệu từ form và loại bỏ khoảng trắng thừa
    $hoten = isset($_POST["hoten"]) ? trim($_POST["hoten"]) : '';
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
    $noidung = isset($_POST["noidung"]) ? trim($_POST["noidung"]) : '';

    // Kiểm tra dữ liệu rỗng
    if (empty($hoten) || empty($email) || empty($noidung)) {
        
        // Dữ liệu KHÔNG đầy đủ: Chuyển hướng về trang liên hệ
        // Lưu ý: Đảm bảo file lienhe.html nằm cùng cấp với xuly_lienhe.php
        header("Location: lienhe.html");
        exit(); 
        
    } else {
        
        // Dữ liệu ĐẦY ĐỦ: Hiển thị thông báo thành công với giao diện mới
        
        // Màu Chủ Đạo: Đỏ Cam Đậm (#AF3C00) | Màu Nhấn: Vàng Sáng (#FFC107)
        $success_message = "
        <!DOCTYPE html>
        <html lang='vi'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Liên Hệ Thành Công</title>
        </head>
        <body style='font-family: Arial, sans-serif; background-color: #f0f0f0;'>
            <div style='max-width: 600px; margin: 50px auto; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); text-align: center; background-color: #fff; border-top: 5px solid #AF3C00;'>
                
                <img src='assets/img/logo.png' alt='Logo UnetiFood' style='max-width: 300px; margin-bottom: 20px;'>
                
                <h2 style='color: #AF3C00; border-bottom: 2px solid #FFC107; padding-bottom: 15px; margin-bottom: 25px; font-size: 1.8em;'>&#x2705; GỬI LIÊN HỆ THÀNH CÔNG</h2>
                
                <p style='color: #333; font-size: 1.1em; line-height: 1.6;'>
                    Cảm ơn bạn **$hoten** đã gửi ý kiến cho chúng tôi.
                </p>
                <p style='color: #555; font-size: 0.9em;'>
                    Chúng tôi sẽ sớm phản hồi qua email: **$email**.
                </p>
                
                <br>
                <a href='lienhe.html' style='display: inline-block; padding: 12px 25px; background-color: #AF3C00; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; transition: background-color 0.3s;'>
                    &#x25C0; Quay lại Trang Liên hệ
                </a>
                
            </div>
        </body>
        </html>";
        
        echo $success_message;
    }
    
} else {
    // Nếu truy cập trực tiếp file này (không phải POST), chuyển hướng về trang liên hệ
    header("Location: lienhe.html");
    exit();
}
?>