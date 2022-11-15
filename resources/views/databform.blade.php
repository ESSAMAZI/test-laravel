@extends('Layout.app')
@section('title','YEMEN DATA')
@section('content')

<table  id="customers" >
    <tr>
        <th>ID</th>
        <th>ID Schools</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>Grades</th>
        <th>prosess</th>
    </tr>
   @foreach ($students as $stdn)
 
   <tr>
        <td>{{$stdn->id}}</td>
        <td>{{$stdn->school_id}}</td>
        <td>{{$stdn->name}}</td>
        <td>{{$stdn->email}}</td>
        <td>{{$stdn->grade->grade}}</td>
       
        <td>
      
            <form method="POST" action="{{route('delete_Data',$stdn->id)}}">
            @csrf
                <!-- <input type="submit" name="update" value="update"> -->
                <input type="submit" name="delete" value="Delete">
            </form>
            <hr>
            <a href="update/{{$stdn->id}}"><button>Update</button></a>
        </td>
    </tr>
 
   @endforeach
</table>
<form method="POST" action="{{route('Insert_Data')}}">
@csrf
    <input type="text" name="student_name" placeholder="Name">
    <input type="email" name="student_email" placeholder="Email">
    <input type="submit" value="اضافه">
</form>
@endsection