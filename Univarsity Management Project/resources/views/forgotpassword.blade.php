
@extends('layouts.layout')
@section('content')

<style>
    
    #a1{
	
	position: fixed;

			
}

.b1{
		position: absolute;
	
 	width: 1600px;
	height:730px;
	

  }
  #a2{
  	position: fixed;	
	
	width: 1500px;
	height: 690px;
    top: 220px;	
}
#a3{
	
	position: fixed;
    top: 700px;
left: 650px;		
}
  
  </style>
  <div id="a1">
        <img src="/images/reg.jpg" class="b1">
           
       </div>

<center>
  <div id="a2">

  <form action="{{ route('forgot_pass')}}"  method="post"  >
  {{@csrf_field()}}


  @if(session('error'))
  <div>
{{session ('error') }}
</div>
@endif

  
@if(session('success'))
<div>
{{session ('success') }}
</div>
@endif

  <input Type='email' name='email' id='email' placeholder="Enter Your Email">
  <button type='submit'> Submit </button>
</br></br>

  <a href="login"style="color:black" class="btn btn-outline-secondary"> Back </a>


</form>

</div>