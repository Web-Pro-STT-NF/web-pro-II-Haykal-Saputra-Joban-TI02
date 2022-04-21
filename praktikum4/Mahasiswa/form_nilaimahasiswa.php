<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Nilai</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

        * {
            font-family: 'Josefin Sans', sans-serif;
        }

        #tengah {
            text-align: center;
        }
    </style>
</head>

<body><br><br>
    <div class="container card">
        <div class="row bg-light pt-3 fs-6">
            <div class="col-12" id="tengah">Sistem Penilaian</div>
        </div>
        <div class="row fs-4">
            <div class="col-12" id="tengah">Form Nilai Siswa
                <hr>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <form method="POST" action="">
                    <div class="form-group row ">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="Isi NIM anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Jaringan Komputer">Jaringan komputer</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman Web II">Pemrograman Web II</option>
                                <option value="PPKN">PPKN</option>
                                <option value="Bahasa inggris">Bahasa inggris</option>
                                <option value="Stastik & Probabilitas">Stastik & probabilitas</option>
                                <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                                <option value="UX & UX">UI & UX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nilai" class="col-4 col-form-label">Nilai</label>
                        <div class="col-8">
                            <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3 pb-3">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br>

        <div class="row">
            <hr>
        </div>
        <div class="row ms-3">

            <?php
            require_once "class_nilaimahasiswa.php";
            if (isset($_POST['proses'])) {
                $proses = $_POST['proses'];
                $nim = $_POST['nim'];
                $matkul = $_POST['matkul'];
                $nilai = $_POST['nilai'];
                $nilai_mahasiswa = new NilaiMahasiswa($nim, $matkul, $nilai);
                echo "NIM : " . $nim;
                echo "<br>Nama Mata Kuliah : " . $matkul;
                echo "<br>Nilai : " . $nilai;

                $hasil_ujian = $nilai_mahasiswa->nilai($nilai);
                echo "<br>Hasil Ujian : $hasil_ujian <br>";

                $hasil_grade = $nilai_mahasiswa->grade($nilai);
                echo "Grade : $hasil_grade";
            }
            ?>
        </div>
        <div class="row">
            <?php
            if (isset($_POST['proses'])) {
                echo '<hr class="mt-5 ms-0";>';
            }
            ?>
        </div>
    </div>
</body>

</html>