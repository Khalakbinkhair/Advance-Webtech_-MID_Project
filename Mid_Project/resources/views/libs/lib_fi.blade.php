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


<table class='table table-bordered'>



<tr><td colspan="4">
                         <h5> Total Balance:{{$balance}}</h5>
</td>
</tr>
<tr>
                            <td  ><b><u>ID</u></b></td>
                            <td  ><b><u>Debit</u></b></td>
                              <td ><b><u>Credit</u></b></td>
                               <td  ><b><u>Total</u></b></td>
                        
                            
                               
                            </tr>
                             
                            @foreach($store as $li)    
               
                     <tr>
                        <td>{{$li->id}}</td>
                          <td>{{$li->debit}}</td>
                         <td>{{$li->credit}}</td>
                         <td>{{$li->total}}</td>
                       
                         
                         
                      </tr>
                      @endforeach
</table>

<a href='../dashboard' class="btn btn-outline-secondary"style="color:black">Back</a>






</div>
@endsection