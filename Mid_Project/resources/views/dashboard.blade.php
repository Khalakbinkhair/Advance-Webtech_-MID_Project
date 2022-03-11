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
	
    position: absolute;


top: 10px;
left: 400px;

 width: 700px;
height:50px;


}
#d3{
	
    position: absolute;


top: 100px;
left: 500px;

 width: 700px;
height:50px;


}

</style>

       

<style>
        .navbar{
           
            text-align: center;
            top: 200px;
        }

        .navbar a{
            color: black;
            text-decoration: none;
           
            padding: 10px 20px;
       
        }

        .dropdown-container{
            display: inline;
            position: absolute;
        }

        .dropdown-content{
            position: absolute;
          
           left: 100px;
         
            text-align: left;
            
            display: none;
        }

        .dropdown-content a{
            display: block;
        }

        
      
        .dropdown-container:hover .dropdown-content{
            display: block;
        }
    </style>

<style>
        .nbar{
           
            text-align: center;
           
        }

        .nbar a{
            color: black;
            text-decoration: none;
            
           
            padding: 10px 20px;
       
        }

        .ddown-container{
            display: inline;
            position: absolute;
            top: 250px;
          
        }

        .ddown-content{
            position: absolute;
            
            
          
            right: 0px;
         
            text-align: left;
            
            display: none;
        }

        .ddown-content x{
            display: block;
        }

        
      
        .ddown-container:hover .ddown-content{
            display: block;
        }
    </style>


<div id="d1">
        <img src="/images/mq.jpg" class="i1">
           
       </div>

       <div id="a1">
        <img src="/images/mq1.jpg" class="b1">
           
       </div>
<center>
<div id="d2">
    
    @if(Session ::has('msg'))
<span>{{Session::get('msg')}}</span>
@endif
<h3><u>Welcome To  {{session::get('name')}}</u>
</div>


<div id="d3">

<a href="{{route('course')}}" style="color:black" class="btn btn-outline-secondary"> Courses and Results </a>
<a href="noti" style="color:black" class="btn btn-outline-secondary">Notifications </a>
<a href="{{route('grade')}}" style="color:black" class="btn btn-outline-secondary">Grade Reports </a>
<a href="{{route('profile')}}" style="color:black" class="btn btn-outline-secondary">Profile</a> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout"style="color:black" class="btn btn-outline-secondary"> Logout </a>


</div>
</center>


</head>
<body>
    

    <div class="navbar">
       
   
        <div class="dropdown-container">
            <a href="#"  class="btn btn-outline-secondary">Academics</a>
            <div class="dropdown-content">
                <a href="acalender" class="btn btn-outline-secondary">Academic Calender</a>
                <a href="reg" class="btn btn-outline-secondary">Registration</a>
                <a href="{{route('list')}}" class="btn btn-outline-secondary">Offered Courses</a>
                <a href="financ" class="btn btn-outline-secondary">Financials</a>
            </div>
        </div>
        </div>


        <div class="nbar1">
       
   
       <div class="ddown-container">
           <a href="#"  class="btn btn-outline-secondary"style="color:black">Library Info</a>
           <div class="ddown-content">
               <a href="{{route('library')}}" class="btn btn-outline-secondary"style="color:black">Borrow History</a>
               <a href="{{route('lib_fi')}}" class="btn btn-outline-secondary"style="color:black">Financial</a>
            
           </div>
       </div>
       </div>

      
   
    
  
   


@endsection