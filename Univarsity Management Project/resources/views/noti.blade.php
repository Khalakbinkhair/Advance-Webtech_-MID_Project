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
	
	position:  fixed;	
  top:180px;
  left:	550px;
}


  </style>




<div id="d1">
        <img src="/images/mq.jpg" class="i1">
           
       </div>

       <div id="a1">
        <img src="/images/mq1.jpg" class="b1">
           
       </div>
       <div id="d2">

   
       <table align ="center"  class='table table-bordered'>
<tr>
    <td><h3>Headline<h3></td>

<td><h3>Notice</h3></td>
</tr>

@foreach($notice as $s)
<tr>
    <td>{{$s->headline}}</td>

<td>{{$s->whole}}</td>
</tr>


@endforeach
</table>
<a href='../dashboard'style="color:black" class="btn btn-outline-secondary">Back</a>

</div>

@endsection