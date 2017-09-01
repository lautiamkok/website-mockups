
<!DOCTYPE html>
<html>
<head>
<title>Deborah Robinson</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/blueimp-gallery.min.css">
<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

<style>
    .container {
        /*border: 1px solid #000 !important;*/
    }

    .col-md-6, .col-md-10, .col-md-2, .col-md-4, .col-md-3, .col-md-9, .col-md-12 {
        /*border: 1px solid red !important;*/
    }

    .col-md-9 {
        /*border: 2px solid black !important;*/
    }

    .col-md-3 {
        /*border: 1px solid blue !important;*/
    }

    .blueimp-gallery {
      background: rgba(0, 0, 0, 0.6);
    }


</style>

<script type="text/javascript">

    // // Use AJAX to get Vimeo thumbnals.
    // $(function() {
    //     console.log( "ready!" );
    //     $( ".vimeo" ).each(function( index ) {
    //         var $this  = this;
    //         $.ajax({
    //             type:'GET',
    //             url: 'http://vimeo.com/api/v2/video/' + this.id + '.json',
    //             jsonp: 'callback',
    //             dataType: 'jsonp',
    //             success: function(data){
    //                 var thumbnail_src = data[0].thumbnail_large;
    //                 console.log(thumbnail_src);
    //             }
    //         });
    //     });
    // });

</script>

<?php
// Use PHP to get Vimeo thumbnals.
function getVimeoThumb($vimeo, $size = 'large') {

    switch ($size) {
        case "medium":
            return $vimeo[0]['thumbnail_medium'];
            break;
        case "small":
            return $vimeo[0]['thumbnail_small'];
            break;
        default:
            return $vimeo[0]['thumbnail_large'];
    }

}

// Use PHP to get Vimeo title.
function getVimeoTitle($vimeo) {

    return $vimeo[0]['title'];

}

// Use PHP to get Vimeo description.
function getVimeoDescription($vimeo) {

    return $vimeo[0]['description'];

}
?>
</head>
<body>

    <!--container-->
    <div class="container">

        <nav class="navbar navbar-default" role="navigation">

            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <!-- navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Deborah Robinson</a>
                    </div>
                    <!-- navbar-header -->

                    <!-- email -->
                    <div class="pull-right hidden-xs contact-box">
                        <span>email: <a href="#">deborah.robinson(at)plymouth.ac.uk</a></span>
                    </div>
                    <!-- email -->

                </div>
                <!-- row -->

                <!-- row -->
                <div class="row">

                    <!-- collapse content -->
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                        <ul class="nav navbar-nav col-md-9 col-sm-9">
                            <li><a href="home.html">Home</a></li>
                            <li><a href="news.html">News</a></li>
                            <li class="active"><a href="article-project.php">Projects</a></li>
                            <li><a href="links.html">Links</a></li>
                            <li><a href="article.html">Contact</a></li>
                            <li><a href="article.html">CV</a></li>
                        </ul>

                        <!-- search box -->
                        <div class="search-box col-md-3 col-sm-3">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn" style="width:10px">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- search box -->

                    </div>
                    <!-- collapse content -->

                </div>
                <!-- row -->

            </div>

        </nav>

        <div class="divider-box"><hr class="line-divider"/></div>

        <!-- body-box -->
        <div class="body-box">

            <!-- project-container -->
            <div class="col-md-12">

                <!-- project nav container-->
                <div class="row">
                    <div class="col-md-12 project-nav">
                        <ul>
                            <li class="current"><a href="#">PARASITE</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">ATRIA</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">TOPOGRAPHIES OF THE GENOME</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">GENOMIC DIRT</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">MOLECULAR LABORATORY: RE-PRESENTING TIME</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">SILENT WITNESS</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">FISH - EYE - I</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">DATA-UNVEILING</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">LIKE A SIGNAL FALLING</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">TRANSPOSITIONS</a><span class="nav-separator">&#47;</span></li>
                            <li><a href="#">WANDERING SNAIL</a></li>
                        </ul>
                    </div>
                </div>
                <!-- project nav container-->

                <!-- article-container -->
                <div class="row">

                    <!-- article-image-box -->
                    <div class="col-md-6 col-md-push-6">

                        <!-- carousel: video -->
                        <div id="carousel-video" class="carousel slide carousel-project">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active vimeo" id="78013171">
                                    <div class="img-container">
                                        <?php
                                        $id = 78013171;
                                        $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                        $title = getVimeoTitle($vimeo);
                                        $thumb = getVimeoThumb($vimeo);
                                        ?>
                                        <a href="#" class="video-gallery-button" data-video="{
                                            title: '<?php echo $title;?>',
                                            type: 'text/html',
                                            vimeo: '<?php echo $id; ?>',
                                            poster: '<?php echo $thumb;?>'
                                          }">
                                              <span class="glyphicon glyphicon-play-circle button-play" aria-hidden="true"></span>
                                              <img src="<?php echo $thumb;?>" class="img-responsive">
                                          </a>
                                    </div>
                                    <div class="carousel-caption">
                                        Lorem ipsum dolor sit amet, sed facer vocent persius ne.
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="img-container">
                                        <?php
                                        $id = 71419529;
                                        $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                        $title = getVimeoTitle($vimeo);
                                        $thumb = getVimeoThumb($vimeo);
                                        ?>
                                        <a href="#" class="video-gallery-button"  data-video="{
                                            title: '<?php echo $title;?>',
                                            type: 'text/html',
                                            vimeo: '<?php echo $id; ?>',
                                            poster: '<?php echo $thumb;?>'
                                          }">
                                              <span class="glyphicon glyphicon-play-circle button-play" aria-hidden="true"></span>
                                              <img src="<?php echo $thumb;?>" class="img-responsive">
                                          </a>
                                    </div>
                                    <div class="carousel-caption">
                                        Sale alienum oportere an per, dicat regione cu has. Pro argumentum repudiandae ei, ut duo iuvaret graecis sadipscing.
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="img-container">
                                        <?php
                                        $id = 71426793;
                                        $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                        $title = getVimeoTitle($vimeo);
                                        $thumb = getVimeoThumb($vimeo);
                                        ?>
                                        <a href="#" class="video-gallery-button"  data-video="{
                                            title: '<?php echo $title;?>',
                                            type: 'text/html',
                                            vimeo: '<?php echo $id; ?>',
                                            poster: '<?php echo $thumb;?>'
                                          }">
                                              <span class="glyphicon glyphicon-play-circle button-play" aria-hidden="true"></span>
                                              <img src="<?php echo $thumb;?>" class="img-responsive">
                                          </a>
                                    </div>
                                    <div class="carousel-caption">
                                        Sale alienum oportere an per, dicat regione cu has. Pro argumentum repudiandae ei, ut duo iuvaret graecis sadipscing.
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="img-container">
                                        <?php
                                        $id = 71426793;
                                        $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                        $title = getVimeoTitle($vimeo);
                                        $thumb = getVimeoThumb($vimeo);
                                        ?>
                                        <a href="#" class="video-gallery-button" data-video="{
                                            title: '<?php echo $title;?>',
                                            type: 'text/html',
                                            vimeo: '<?php echo $id; ?>',
                                            poster: '<?php echo $thumb;?>'
                                          }">
                                              <span class="glyphicon glyphicon-play-circle button-play" aria-hidden="true"></span>
                                              <img src="<?php echo $thumb;?>" class="img-responsive">
                                          </a>
                                    </div>
                                    <div class="carousel-caption">
                                        dicat regione cu has Sale alienum oportere an per, dicat regione cu has. Pro argumentum repudiandae ei, ut duo iuvaret graecis sadipscing.
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="img-container">
                                        <a href="#" class="video-gallery-button" data-video="{
                                            title: 'The Arctic Light',
                                            type: 'text/html',
                                            youtube: 'Mmwv94WKmnI'
                                          }">
                                              <span class="glyphicon glyphicon-play-circle button-play" aria-hidden="true"></span>
                                              <img src="http://img.youtube.com/vi/Mmwv94WKmnI/maxresdefault.jpg" class="img-responsive">
                                          </a>
                                    </div>
                                    <div class="carousel-caption">
                                        Eu veniam aliquip nam. Mea ut omnis consequat. Affert perpetua referrentur mea eu, affert legendos at duo. Nisl periculis comprehensam ne vel.
                                    </div>
                                </div>

                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-video" data-slide-to="0" class="active">
                                    <?php
                                    $id = 78013171;
                                    $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                    $thumb = getVimeoThumb($vimeo, 'medium');
                                    ?>
                                    <img src="<?php echo $thumb;?>" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-video" data-slide-to="1">
                                    <?php
                                    $id = 71419529;
                                    $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                    $thumb = getVimeoThumb($vimeo, 'medium');
                                    ?>
                                    <img src="<?php echo $thumb;?>" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-video" data-slide-to="2">
                                    <?php
                                    $id = 71426793;
                                    $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                    $thumb = getVimeoThumb($vimeo, 'medium');
                                    ?>
                                    <img src="<?php echo $thumb;?>" alt="#" class="img-responsive" />
                                </li>

                                <li data-target="#carousel-video" data-slide-to="3">
                                    <?php
                                    $id = 78156430;
                                    $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
                                    $thumb = getVimeoThumb($vimeo, 'medium');
                                    ?>
                                    <img src="<?php echo $thumb;?>" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-video" data-slide-to="4">
                                    <img src="http://img.youtube.com/vi/Mmwv94WKmnI/0.jpg" alt="#" class="img-responsive" />
                                </li>
                            </ol>

                        </div>
                        <!-- carousel: video -->

                        <!-- carousel -->
                        <div id="carousel-example-generic" class="carousel slide carousel-project">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="img-container">
                                        <a href="http://placehold.it/600x400" data-gallery><img src="http://placehold.it/600x400" class="img-responsive"></a>
                                    </div>
                                    <div class="carousel-caption">
                                        Lorem ipsum dolor sit amet, sed facer vocent persius ne.
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="img-container">
                                        <a href="http://placehold.it/500x400" data-gallery><img src="http://placehold.it/500x400" class="img-responsive"></a>
                                    </div>
                                    <div class="carousel-caption">
                                        Eu veniam aliquip nam. Mea ut omnis consequat. Affert perpetua referrentur mea eu, affert legendos at duo. Nisl periculis comprehensam ne vel.
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="img-container">
                                        <a href="http://placehold.it/600x500" data-gallery><img src="http://placehold.it/600x500" class="img-responsive"></a>
                                    </div>
                                    <div class="carousel-caption">
                                        Sale alienum oportere an per, dicat regione cu has. Pro argumentum repudiandae ei, ut duo iuvaret graecis sadipscing.
                                    </div>
                                </div>

                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                    <img src="http://placehold.it/700x600" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="1">
                                    <img src="http://placehold.it/200x300" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="2">
                                    <img src="http://placehold.it/400x300" alt="#" class="img-responsive" />
                                </li>

                                <li data-target="#carousel-example-generic" data-slide-to="3">
                                    <img src="http://placehold.it/600x550" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <img src="http://placehold.it/400x200" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <img src="http://placehold.it/400x200" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <img src="http://placehold.it/400x420" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <img src="http://placehold.it/400x450" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <img src="http://placehold.it/400x410" alt="#" class="img-responsive" />
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <img src="http://placehold.it/400x300" alt="#" class="img-responsive" />
                                </li>
                            </ol>

                        </div>
                        <!-- carousel -->

                    </div>
                    <!-- article-image-box -->

                    <!-- article-text-box -->
                    <div class="col-md-6 col-md-pull-6">

                        <h2 class="article-title">PARASITE</h2>

                        <p>See installation film at: <a title="Parasite Installation" href="http://cargocollective.com/FilmWork/Installation" target="_blank">http://cargocollective.com/FilmWork/Installation</a></p>
                        <p><em>Parasite</em>&nbsp;is an audio-visual installation - across multiple screens sections of archival film drawn from the Wellcome Collection interact with data drawn from malaria<span style="color: #008000;">&nbsp;</span>patients accompanied by a soundtrack composed using mosquito recordings.&nbsp;Ideas for the work were formed during a residency spent with researchers Dr Julian Rayner and Dr Oliver Billker and their teams in the Malaria Programme at the Wellcome Trust Sanger Institute, near Cambridge. The art work was&nbsp;developed in collaboration with artist David Strang.&nbsp;</p>
                        <p><span style="color: #666666;">Talks about <em>Parasite</em> have taken place at: Inspace (Bio informatics gallery), Edinburgh University; Tent Gallery, Edinburgh University; St John&rsquo;s College, Cambridge; Exeter University. In 2013&nbsp;</span><em>Parasite</em><span style="color: #666666;">&nbsp;was selected for inclusion in the Shanghai International Science and Art exhibition where it won an award for excellence in Science and Art. </span></p>
                        <p><span style="color: #666666;">Solo exhibitions featuring <em>Parasite </em>have taken place at the Ruskin Gallery, Cambridge, July 2013, ICIA, University of Bath, March 2014. Heidelberg Castle, Germany, May 2014 (sponsored by The European Virtual Institute of Malaria Research and EVIMalaR). In October 2015 Parasite will be the inaugural exhibition at the new Wellcome Trust Cultural Zone, Cambridge.</span></p>
                        <p>The artist residency and production of work was funded by Arts Council England. Research for the project was supported by an ESRC Genomics Forum Bright Ideas fellowship, and also University of Plymouth.</p>

                    </div>
                    <!-- article-text-box -->

                </div>
                <!-- article-container -->

            </div>
            <!-- project-container -->

        </div>
        <!-- body-box -->

        <div class="divider-box"><hr class="line-divider"/></div>

        <!--footer-->
        <div class="footer-box">

            <div class="row">

                <!--footmenu-->
                <div class="col-md-6 col-sm-6 footer-menu-box">
                    <ul>
                        <li class="active"><a href="home">Home</a></li>
                        <li><a href="news">News</a></li>
                        <li><a href="projects">Projects</a></li>
                        <li><a href="links">Links</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li class="end"><a href="cv">CV</a></li>
                    </ul>
                </div>
                <!--footmenu-->

                <div class="col-md-6 col-sm-6 copyright-box">
                    <p>&copy; Deborah Robinson</p>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 sponsors-box">
                    <ul>
                        <li><a href="http://www.artscouncil.org.uk/" target="_blank"><img src="images/logo_ac.jpg" alt="#"/></a></li>
                        <li><a href="http://www.plymouth.ac.uk/" target="_blank"><img src="images/logo_uop.png" alt="#"/></a></li>
                    </ul>
                </div>

            </div>

        </div>
        <!--footer-->

    </div>
    <!--container-->

    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
    <script src="js/demo.js"></script>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->

</body>
</html>
