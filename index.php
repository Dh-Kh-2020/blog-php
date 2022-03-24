<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('components/head.php'); ?>
        <title>Clean Blog - PHP OOP</title>
    </head>
    <body>
        <!-- Navigation-->
        <?php include_once('components/nav.php') ?>
        <!-- /Navigation-->
        
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog by PHP OOP</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->

                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                            <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="">Start Bootstrap</a>
                            on September 24, 2021
                        </p>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                    
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="">read more →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include_once('components/footer.php'); ?>
        <!-- /Footer-->
        
        <!-- Scripts -->
        <?php include_once('components/scripts.php'); ?>
        <!-- /Scripts -->
    </body>
</html>
