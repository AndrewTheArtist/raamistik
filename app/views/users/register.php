<?php require_once APPROOT.'/views/inc/header.php'; ?>



<div id="registration-login-form">
    <div class='fieldset'>
        <legend>あなたのママのオフィス</legend>
        <p class="message">Please fill the fields to register</p>
        <form action="#" method="post" data-validate="parsley">

            <div class='audio-m'>
                <label  for='name'>First Name<sup>*</sup></label>
                <input type="text" <?php echo(!empty($data['name_err'])) ? 'is-invalid' : '';?>  placeholder="Full Name" class="text-line" name='name' id='name' value="<?php echo $data['name'];?>">
                <span><?php echo $data['name_err'];?></span>
            </div>



            <div class='audio-m'>
                <label for="email">E-mail<sup>*</sup></label>
                <input type="text" <?php echo(!empty($data['email_err'])) ? 'is-invalid' : '';?> id="email" name="email" class="text-line" placeholder="Email" value="<?php echo $data['email'];?>">
                <span><?php echo $data['email_err'];?></span>
            </div>


            <div class='audio-m'>
                <label for="password">Password<sup>*</sup></label>
                <input type="password" <?php echo(!empty($data['password_err'])) ? 'is-invalid' : '';?> id="password" name="password" class="text-line" placeholder="Password" value="<?php echo $data['password'];?>">
                <span><?php echo $data['password_err'];?></span>
            </div>


            <div class='audio-m'>
                <label for="password">Password<sup>*</sup></label>
                <input type="password" <?php echo(!empty($data['confirm_password_err'])) ? 'is-invalid' : '';?> id="confirm_password" class="text-line" name="confirm_password" placeholder="Confirm Password" value="<?php echo $data['confirm_password'];?>">
                <span><?php echo $data['confirm_password_err'];?></span>
            </div>

            <input type="submit"  class="sabmit" value="登録">
        </form>
    </div>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>
