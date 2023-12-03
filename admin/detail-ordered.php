
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    color: #4CAF50;
    text-align: center;
    margin-top: 50px;
}

.order-info {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.order-info h3 {
    margin-top: 0;
    color: green;
}

.order-info p {
    line-height: 1.6;
}

.order-info img {
    max-width: 100%;
    height: auto;
}

.btn {
    display: block;
    width: 200px;
    height: 50px;
    margin: 20px auto;
    background-color: #4CAF50;
    color: #FFFFFF;
    text-align: center;
    border-radius: 5px;
    line-height: 50px;
    font-size: 18px;
    text-decoration: none;
}

.btn:hover {
    background-color: #45a049;
}
</style>
    <style>
        .order-info {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .order-info h3 {
            margin-top: 0;
        }
        .order-info p {
            margin: 5px 0;
        }
        .order-info img {
            max-width: 200px;
            height: auto;
        }
        .btn {
    display: block;
    width: 200px;
    height: 50px;
    margin: 20px auto;
    background-color: #4CAF50;
    color: #FFFFFF; 
    text-align: center;
    border-radius: 5px; 
    line-height: 50px; 
    font-size: 18px; 
    text-decoration: none; 
}

.btn:hover {
    background-color: #45a049; 
}

        @media (min-width: 768px) {
            .order-info {
                flex-direction: row;
                justify-content: space-between;
            }
        }
    </style>

<div class='order-info' style="margin-top: 80px;">
    <?php foreach ($order as $item): ?>
        <div>
            <h3>Thông Tin Đơn Hàng</h3>
            <p><strong>Mã khách hàng: </strong><?php echo $item['user_id']; ?></p>
            <p><strong>Ngày Tạo: </strong><?php echo $item['date']; ?></p>
            <p><strong>Tổng tiền: </strong><?php echo $item['total_amount']; ?></p>       
            <p><strong>Số Lượng: </strong><?php echo $item['quantity']; ?></p>
            <p><strong>Trạng Thái: </strong>
            <?php
                switch ($item['trangthai']) {
                    case 1:
                        echo 'Đang chờ giao hàng';
                        break;
                    case 2:
                        echo 'Đơn hàng đang giao';
                        break;
                    case 3:
                        echo 'Hoàn thành';
                        break;
                    default:
                        echo 'Không xác định';
                }
            ?>
        </p>
<form method="post" action="update_status.php" onsubmit="return confirmUpdate()">
    <!-- Your existing select element -->
    <select name="status" id="status">
        <option value="1" <?php echo ($item['trangthai'] == 1) ? 'selected' : ''; ?>>Đang chờ giao hàng</option>
        <option value="2" <?php echo ($item['trangthai'] == 2) ? 'selected' : ''; ?>>Đơn hàng đang giao</option>
        <option value="3" <?php echo ($item['trangthai'] == 3) ? 'selected' : ''; ?>>Hoàn thành</option>
    </select>

    <!-- Add a hidden input to pass the order ID -->
    <input type="hidden" name="order_id" value="<?php echo $item['order_id']; ?>">

    <!-- Add the Update button -->
    <button type="submit" name="update_status">Update</button>
</form>



        </div>
        <div>
            <h3>Chi Tiết Giỏ Hàng</h3>
            <p><strong>Sản Phẩm: </strong><?php echo $item['product_id']; ?></p>
            <p><strong>Tên Sản Phẩm: </strong><?php echo $item['name']; ?></p>

            <p><strong>Hình Ảnh<img src="../upload/<?php echo $item['img']; ?>" alt=''></strong></p>

        </div>
        <div>
            <h3>Thông Tin Đặt Hàng </h3>
            <p><strong>Người đặt hàng:</strong><?php echo $item['name']; ?></p>
            <p><strong>Địa chỉ:</strong><?php echo $item['address']; ?></p>
            <p><strong>Email:</strong><?php echo $item['email']; ?></p>
            <p><strong>Số điện thoại:</strong><?php echo $item['phone']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
<script>
    function confirmUpdate() {
        return confirm('Bạn có chắc muốn cập nhật trạng thái?');
    }
</script>
<input type="submit" style="width: 10%; height: 80px; color: red; margin-left: 80%;" value="Xác Nhận">

