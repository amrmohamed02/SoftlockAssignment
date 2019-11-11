@extends('home')
@section('content')
    
<ul class="list-unstyled CTAs">
    <li>
            <a href="{{URL("pdf/$course->id")}}">Create PDF</a>
    </li>
</ul>
</nav>

<!-- Page Content  -->
<div id="content">
    <h1>List Of Students</h1>
    <form action="/home/{{$course->id}}" method="POST">
    {{ csrf_field() }}
            <ol>
                @foreach($course->student as $s)   
                <li>
                    <input name="id[]" type="hidden" value="{{$s->id}}">
                    <span  name="name[]" class="name">{{$s->name}}</span>
                    <input name="grade[]" type="number"class="grade" value="{{$s->grade}}">
                </li>
                @endforeach
                <input name="submit" class="button" type="submit">
            
            </ol>
        </div>
    </form>
@endsection