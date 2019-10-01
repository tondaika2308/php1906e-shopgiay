@extends('admin.layout.master')
@section('content')
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>SLUG NAME</td>
            <td>DANH MUC CHA</td>
        @foreach($cates as $cate)
        <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->slug_name}}</td>
                <td>{{$cate->parent_id}}</td>
            <td class="center"><i class="fa fa-trash-o fa-fw "></i><a href="admin/danh-muc/xoa/{{$cate->id}}" class='btn-del'> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/danh-muc/sua/{{$cate->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection