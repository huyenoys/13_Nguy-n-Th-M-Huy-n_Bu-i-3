<?php
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
function so_chan($a){
    if($a%2==0){
        echo "Số $a là số chẵn";
    } else {
        echo "Số $a không phải là số chẵn";
    }
}
$ktra_so =8;
so_chan($ktra_so);
//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n
function tong_n_so_dau($n){
    $tong=0;
    for($i=0; $i<=$n; $i++){
        $tong=$tong+$i;
    }
    echo "tổng các số từ 1 đến $n là: $tong <br>";
}
$nhap_n = 9;
tong_n_so_dau($nhap_n);
//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
function cuu_chuong($n){
    echo "Bảng cửu chương $n: <br>" ;
    for($i=1; $i<=10; $i++){
        $tich=$n*$i;
        echo "$n * $i = $tich <br>";
    }
}
for($i=1;$i<=10;$i++){
    cuu_chuong($i);
}

//4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
function kiemTraChuoi($chuoi, $tu_cu_the) {
    if (strpos($chuoi, $tu_cu_the) == true) {
        echo "Chuỗi chứa từ cụ thể.";
    } else {
        echo "Chuỗi không chứa từ cụ thể.";
    }
}

$chuoi = "lap trinh php - buoi 2 - bai 1";
$tu_cu_the = "pho";
kiemTraChuoi($chuoi, $tu_cu_the);

// 5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng
function min_max($mang){
    $min=min($mang);
    $max=max($mang);
    echo "Giá trị nhỏ nhất trong mảng là: $min <br> ";
    echo "Giá trị lớn nhất trong mảng là: $max <br> ";
}
$mang=array(2,3,4,8,11,22,18);
echo min_max($mang);

//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
function sap_xep($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($mang[$j] > $mang[$j + 1]) {
                $d = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $d;
            }
        }
    }
    
    return $mang;
}

$nhap_mang = array(5, 2, 8, 12, 1);

$mang_tang_dan = sap_xep($nhap_mang);
foreach ($mang_tang_dan as $value) {
    echo $value . " ";
}

// 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function giai_thua($n){
    if (is_int($n) && $n > 0){
        $giai_thua =1;
        for ($i=1; $i<= $n; $i++){
            $giai_thua= $giai_thua*$i;
        }
    }
   echo "Giai thừa của số $n là: $giai_thua <br>";
}
giai_thua(5);


// 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước
function ktra_so_nguyen_to($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

function timSoNguyenToTrongKhoang($dau, $cuoi) {
    $so_nguyen_to = array();

    for ($i = $dau; $i <= $cuoi; $i++) {
        if (ktra_so_nguyen_to($i)) {
            $so_nguyen_to[] = $i;
        }
    }

    return $so_nguyen_to;
}

$so_dau = 1;
$so_cuoi = 50;

$soNguyenTo = timSoNguyenToTrongKhoang($so_dau, $so_cuoi);
echo "Các số nguyên tố trong khoảng từ $so_dau đến $so_cuoi là: ";
foreach ($soNguyenTo as $so) {
    echo $so . " ";
}

// 9.Viết chương trình PHP để tính tổng của các số trong một mảng
function tong_mang($mang){
    $tong=0;
    foreach ($mang as $so) {
        $tong += $so;
    }
    return $tong;
} 
$mang=array(1,2,4,5);
$tong=tong_mang($mang);
echo "Tổng các số trong mảng là: $tong <br>";

//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước
function in_Fibonacci($batDau, $ketThuc) {
    $soTruoc = 0;
    $soHienTai = 1;

    echo "Các số Fibonacci trong khoảng từ $batDau đến $ketThuc là: ";

    while ($soTruoc <= $ketThuc) {
        if ($soTruoc >= $batDau) {
            echo $soTruoc . " ";
        }

        $soTiepTheo = $soTruoc + $soHienTai;
        $soTruoc = $soHienTai;
        $soHienTai = $soTiepTheo;
    }
}

$batDau = 5;
$ketThuc = 100;
in_Fibonacci($batDau, $ketThuc);

// 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không
function kiemTraSoArmstrong($so) {
    $d = $so;
    $tong = 0;
    $soLuong = strlen((string)$so);
  
    while ($d != 0) {
      $tachSo = $d % 10;
      $tong += pow($tachSo, $soLuong);
      $d = (int)($d / 10);
    }
    if ($tong == $so) {
      return true; 
    } else {
      return false; 
    }
  }
  
  $số = 153;
  if (kiemTraSoArmstrong($số)) {
    echo "$số là số Armstrong";
  } else {
    echo "$số không là số Armstrong";
  }

// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
function chenPhanTu($mang, $phanTu, $viTri) {
    if ($viTri < 0 || $viTri > count($mang)) {
        echo "Vị trí chèn không hợp lệ.";
        return $mang;
    }
    $ketQua = array();
    for ($i = 0; $i < $viTri; $i++) {
        $ketQua[] = $mang[$i];
    }
    $ketQua[] = $phanTu;
    for ($i = $viTri; $i < count($mang); $i++) {
        $ketQua[] = $mang[$i];
    }

    return $ketQua;
}

$mangBanDau = array(5,3,4,6,7,9);
$phanTuMoi = '1';
$viTriChen = 3;
$mangKetQua = chenPhanTu($mangBanDau, $phanTuMoi, $viTriChen);
print_r($mangKetQua);
echo "<br> Mảng mới là:";
foreach ($mangKetQua as $phanTu) {
     echo $phanTu . " ";
}


//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
function loaiBoTrung($mang) {
    $mangKetQua = array();
    foreach ($mang as $phanTu) {
        if (!in_array($phanTu, $mangKetQua)) {
            $mangKetQua[] = $phanTu;
        }
    }
        return $mangKetQua;
}

$mangBanDau = array('a', 'b', 'a', 'c', 'b', 'd', 'e', 'e');
$mangKetQua = loaiBoTrung($mangBanDau);
echo "<br> Mảng kết quả:";
foreach ($mangKetQua as $phanTu) {
    echo $phanTu . " ";
}


// 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng
function timViTri($mang, $phantu) {
    $vitri = array_search($phantu, $mang);
    if ($vitri !== false) {
        echo "Vị trí của phần tử '$phantu' trong mảng là: $vitri";
    } else {
        echo "Không tìm thấy phần tử '$phantu' trong mảng";
    }
}

$mang = array('a', 'b', 'c', 'd', 'e');
$phantuTim = 'c';
$viTri = timViTri($mang, $phantuTim);

// 15.Viết chương trình PHP để đảo ngược một chuỗi không dùng hàm strrev()
function daoNguocChuoi($chuoi) {
    $doDai = strlen($chuoi);
    $chuoiDaoNguoc = '';
    for ($i = $doDai - 1; $i >= 0; $i--) {
        $chuoiDaoNguoc .= $chuoi[$i];
    }
    
    return $chuoiDaoNguoc;
}

$chuoiBanDau = "Hello, I'm Huyen";
$chuoiDaoNguoc = daoNguocChuoi($chuoiBanDau);
echo $chuoiDaoNguoc;


// 16.Viết chương trình PHP để tính số lượng phần tử trong một mảng
function tinhSoLuongPhanTu($mang) {
    $soLuong = count($mang);
    return $soLuong;
}

$nhap_mang = [1, 2, 3, 4, 5];
$soLuong = tinhSoLuongPhanTu($nhap_mang);
echo $soLuong;

// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
function kiemTraPalindrome($chuoi) {
    $chuoiDaoNguoc = strrev($chuoi);
    if ($chuoi == $chuoiDaoNguoc) {
        return true;
    } else {
        return false;
    }
}

$chuoi = "15151";
if (kiemTraPalindrome($chuoi)) {
    echo "Chuỗi là Palindrome";
} else {
    echo "Chuỗi không là Palindrome";
}


// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
function demPhanTu($mang, $phanTu) {
    $soLanXuatHien = 0;
    foreach ($mang as $value) {
        if ($value == $phanTu) {
            $soLanXuatHien++;
        }
    }
    return $soLanXuatHien;
}

$mang = [4, 2, 3, 2, 4, 2, 5, 4, 4];
$phanTu = 2;
$soLanXuatHien = demPhanTu($mang, $phanTu);
echo "Số lần xuất hiện của phần tử $phanTu trong mảng là: $soLanXuatHien";

// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần
function sapXepGiamDan($mang) {
    rsort($mang);
    return $mang;
}

$mang = [3, 2, 8, 4, 7, 5, 8];
$mangSapXep = sapXepGiamDan($mang);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần là: ";
foreach ($mangSapXep as $value) {
    echo $value . " ";
}
// 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng
function themVaoDau($mang, $giaTri) {
    array_unshift($mang, $giaTri);
    return $mang;
}

function themVaoCuoi($mang, $giaTri) {
    $mang[] = $giaTri;
    return $mang;
}

$mang = [9, 6, 3, 4, 8];
$giaTriDau = 1;
$giaTriCuoi = 4;

$mangSauKhiThemVaoDau = themVaoDau($mang, $giaTriDau);
echo "Mảng sau khi thêm phần tử vào đầu là: ";
foreach ($mangSauKhiThemVaoDau as $value) {
    echo $value . " ";
}

$mangSauKhiThemVaoCuoi = themVaoCuoi($mang, $giaTriCuoi);
echo "Mảng sau khi thêm phần tử vào cuối là: ";
foreach ($mangSauKhiThemVaoCuoi as $value) {
    echo $value . " ";
}

// 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng
function timSoLonThuHai($mang) {
    $max = $mang[0]; 
    $secondMax = null;

    foreach ($mang as $phanTu) {
      if ($phanTu > $max) {
        $secondMax = $max;
        $max = $phanTu;

      } elseif ($phanTu < $max && ($secondMax === null || $phanTu > $secondMax)) {
        $secondMax = $phanTu;
      }
    }
    return $secondMax;
  }

  $mang = [9, 3, 2, 7, 4];
  $soLonThuHai = timSoLonThuHai($mang);
  echo "Số lớn thứ hai trong mảng là: " . $soLonThuHai;


// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    return ($a * $b) / timUSCLN($a, $b);
}

$so1 = 12;
$so2 = 18;

$uscln = timUSCLN($so1, $so2);
$bscnn = timBSCNN($so1, $so2);

echo "Ước số chung lớn nhất của $so1 và $so2 là: " . $uscln . "<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: " . $bscnn;

// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
function kiemTraSoHoanHao($number) {
    if ($number <= 0) {
        return false;
    }
    
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 28;

if (kiemTraSoHoanHao($number)) {
    echo "Số $number là số hoàn hảo";
} else {
    echo "Số $number không là số hoàn hảo";
}


// 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
function timSoLeLonNhat($mang) {
    $soLeLonNhat = null;

    foreach ($mang as $so) {
        if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)) {
            $soLeLonNhat = $so;
        }
    }

    return $soLeLonNhat;
}

$mang = [2, 5, 9, 4, 7];
$soLeLonNhat = timSoLeLonNhat($mang);
echo "Số lẻ lớn nhất trong mảng là: " . $soLeLonNhat;

// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không
function kiemTraSoNguyenTo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$số = 23;
if (kiemTraSoNguyenTo($số)) {
    echo "$số là số nguyên tố.";
} else {
    echo "$số không là số nguyên tố.";
}
//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
function timSoDuongLonNhat($mang) {
    $soDuongLonNhat = null;
    foreach ($mang as $so) {
        if ($so > 0 && ($soDuongLonNhat === null || $so > $soDuongLonNhat)) {
            $soDuongLonNhat = $so;
        }
    }
    return $soDuongLonNhat;
}

$mang = [-1, 10, 0, 18, -23];
$soDuongLonNhat = timSoDuongLonNhat($mang);

if ($soDuongLonNhat !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $soDuongLonNhat;
} else {
    echo "Không có số dương trong mảng.";
}

//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng
function timSoAmLonNhat($mang) {
    $soAmLonNhat = null;

    foreach ($mang as $so) {
        if ($so < 0 && ($soAmLonNhat === null || $so > $soAmLonNhat)) {
            $soAmLonNhat = $so;
        }
    }

    return $soAmLonNhat;
}

$mang = [-8, 0, -12, -25, -3, 9, -5];
$soAmLonNhat = timSoAmLonNhat($mang);

if ($soAmLonNhat !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $soAmLonNhat;
} else {
    echo "Không có số âm trong mảng.";
}

// 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n
function tinhTongSoLe($n) {
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }

    return $tong;
}

$n = 10;
$tongSoLe = tinhTongSoLe($n);

echo "Tổng các số lẻ từ 1 đến $n là: " . $tongSoLe;


// 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
function timSoChinhPhuong($start, $end) {
    $soChinhPhuong = [];

    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $soChinhPhuong[] = $i;
        }
    }

    return $soChinhPhuong;
}

$start = 1;
$end = 20;
$soChinhPhuong = timSoChinhPhuong($start, $end);

echo "Các số chính phương từ $start đến $end là: " . implode(", ", $soChinhPhuong);


// 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
function kiemTraChuoiCon($chuoiChinh, $chuoiCon) {
    $lenChinh = strlen($chuoiChinh);
    $lenCon = strlen($chuoiCon);

    if ($lenCon > $lenChinh) {
        return false;
    }
    
    for ($i = 0; $i <= $lenChinh - $lenCon; $i++) {
        $j = 0;
        while ($j < $lenCon && $chuoiChinh[$i + $j] == $chuoiCon[$j]) {
            $j++;
        }
        if ($j == $lenCon) {
            return true;
        }
    }

    return false;
}

$chuoiChinh = "Hello, World!";
$chuoiCon = "World";

if (kiemTraChuoiCon($chuoiChinh, $chuoiCon)) {
    echo "Chuỗi \"$chuoiCon\" là chuỗi con của \"$chuoiChinh\"";
} else {
    echo "Chuỗi \"$chuoiCon\" không là chuỗi con của \"$chuoiChinh\"";
}
?>