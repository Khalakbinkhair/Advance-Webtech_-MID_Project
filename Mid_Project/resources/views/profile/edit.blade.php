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
	
	position:  absolute;	
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



<form action="{{route('editsub')}}"  method="post" enctype="multipart/form-data" >
  {{@csrf_field()}}
  
  
  
  <h1> <u>Editable Page</u></h1>

 

  <b> UserName:<input type='text' name="name" value=" "  placeholder='{{$info->name}}' >
    @error('name') 

<span>{{$message}} </span>

 @enderror
 

<!-- UserID:  -->
 <input type='hidden' name="userid" value="{{$info->userid}}"   placeholder='Enter User ID'> 
    @error('userid')

<span>{{$message}} </span>

 @enderror

</br></br>
Email:  <input type='email' name="email" value=""   placeholder='{{$info->email}}'> 
    @error('email')

<span>{{$message}} </span>

 @enderror


 <!-- Gender: -->
        <input type="hidden"  name="gender" id="Male" value="{{$info->gender}}">
        <input type="hidden"  name="gender" id="Female" value="{{$info->gender}}">
        <input type="hidden"  name="gender" id="Other" value="{{$info->gender}}">

@error('gender')

<span>{{$message}} </span>
 
 @enderror
     
</br></br>
        Address:<input type="text" name="address"  value="" placeholder="{{$info->address}}">
        @error('address')

<span>{{$message}} </span>

 @enderror

        </br>
     <!-- Password: -->
     <input type="hidden"  name="password" id="password"  value="{{$info->password}}" placeholder="Enter password">

     @error('password')

<span>{{$message}} </span>

 @enderror


                                <input type="hidden" name="session"  value=" {{$info->session}}" placeholder='Enter  session'>
                        
 @error('session')

<span>{{$message}} </span>

 @enderror

 


                    <input type="hidden" name="blood_group"  value=" {{$info->blood_group}}" placeholder='Enter Blood Group'>
                        
 @error('blood_group')

<span>{{$message}} </span>

 @enderror

 

    
     <!-- Confirm Password: -->
     <input type="hidden"  name="cpassword" id="cpassword"  value="{{$info->cpassword}}" placeholder="Enter Confirm password">

     @error('cpassword')

<span>{{$message}} </span>

 @enderror


 </br>
Upload picture:<input type="file" name="file" id="file" value="">


@error('file')

<span>{{$message}} </span>

 @enderror


<!-- <User Type -->
                                <input type="hidden" name="usertype" id="Admin " value="{{$info->usertype}}"><b>
                                <input type="hidden" name="usertype" id="Teacher " value="{{$info->usertype}}"><b>
                                <input type="hidden" name="usertype" id="Student " value="{{$info->usertype}}"><b>
                                <input type="hidden" name="usertype" id="Staff " value="{{$info->usertype}}"><b>
 @error('usertype')

<span>{{$message}} </span>

 @enderror

 </br></br> 


 <a href="profile"style="color:black" class="btn btn-outline-secondary"> Back</a>
 

<input type= "submit"  style="color:blue" class="btn btn-outline-primary" value='Update' >


</div>
</form>

@endsection



