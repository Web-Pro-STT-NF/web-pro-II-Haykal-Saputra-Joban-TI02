<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Data Mahasiswa</title>
  </head>
  <body>
      <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB02</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Review Link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP 5 OOP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="SUBMIT" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">SUBMIT</button>
    </form>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
    </ul>
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP 5 OOP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
  </div>
</nav>

    <div class="row mt-2">
    <div class="col-5">
    <b>Show</b>
    <div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
    </button>
     <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">1</a></li>
    <li><a class="dropdown-item" href="#">2</a></li>
    <li><a class="dropdown-item" href="#">3</a></li>
    <li><a class="dropdown-item" href="#">4</a></li>
    <li><a class="dropdown-item" href="#">5</a></li>
        </ul>
        
        </div>
        <b class="ms-2">Entries</b>
    </div>
</div>

    <div class="container">
    <table class="table table-bordered mt-4 text-center">
  <thead>
  <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">PRODI</th>
      <th scope="col">TAHUN ANGKATAN</th>
      <th scope="col">IPK</th>
      <th scope="col">PREDIKAT</th>
      <th scope="col">CHANGE</th>
    </tr>
  </thead>

  <tbody>
  <?php
    include_once "class_mahasiswa.php";
        $mhs1 = new Mahasiswa("0110221336", "Amalia Hasanah", 2021, "TI", 3.8, "Predikat");
        $mhs2 = new Mahasiswa("0110221013", "Putri Rahayu", 2021, "TI", 3.2, "Predikat");
        $mhs3 = new Mahasiswa("0110221212", "Ardiansyah", 2021, "TI", 2.8, "Predikat");
        $mhs4 = new Mahasiswa("0110221066", "Haykal Saputra Joban", 2021, "TI", 3.69, "Predikat");
        $mhs5 = new Mahasiswa("0110221432", "Afifudin", 2021, "TI", 4.0, "Predikat");
        $nilai = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5];
        
        $nomor = 1;

        foreach ($nilai as $mahasiswa) {
          echo '<tr><td>' . $nomor . '</td>';
          echo '<td>' . $mahasiswa->nim . '</td>';
          echo '<td>' . $mahasiswa->nama . '</td>';
          echo '<td>' . $mahasiswa->prodi . '</td>';
          echo '<td>' . $mahasiswa->tahun_angkatan . '</td>';
          echo '<td>' . $mahasiswa->ipk . '</td>';
          echo '<td>' . $mahasiswa->predikat_ipk().'</td>';
          echo '<td> <a><i class="bi bi-eye-fill"></i> <i class="bi bi-pencil-square"></i></a></td>';
        $nomor++;
        }
    ?>
    </tbody>
    </table>


    <div class="row mt-4">
    <div class="col-4">
     <B>Halaman 1 dari 2 halaman</B>
      </div>
      <div class="col-8 justify-content-end d-flex">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><<</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">>></a></li>
        </ul>
      </div>
      </div>

      <div class="row mt-4">
      <h6><b>Lab Pemrograman Web II</b></h6> <p>Dosen : Sirojul Munir S.Si,M.Kom <br>
      STT-NF-Kampus B </p>
      </div>

 <div class="fixed-bottom container">
    <hr>
  
    </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>