<?php
    function InDuLieu(){
        echo "Xin chào";
    }

    function Sum($a,$b){
        return $a+$b;
    }

    InDuLieu();
    $a = 4;
    $b = 5;
    echo "<br>".Sum(4,5);

    $ten = "<br>Trần Phan Anh";
    if(isset($ten)){
        echo $ten;
    }
    else echo "Không có tên";

    $city="";
    if(empty($city)){
        echo "<br>trống";
    }

    if(is_numeric($ten)){
        echo "<br>là số";
    }
    else echo "<br>ko là số";
?>
<?php
    $n="Đây là chuỗi";
    $a=123;
    $b=123.456;
    $mang = array(1,2,3);
    echo gettype($n);
    echo gettype($n);
    echo gettype($n);
    echo gettype($mang);
?>

