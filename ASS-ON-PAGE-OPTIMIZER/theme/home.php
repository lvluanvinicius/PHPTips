<?php $v->layout("_theme"); ?>
<div class="users">
    <?php if ($users):
        foreach ($users as $user):
            ?>
        <article class="users_user">
            <h3><?= $user->name, " | ", $user->email;?></h3>
        </article>
        <?php
        endforeach;
        else:
            ?>
        <h4>Não existem usuários cadastrados!</h4>
        <p>Um novo parágrafo está escrito aqui para ajudar no desenvolvimento do mvc!</p>
    <?php endif; ?>
</div>