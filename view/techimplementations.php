<?php
include __DIR__ . '/../view/partial/head.php';
include __DIR__ . '/../view/partial/header.php';
?>
<!-- First Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">These are some of my projects!</h3>
    <div class="row">
        <div class="col-sm-4" data-toggle="tooltip" 
             title="Use of Node.js with other  modules to produce a live multi player asteroids game">
            
            <h2>Asteroidanon</h2>
            <a href="https://asteroidanon.herokuapp.com">
                <img src="/image/game-console.png" class="img-center-block" alt="game-console Image">
            </a>
        </div>
        <div class="col-sm-4" data-toggle="tooltip" 
             title="Google Slides presentation overviewing a recomendation of improvement to the online educational environment of BYU-I">
            <h2>Recommendation Report</h2>
            <a href="https://docs.google.com/presentation/d/1plPxi5KgPZy6xTWlZuz51Zg36i_dqFQtypJuotQB0qM/edit?usp=sharing">
                <img src="/image/edit-tools.png" class="img-center-block" style="" alt="Edit Tools Image">
            </a>
        </div>
        <div class="col-sm-4" data-toggle="tooltip" 
             title="Human Interface Design Project including design documentation and implementation">
            <h2>Human Interface Design Project</h2>
            <a href="/view/hidp_head.php">
                <img src="/image/edit-tools.png" class="img-center-block" style="" alt="Edit Tools Image">
            </a>
        </div>
    </div>
</div>

<?php 
include __DIR__ . '/../view/partial/navbar.php';
include __DIR__ . '/../view/partial/footer.php';
