<?php /*
Template Name: Modelo Contato
*/
?>
<?php get_header(); ?>

<header class="header-container" style="margin-bottom:50px">
    <div class="container" style="padding-left:0">
        <h2 class="text-left">Contato</h2>
    </div>
</header>

<div class="row container">
    <div class="col-md-2 text-left">
        <div class="hidden-sm hidden-xs">
            <p class=""><strong>COMPARTILHE:</strong></p>
            <ul class="list-inline top-text text-left ">
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-linkedin-square"></i></a>
                </li>
            </ul>
        </div>
        <div class="visible-xs-inline visible-sm-inline" style="width:90%">
            <ul class="list-inline top-text">
                <li>
                    <p class=""><strong>COMPARTILHE:</strong></p>
                </li>
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-linkedin-square"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-8 panel">

        <div class="card central">
            
            <form class="form-horizontal">
                <h4 class="header-text">Contato</h4>
                <fieldset>
                    <span>
                        Fique à vontade para nos contatar a qualquer momento através de nosso formulário de contato. Caso prefira entrar em contato por outros meios, verifique os telefones e endereços dos nossos escritórios.
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
                            <label class="control-label" for="inputEmail">Telefone</label>
                            <input type="tel" class="form-control" id="inputPhone" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <label class="control-label" for="inputEmail">Mensagem</label>
                            <textarea type="text" class="form-control" id="inputMensagem" placeholder="Mensagem"></textarea>
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

<?php get_footer(); ?>

