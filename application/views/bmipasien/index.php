
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="pcbpasien">
                                Hitung BMI
                            </a>
                            <a class="nav-link" href="pasien">
                                Pasien Terdaftar
                            </a>
                            <a class="nav-link" href="bmipasien">
                                Hasil Hitung BMI
                            </a>
                            
                           
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Hasil Hitung BMI</h1>
                        <ol class="breadcrumb mb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Berat</th>
                                        <th>Tinggi</th>
                                        <th>BMI</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                $nomer = 0;
                                foreach($list_bmipasien as $bmi) {
                            
                                ?>
                                    <tr>
                                        <td><?= $nomer+1?></td>
                                        <td><?= $bmi->tanggal_periksa?></td>
                                        <td><?= $list_pasien[$nomer]->kode?></td> 
                                        <td><?= $list_pasien[$nomer]->nama?></td>
                                        <td><?= $list_pasien[$nomer]->gender?></td>
                                        <td><?= $list_bmi[$nomer]->berat?></td>
                                        <td><?= $list_bmi[$nomer]->tinggi?></td>
                                        <td><?= $list_bmi[$nomer]->nilaiBMI()?></td>
                                        <td><?= $list_bmi[$nomer]->statusBMI()?></td>
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
               