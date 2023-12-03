<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sbm'])) {
    // Include your database connection file or create a new PDO connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webbansacsh";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get data from the form
        $product_id = $_POST['product_id'];
        $comm_details = $_POST['comm_details'];
        $created_at = date("Y-m-d");

        // Prepare the SQL statement
        $sql = "INSERT INTO comment (product_id, content, created_at) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(1, $product_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $comm_details, PDO::PARAM_STR);
        $stmt->bindParam(3, $created_at, PDO::PARAM_STR);
        $stmt->execute();
        $conn = null;
        echo "Bình luận đã được gửi thành công!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();  
    }
    header("Location: http://localhost/admin/index.php?act=product&idsp=" . $product_id);
       exit;
}
?>
