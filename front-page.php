

<?php get_header(); ?>
 
    <div class="main">
        <div class="tittle">
            <h1 id="t">Shiicreer</h1>
            <img src="<?php bloginfo('template_url'); ?>/img/top.jpg" alt="トップ画像" class="topimg">
        </div>

        <div class="consept">
            <div class="direction">
                <span class="circle">
                    <img src="<?php bloginfo('template_url'); ?>/img/pen-2@48x48.png" alt="" class="dirimg">
                </span>

                <br>
                <span>ディレクション</span>
                <br>
                <br>
                <p>お客様の要望をヒアリングし<br>
                    デザインに入る前の事前準備を行います<br>
                    何が必要で何が必要でないのかを判断し<br>
                    デザインを作るための土台を作ります
                    </p>
            </div>

            <div class="desing">
                <span class="circle">
                    <img src="<?php bloginfo('template_url'); ?>/img/streamline-icon-interface-lighting-light-bulb-on@48x48.png" alt="" class="deimg">
                </span>

                <br>
                <span>デザイン</span>
                <br>
                <br>
                <p>ご希望に合わせて<br>
                   ・   webデザイン<br>
                   ・  バナーデザイン<br>
                   ・  ロゴデザイン<br>
                   ・  名刺デザイン<br>
                   ・  線画によるイラスト<br>
                   を作成していきます。
                </p>
            </div>

            <div class="coding">
                <span class="circle">
                    <img src="<?php bloginfo('template_url'); ?>/img/streamline-icon-computer-screen-1@48x48.png" alt="" class="coimg">
                </span>

                <br>
                <span>コーディング</span>
                <br>
                <br>
                <p>
                    デザインを元に<br>
                    動きのあるサイトを作成します<br>
                    PC  モバイル対応
                </p>
            </div>

        </div>
        

        
        
        <div class="about">
            <span class="circle3"></span>

            <h2 id="1">about</h2>
            <div class="profile">
                <p class="pro">
                    name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  shiicreer<br><br>
                    from &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  hiroshima<br><br>
                    skill &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; html&nbsp; css&nbsp; wordpress&nbsp; javascript
                </p>
            </div>
        </div>

            <div class="syo">
                <p class="syousai">
                    webデザインからコーディングまで作成します<br>
                    チラシや名刺デザイン 線画イラストも承り中<br>
                    シンプルながらセンスを感じるデザインが好きです<br>
                    ご要望にお応えしたいので、たくさんお話を聞かせてください<br>
                    もちろんお任せでもかまいません<br>
                    ご連絡はInstagramのDMにてお待ちしております。
                </p>

                <span class="circle2"></span>
            </div>
        
<!--newsコンテンツの内容------------------------------------------------>
<div class="news__content">

    <h2 id="n">news</h2>
	<!--1記事-->
    <a href="">
                        <!--表示件数を設定-->
                <?php
                // 指定したカテゴリーの ID を取得
                $category_id = get_cat_ID('News');
                // このカテゴリーの URL を取得(ニュース一覧はこちら用のリンク)
                $category_link = get_category_link($category_id);
                // 指定した記事のみ取得
                query_posts([
                    'posts_per_page' => 3,
                    'cat' => $category_id,
                ]);
                ?>
                <?php
                if (have_posts()) : //記事があるか判定
                    while (have_posts()) : //記事一覧を取得するループを開始
                        the_post(); //ループ中、次の記事に進みます
                ?>
                        <a href="<?php the_permalink(); ?>">
                            <!--1記事-->
                            <div class="news__items">
                                <!--記事の投稿日-->
                                <div class="news__item news__date">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </div>
                                <!--記事のタイトル-->
                                <div class="news__item news__title">
                                    <?php the_title(); ?>
                                </div>
                                <!--デザイン右の矢印-->
                                <div class="news__item news__anchor">
                                    →
                                </div>
                            </div>
        </a>
<?php
    endwhile;
endif;
?>
    </a>
    <div class="news__button">

        <a href="<?php echo esc_url($category_link); ?>" class="a__btn">ニュース一覧はこちら</a>
    </div>
</div>
















    <div class="work">
        <h2 id="2">work</h2>

            <div class="img">
                <div class="act">
                    <img src="<?php bloginfo('template_url'); ?>/img/yaki.jpg" alt="焼き鳥やげん" class="yaki">
                    <img src="<?php bloginfo('template_url'); ?>/img/ortensia.jpg" alt="オルテンシア" class="orten">
                </div>

                <div class="btnbox">
                    <a href="http://localhost/wp_shiicreer/wordpress/index.php/work/" >
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
            </div>

    </div>


    

    <div class="contact">
        <h2 id="3">contact</h2>

        <span class="circle4"></span>

        <div class="con">
            <a href="https://www.instagram.com/shiicreer">
                <img src="<?php bloginfo('template_url'); ?>/img/icons8-インスタグラム-100.png" alt="インスタ" class="insta" >
                
            </a>


        <!--------------------------Contactブロック---------------------------->


            <div id="contact" class="contact content__items">
                <!--コンテンツのインナー-->
                <div class="content__inner">
                    

                        <div class="contect__button">
                            
                            <a class="" href="http://localhost/wp_shiicreer/wordpress/index.php/contact/">
                            <img src="<?php bloginfo('template_url'); ?>/img/streamline-icon-mail-send-envelope@100x100.PNG" alt="インスタ" class="mail" >
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
        


        <div class="tmove">         
            <a href="#t">
                <img src="<?php bloginfo('template_url'); ?>/img/trai.jpg" alt="" class="tri">

            </a>
        </div>

        

    </div>

    
<?php get_footer(); ?>