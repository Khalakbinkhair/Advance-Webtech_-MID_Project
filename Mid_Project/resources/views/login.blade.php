
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
@if(Session ::has('msg'))
<span>{{Session::get('msg')}}</span>
@endif


   
<form action="{{route('logsubmit')}}"  method="post"  >
  {{@csrf_field()}}

<h1> <u>Login Here</u></h1>
<b>UserID:  <input type='text' name="userid" value="{{old('userid')}}"   placeholder='Enter User ID'> 
    @error('userid')

<span>{{$message}} </span>

 @enderror
</br></br>
 Password:<input type="password"  name="password" id="password"  value="" placeholder="Enter password">

@error('userid')



<span>{{$message}} </span>

@enderror
</br>
<a href="{{ route('forgot_password')}}"> Forgot Password?</a></br>
<input type= "submit" style="color:black" class="btn btn-outline-secondary" value='Submit' >

</center>

</div>



    @endsection