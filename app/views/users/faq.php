<?php require_once APPROOT.'/views/inc/header.php'; ?>
<h2 class="faq-title">よくあるご質問</h2>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol viewBox="0 0 24 24" id="expand-more">
            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
        </symbol>
        <symbol viewBox="0 0 24 24" id="close">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
        </symbol>
    </svg>
</div>

<details open>
    <summary>
        Does this product have what I need?
        <svg class="control-icon control-icon-expand" width="12" height="12" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="12" height="12" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>No. You just spent 200quid on a product that was developed in 5 hours by 2 monkeys. You really thought you're going to be rich? Man you thought... </p>
</details>

<details>

    <summary>
        Can I use it all the time?
        <svg class="control-icon control-icon-expand" width="12" height="12" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="12" height="12" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>No. We will not let you. You thought this is legit thing??</p>
</details>

<details>
    <summary>
        Are there any restrictions?
        <svg class="control-icon control-icon-expand" width="12" height="12" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="12" height="12" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Yes. You can't post anime or talk bad about moderators. We take our job very seriously. </p>
</details>







<?php require_once APPROOT.'/views/inc/footer.php'; ?>
