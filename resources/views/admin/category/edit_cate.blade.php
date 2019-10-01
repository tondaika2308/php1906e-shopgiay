@extends('admin.layout.master')
@section('content')

<form action="{{route('suadanhmuc',$item->id)}}" method="POST">
    <div class="form-group">
        <label>Danh mục cha</label>
        <select class="form-control" name="selectParentId">
            <option value="0">Gốc</option>
            <?php listcate($cate, 0, $str = "", $item->parent_id ) ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tên danh mục</label>
        <input class="form-control" name="txtCateName" placeholder="Nhập tên danh mục" value="{!! $item->name!!}"/>
    </div>
    <div class="form-group">
        <label>Tên danh mục đầy đủ</label>
        <input class="form-control" name="txtFullName" placeholder="Nhập tên đầy đủ" value="{!! $item->slug_name!!}"/>
    </div>
    <button type="submit" class="btn btn-default">Lưu</button>
    <button type="reset" class="btn btn-default">Hủy</button>
    <a href="{{route('listdanhmuc')}}">Quay lai</a>
    <input name="id" type="hidden" value="{{$item->id}}">
    {{csrf_field()}}
</form>
@endsection