<?php $v->layout("_theme"); ?>
<div class="error" style="text-align: center">
    <h2>Ooooops erro <?= $error ?>!</h2>
    <p style="color: red; font-weight: 900">Seu erro será reportado!</p>
</div>

<?php $v->start("sidebar"); ?>
<a href="<?=url()?>" >Valtar</a>
<?php $v->end(); ?>
