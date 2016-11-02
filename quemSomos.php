<?php get_header(); ?>

<div id="content" class="body-content" style="background-color:#f2f2f2">
    <header class="header-container" style="margin-bottom:50px">
        <div class="container" style="padding-left:0">
            <h2 class="text-left">Quem somos</h2>
        </div>
    </header>

<div class="row container">
    <div class="row col-md-2">
        <ul class="nav hidden-sm hidden-xs text-right">
            <li>
                <a href="#1a" data-toggle="tab">Sobre</a>
            </li>
            <li>
                <a href="#2a" data-toggle="tab">Unidades</a>
            </li>
            <li>
                <a href="#3a" data-toggle="tab">Portifólio</a>
            </li>
        </ul>
        <div class="visible-xs-inline visible-sm-inline">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#1a" data-toggle="tab">Sobre</a>
                </li>
                <li>
                    <a href="#2a" data-toggle="tab">Unidades</a>
                </li>
                <li>
                    <a href="#3a" data-toggle="tab">Portifólio</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-8 row panel" style="min-height:300px">

        <div id="exTab1">

            <div class="tab-content content clearfix">
                <div class="tab-pane active" id="1a">
                    <h3 class="header-text"><strong>Sobre a Moraes e Leal</strong></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet.</p>

                </div>
                <div class="tab-pane" id="2a">

                    <h4 class="header-text">Unidades</h4>
                    <div class="col">
                        <img src="<?php bloginfo('url'); ?>/Content/images/goiania-vaca-brava.jpg" class="img-responsive" />
                        <h4>São Paulo</h4>

                        <table>
                            <tr>
                                <td><span> Rua do Bosque, 1621 cj 1406-1409<br />Barra Funda - São Paulo - SP</span></td>
                            </tr>
                            <tr>
                                <td><span> +55 (11) 3214-2855</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="col">
                        <img src="<?php bloginfo('url'); ?>/Content/images/Goiania_by-night.jpg" class="img-responsive" />
                        <div class="">
                            <h4>Goiás</h4>

                            <table>
                                <tr>
                                    <td><span> Av. Cristo Rei, Quadra 111 - Lote 14<br />Setor Jaó - Goiania - GO</span></td>
                                </tr>
                                <tr>
                                    <td><span> +55 (11) 3214-2855</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="3a">
                    <form class="form-horizontal">
                        <h4 class="header-text">Portifólio</h4>
                        <fieldset>
                            <span>
                                Quer conhecer melhor os serviços prestados pela Moraes e Leal Adgovogados?<br />
                                Por favor, deixe o seu nome e e-mail para que possamos enviar o arquivos para você.
                            </span>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <label class="control-label" for="inputName">Nome*</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <label class="control-label" for="inputEmail">E-mail*</label>
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>


    </div>

</div>

<hr>
</div>
<?php get_footer(); ?>