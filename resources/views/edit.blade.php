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
            <a href="{{url('feedback')}}" class="btn btn-primary" > back</a>
    
            </div> 
            
             
             </div>
    <div class="row" >
        <div class="col-md-10"> 
        <div class="card">
            <div class="card-header"> Edit Feedback
           </div>
            <div class="card-body">
                   <form action="{{url('feedback/edit/'.$feedback->id)}}" method="post" name="addfeedback" id"addFeedback">
                    @csrf
                    <div class="form-group">
                    <label for=""> Title </label>
                    <input type="text" name="title" value="{{old('title',$feedback->title)}}" id="title"  class="form-control"> 
                        @if($errors->any())
                        <p >  {{$errors->first('title')}}</p>
                        @endif
                    
                       </div>
                    <div class="form-group">
                    <label for=""> Feedback </label>
                    <textarea name="feedback" value="{{old('feedback',$feedback->feedback)}}" id="feedback" col="30" rows="5" class="form-control">  </textarea>
                          @if($errors->any())
                        <p>  {{$errors->first('feedback')}}</p>
                        @endif
                    
                    
                    </div>
                    <div class="form-group">
                    <label for=""> Name </label>
                    <input type="text" name="name"  id="name" value="{{old('name',$feedback->name)}}" class="form-control">  </textarea>
                         @if($errors->any())
                        <p>  {{$errors->first('name')}}</p>
                        @endif
                    
                    
                    </div>
        
               <div class="form-group">
                   <button type="submit" name="Submit" class="btn btn-primary">Save
                   </button>
                   
             
            </div>
            </form>
         </div>
        </div>
    </div>
            
   
    </body>
</html>