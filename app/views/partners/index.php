<?php require_once APPROOT.'/views/inc/header.php'; ?>
<?php
echo '<pre>';
print_r($data);
?>
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
        <tr>
            <th scope="row">1</th>
            <td>Joe Mama</td>
            <td>1600 Pennsylvania, Washington, D.C.</td>
            <td>Koogid</td>
            <td>53475623</td>
            <td>joe@mama.com</td>
            <td>EE4932382</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Michael's Meathouse</td>
            <td>P. Sherman, 42 Wallaby Way, Sydney</td>
            <td>Lihatooted</td>
            <td>+61 7845 6273</td>
            <td>michael@localhost</td>
            <td>ABN89493238237</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Jackson's Pastries</td>
            <td>92 Avenue Paul Doumer, 75016 Paris, France</td>
            <td>Pagaritooted</td>
            <td>202-456-1111</td>
            <td>comments@whitehouse.gov</td>
            <td>DE999999999</td>
        </tr>
        </tbody>
    </table>
<!--Tabel-->
<?php require_once APPROOT.'/views/inc/footer.php'; ?>