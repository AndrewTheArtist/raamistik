<?php require_once APPROOT.'/views/inc/header.php'; ?>

<div id="registration-login-form">
    <div class="fieldset">
            <div class="card-header">
                <?php message('register_success');?>
                <legend>スポンジマンアイスコーン</legend>
                <p class="message">Please fill the fields to log in</p>
            </div>

                <form  method="post" action="<?php echo URLROOT.'/users/login'?>">

                    <div class="audio-m">
                        <label for="email">Email<sup>*</sup></label>
                        <input type="text" class="text-line <?php echo(!empty($data['email_err'])) ? 'is-invalid' : '';?>" id="email" name="email" placeholder="Email" value="<?php echo $data['email'];?>">
                        <span ><?php echo $data['email_err'];?></span>
                    </div>


                    <div class="audio-m">
                        <label for="password">Password<sup>*</sup></label>
                        <input type="password" class="text-line <?php echo(!empty($data['password_err'])) ? 'is-invalid' : '';?>" id="password" name="password" placeholder="Password" value="<?php echo $data['password'];?>">
                        <span ><?php echo $data['password_err'];?></span>
                    </div>
                    <input type="submit"  class="sabmit" value="ログインする">

                </form>
    </div>
</div>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>
