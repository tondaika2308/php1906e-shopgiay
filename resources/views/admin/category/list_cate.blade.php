
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>SLUG NAME</td>
        @foreach($cates as $cate)
        <tr>
                <td>{{$cate->slug_name}}</td>
                <td>{{$cate->slug_name}}</td>
                <td>{{$cate->order_display}}</td>
                <td class="center"><i class="fa fa-trash-o fa-fw "></i><a href="xoa/{{$cate->id}}" class='btn-del'> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="sua/{{$cate->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
