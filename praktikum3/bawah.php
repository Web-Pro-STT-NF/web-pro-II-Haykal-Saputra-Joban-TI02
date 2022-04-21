<body>
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
                <form method="POST" action="home.php">
                    <div class="form-group row ">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
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
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label>
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3 pb-3">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br>

        <?php
        include_once 'libfungsi.php';
        $proses = isset($_POST['proses']) ? $_POST['proses'] : "";
        $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : "";
        $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : "";
        $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
        $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
        $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : "";

        echo "Nama : $nama_siswa";
        echo "<br/>Mata Kuliah : $mata_kuliah";
        echo "<br/>Nilai UTS : $nilai_uts";
        echo "<br/>Nilai UAS : $nilai_uas";
        echo "<br/>Nilai Tugas : $nilai_tugas";

        $nilai_akhir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
        $grade_nilai = grade_nilai($nilai_akhir);
        echo "<br/>Nilai Akhir : $nilai_akhir";
        echo "<br/>Status : ", kelulusan($nilai_akhir);
        echo "<br/>Grade : ", $grade_nilai;
        echo "<br/>Predikat :", predikat_nilai($grade_nilai);
        ?>
    </div>
</body>

</html>