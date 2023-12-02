<!-- <div style="margin-top: 80px;">
    <a href="?act=order-items" class="btn btn-success">Quay lại</a>
    <br>
    <table class="table table-bordered " id="myTable"style="margin-top: 10px;" >
        <thead class="">
        <tr class="">
            <th>Mã hàng 1</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Ngày mua</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($order as $item){
            echo '<tr>';
            echo '<td style="text-align: center;">' . $item['danhmucname'] . '</td>';
            echo '<td style="text-align: center;">' . $item['name'] . '</td>';
            echo '<td style="text-align: center;"><img src=../upload/' . $item['img'] . ' alt="Hình ảnh sản phẩm" style="height: 19rem;text-align:center"></td>';
            echo '<td style="text-align: center;">' . $item['price'] . '</td>';
            echo '<td style="text-align: center;">' . $item['date'] . '</td>';
            echo '<td style="text-align: center;">Đã mua</td>';
            echo '</tr>';
        }?>
        </tbody>
    </table>
</div> -->
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
        <div>
            <h3>Thông Tin Đơn Hàng</h3></p><br>
            <p><strong>Mã khách hàng: </strong></p><br>
            <p><strong>Ngày Tạo: </strong></p><br>
            <p><strong>Tổng tiền: </strong></p><br>
            <p><strong>Số Lượng: </strong></p><br>
            <select name="" id="">
                <option value="null">Trạng thái</option>
                <option value="">Đã thanh toán</option> 
                <option value="">Chưa thanh toán</option>
                <option value="">Chờ thanh toán</option>
                
              </select>
        </div>
        <div>
            <h3>Chi Tiết Giỏ Hàng</h3></p><br>
            <p><strong>Sản Phẩm: </strong></p><br>
            <p><strong></strong><img src="admin/assets/img/products/" alt=''></p><br>
            
        </div>
        <div>
            <h3>Thông Tin Đặt Hàng </h3></p><br>
            <p><strong>Người đặt hàng:</strong> ></p><br>
            <p><strong>Địa chỉ:</strong></p><br>
            <p><strong>Email:</strong> </p><br>
            <p><strong>Số điện thoại:</strong> </p><br>
        </div>
    </div>
    <input type="submit" style="width: 10%; height: 80px; color:red; margin-left: 80%;" >
