<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="field">
            <label class="label" for="title">Email</label>
            <div class="control">
                <input id="email" class="input" type="text" placeholder="Email" name="email" value="<?= $user->email ?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Password</label>
            <div class="control">
                <textarea id="password" class="textarea" placeholder="******" name="password"><?= $user->password ?></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Update">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>