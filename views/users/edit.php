<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <h1 class="is-size-1">Edit User</h1>

    <form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="text" placeholder="Title" name="email" id="email" value="<?=$user->email?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input class="input" placeholder="Name..." name="name" id="name" value="<?=$user->name?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input class="input" placeholder="password..." name="password" id="password" value="<?=$user->password?>">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ .  '/../partials/footer.php'; ?>