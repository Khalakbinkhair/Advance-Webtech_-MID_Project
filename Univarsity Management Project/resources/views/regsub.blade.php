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
        
        position: fixed;	
      top:200px;
      left:	550px;
    }
    #d3{
        
        position: fixed;	
      top:225px;
      left:	1050px;
    }

    #d5{
        
        position: fixed;	
      top:550px;
      left:	750px;
    }
     
     
     </style>
      <div id="d1">
        <img src="/images/mq.jpg" class="i1">
           
       </div>

       <div id="a1">
        <img src="/images/mq1.jpg" class="b1">
           
       </div>
       <div id="d2">
    
    
       {{$session}}

	
<table align ="center"  class='table table-bordered' >
                        
                    


                            <tr>
                          <td colspan="2" > <h3>  Lecture:{{$credit}}  </h3></td>
</tr>
                         
                      
                               <tr>
                            
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Credit</u></b></td>
                                 
                               
                                  
                               </tr>
                                
                               @foreach($sem as $s)    
                  
                        <tr>
                            <td>{{$s->course}}</td>
                            <td>{{$s->credit}}</td>
                          
                            
                            
                         </tr>
                         @endforeach
                        
</tr>

</table>    
</div>
<div id="d3">

<table align ="center"  class='table table-bordered' >


<tr>
                          <td colspan="2" > <h3>  Payment Info  </h3></td>
</tr>
                         

<tr>
<td>

<b> Tuition:  </b>{{$fees}}
</td>
</tr>

<tr>
<td>

<b>Utility Fees:</b>
</td>
</tr>

<tr>
<td>
<b>Total:</b>

</td>
</tr>


<tr>
<td>

<b>Amount Paid:</b>
</td>
</tr>

<tr>
<td>
<b>Balance:</b>
</td>
</tr>
</table> 
</div>


<div id="d5">

<center>
<a href="reg" style="color:black" class="btn btn-outline-secondary"> Back </a>
</center>
</div>
</body>

</html>
@endsection