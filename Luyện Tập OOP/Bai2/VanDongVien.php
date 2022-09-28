<?php
include './ConNguoi.php';
include './MonThiDau.php';

class VanDongVien extends ConNguoi
{
    protected $soHuyChuong;
    protected $cacMonDaThiDau;
    public function __construct($ten, $gioiTinh, $ngaySinh, $canNang, $chieuCao, $soHuyChuong,$cacMonDaThiDau)
    {
        parent::__construct($ten, $gioiTinh, $ngaySinh, $canNang,$chieuCao);
        $this->chieuCao = $chieuCao;
        $this->soHuyChuong = $soHuyChuong;
        $this->cacMonDaThiDau = $cacMonDaThiDau;
    }
    public function  hienThiThongTin()
    {   
        $monDaThiDau = implode(" ,",$this->cacMonDaThiDau);
        if ($this->gioiTinh == 1) {
            $this->gioiTinh = 'Nam';
        } else {
            $this->gioiTinh = 'Nữ';
        }
        return "
            Tên vận động viên: $this->ten,   <br>
            Giới tính: $this->gioiTinh,  <br>
            Ngày sinh: $this->ngaySinh,  <br>
            Cân nặng: $this->canNang,  <br>
            Chiều cao: $this->chieuCao,  <br>
            Số huy chương: $this->soHuyChuong, <br>
            Các môn thi đấu: $monDaThiDau
        ";
    }
    public function thiDau($monThiDau, $soHuyChuong)
    {
        if ($this->chieuCao < $monThiDau->dieuKienChieuCao || $this->canNang < $monThiDau->dieuKienCanNang) {
            $totalMedal = $this->soHuyChuong -= $soHuyChuong;
            if ($totalMedal < 0) {
                $totalMedal = 0;
            }
        }
        return "
        Số huy chương: $totalMedal
        ";
    }
}

echo '<pre>';
$monThiDau = new MonThiDau('Bơi', 123, 1248);
$vandongvien = new VanDongVien('MRa', 1, '29/10/2002', 70, 180, 99, ['a','b']);
echo '<h1>Thông tin vận động viên:</h1>';
echo $vandongvien->hienThiThongTin();
echo '<h1>Số huy chương:</h1>';
echo $vandongvien->thiDau($monThiDau,15);
echo '</pre>';