<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-success"><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <a class="btn btn-warning" href="<?= URLROOT; ?>/sneakers/create" role="button">Nieuwe sneaker</a>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Type</th>
                        <th scope="col">Prijs</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['sneakers'] as $sneaker): ?>
                        <tr>
                            <td><?= htmlspecialchars($sneaker->Merk); ?></td>
                            <td><?= htmlspecialchars($sneaker->Model); ?></td>
                            <td><?= htmlspecialchars($sneaker->Type); ?></td>
                            <td>&euro; <?= number_format($sneaker->Prijs, 2, ',', '.'); ?></td>
                            <td>
                                <a href="<?= URLROOT; ?>/sneakers/delete/<?= $sneaker->Id; ?>">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index" class="btn btn-link ps-0">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>