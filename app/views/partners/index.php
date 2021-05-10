<?php require_once APPROOT.'/views/inc/header.php'; ?>
<h1><?php echo $data['title'];?></h1>
<!--Tabel-->
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">nr</th>
            <th scope="col">Nimi</th>
            <th scope="col">Asukoht</th>
            <th scope="col">Eriala</th>
            <th scope="col">telefon</th>
            <th scope="col">e-post</th>
            <th scope="col">Registri kood</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['partners'] as $partner):?>
        <tr>
            <th scope="row"><?php echo $partner->firma_id;?></th>
            <td><?php echo $partner->nimi;?></td>
            <td><?php echo $partner->asukoht;?></td>
            <td><?php echo $partner->eriala;?></td>
            <td><?php echo $partner->telefon;?></td>
            <td><?php echo $partner->epost;?></td>
            <td><?php echo $partner->vat;?></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<!--Tabel-->
<?php require_once APPROOT.'/views/inc/footer.php'; ?>