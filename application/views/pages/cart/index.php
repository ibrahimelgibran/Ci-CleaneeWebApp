<div class="container">
    <div class="row justify-content-center mt-3 mb-5">
        <div class="col-lg-8">
        
            <div class="card">
                <div class="card-header text-center bg-dark text-light">
                    <h4><strong>Keranjang Anda</strong></h4>
                </div>
                <div class="card-body">
                    
                    <!-- Alert -->
                    <?php $this->load->view('layouts/_alert') ?>
                    <!-- Alert -->

                    <!-- Jika cart kosong -->
                    <?php if(empty($product)) : ?>
                        <div class="alert alert-warning" role="alert">
                            Oops, keranjang Anda kosong.
                        </div>
                    <?php else : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Paket</th>
                                        <th>Subtotal</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($product as $p) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td class="align-middle">
                                                <img src="<?= base_url('/images/game/' . $p['image']) ?>" class="img-fluid" style="max-width:100px; height:auto;">
                                            </td>
                                            <td class="align-middle">Rp. <?= number_format($p['subtotal'], 2, ', ', '.') ?></td>
                                            <td class="align-middle">
                                                <a class="btn btn-danger btn-sm" href="<?= base_url('cart/delete/' . $p['id']) ?>">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <!-- Total -->
                                <tr class="bg-success text-light">
                                    <td colspan="3" class="text-left"><strong>Total:</strong></td>
                                    <td><strong>Rp. <?= number_format(array_sum(array_column($product, 'subtotal')), 2, ', ', '.') ?></strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endif ?>

                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <?php if($product) : ?>
                        <a href="<?= base_url('checkout') ?>" class="btn btn-info btn-sm float-right">
                            Bayar sekarang <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</div>
