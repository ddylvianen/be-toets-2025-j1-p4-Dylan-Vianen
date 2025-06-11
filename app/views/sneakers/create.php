
<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class="mb-4 fw-bold text-warning">
                <?= $data['title']; ?>
            </h3>
            <form action="<?= URLROOT; ?>/sneakers/create" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" name="merk" id="merk" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" name="model" id="model" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" id="type" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input type="number" name="prijs" id="prijs" class="form-control" step="0.01" min="0" required>
                </div>
                <div class="d-grid mt-4 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Verstuur</button>
                </div>
            </form>
            <a href="<?= URLROOT; ?>/sneakers/index" class="btn btn-link ps-0">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>