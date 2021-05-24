
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
                </div>                
            </div>               
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Hitung BMI</h1><br><br>

                    <form action="Bmipasien" method="POST">
  
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-auto">
                              <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="" placeholder="" name="nama">
                              
                              </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-auto">                         
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa fa-anchor" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="" placeholder="" name="beratbadan">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Kg</div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-auto">                           
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="" placeholder="" name="tinggibadan">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">cm</div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Usia</label>
                            <div class="col-auto">                           
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa fa-hourglass-end" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="" placeholder="" name="usia">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Thn</div>
                                </div>
                              </div>
                            </div>
                        </div>


                        <fieldset class="form-group row">
                            <legend class="col-form-label col-sm-2 float-sm-left pt-0" name="jeniskelamin">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                              <div class="form-check form-check-inline" name="jenis kelamin">
                                <input class="form-check-input" type="radio"  id="" value="laki" name="jeniskelamin" >
                                <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"  id="" value="perempuan"  name="jeniskelamin">
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                              </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-auto">                          
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <button type="submit" class="btn btn-primary btn-sm btn-block">Simpan Data</button>
                                </div>  
                              </div>
                            </div>
                        </div>
                    </form>
            </div>                                           
        </main>
    </div>
</div>
               