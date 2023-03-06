<?php
include('partials/header.php');
?>
<main>
    <?php
        include('partials/banner.php');
        include('partials/quote.php');
    ?>
    <section class="container">
        <?php
            portfolio();
        ?>       
    </section>
</main>
<?php
include('partials/footer.php');
?>