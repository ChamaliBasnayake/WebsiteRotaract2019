<!DOCTYPE html>
<html>
<head>
<title>Rotaract Club of Badulla</title>
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
    body {
  background-image: url("/images/w.jpg");}
  .table{
      margin-top:-55px;
  }
}
    </style>
</head>
<body>

<br/>
<br/>
<div class="container" style="margin-top:45px">
<h2 align="center" style="color:white;">View Ongoing Projects</h2>
               <br/>
               <br/>
               <br/>
               <br/>
               
                <table class=" table table-striped table-hover table-bordered"style="background-color:white;">
        <thead style="width:100%">
        <tr>
            <th>
                Project Title
            </th>
            <th>
                Description
            </th>
            <th>
                Project Co-ordinator
            </th>
            <th>
                Contact Number
            </th>
            <th>
                Action
            </th>
           
        </tr>
        </thead>
        <tbody>
        @foreach($donate->all() as $row)
            <tr class="donation_details">
                <td>
                    {{$row->title}}
                </td>
              
                    <td>
                    {{ substr($row->body,0,150)}}
                    </td>
              
                <td>
                    {{$row->coor}}
                </td>
                <td>
                    {{$row->phone}}
                </td>
                <td>
                <a href="/viewdonate/{{$row['pro_id']}}" class="btn btn-info">
                                        View more
                                    </a>
                </td>
            
            </tr>
            
        @endforeach
        
        </tbody>
    </table>
     
    <a href="/home" class="btn btn-lg btn-danger" >Back</a>
                       
                </div>        
                    
        </div>
    </div>
      <div id="footer-copyrights">
                        
                          <p style="color:white;margin-top:185px;margin-left:600px">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
<body>
</html>