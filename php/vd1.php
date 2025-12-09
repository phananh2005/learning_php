<!DOCTYPE html>
<html>
    <body>
        <h1>Tài liệu học Lập trình Web</h1>
        <?php
            echo "<hr>";
        ?>
        <p>Tài liệu học HTML</p>
        <p>Tài liệu học CSS</p>
        <?php
            echo "<h2>Tài liệu học JavaScript</h2>";
            echo "<h3>Tài liệu học MySQL</h3>";
            echo "<h4>Tài liệu học PHP</h4>";
        ?>
        <hr>
        <?php
            $text = "Từ cơ bản" . " " . "đến nâng cao";
            echo $text;
            $a = 1;
            $b = 2;
            function Sum(){
                global $a,$b;
                $b = $a + $b;
            }
            Sum();
            echo $b;
        ?>
        <?php
            $name = "Nguyễn Minh Đức";
            $year = 2000;
            $city = "Hà Nội";
            echo "<p>Giá trị của biến name là chuỗi $name</p>";
            echo "<p>Giá trị của biến year là số $year</p>";
            echo "<p>Giá trị của biến city là chuỗi $city</p>";
        ?>
        <?php
            define('PI',3.14);
            echo PI;
        ?>
        <?php
            $a = 10;
            $b = 20;
            if($a<$b){
                echo "<p>a nhỏ hơn b</p>";
            }
            else{
                echo "<p> a lớn hơn b </p>";
            } 
        ?>
        <?php
            $a = 10;
            switch($a){
                case 0:
                    print("Giá trị là 0");
                    break;
                case 10:
                    print("Giá trị là 10");
                    break;
            }
            echo "<br>";
        ?>
        <?php
            for($x=0;$x<10;$x++){
                echo "$x";
            }
            echo "<br>";
        ?>
        <?php
            $arr = array(1,2,3,4,5);
            foreach($arr as $a){
                echo $a;
            }
            echo "<br>";
        ?>
        <?php
            $x=0;
            while($x<5){
                echo "Giá trị $x ";
                $x ++;
            }
            echo "<br>";
        ?>
        <?php
            for($x=0;$x<10;$x++){
                if($x==3) continue;
                echo "$x";
            }
            echo "<br>";
        ?>
    </body>
</html>