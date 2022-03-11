@extends('layouts.layout')
@section('content')
<style>
    
#d1{
	
	position: fixed;	
    width: 1800px;
	height:1400px;	
}

.i1{
		position: absolute;
	
 	width: 1540px;
	height:750px;

  }
  #a1{
	
	position: fixed;		
}

.b1{
		position: absolute;
	
 	width: 120px;
	height:100px;

  }
  #d2{
	
	position:  absolute;	
  top:200px;
  left:	350px;
}
  </style>




<div id="d1">
        <img src="/images/mq.jpg" class="i1">
           
       </div>

       <div id="a1">
        <img src="/images/mq1.jpg" class="b1">
           
       </div>
       <div id="d2">



<div>
    <h2 class='label label-scondary'>{{$of->course}}</h2>
</div>
@if(count($of->fac)>0)
<table class='table table-bordered'>
    
<tr>
<th>Faculty Name</th>
<th>Day </th>
<th> Time</th>
<th> Room</th>

</tr>
 @foreach($of->fac as $s)
<tr>
<td>{{$s->name}}</td>
<td>{{$s->day}}</td>
<td>{{$s->time}}</td>
<td>[{{$s->	room}}]</td>


</tr>


 @endforeach

</table>
<a href="../list"  class="btn btn-outline-secondary"style="color:black">Back </a>
@else
<Span class="label label-info"><h1><center>TBA</h1></center></span>
@endif
</div>
@endsection