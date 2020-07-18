<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scable=no, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-ua-Compatible" content="ie=edge">
    <title>Feedback Form Application
    </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    </head> 
    
    
    <body class="bg-light">
        <div class="p-3 mb-2 bg-dark text-white">
            <div class="container">
           <div class="h3">  Feedback Form Application </div>
          </div>
            
         </div>
        
        <div class="row">
        <div class="col-md-10 text-right mb-3">
            <a href="{{url('feedback/add')}}" class="btn btn-primary" > ADD</a>
    
            </div> 
            @if(Session::has('msg'))
            <div class="col-md-12">
            
            <div class="alert alert-success">  {{Session::get('msg')}}</div>
            </div>
            @endif
             
             </div>
    <div class="row" >
        <div class="col-md-10"> 
        <div class="card">
            <div class="card-header"> List
           </div>
            <div class="card-body">
                <table class="table">
                
                    <thead class="bg-danger">
                     <tr>   
                    <th> ID</th>
                    <th>Title</th>
                    <th> Name</th>
                    <th> Created </th>
                    <th> Edit  </th>
                    <th>  Delete </th>
                    
                    </tr>
                    </thead>
                    @if($feedback)
                    @foreach($feedback as $feedbac)
                     <tr>   
                    <td>{{$feedbac->id}} </td>
                    <td>{{$feedbac->title}}</td>
                    <td> {{$feedbac->name}}</td>
                    <td>{{$feedbac->created_at}}</td>
                    <td><a href="{{url('feedback/edit/'.$feedbac->id)}}" class="btn btn-primary"> Edit </a>
                         </td>
                    <td><a href="#" onclick="deletefeedback({{$feedbac->id}});" class="btn btn-danger"> Delete</a> </td>
                    
                    </tr>
                    @endforeach
                    @else
                    <tr>
                    <td colspan="6"> Feedback not found yet</td>
                    </tr>
                    
                    @endif
                    
                </table>
            
            
            </div>
         </div>
        </div>
    </div>
            
   
    </body>
</html>
<script type="text/javascript">

function deletefeedback(id){
    
    if(confirm('Are you sure want to delete?')){
        window.location.href='{{url('feedback/delete')}}/'+id;
        
    }
}
</script>