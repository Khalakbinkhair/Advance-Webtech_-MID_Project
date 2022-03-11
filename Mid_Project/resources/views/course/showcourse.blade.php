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
     
     
     </style>
      <div id="d1">
        <img src="/images/mq.jpg" class="i1">
           
       </div>

       <div id="a1">
        <img src="/images/mq1.jpg" class="b1">
           
       </div>
       <div id="d2">
    
    


	
<table align ="center"  class='table table-bordered' >
                        
                      
                          
                               <tr>
                            
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                                  <td  ><b><u>Session</u></b></td>
                               
                                  
                               </tr>
                                
                               @foreach($sem as $s)    
                  
                        <tr>
                            <td>{{$s->course}}</td>
                            <td>{{$s->grade}}</td>
                            <td>{{$s->marks}}</td>
                            <td>{{$s->session}}</td>
                            
                            
                         </tr>
                         @endforeach

</table>               
<center>
<a href="../course/course" style="color:black" class="btn btn-outline-secondary"> Back </a>
</center>
</div>
</body>

</html>
@endsection