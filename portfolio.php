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
            //portfolio();
            $Portfolio->get_portfolio(8);
        ?>       
    </section>
</main>
<?php
include('partials/footer.php');
?>