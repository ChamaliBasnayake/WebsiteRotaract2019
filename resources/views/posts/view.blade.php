<!DOCTYPE html>
<html>
<head>
<title>Rotaract Club Badulla</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type ="text/css">
    .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;

    }
    .has-error
    {
        border-color:#cc0000;
        background-color:#ffff99;

    }
    
    </style>
</head>
<body background="/images/w.jpg" style="color:white;">


 

<center>
  
<div class ="container"> 

@foreach($posts as $row)
    
     
    <h4 style="text-align: center;padding-top:65px;font-size:25px; font-weight: bold;" >{{$row['title']}}</h4>
    <br/>
    <img src="/storage/{{$row['image']}}" alt="Image" style=" height:400px;width:550px;float:left;">
     <p style="width:500px;float:right;text-align:justify;">{{$row['body']}}</p>
    
   <ul class="nav nav-pills" style="width:500px;float:right">
   <li role="presentation">
  
   <a href="/like/{{$row['id']}}">
   <span class="fa fa-thumbs-up"style="padding-right:65px;color:white;">Like({{ $likeCtr }})</span>
    </a>
    </li>
   
   <li role="presentation">
  
   <a href="/dislike/{{$row['id']}}">
   <span class="fa fa-thumbs-down"style="padding-right:45px;color:white;">Dislike({{ $dislikeCtr }})</span>
   </a>
    </li>
    <li role="presentation">
  
   <a href="/comment/{{$row['id']}}">
   <span class="fa fa-commenting-o"style="color:white;">Comment</span>
   </a>
    </li>
   </ul>
   </center>


    

    <form  method="post" action ="/comment/{{$row['id']}}" style="width:300px;float:left;padding-top:250px;margin-left:-600px;">
    
        {{csrf_field()}}
        
    <div class="form-group">
    <label>Enter Name</label>
    <input type="text" name="name" class="form-control" style="width:600px"/>
    </div>

    <div class="form-group">
    <label>Enter Comment</label>
    <textarea name="commnt" class="form-control"style="width:600px"></textarea>
    </div>

    <div class="form-group">
    <input type="submit" name="Comment" value="Comment" class="btn btn-success"/>
    <a href="{{action('PostsController@index')}}" class="btn btn-primary">Back</a></div>
    </div>
    </form>
    </div>
    @endforeach
    <div style="width:500px;float:right;padding-top:130px;padding-left:200px;">
    @if(count($errors) >0)
    <div class="alert alert-danger"style="margin-left:-972px;width:600px;height:70px;">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
    @if($message =  Session::get('success'))
    <div class = "alert alert-success alert-block"style="margin-left:-972px;width:600px;height:50px;">
    <button type="button" class="close" data-dismiss="alert">X</button>
    
    <strong>{{ $message }}</strong>
    </div>

    @endif
    
    <h5 style="margin-left:-300px;padding-top:25px;font-weight: bold;">Comments</h5>
    <br/>
    <div style="line-height:5px;column-width: 150px;">
    @if(count($comment) > 0)
    @foreach($comment->all() as $comments)
            <p style="margin-left:-300px;color: #e6e6e6;font-weight: bold;">{{$comments->commnt}}</p>
            <p style="margin-left:-290px;color: #e6e6e6;font-weight: bold;font-size:12px;margin-bottom:30px;">Posted by: {{$comments->name}}</p>
            
        @endforeach
        @else
        <p style="margin-left:-300px;color: #e6e6e6;font-weight: bold;">No Comments Available</p>
        @endif
        </div>
        </div>
</div>





</body>
</html>