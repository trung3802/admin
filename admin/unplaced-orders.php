<div style="margin-top: 80px;">
    <a href="?act=order-items" class="btn btn-info">Các đơn đã thanh toán</a>
    <br>
    <table class="table table-bordered" id="myTable" style="margin-top: 10px;">
        <thead class="">
        <tr class="">
            <th>Mã hàng</th>
            <th>Tổng giá</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Trạng Thái</th>
            <th>Xem chi tiết</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($orders as $row) {
            // Check if the status is either 1 (Đang chờ giao hàng) or 2 (Đơn hàng đang giao)
            if ($row['trangthai'] == 1 || $row['trangthai'] == 2) {
                echo '<tr>';
                echo '<td style="text-align: center;">' . $row['order_id'] . '</td>';
                echo '<td style="text-align: center;">' . $row['total_amount'] . '</td>';
                echo '<td style="text-align: center;">' . $row['name'] . '</td>';
                echo '<td style="text-align: center;">' . $row['address'] . '</td>';
                echo '<td style="text-align: center;">' . $row['phone'] . '</td>';
                
                // Display the status based on the value of $row['trangthai']
                switch ($row['trangthai']) {
                    case 1:
                        echo '<td style="text-align: center;">Đang chờ giao hàng</td>';
                        break;
                    case 2:
                        echo '<td style="text-align: center;">Đơn hàng đang giao</td>';
                        break;
                    default:
                        echo '<td style="text-align: center;">Không xác định</td>';
                }
                
                echo '<td style="text-align: center;"><a href="?act=detail&order_id=' . $row['order_id'] . '">Xem chi tiết</a></td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>
