<div class="container-lg mt-5 py-5">
    <div class="row">
        <div class="col-lg-9">
            <div id="deskripsi">
                <img src="<?= base_url() . $sekolah['thumb']; ?>" alt="<?= $sekolah['nama']; ?>" class="img-fluid border border-3 border-primary rounded-3">
                <div class="py-3">
                    <h1 class="fw-bold text-center display-3"><?= $sekolah['nama']; ?></h1>
                    <div class="pt-5" id="profil">
                        <h2 class="fw-bold border-bottom border-primary pb-2 w-50">Profil</h2>
                        <ul class="list-unstyled ps-2 ps-md-4">
                            <li id="identitas">
                                <h3 class="fw-bold fs-5 my-3">Identitas Sekolah</h3>
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Nama Sekolah</td>
                                        <td>:</td>
                                        <td class="text-break"><?= $sekolah['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Akreditas</td>
                                        <td>:</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td class="text-break">Jl. Kedungbaya Desa Kalitimbang Cibeber Cilegon, Kota Cilegon, Banten</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>:</td>
                                        <td class="text-break"><a href="http://www.smkn1cilegon.sch.id" target="_blank" rel="noopener noreferrer">http://www.smkn1cilegon.sch.id</a></td>
                                    </tr>

                                </table>
                            </li>
                            <li id="jurusan">
                                <h3 class="fw-bold fs-5 my-3">Program Keahlian</h3>
                                <ol>
                                    <li>Jurusan 1</li>
                                    <li>Jurusan 2</li>
                                    <li>Jurusan 3</li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-5 d-none d-lg-block" id="transportasi">
                <h2 class="fw-bold border-bottom border-primary pb-2 w-50 mb-3">Transportasi</h2>
                <ul>
                    <li>Transportasi 1</li>
                    <li>Transportasi 2</li>
                    <li>Transportasi 3</li>
                </ul>
            </div>
        </div>
        <div class="navigator fixed-bottom d-lg-none bg-primary border-top text-white">
            <div class="row py-1 px-3 align-items-center justify-content-between fs-1 text-center">
                <div class="col">
                    <div class="row" id="des-button">
                        <div class="col-12"><i class="bi bi-text-center"></i></div>
                        <div class="col-12">
                            <p class="small">Deskripsi</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mx-auto grab bg-white rounded-circle"></div> <!-- Grab Icon -->
                </div>
                <div class="col">
                    <div class="row" id="trans-button">
                        <div class="col-12"><i class="bi bi-info-circle"></i></div>
                        <div class="col-12">
                            <p class="small">Transportasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 px-3 border-start sidebar sticky-top d-none d-lg-block">
            <h2 class="fw-bold">Go to ...</h2>
            <ul>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#transportasi">Transportasi</a></li>
            </ul>
        </div>
    </div>


</div>