<div class="container mt-5 pt-3 min-vh-100">
    <?php if (empty($sekolah)) : ?>
        <?= '404 Not Found'; ?>
    <?php else : ?>
        <div class="row mt-3 gy-3">
            <?php foreach ($sekolah as $sklh) : ?>
                <div class="col-sm-6 col-lg-3 d-flex justify-content-center">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?= base_url() . $sklh['thumb']; ?>" class="card-img-top" alt="<?= $sklh['nama']; ?>" height="180px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $sklh['nama']; ?></h5>
                            <p class="card-text"><?= $sklh['kota']; ?>, <?= $sklh['provinsi']; ?>.</p>
                            <a href="<?= base_url() . $sklh['link']; ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>