
@extends('home')
@section('content')
</nav>
<!-- Page Content  -->
<div id="content">
<form action="/insert" method="POST">
    {{ csrf_field() }}
        <ul>
            <li>
                <h1>New Student</h1>
                <input name="name" type="text"class="name" > 
                <input name="grade" type="number"class="grade" >
                <select name="id">
                        @foreach ($courses as $i)
                            <option value="{{$i->id}}" >{{$i->name}}</option>                        
                        @endforeach
                      </select> 
                <input name="submit" class="button" type="submit">
            </li>          
        </ul>
</form>
<form action="/insert" method="POST">
    {{ csrf_field() }}
        <ul>
            <li>
                <h1>New Course</h1>
                <input name="course" type="text"class="name" > 
                <input name="submit" class="button" type="submit">
            </li>
        </ul>
</form>
@endsection
 