<?php
/*
Template Name: no-sidebar（カスタムテンプレートの名前）
*/
?>


<?php get_header(); ?>



<body>
    
    <main>

       
            <ul>
                <a href="https://yagen.herokuapp.com/"><img src="<?php bloginfo('template_url'); ?>/img/yaki.jpg" alt="焼き鳥やげん" class="yaki"></a>
                <a href="https://ortensia01.herokuapp.com/"><img src="<?php bloginfo('template_url'); ?>/img/ortensia.jpg" alt="オルテンシア" class="oru" ></a>
                <li><a href=""><img src="" alt=""></a></li>
            </ul>


            <ul >
                <li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/cdress.jpg" alt=""></a></li>
                <li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/kiyo.jpg" alt=""></a></li>
                <li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/wed.jpg" alt=""></a></li><br>
            </ul>
            

            <div class="modal">
                <div class="bigimg"><img src="" alt=""></div>
                <p class="close-btn"><a href="">✖</a></p>
            </div>
            
        </div>

        <div class="btnbox">
            <a href="index.html" class="btn btn--orange btn--circle btn--circle-a btn--shadow">
                home
                <img src="<?php bloginfo('template_url'); ?>/img/streamline-icon-interface-edit-pin-3@48x48.png" alt="" class="pin">
            </a>
        </div>
    </main>
    
      
      <!-- modaal js-->        
      <script src="script.js"></script>
      

      <?php get_footer(); ?>
</body>
</html>