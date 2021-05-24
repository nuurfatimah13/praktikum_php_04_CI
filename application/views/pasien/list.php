        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="#">
                                Hitung BMI
                            </a>
                            <a class="nav-link" href="#">
                                Pasien Terdaftar
                            </a>
                            <a class="nav-link" href="#">
                                Hasil Hitung BMI
                            </a>
                            
                           
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">List Pasien</h1>
                        <ol class="breadcrumb mb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $nomer = 0;
                                    foreach($list_pasien as $pasien) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomer+1 ?></td>
                                        <td><?php echo $pasien->kode ?></td>
                                        <td><?php echo $pasien->nama ?></td>
                                        <td><?php echo $pasien->gender ?></td>
                                        <td><?php echo $pasien->tmp_lahir ?></td>
                                        <td><?php echo $pasien->tgl_lahir ?></td>
                                        <td><?php echo $pasien->email ?></td>
                                        <td>
                                        <a href="<?php echo "view/$pasien->id"  ?>">
                                                view
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                $nomer++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </ol>
                    </div>
                       
                </main>