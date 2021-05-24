
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="Pcbpasien">
                                Hitung BMI
                            </a>
                            <a class="nav-link" href="Pasien">
                                Pasien Terdaftar
                            </a>
                            <a class="nav-link" href="Bmipasien">
                                Hasil Hitung BMI
                            </a>
                            
                           
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Pasien Terdaftar</h1>
                        <ol class="breadcrumb mb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th><th>Kode</th><th>Nama</th><th>Gender</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $nomer = 0;
                                    foreach($list_pasien as $pasien) {
                                ?>
                                    <tr>
                                        <td><?= $nomer+1 ?></td>
                                        <td><?= $pasien->kode?></td>
                                        <td><?= $pasien->nama?></td>
                                        <td><?= $pasien->gender?></td>
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
               