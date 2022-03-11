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
    top: 50px;	
    left:500px
}

#a7{
	
	position: fixed;
    top: 670px;
left: 600px;		
}
  </style>
  <div id="a1">
        <img src="/images/reg.jpg" class="b1">
           
       </div>




       <div id="a2">

<form action="{{route('regsubmit')}}"  method="post" enctype="multipart/form-data" >
  {{@csrf_field()}}
 
  
  
  <h1> <u>Welcome to Registration page</u></h1>

 

  <b> UserName:<input type='text' name="name" value="{{old('name')}}" placeholder='Enter your Name'>
    @error('name')

<span>{{$message}} </span>

 @enderror
 
</br></br>
UserID:  <input type='text' name="userid" value="{{old('userid')}}"   placeholder='Enter User ID'> 
    @error('userid')

<span>{{$message}} </span>

 @enderror

</br></br>
Email:  <input type='email' name="email" value="{{old('email')}}"   placeholder='Enter Your Email'> 
    @error('email')

<span>{{$message}} </span>

 @enderror
 
</br></br>

 Gender:
        <input type="radio"  name="gender" id="Male" value="Male"><b>Male
        <input type="radio"  name="gender" id="Female" value="Female">Female
        <input type="radio"  name="gender" id="Other" value="Other">Other</b>

@error('gender')

<span>{{$message}} </span>
 
 @enderror
        </br></br>

        Address:<input type="text" name="address"  value="" placeholder="Enter Address">
        @error('address')

<span>{{$message}} </span>

 @enderror

        </br></br>
     Password:<input type="password"  name="password" id="password"  value="" placeholder="Enter password">

     @error('password')

<span>{{$message}} </span>

 @enderror

     </br></br>
    
     Confirm Password:<input type="password"  name="cpassword" id="cpassword"  value="" placeholder="Enter Confirm password">

     @error('cpassword')

<span>{{$message}} </span>

 @enderror
</br></br> 
Session:
                                <input type="text" name="session"  value=" " placeholder='Enter  session'>
                        
 @error('session')

<span>{{$message}} </span>

 @enderror

 

 </br></br>
 Blood Group:
                    <input type="text" name="blood_group"  value=" " placeholder='Enter Blood Group'>
                        
 @error('blood_group')

<span>{{$message}} </span>

 @enderror

 

 </br></br>
 

Upload picture:<input type="file" name="file" id="file" value="">


@error('file')

<span>{{$message}} </span>

 @enderror

</br></br> 
User Type:
                                <input type="radio" name="usertype" id="Admin " value="Admin"><b>Admin</b>
                                <input type="radio" name="usertype" id="Teacher " value="Teacher"><b>Teacher</b>
                                <input type="radio" name="usertype" id="Student " value="Student"><b>Student</b>
                                <input type="radio" name="usertype" id="Staff " value="Staff"><b>Staff</b>
 @error('usertype')

<span>{{$message}} </span>

 @enderror

 </br></br> 


 </div>
 <div  id="a7">

<input type= "submit"  style="color:black" class="btn btn-outline-secondary" value='Submit' >


Already Register?
<a href="login"> Login Here</a>
</div>
</form>

@endsection
