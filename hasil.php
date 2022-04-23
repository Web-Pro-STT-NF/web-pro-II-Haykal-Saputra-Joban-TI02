<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Advanced form elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="admin/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="admin/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <style>
        .satu {
            filter: gray;
            -webkit-filter: grayscale(1);
            -webkit-transition: all .8s ease-in-out;
        }

        .dua {
            filter: none;
            -webkit-filter: grayscale(0);
            /*-webkit-transform: scale(1.01);*/
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card card-default">
                    <?php
                    if (isset($_POST['check'])) {
                        // Input form
                        $tinggi = $_POST['tinggi'] / 100;
                        $berat = $_POST['berat'];
                        $nama = $_POST['nama'];
                        $tmp_lahir = $_POST['tmp_lahir'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $email = $_POST['email'];
                        $gender = $_POST['gender'];
                        $nilaibmi = round($berat / ($tinggi * $tinggi), 2);
                        if ($nilaibmi < 18.5) {
                            $statusbmi = "Kekurangan Bobot";
                        } elseif ($nilaibmi < 23.9) {
                            $statusbmi = "Sehat";
                        } elseif ($nilaibmi < 26.9) {
                            $statusbmi = "Kelebihan Bobot";
                        } elseif ($nilaibmi < 29.9) {
                            $statusbmi = "Obisitas 1";
                        } elseif ($nilaibmi > 30) {
                            $statusbmi = "Obisitas 2";
                        }
                        $tanggal = date('Y-m-d');
                    ?>
                        <div class="card-header">
                            <center>
                                <h3>BMI anda adalah <span style="color:blue"><?php echo $nilaibmi ?></span></h3>
                            </center>
                        </div>
                        <div class="card-body p-0">

                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "dua";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                    <center><img src="gender/<?php echo $gender ?>-1.png">
                                        <h5>Kekurangan Bobot <br>
                                            < 18.5</h5>
                                    </center>
                                </div>
                                <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "dua";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                    <center><img src="gender/<?php echo $gender ?>-2.png">
                                        <h5>Sehat <br>18.5 - 23.9</h5>
                                    </center>
                                </div>
                                <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "dua";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                    <center><img src="gender/<?php echo $gender ?>-3.png">
                                        <h5>Kelebihan Bobot <br>24 - 26.9</h5>
                                    </center>
                                </div>
                                <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "dua";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                    <center><img src="gender/<?php echo $gender ?>-4.png">
                                        <h5>Obesitas 1<br>27 - 29.9</h5>
                                    </center>
                                </div>
                                <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "dua";
                                }
                                ?>">
                                    <center><img src="gender/<?php echo $gender ?>-5.png">
                                        <h5>Obesitas 2<br>30 > </h5>
                                    </center>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="admin/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="admin/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="admin/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
</body>

</html>