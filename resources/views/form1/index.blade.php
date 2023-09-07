<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    <div>
        <h2 class="container mt-5">form1

        </h2>


        @if($erors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<ul>


@foreach ($errors->all() as $e)
<li>{{$e}}</li>
@andforeach
</ul>

<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

        @endif
        <form action=" {{ route('form1Submit')}}" method="post" class="group-control ">
@csrf
 <div>
        <label for="">name</label>

<input type="text",placeholder="name" class="form-control  @$eror('name')
 is-invalid">
@$eror('name')
<small class="invalid-feedback">{{$message}}</small>

</div>




<div class="mb-3">
    
<label for="">age</label>
<input type="text" name="age">


<small class="invalidfeedback">{${message}}</small></div>

<div class="mb-3">
<label for="">email</label><input type="email" name="email"></div>
<div class="mb-3">
<label for="">city</label><input type="email"></div>
<select name="city" id="" class="form-control">
    <option value="" selcted disabled>select city</option>
    <option value="">test1</option>
    <option value="">test2</option>
    <option value="">test4</option>
</select>






<div class="mb-3">
    <button class="btn btn-success btn-lg w-100" type="submit">submit</button>
</div>


        </form>
    </div>
</body>
</html>