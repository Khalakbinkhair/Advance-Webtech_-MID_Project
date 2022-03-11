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

<form action="{{route('regsub')}}"  method="post" >
  {{@csrf_field()}}


   
  <div>
          
            <h3><u> Registration:</u></h3>
              <select name="Semester">
                  <option value="2020-2021,Fall">2020-2021,Fall</option>
                  <option value="2020-2021,Spring">2020-2021,Spring</option>
                  <option value="2020-2021,Summer">2020-2021,Summer</option>
                  <option value="2021-2022,Fall">2021-2022,Fall</option>
                  <option value="2021-2022,Spring">2021-2022,Spring</option>
       </select>
       
    
</div>
</br>
<a href="..\dashboard"style="color:black" class="btn btn-outline-secondary">Back</a>|<input type="submit" name="submit"value="Click"style="color:black" class="btn btn-outline-secondary"/></td> </tr>
              </table>
             
      
              

</div>



@endsection