<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exata Automação</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link href="{{ asset('exata-automacao/favicon.ico') }}" rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
        <link href="{{ asset('exata-automacao/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('exata-automacao/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('exata-automacao/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('exata-automacao/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('exata-automacao/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('exata-automacao/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('exata-automacao/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="fixed-top">
            <div class="container">
                <div class="float-left">
                    <a href="{{ route('/') }}" class="scrollto"><img src="{{ asset('exata-automacao/img/logo.png') }}" alt="Exata Automação" class="img-fluid" width="90"></a>
                </div>
                <nav class="main-nav float-right d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#intro">Início</a></li>
                        <li><a href="#about">Sobré-nós</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#portfolio">Produtos</a></li>
                        <li><a href="#contact" id="linkContato">Contato</a></li>
                    </ul>
                </nav><!-- .main-nav -->
            </div>
        </header><!-- #header -->
        <section id="intro" class="clearfix">
            <div class="container">
                @include('flash::message')
                <div class="intro-img">
                    <img src="{{ asset('exata-automacao/img/OJXLEA1.svg') }}" alt="" class="img-fluid">{{--                    <img src="{{ asset('exata-automacao/img/intro-img.svg') }}" alt="" class="img-fluid">--}}
                </div>
                <div class="intro-info">
                    <h2>Nós provemos<br><span>soluções</span><br>para o seu negócio!</h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Sobre nós</a>
                        <a href="#services" class="btn-services scrollto">Serviços</a>
                    </div>
                </div>
            </div>
        </section><!-- #intro -->
        <main id="main">
            <section id="about">
                <div class="container">
                    <header class="section-header">
                        <h3>Sobre nós</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.</p>
                    </header>
                    <div class="row about-container">
                        <div class="col-lg-6 content order-lg-1 order-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <div class="icon-box wow fadeInUp">
                                <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                    tempore, cum soluta nobis est eligendi</p>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon"><i class="fa fa-photo"></i></div>
                                <h4 class="title"><a href="">Magni Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum</p>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fa fa-bar-chart"></i></div>
                                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div>
                        <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                            <img src="{{ asset('exata-automacao/img/about-img.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row about-extra">
                        <div class="col-lg-6 wow fadeInUp">
                            <img src="{{ asset('exata-automacao/img/about-extra-1.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                            <p>
                                Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae
                                perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia
                                recusandae non ad at et a.
                            </p>
                            <p>
                                Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis
                                deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro
                                rerum eum eum.
                            </p>
                        </div>
                    </div>
                    <div class="row about-extra">
                        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                            <img src="{{ asset('exata-automacao/img/about-extra-2.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                            <p>
                                Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis.
                                Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis
                                autem at blanditiis beatae incidunt sunt.
                            </p>
                            <p>
                                Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse
                                molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                            </p>
                            <p>
                                Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut
                                fuga mollitia exercitationem nam accusantium provident quia.
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- #about -->
            <section id="services" class="section-bg">
                <div class="container">
                    <header class="section-header">
                        <h3>Serviços</h3>
                        <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
                    </header>
                    <div class="row">
                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s"
                             data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                                <h4 class="title"><a href="">Magni Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s"
                             data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                                <h4 class="title"><a href="">Nemo Enim</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                    tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #services -->
            <section id="why-us" class="wow fadeIn">
                <div class="container">
                    <header class="section-header">
                        <h3>Por que escolher-nos?</h3>
                        <p>Nosso negócio facilita o seu.</p>
                    </header>
                    <div class="row row-eq-height justify-content-center">
                        <div class="col-lg-4 mb-4">
                            <div class="card wow bounceInUp">
                                <i class="fa fa-diamond"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Corporis dolorem</h5>
                                    <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus
                                        sunt ab inventore officiis aut voluptatibus.</p>
                                    <a href="#" class="readmore">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card wow bounceInUp">
                                <i class="fa fa-language"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Voluptates dolores</h5>
                                    <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum
                                        aspernatur.</p>
                                    <a href="#" class="readmore">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card wow bounceInUp">
                                <i class="fa fa-object-group"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Eum ut aspernatur</h5>
                                    <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in
                                        non nemo ex. </p>
                                    <a href="#" class="readmore">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row counters">
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">274</span>
                            <p>Clients</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">421</span>
                            <p>Projects</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">1,364</span>
                            <p>Hours Of Support</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">18</span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="portfolio" class="clearfix">
                <div class="container">
                    <header class="section-header">
                        <h3 class="section-title">Our Portfolio</h3>
                    </header>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/app1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">App 1</a></h4>
                                    <p>App</p>
                                    <div>
                                        <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1"
                                           class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/web3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Web 3</a></h4>
                                    <p>Web</p>
                                    <div>
                                        <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/app2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">App 2</a></h4>
                                    <p>App</p>
                                    <div>
                                        <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/card2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Card 2</a></h4>
                                    <p>Card</p>
                                    <div>
                                        <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/web2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Web 2</a></h4>
                                    <p>Web</p>
                                    <div>
                                        <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/app3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">App 3</a></h4>
                                    <p>App</p>
                                    <div>
                                        <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/card1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Card 1</a></h4>
                                    <p>Card</p>
                                    <div>
                                        <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/card3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Card 3</a></h4>
                                    <p>Card</p>
                                    <div>
                                        <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('exata-automacao/img/portfolio/web1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a href="#">Web 1</a></h4>
                                    <p>Web</p>
                                    <div>
                                        <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio"
                                           data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #portfolio -->
            <section id="clients" class="section-bg">
                <div class="container">
                    <div class="section-header">
                        <h3>Our CLients</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome
                            nida.</p>
                    </div>
                    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-1.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-2.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-3.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-4.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-5.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-6.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-7.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="{{ asset('exata-automacao/img/clients/client-8.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="container-fluid">
                    <div class="section-header">
                        <h3>Contate-nos</h3>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-lg-6">
                            <div class="map mb-4 mb-lg-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.111898503994!2d-40.6327940502679!3d-19.536808931181433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb7a8261c72bc09%3A0x7cadcfa31e6483fb!2zRXhhdGEgQXV0b21hw6fDo28!5e0!3m2!1spt-BR!2sbr!4v1568831618691!5m2!1spt-BR!2sbr" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-5 info">
                                    <i class="ion-ios-location-outline"></i>
                                    <p>Av. Getúlio Vargas, 196 - 5º andar</p>
                                </div>
                                <div class="col-md-4 info">
                                    <i class="ion-ios-email-outline"></i>
                                    <a href="mailto:exata@casotti.com.br"><p>exata@casotti.com.br</p></a>
                                </div>
                                <div class="col-md-3 info">
                                    <i class="ion-ios-telephone-outline"></i>
                                    <p>(27) 3721-1221</p>
                                </div>
                            </div>
                            <div class="form">
                                <form action="{{ route('contato') }}" method="post" role="form" class="contactForm">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="name" class="form-control " id="name" placeholder="Seu Nome" value="{{ old('name') }}"/>
                                            @error('name')
                                                <div class="validation">{{ $errors->first('name') }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" value="{{ old('email') }}"/>
                                            @error('email')
                                                <div class="validation">{{ $errors->first('email') }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" value="{{ old('subject') }}"/>
                                        @error('subject')
                                            <div class="validation">{{ $errors->first('subject') }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="validation">{{ $errors->first('message') }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" title="Enviar"><i class="ion-android-send"></i> Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #contact -->
        </main>
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 footer-info">
                            <h3>Exata Automação</h3>
                            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                                valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                                proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 footer-contact">
                            <h4>Contate-nos</h4>
                            <p>Av. Getúlio Vargas, 196 5º Andar, Colatina - ES <br>
                               <strong>Telefone:</strong> +27 3721-1221
                               <strong>Email:</strong> <a href="mailto:exata@casotti.com.br">exata@casotti.com.br</a><br>
                            </p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/exataautomacao.net/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/exataautomacao/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright {{ date('Y') }} - <strong>Exata Automação</strong>. Todos direitos reservados
                </div>
            </div>
        </footer><!-- #footer -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <div id="preloader"></div>
        <script src="{{ asset('exata-automacao/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/mobile-nav/mobile-nav.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('exata-automacao/js/main.js') }}"></script>
        @if(count($errors))
            <script>
                $('#linkContato').click();
            </script>
        @endif
    </body>
</html>
