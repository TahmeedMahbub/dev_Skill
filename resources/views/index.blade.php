<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dev Skill Test</title>
    <style>
            table, th, td {
                  border: 1px solid black;
                  border-collapse: collapse;};
      </style>
</head>
<body>
<form action="{{route('itemadd')}}" method="post" style="position: fixed;  right: 350px;">
{{@csrf_field()}}
<input type="hidden" name="do" value="1">
    <input type="submit" value="+Add Another Item" >
</form><br><br><br>




@foreach ($item as $i)
<center><table width="700px">
        <tr><td>
            <form action="">
            {{@csrf_field()}}
                <input type="text" name="item" value="{{$i->val}}" style=" width:500px; height:30px; "><br>
            </form>
            <form action="{{route('itemadd')}}" method="post">
{{@csrf_field()}}

<input type="hidden" name="do" value="2">
<input type="hidden" name="i_id" value="{{$i->id}}">
    <input type="submit" value="+Add Another Item" >
</form><br>
            
@foreach ($sitem as $s)
@if($i->id==$s->i_id)
<form action="">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{@csrf_field()}}
    <input type="text" name="sitem" value="{{$s->val}}" style=" width:500px; height:30px;"><br>
</form><br>
@endif
@endforeach
            
        </td></tr>
    </table></center>
@endforeach
    
</body>
</html>