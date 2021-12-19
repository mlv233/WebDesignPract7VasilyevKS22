<?php
session_start();

$isRestricted = false;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<section>
    <div class="container">
        <?php if($isRestricted === false) : ?>
            <h3>Login</h3>
            <form class="card-panel" action="auth.php" method="post">
                <div class="row">
                    <div class="field">
                        <label>Email: <input type="email" name="email"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="field">
                        <label>Password: <input type="password" name="password"><br></label>
                    </div>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
        <?php else :?>
            <div class="logout">
                <h3>Log<span class="teal-text">out</span></h3>
                <a class="btn" href="logout.php">Logout</a>
            </div>
        <?php endif;?>
    </div>
</section>

<style>
    section {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .container {
        width: 25%;
    }

    .logout {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 2rem;
    }
</style>
