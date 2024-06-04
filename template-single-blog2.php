<?php
/* Template Name: Blog listing Page */ 
get_header();
?>
<main id="primary" class="site-main">
    <section class="hero-section">
        <div class="img-holder">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.png" alt="" class="img-fluid">
            <div class="hero-content d-none d-sm-block">
                <h1>Insights, work approaches, <span>ideas. Read it all.</span></h1>
                <p>The <strong>AFMC Blog</strong>contains insightful articles aiming to educate people on the usefulness <span>of forensic medical coders.</span> </p>
            </div>
        </div>
        
        <div class="container">
        <div class="latest-article">
                <div class="section-block">
                <h2>Latest Article</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article4.png" alt="" class="img-fluid"></div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="latest-article-content">
                        <p class="article-by">by Brendan Cogbill - April 28th, 2024</p>
                        <h2 class="title">The AFMC Credential, What You Need to Know.</h2>
                        <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                        <button class="btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="section-block">
                <h2>Recommended Articles</h2>
            </div>
            <div class="row g-5 rm-articles">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article5.png" alt="" class="img-fluid"></div>
                    <h3 class="rm-articles-subtitle">The AFMC Credential, what you need to know</h3>
                    <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                    <button class="btn">Read Me</button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article6.png" alt="" class="img-fluid"></div>
                    <h3 class="rm-articles-subtitle">The AFMC Credential, what you need to know</h3>
                    <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                    <button class="btn">Read Me</button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article7.png" alt="" class="img-fluid"></div>
                    <h3 class="rm-articles-subtitle">The AFMC Credential, what you need to know</h3>
                    <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                    <button class="btn">Read Me</button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article8.png" alt="" class="img-fluid"></div>
                    <h3 class="rm-articles-subtitle">The AFMC Credential, what you need to know</h3>
                    <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                    <button class="btn">Read Me</button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article9.png" alt="" class="img-fluid"></div>
                    <h3 class="rm-articles-subtitle">The AFMC Credential, what you need to know</h3>
                    <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                    <button class="btn">Read Me</button>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri();?>/assets/img/article10.png" alt="" class="img-fluid"></div>
                    <h3 class="rm-articles-subtitle">The AFMC Credential, what you need to know</h3>
                    <p class="text">Forensic medical coders are unsung heroes in the world of healthcare and legal investigations. Their expertise in medical coding, combined with their analytical skills and attention to detail...</p>
                    <button class="btn">Read Me</button>
                </div>
            </div>
            <div class="section-block text-center">
                <button class="btn">Load More Articles</button>
            </div>
        </div>
    </section>
</div>
</main><!-- #main -->
<?php
get_sidebar();
get_footer();
