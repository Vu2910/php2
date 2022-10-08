<!-- Kế thừa lại layout master -->
@extends('layouts.chitiet')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Chi tiết sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Chi tiết sản phẩm')
@section('content')
@endsection
