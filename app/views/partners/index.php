<?php require_once APPROOT.'/views/inc/header.php'; ?>
<div class="partner-title">
<h1 class="partner-text"><?php echo $data['title'];?></h1>
    <button id="theButton">Manage Manga</button>
    <button id="theButton2">Manage Hentai</button>

    <div class="dropdown">
        <button id="theButton3">Dropdown</button>
        <div class="dropdown-content">
            <button onclick="filter('*')" class="valik-kook">Kõik</button>
            <button onclick="filter('magus')" class="valik-kook">Magus</button>
            <button onclick="filter('soolane')" class="valik-kook">Soolane</button>
        </div>
    </div>
</div>

<div class="form-div">
    <h2 class="delete-firm-title"> Delete Firm</h2>
    <h5 class="delete-firm-text">This form was made to fulfill a someones desire to delete a firm. We don't know what kind of psychopath would think or want something like that but this is cruel and evil and what the fuck as wrong with you there firms worked had to be on that list and now you're just turning on god mode?? Grow up you dipshit</h5>

    <form method="post" action="<?php echo URLROOT.'/partners/delete'?>">

    <div class="audio-m">
        <label for="firm-name">Firms Name<sup>*</sup></label>
        <input type="text" class="text-line" id="firm-name" name="firm-name" placeholder="firm-name" >
    </div>

    <div class="audio-m">
        <label for="firm-id">Firms ID<sup>*</sup></label>
        <input type="text" class="text-line" id="firm-id" name="firm-id" placeholder="firm-id" >
    </div>

    <input type="submit"  class="sabmit" value="Delete firm">
    <input type="button"  onclick="window.location='https://tenor.com/view/obama-location-run-hulk-gif-15164161';" class="sabmit" value="Free Robux">

    </form>
</div>

<!-- Add firm form from  here-->

<div class="form2-div">
    <h2 class="add-firm-title"> Add Firm</h2>
    <h5 class="add-firm-text"> Congratulations sailor you've made it to the realm of rich. This form was created with a purpose to serv its master and help him/her get rich and free as fast as possible. Break the system, choose the blue pill and let the reality welcome you to the world of rich and wicked. All you need from now on is courage and wisdom. </h5>


    <form method="post" action="<?php echo URLROOT.'/partners/add'?>">

        <div class="audio-m">
            <label for="firm-name">Firms Name<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-name" name="firm-name" placeholder="firm-name" >
        </div>

        <div class="audio-m">
            <label for="firm-location">Location<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-location" name="firm-location" placeholder="firm-location" >
        </div>

        <div class="audio-m">
            <label for="firm-grouping">Grouping<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-grouping" name="firm-grouping" placeholder="firm-grouping" >
        </div>

        <div class="audio-m">
            <label for="firm-speciality">Speciality<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-specialty" name="firm-specialty" placeholder="firm-specialty" >
        </div>


        <div class="audio-m">
            <label for="firm-phone">Phone<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-phone" name="firm-phone" placeholder="firm-phone" >
        </div>


        <div class="audio-m">
            <label for="firm-mail">Email<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-mail" name="firm-mail" placeholder="firm-mail" >
        </div>

        <div class="audio-m">
            <label for="firm-vat">VAT Code<sup>*</sup></label>
            <input type="text" class="text-line" id="firm-vat" name="firm-vat" placeholder="firm-vat" >
        </div>

        <input type="submit"  class="sabmit" value="Add firm">
        <input type="button"  onclick="window.location='https://www.youtube.com/watch?v=dQw4w9WgXcQ';" class="sabmit" value="Accept the Red pill">


    </form>
</div>


<!--Tabel-->
    <table >
        <thead>
        <tr>
            <th>nr</th>
            <th>Nimi</th>
            <th>Asukoht</th>
            <th>Grupp</th>
            <th>Eriala</th>
            <th>telefon</th>
            <th>e-post</th>
            <th>Registri kood</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['partners'] as $partner):?>
        <tr>
            <th><?php echo $partner->firma_id;?></th>
            <td><?php echo $partner->nimi;?></td>
            <td><?php echo $partner->asukoht;?></td>
            <td><?php echo $partner->grupp;?></td>
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