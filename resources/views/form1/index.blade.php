<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>



    <div class="container my-5">
        <h2 class="mt-5">Form 1 </h2>
        @if ($errors->any())
        <!-- if here to display all the misatkes in the top of form in alert-->

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <ul>
                @foreach ($errors->all() as $e)
                  <li>{{ $e }}</li>
                @endforeach
             </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif



        <form  method="POST" action="{{ route('form1Submit') }}">

            @csrf
            <!--تزوير عبر الموقع cross site request forgery-->
      <div class="mb-3">
        <label>Name</label>
        <input name="name" class="form-control  " placeholder="User Name">
        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="User Name">
        @error('email')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label>Age</label>
        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="User Name">
        @error('age')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label>City</label>
        <select name="city" class="form-control @error('city') is-invalid @enderror" >
            <option selected disabled>Select City</option>
            <option>test 1</option>
            <option>test 2</option>
            <option>test 4</option>
            <option>test 5</option>
            <option>test 6</option>
        </select>
        @error('city')
        <!--error take the name of element as parameter-->
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>

         <div class="mb-3">
            <button type="submit" class="btn btn-success btn-lg w-100">Submit</button>
         </div>

        </form>
    </div>


    <!--this script for jquery to run the faedeto..-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
               $(".alert").fadeTo(2000, 500).slideUp(500, function() {
               $(".alert").slideUp(500);
           });
    </script>
  </body>
</html>