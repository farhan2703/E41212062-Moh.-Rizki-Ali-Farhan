<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href=".">Muhammad Rizki Ali Farhan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/adminpost"></a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </li>
              </ul>
          </div>
        </div>
      </nav>

<a href="/homeAdmin/create" class="btn btn-primary">Tambah Data</a>
      <table class="table mt-3" id="tableuser">
        <thead>
          <tr>
            <th>No</th>
            <th>nama</th>
            <th>email</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>foto</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->tanggal_lahir}}</td>
            <td>{{$item->alamat}}</td>
            <td>  <img src="{{ url('storage/' . $item->foto) }}"
                style="width: 70px; height: 70px;  object-fit: cover;" alt=""
                class="rounded-{{ url('storage/' . $item->foto) }}circle"></td>
            <td>
                <div class="d-flex align-items-center gap-1">
                    <a href="/homeAdmin/{{ $item->id }}/edit"
                        class="btn btn-warning text-white btn-sm">Edit</a>
                    <form action="/homeAdmin/{{ $item->id }}" method="post" class="delete-form">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button class="btn btn-danger btn-sm text-white m-0 delete-button"
                            type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
      <script>
        $(document).ready(function () {
    $('#tableuser').DataTable();
});
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script src="cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</body>
</html>
