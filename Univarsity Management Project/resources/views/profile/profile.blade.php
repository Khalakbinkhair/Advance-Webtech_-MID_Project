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
  top:100px;
  left:	450px;
}

#d3{
	
	position: fixed;	
  top:180px;
  left:980px;
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

<center>
     
<tr>
                         <td colspan="2" align="left"  ><b><h3>Welcome to Your Profile</h3></b>
                         </td>
                        




                        </tr>
                         <tr>  
                           <td width="50px" > <h5>   Name :  {{$info->name}}</h5> </td> 
                          <td width="40%" height="60%"  rowspan="2"><img src="{{'/images/'.($info->file)}}" height="200px" width="220px"></a>
                                           
                        </td>
                </tr>
                <tr>  <td colspan="2">  <h5>    User ID  :   {{$info->userid}}</h5>  </td> </tr>
               <tr>  <td   colspan="2">     Email  : {{$info->email}} </td> </tr>
              <tr>   <td  colspan="2">     Gender  : {{$info->gender}} </td> </tr>   

              
              <tr>   <td  colspan="2">    Blood Group  : {{$info->blood_group}} </td> </tr>

              <tr>   <td  colspan="2">    Session  : {{$info->session}} </td> </tr>            
              
               <tr>  <td colspan="2" >     Address  :   {{$info->address}}       </td> </tr>
                      </center>

    
</table>
<a href='../login'style="color:black" class="btn btn-outline-secondary">Back</a>
                          <a href='edit'style="color:blue" class="btn btn-outline-primary">Edit</a>
</div>
@endsection