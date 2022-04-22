
@extends('master.site')
@section('title','Home Title')
@section('main')

<form action="{{route('admin.store')}}" method="POST" role="form">
    <legend>Form title</legend>
@csrf
    <div class="form-group">
        <label for="">label</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
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

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop