<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-success text-begin"><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
             <a class="btn btn-outline-success" href="<?= URLROOT; ?>/zangeressen/create" role="button">Nieuwe zangeres</a>
        </div>
        <div class="col-1"></div>
    </div>
   


    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Nettowaarde</th>
                        <th scope="col">Land</th>
                        <th scope="col">Mobiel</th>
                        <th scope="col">Leeftijd</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['zangeressen'] as $zangeres) : ?>
                        <tr>
                            <td><?= $zangeres->Naam; ?></td>
                            <td><?= $zangeres->Nettowaarde; ?></td>
                            <td><?= $zangeres->Land; ?></td>
                            <td><?= $zangeres->Mobiel; ?></td>
                            <td><?= $zangeres->Leeftijd ?></td>
                            <td>
                                <a href="<?= URLROOT;?>/zangeressen/update/<?= $zangeres->Id; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a href="<?= URLROOT;?>/zangeressen/delete/<?= $zangeres->Id; ?>">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">terug</a>
        </div>
        <div class="col-1"></div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>