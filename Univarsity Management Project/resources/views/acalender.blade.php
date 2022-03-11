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
    
    

<table align ="center" border="1" >


      
                <tr>
               
                    <td>Date</td>
                     <td>Date</td>
                      <td>Date</td>
                   
                </tr>

                       @foreach($calender as $s)
                <tr>                         
                                <td><{{$s->addm}}</td>
                                <td><{{$s->adddate}}</td>
                                <td><{{$s->addnotice}}</td>
                                

                            </tr>

@endforeach
</table>

<a href="dashboard" style="color:black" class="btn btn-outline-secondary">Back</a>
</div>
@endsection