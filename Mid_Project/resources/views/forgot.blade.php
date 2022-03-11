
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

<h3> Hello </h3>
  {{$user->name}}
  <p> please click the password reset button to reset your Password 
      <a href="{{route('reset_password/'.$user->email.'/'.$code)}}">Reset Password</a>


</div>