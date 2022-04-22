@extends('master.site')
@section('title','them san pham')
@section('main')

<form action="{{route('product.add')}}" method="POST" enctype="multipart/form-data">
    <legend>Form title</legend>
@csrf
<label for="">Tên danh mục</label>

<select name="category_id"  class="form-control" >
@foreach($cats as $pro)
    <option value="">{{$pro->name}}</option>
    @endforeach
</select>

<div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" >
      @error('name')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>
   

<div class="radio">
    <label>
        <input type="radio" name="status"  value="1" checked>
        Hiển thị
    </label>
</div>
<div class="radio">
    <label>
        <input type="radio" name="status"  value="2" checked>
        Tạm ẩn
    </label>
</div>

<div class="form-group">
        <label for="">Giá gốc</label>
        <input type="text" class="form-control" name="price" >
      @error('price')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
        <label for="">giá KM</label>
        <input type="text" class="form-control" name="sale_price" >
      @error('sale_price')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <input type="text" class="form-control" name="description" >
      @error('description')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
        <label for="">Ngày tạo</label>
        <input type="text" class="form-control" name="created_at" >
      @error('created_at')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>
<div class="form-group">
        <label for="">Ảnh sản phẩm</label>
        <input type="file" class="form-control" name="upload" >
      @error('upload')
      <small class="help-block">{{$message}}</small>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop