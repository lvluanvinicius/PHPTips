<article class="users_user">
    <h3><?= "{$user->name}" ?></h3>
    <a class="remove" href="#" data-action="<?= $router->route("Form.delete");?>" data-id="<?= $user->id; ?>">Deletar</a>
</article>