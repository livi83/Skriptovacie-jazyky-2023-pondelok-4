<?php
include('partials/header.php');
?>
<main>
    <section class="banner">
        <div class="container text-white">
            <h1>Portfólio</h1>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <?php
                for($i=1;$i<5;$i++){
                    
                    echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
                    echo 'Web stránka '.$i;
                    echo '</div>';  
                }        
            ?>
        </div>
        <div class="row">
            <?php
                for($i=5;$i<9;$i++){
                    echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
                    echo 'Web stránka '.$i;
                    echo '</div>';  
                }        
            ?>
        </div>
    </section>

</main>
<?php
include('partials/footer.php');
?>