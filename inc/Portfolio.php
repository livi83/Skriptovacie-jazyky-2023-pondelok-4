<?php
    class Portfolio{
        public $portfolio_num;

        function get_portfolio($portfolio_num){
            //1 4..5,8..9,12,..13,16          
            for ($i=1;$i<=$portfolio_num;$i++){
                if($i%4==1){
                    echo '<div class="row">';
                    echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
                    echo 'Web stránka '.$i;
                    echo '</div>';
                }
                elseif($i%4==0){
                    echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
                    echo 'Web stránka '.$i;
                    echo '</div>';
                    echo '</div>';
                }
                else{
                echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
                echo 'Web stránka '.$i;
                echo '</div>';
                }
            }
        }
    }
    $Portfolio = new Portfolio();
?>