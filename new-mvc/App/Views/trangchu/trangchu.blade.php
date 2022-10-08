<!-- Kế thừa lại layout master -->
@extends('layouts.home')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Trang chủ')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Trang chủ')
@section('content')
<!-- Với blade -->

@endsection
