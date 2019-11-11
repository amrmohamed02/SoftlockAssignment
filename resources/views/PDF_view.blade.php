<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
</head>
<body>
    <table border="1"width="400px">
        <caption>List Of Students</caption>
        <tr>
          <th> </th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php $i=1;?>
        @foreach($course->student as $s)    
      
        <tr>
            <td>{{$i}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->grade}}</td>
        </tr>
        <?php $i++;?>
      @endforeach
    </table>
{{--     
  <h1>List Of Students</h1>
  <div>
      <ol>   
      @foreach($course->student as $s)    
        <li>
            <span  class="name">{{$s->name}}</span>
            <span  class="name">{{$s->grade}}</span>
        </li>  
      @endforeach
      </ol>
  </div> --}}
</body>

</html>