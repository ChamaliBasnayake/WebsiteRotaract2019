<!DOCTYPE html>
<html>
<head>
<title>Rotaract Club Badulla</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body background="/images/w.jpg" style="color:white;">
<center>
  
<div class ="container"> 

@foreach($posts as $row)
    
     
    <h4 style="text-align: center;padding-top:75px;font-size:25px; font-weight: bold;" >Project Title: {{$row['title']}}</h4>
    <br/>
   
     <p style="width:500px;float:left;text-align:justify;padding-top:15px"> {{$row['body']}}</p>
     <br/>
     <br/>
    <div style="float:left;margin-right:600px;margin-top:20px;">
    <p style="margin">Project Co-ordinator:{{$row['coor']}}</p>

     <p style="float:left;">Contact Number: {{$row['phone']}}</p>
     <br/>
     <p style="float:left;">Project Id: {{$row['pro_id']}}</p>
    </div>
   
   </center>
    @endforeach

<div style="float:right;margin-top:-225px;margin-left:-85px">
       
        <table class="table table-striped table-hover table-bordered" style="width:80%;margin-left:px;background-color:white;color:black;">
        <thead style="margin-left:-85px">
        <tr >
            <th style="width:20%">
               Item
            </th>
            <th style="width:40%">
                Quantity
            </th>
            <th style="width:40%">
                Item Code
            </th>
           
        </tr>
        </thead>
        <tbody>
             @if(count($donation) > 0)
        @foreach($donation->all() as $row)
       
            <tr class="donation_details">
                <td>
                    {{$row->item}}
                </td>
              
                    <td>
                        {{$row->quantity1}}
                    </td>
              
                <td>
                    {{$row->itemcode}}
                </td>
                
            </tr>
            
       
        @endforeach
        </tbody>
    </table>
    
    @else
        <p>No Items Available</p>
        @endif
</div>
<div class = "container" style="margin-top:400px;">
<center><label style="font-size:25px">Donor Details</label></center>
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
    <form  method="post" action ="{{ route('save_donate') }}">
    
        {{csrf_field()}}
        
    <div class="form-group">
    <label>Enter Full Name</label>
    <input type="text" name="name" class="form-control" required/>
    </div>

    <div class="form-group">
    <label>Enter Phone Number</label>
    <input type="text" name="phone" class="form-control" required/>
    </div>
    
    <div class="form-group">
    <label>Enter Email</label>
    <input type="email" name="email" class="form-control" required/>
    </div>
    <div class="form-group">
    <label>Enter Project You are Donating</label>
    <input type="text" name="pro_id" class="form-control" required/>
    </div>
    


    <div class="form-group">
    <input type="submit" name="add" value="Add" class="btn btn-info"/>
    </div>

    </form>
</div>

<div class = "container box">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-top:25px;font-size:25px">Add Donate Items</div>
              

                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ route('add_donate') }}" >
                        {!! csrf_field() !!}
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Project Id</th>
                                    <th>Item Code</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="resultbody">
                                <tr>
                                    <td class="no">1</td>
                                    <td>
                                        <input type="text" class="itemcode form-control" name="pro_id[]">
                                    </td>
                                    
                                    <td>
                                        <input type="text" class="itemcode form-control" name="itemcode[]">
                                    </td>
                                    <td>
                                        <input type="text" class="quantity form-control" name="quantity[]">
                                    </td>
                                    <td>
                                        <input type="button" class="btn btn-danger delete" value="-">
                                        
                                    </td>
                                </tr>

                            </tbody>
                        </table>    
                        <center><input type="button" class="btn btn-lg btn-primary add" value="Add New Item">   
                        <input type="submit" class="btn btn-lg btn-success" value="Submit">
                        <a href="/viewdonation" class="btn btn-lg btn-danger" >Back</a></center>
                        </form>
                </div>
            </div>
         <div id="footer-copyrights">
                        
                          <p style="color:white;margin-top:185px;margin-left:400px">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
        </div>

    </div>
</div> 
</div>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody tr').length - 0) + 1;
            var tr = '<tr><td class="no">' + n + '</td>' +
                    '<td><input type="text" class="pro_id form-control" name="pro_id[]"></td>'+
                    '<td><input type="text" class="itemcode form-control" name="itemcode[]"></td>'+
                    '<td><input type="text" class="quantity form-control" name="quantity[]"></td>'+
                    '<td><input type="button" class="btn btn-danger delete" value="-"></td></tr>';
            $('.resultbody').append(tr);
        });
        $('.resultbody').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>
</body>
</html>
