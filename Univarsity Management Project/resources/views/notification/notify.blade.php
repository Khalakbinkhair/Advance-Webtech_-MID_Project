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

   

       
    
   
    <h2 class='label label-scondary'>

    
@foreach($d->courses as $s)

<tr>
<td>{{$s->name}}</td>      
<td> {{$s->schedule}}</td>      
<td> {{$s->credit}}</td>      
</tr>

@endforeach

    </h2>
</div>

     <table class='table table-bordered'>

     <tr>
<th>Course Name</th>      
<th> Directory</th>      
      
</tr>
@foreach($course->notes as $s)
<tr>
<td><h3>{{$s->name}}</h3></td>


</tr>
@endforeach




</tr>



</div>
@endsection