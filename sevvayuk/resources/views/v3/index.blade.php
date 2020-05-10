<!-- index.blade.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Katalog Toko</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br />
@if (\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div><br />
@endif
<form method="GET" action="{{ action('StoreController@cari') }}">
<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Toko">
<button type ="submit" class="btn btn-secondary">Cari</button>
</form>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nama Toko</th>
<th>Alamat</th>
<th> Nomor Telepon</th>
<th>Email</th>
<th colspan="3" align="center">Action</th>
</tr>
</thead>
<tbody>

@foreach($stores as $store)
<tr>
<td>{{$store['idStore']}}</td>
<td>{{$store['nameStore']}}</td>
<td>{{$store['address']}}</td>
<td>{{$store['phonenumber']}}</td>
<td>{{$store['email']}}</td>
<td><a href="{{action('StoreController@show', $store['idStore'])}}"
    class="btn btn-success">Detail</a></td>
</td>
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $stores->Links() }}
</div>
<div align="center">
<a href="{{action('StoreController@create')}}"></a>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>