<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [
            
            ];

        return $this->render($viewName, $data);
    }
    public function getTrangchu() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'trangchu.trangchu';
        // data view cần biến $name và $price
        $data = [
             [
            
            ]
        ];

        return $this->render($viewName, $data);
    }
    public function getChitiet() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'chitiet.chitiet';
        // data view cần biến $name và $price
        $data = [
             [
            
            ]
        ];

        return $this->render($viewName, $data);
    }
    public function getThem() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'them.them';
        // data view cần biến $name và $price
        $data = [
             [
            
            ]
        ];

        return $this->render($viewName, $data);
    }
}
