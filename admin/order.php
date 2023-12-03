<div style="margin-top: 80px;">
    <a href="?act=unplaced-orders" class="btn btn-info">Các đơn chưa được thanh toán</a>
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
            // Check if the status is equal to 3 (Hoàn thành)
            if ($row['trangthai'] == 3) {
                echo '<tr>';
                echo '<td style="text-align: center;">' . $row['order_id'] . '</td>';
                echo '<td style="text-align: center;">' . $row['total_amount'] . '</td>';
                echo '<td style="text-align: center;">' . $row['name'] . '</td>';
                echo '<td style="text-align: center;">' . $row['address'] . '</td>';
                echo '<td style="text-align: center;">' . $row['phone'] . '</td>';
                echo '<td style="text-align: center;">Hoàn thành</td>';
                echo '<td style="text-align: center;"><a href="?act=detail&order_id=' . $row['order_id'] . '">Xem chi tiết</a></td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>
