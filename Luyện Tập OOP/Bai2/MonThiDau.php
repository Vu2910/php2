<?php
class MonThiDau
{
    public $tenMon;
    public $dieuKienChieuCao;
    public $dieuKienCanNang;
    public function __construct($tenMon, $dieuKienChieuCao, $dieuKienCanNang)
    {
        $this->tenMon = $tenMon;
        $this->dieuKienCanNang = $dieuKienCanNang;
        $this->dieuKienChieuCao  = $dieuKienChieuCao;
    }
}
