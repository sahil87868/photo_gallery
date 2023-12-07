@extends('layout.structure')

@section('main_content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>

<div class="container mt-4">
  
  
  


<div class="container">
  
  
  <div class="row">
    

<div class="container">
  
  
  <div class="row">
    <div class="col-md-4">
      <!-- <div class="thumbnail">
        
          <img src="/upload/web/1.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p></p>
          </div>
     
      </div> -->
     
      
    @foreach ($data as $image)
        <img src="{{ asset('uploads/' . $image->filename) }}" alt="{{ $image->description }}">
    @endforeach
    </div>
   
   
   
  </div>
</div>




</body>

</html>
@endsection