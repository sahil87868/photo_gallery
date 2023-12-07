

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>

<div class="col-md-12">
    
<form action="{{url('/add_photo')}}" method="post" enctype="multipart/form-data">
      <div class="p-3 p-lg-5 border">
        <div class="form-group row">
        <div class="">
        <input type="file" class="form-control" id="c_lname" name="file">
                 <input type="submit" class="form-control" id="c_lname" name="ADD" value="ADD">
              </div>

       
        </div>
      </div>
    </form>
  </div>
  

</body>

</html>