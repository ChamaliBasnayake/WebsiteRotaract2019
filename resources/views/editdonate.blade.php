<!DOCTYPE html>
<html>
<head>
<title>Rotaract Club Badulla</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
<body>
<br/>
<div class = "container box">
<center><label>Edit Project</label></center>
@if(count($errors) >0)
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
@if($message =  Session::get('success'))
    <div class = "alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    
    <strong>{{ $message }}</strong>
    </div>

    @endif
    
    <form  method="post" action ="{{ route('update',$itemcode->id) }}">
    
        {{csrf_field()}}
        
    <div class="form-group">
    <label>Enter Title</label>
    <input type="text" name="title" value="{{ $pro_id-> title}}" class="form-control"/>
    </div>
     

    <div class="form-group">
    <label>Enter Project Description</label>
    <textarea name="body" class="form-control" >{{ $pro_id-> body}}</textarea>
    </div>
    
    <div class="form-group">
    <label>Enter Image</label>
    <input type="file" name="image" class="form-control"/>
    <img src="/storage/{{$pro_id->image}}" alt="Image" class="img-thumbnail" width="100" height="100"/>
    <input type="hidden" name="hidden_image" value="{{$pro_id->image}}">
    </div>

    <div class="form-group">
    <input type="submit" name="edit" value="Edit" class="btn btn-info"/>
    <a href="{{action('PostsController@viewpro')}}" class="btn btn-success">View Projects</a>
    
    </div>
    </form>
</div>
</body>
</html>