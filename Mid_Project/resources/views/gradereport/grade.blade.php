
@extends('layouts.layout')
@section('content')
<style>
#d2{
        
        position: absolute;	
      top:45px;
      left:	1420px;
    }

    </style>
<center>

 

<table align ="center"  class='table table-bordered'>


               

<h3>  <u>  <center>  Grade Report</center></u></h3>

<div  <div id="d2">
  <a href="pdfdownload" style="color:black" class="btn btn-outline-secondary">Download</a>

</div>
                        
                      <tr>
                        
                       <td  colspan="5" ><h5> 

                       CGPA: {{$cgpa}}   </td></tr>

                       <tr>
                        
                       <td  colspan="5" ><h5> 

                           Credit Complete: {{$credit}} 
                         </h5>
                         
                           </td></tr>
                       

                               <tr>
                            
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                                  <td  ><b><u>Session</u></b></td>
                                  <td  ><b><u>Course Credit</u></b></td>
                                
                               </tr>
                                
                               @foreach($sem as $s)    
                  
                        <tr>
                            <td>{{$s->course}}</td>
                            <td>{{$s->grade}}</td>
                            <td>{{$s->marks}}</td>
                            <td>{{$s->session}}</td>
                            <td>{{$s->credit}} Credit</td>
                            
                            
                         </tr>
                         @endforeach

</table>               



@endsection