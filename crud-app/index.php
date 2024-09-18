<?php include 'php/read.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Devin's CRUD Website</h1>
    <form action="php/create.php" method="POST">
        <input type="text" name="name" placeholder="Enter name" required>
        <input type="email" name="email" placeholder="Enter email" required>
        <button class="create" type="submit">Create User</button>
    </form>
    <table class="table-bordered" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Changes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <form action="php/update.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            <input class="updatename" type="text" name="name" value="<?= $user['name']; ?>">
                            <input class="updateemail" type="email" name="email" value="<?= $user['email']; ?>">
                            <button class="update" type="submit" name="update">Update</button>
                        </form>
                        <form action="php/delete.php" method="GET" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            <button class="delete" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>