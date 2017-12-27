<?php
include __DIR__ . '/../view/partial/head.php';
include __DIR__ . '/../view/partial/header.php';
?>
<!-- First Container -->
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">These are some the my projects!</h3>
    <div class="row">
        <div class="col-sm-4">
            <h2>Asteroidanon</h2>
            <a href="https://asteroidanon.herokuapp.com">
                <img src="/image/game-console.png" class="img-center-block" alt="game-console Image">
            </a>
        </div>
        <div class="col-sm-4">
            <h2>Recommendation Report</h2>
            <a href="/view/interests.php">
                <img src="/image/dice.png" class="img-center-block" style="" alt="Image">
            </a>
        </div>
        <div class="col-sm-4">
            <h2>Get Connected</h2>
            <a href="/view/connect.php">
                <img src="/image/pen.png" class="img-center-block" alt="Image">
            </a>
        </div>
    </div>
</div>

<?php 
include __DIR__ . '/../view/partial/navbar.php';
include __DIR__ . '/../view/partial/footer.php';
