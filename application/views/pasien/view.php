        
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
                        <h1 class="mt-4">Data Lengkap Pasien</h1>
                        <ol class="breadcrumb mb-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $pasien->kode ?></td>
                                        <td><?php echo $pasien->nama ?></td>
                                        <td><?php echo $pasien->gender ?></td>
                                        <td><?php echo $pasien->tmp_lahir ?></td>
                                        <td><?php echo $pasien->tgl_lahir ?></td>
                                        <td><?php echo $pasien->email ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ol>
                    </div>
                       
                </main>