<?php
        require 'subscription.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'admin@mail.com' && $password === 'admin') {
        $subscriptions = allSubscriptions();
        // Далі ви можете використовувати $subscriptions для роботи з підписниками
    } else {
        echo "Неправильний email або пароль";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Підключення CSS-стилів та інших ресурсів -->
</head>
<body>
   
    <?php if (isset($subscriptions)): ?>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <span class="navbar-brand">Admin</span>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav px-3 ml-auto">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="/logout.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="container pt-3">
            <h1>My subscribers</h1>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subscriptions as $index => $subscription): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $subscription['name'] ?></td>
                            <td><?= $subscription['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    <?php else: ?>
        
    <?php endif; ?>

    <!-- Підключення скриптів та інших ресурсів -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
