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
  top:0px;
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
<center></br>

<table class='table table-bordered'>
    <tr> <h3>Offered Courses</h3></center>
</tr>
    <tr align='center'>
       <th> Course </th>
       <th>Capacity </th>
       <th>Status </th>
        <th> Department  </th>
     
</tr>

@foreach($offer as $o)
<tr>
    <td  align='center'> <a href={{route('details',['id'=>encrypt($o->id)])}} style="color: #241571">{{$o->course}}</td></a>
    <td>{{$o->capacity}}</td>
    <td>{{$o->status}}</td>
    <td>{{$o->dept}}</td>

</tr>
@endforeach
</table>
<a href="../../dashboard"  class="btn btn-outline-secondary"style="color:black">Back </a>
</div>
@endsection