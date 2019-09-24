<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<!-- Bootstrap -->
<div class="row">
    <div class="col-md-12">
        <h1 id="header" class="text-primary">My Blog</h1>
    </div>
    <div class="col-md-12">
        <div class="container list-article">
            <div class="btn-group pull-right" id="switch-view">
                <button class="btn btn-primary type-1757-btna">
                    <span class="icon-th-large"></span>
                </button>
                <button class="btn btn-primary type-1757-btnb active">
                    <span class="icon-th-list"></span>
                </button>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 article-wrapper">
                    <article>
                        <a href="#" class="more">more</a>
                        <div class="img-wrapper"><img src="./img/img1.jpg" alt="" /></div>
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ducimus totam quasi nam porro
                            sed.</p>
                    </article>
                </div>
                <div class="col-md-12 article-wrapper">
                    <article>
                        <a href="#" class="more">more</a>
                        <div class="img-wrapper"><img src="./img/img1.jpg" alt="" /></div>
                        <h1>Dignissimos perferendis quae.</h1>
                        <p>Numquam dolorem sed quae placeat iusto! Quibusdam doloremque enim assumenda aliquam impedit
                            earum alias labore.</p>
                    </article>
                </div>
                <div class="col-md-12 article-wrapper">
                    <article>
                        <a href="#" class="more">more</a>
                        <div class="img-wrapper"><img src="./img/img1.jpg" alt="" /></div>
                        <h1>Quisquam deserunt cumque!</h1>
                        <p>Dolor tempora nihil facere explicabo qui mollitia deleniti quam quia iure nisi voluptate
                            voluptatibus cum.</p>
                    </article>
                </div>
                <div class="col-md-12 article-wrapper">
                    <article>
                        <a href="#" class="more">more</a>
                        <div class="img-wrapper"><img src="./img/img1.jpg" alt="" /></div>
                        <h1>Velit natus possimus.</h1>
                        <p>Illum voluptates nisi asperiores temporibus illo maiores qui aliquid corporis exercitationem
                            libero dolor tenetur. Doloremque!</p>
                    </article>
                </div>
                <div class="col-md-12 article-wrapper">
                    <article>
                        <a href="#" class="more">more</a>
                        <div class="img-wrapper"><img src="./img/img1.jpg" alt="" /></div>
                        <h1>Atque quo maxime.</h1>
                        <p>Sed eveniet iste magni possimus ipsum dolore ea nesciunt eligendi id. Eum quos voluptatibus
                            ullam.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">