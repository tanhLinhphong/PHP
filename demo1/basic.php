<?php

$sinhvien=array(
    array("Ten"=>"Nguyen Van A","Tuoi"=>20, "Diem"=>85),
    array("Ten"=>"Tran Thi B","Tuoi"=>21,"Diem"=>75),
    array("Ten"=>"Le Van C","Tuoi"=>22,"Diem"=>90)
);

foreach ($sinhvien as $sv){
    echo "Tên:".$sv["Ten"]."<br>";
    echo "Tuổi:".$sv["Tuoi"]."<br>";
    echo "Điểm:".$sv["Diem"]."<br>";

    if ($sv["Diem"]>=80){
        echo "Đánh giá : XUất sắc<br>";
    } elseif ($sv["Diem"]>=70){
        echo "Đánh giá: Khá <br>";
    }
    elseif ($sv ["Diem"]>=60){
        echo "Đánh giá : Trung bình<br>";
    }else{
        echo"Đánh giá yếu<br>";
    }
    echo"<hr>";
}
$tongDiem=0;
foreach ($sinhvien as $sv){
    $tongDiem+=$sv["Diem"];
}
$diemtrungbinh=$tongDiem/count($sinhvien);
echo "Điểm trung bình của lớp là".$diemtrungbinh;
?>



