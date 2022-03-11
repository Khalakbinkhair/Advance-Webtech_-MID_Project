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
  top:40px;
  left:	400px;
}
  </style>




<div id="d1">
        <img src="/images/mq.jpg" class="i1">
           
       </div>

       <div id="a1">
        <img src="/images/mq1.jpg" class="b1">
           
       </div>
       <div id="d2">


<center>

 

<table align ="center"  class='table table-bordered'>


               







<tr>
                         
                         <td  colspan="5" ><h5> 
  

                        Total Balance: {{$tot}}
                           </h5>
                           
                             </td></tr>


                        
                      <tr>  <td  colspan="5" ><h5> 
 
                      Debit: {{$debit}}   </td></tr>
 
                        <tr>
                         
                        <td  colspan="5" ><h5> 
 
                          Credit: {{$credit}} 
                          </h5>
                          
                            </td></tr>
                         
                        
 
                                <tr>
                             
                                <td  ><b><u>Date</u></b></td>
                                  <td ><b><u>Particulars</u></b></td>
                                   <td  ><b><u>Debit</u></b></td>
                                   <td  ><b><u>Credit</u></b></td>
                                   <td  ><b><u>Balance</u></b></td>
                                 
                                </tr>

                                @foreach($total as $t)    
                  
                  <tr>
                      <td>{{$t->date}}</td>
                      <td>{{$t->particulars	}}</td>
                      <td>{{$t->debit}}</td>
                      <td>{{$t->credit}}</td>
                      <td>{{$t->balance}}</td>
                   
                      
                      
                   </tr>
                   @endforeach

</table>               
<a href="../dashboard" style="color:black" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection

