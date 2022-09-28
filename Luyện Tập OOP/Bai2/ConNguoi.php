<?php
class ConNguoi
{
    protected $ten;
    protected $gioiTinh;
    protected $ngaySinh;
    protected $canNang;
    protected $chieuCao;

    function __construct($ten, $gioiTinh, $ngaySinh, $canNang, $chieuCao)
    {
        $this->ten = $ten;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->canNang = $canNang;
        $this->chieuCao = $chieuCao;
    }
}