<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-color: #7b858e;
        }
        </style>
  
      <title>Pengaduan Masyaerakat</title>
    </head>
    <body>
      <nav class="navbar navbar-dark bg-dark" >
          <a class="navbar-brand" href="/">
          Admin
        </a>
    </nav>

    <div class="container mt-3">
      <form action="/searchadm" method="post">
        @csrf
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" name="date" placeholder="Tanggal">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="bulan" placeholder="Bulan">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="nik" placeholder="NIK">
          </div>
          <div class="col">
            <select class="form-control" name="jenis">
              <option value="">-Pilih-</option>
              <option value="Kebersihan">Kebersihan</option>
              <option value="Keamanan">Keamanan</option>
              <option value="Sarana Prasarana">Sarana Prasarana</option>
            </select>
          </div>
          <div class="col">
          <button type="submit" name="submit" class="btn btn-md" style="background-color: #88abca;">Cari</button>
          </div>
        </div>
      </form>
    </div>

    <div class="container-fluid mt-3">
        <table class="table table-bordered table-responsive-sm table-dark">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NIK</td>
                    <td>Jenis</td>
                    <td>Keluhan</td>
                    <td>Lokasi</td>
                    <td>Tanggal</td>
                    <td>Status</td>
                    <td>Feedback</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($pengeluhan as $p)
                <tr>
                    <td>{{$p->id_pengeluhan}}</td>
                    <td>{{$p->nik}}</td>
                    <td>{{$p->jenis}}</td>
                    <td>{{$p->keluhan}}</td>
                    <td>{{$p->lokasi}}</td>
                    <td>{{$p->tanggal}}</td>
                    <td>{{$p->status}}</td>
                    <td>{{$p->feedback}}</td>
                    @if($p->status !== "Telah Diselesaikan")
                    <td>
                      <a href="/edit/{{ $p->id_pengeluhan }}" class="btn btn-sm active" style="background-color: #88abca;" role="button" aria-pressed="true">Proses</a>
                    </td>
                    @else
                    <td>
                      <button type="button" class="btn btn-sm" style="background-color: #88abca;" disabled>Done</button>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>