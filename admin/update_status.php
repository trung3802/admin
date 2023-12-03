<!-- 
<?php
// update_status.php

// Kiểm tra xem có dữ liệu được gửi từ biểu mẫu không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị trạng thái mới từ biểu mẫu
    $newStatus = $_POST["status"];

    // Lấy ID đơn hàng từ biểu mẫu
    $orderId = $_POST["order_id"];

    // Kết nối đến cơ sở dữ liệu (điều này là một ví dụ, thực hiện kết nối của bạn)
    $pdo = new PDO("mysql:host=localhost;dbname=webbansacsh", "root", "");

    // Thực hiện cập nhật trạng thái trong cơ sở dữ liệu
    $query = "UPDATE order_items SET trangthai = :newStatus WHERE id = :orderId";
    $statement = $pdo->prepare($query);

    // Thực hiện truy vấn với các giá trị tham số được cung cấp
    $success = $statement->execute([':newStatus' => $newStatus, ':orderId' => $orderId]);

    if ($success) {
        echo "Cập nhật trạng thái thành công!";
    } else {
        echo "Cập nhật trạng thái thất bại!";
    }
}
?> -->
<?php
// update_status.php

// Assuming you have a database connection established
$pdo = new PDO("mysql:host=localhost;dbname=webbansacsh", "root", "");

if (isset($_POST['update_status'])) {
    // Get values from the form
    $order_id = $_POST['order_id'];
    $new_status = $_POST['status'];

    // Update the database
    $stmt = $pdo->prepare("UPDATE order_items SET trangthai = :status WHERE order_id = :order_id");
    $stmt->bindParam(':status', $new_status);
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    
   
    header("Location: /admin/admin/?act=detail&order_id=$order_id");

    exit;
}
?>

