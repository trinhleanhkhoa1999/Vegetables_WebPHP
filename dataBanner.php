<?php
//function kết nối với SQL và lấy data ra từ bảng banner để có được giá trị của mảng
    function getBanner(){
        $connect = connectSQL();
        $sql = "SELECT id, name, url_img, description FROM banner Orders LIMIT 4 OFFSET 0";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            return $rows;
        } 
    }

    function getBannerSale(){
        $connect = connectSQL();
        $sql = "SELECT id, name, url_img, description FROM banner Orders LIMIT 1 OFFSET 4";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            return $rows;
        } 
    }
?>
