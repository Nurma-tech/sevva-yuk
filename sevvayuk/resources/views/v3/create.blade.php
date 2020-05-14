<!-- create.blade.php -->  
 
<!DOCTYPE html>  <html>  
    <head>  
        <meta charset="utf-8">  
        <title>Daftar Toko</title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>  
    <body>  
    <div class="container">  <h2>Daftar Toko</h2><br/>  
    
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div><br />
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif

    <form method="post" action="{{url('v3')}}">
        {{csrf_field()}}
    <div class="row">  
    <div class="col-md-4"></div>  
    <div class="form-group col-md-4">  
    <label for="nameStore">Nama Toko : </label> 
    <input type="hidden" class="form-control" name="nameStore">  
    <p> {{$store->nameStore}} </p>
    </div>  
    </div>  
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
    <label for="address">Alamat : </label>
    <input type="hidden" class="form-control" name="address">  
    <p> {{$store->address}} </p>
    </div>
    </div>
    </div>
    <div class="row">  
    <div class="col-md-4"></div>  
    <div class="form-group col-md-4">  
    <label for="phonenumber">Nomor HP : </label>  
    <input type="hidden" class="form-control" name="phonenumber">  
    <p> {{$store->phonenumber}} </p>
    </div>  
    </div>  
    </div>  
    <div class="row">  
    <div class="col-md-4"></div>  
    <div class="form-group col-md-4">  
    <label for="email">Email : </label>  
    <input type="text" class="form-control" name="email"> 
    <input type="hidden" class="form-control" name="email">  
    <p> {{$store->email}} </p> 
    </div>  
    </div>  
    </div>  
    <div class="row">  
    <div class="col-md-4"></div>  <div class="form-group col-md-4">  
    <button  type="submit"  class="btn  btn-success"  style="margin-  left:38px">Tambahkan Toko</button>  
    </div>  
    </div>  
     
    </form>  
    </div>  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>  
    </html>