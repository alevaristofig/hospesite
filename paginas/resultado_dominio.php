<!DOCTYPE html>
<html>
    <head>
        <title>Hospesite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webapps/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../webapps/css/hospesite.css" />
        <script type="text/javascript" src="webapps/jquery.js"></script>
        <script type="text/javascript" src="webapps/bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="">Logo</a>
                </div>                           
            </div>            
        </nav>
        <div class="jumbotron">
            <div class="container">
                <div class="div_busca_dominio">
                    <label class="label_busca_dominio">Registre seu Domínio</label> 
                    <form class="form-inline">
                        <input type="text" name="dominio" class="form-control input_dominio" placeholder="WWW" /><br />
                        <input type="submit" value="Registrar" class="btn btn-primary btn_registro" />
                    </form>
                </div>
                <div class="container">
                    <label>Resulado da Busca</label>
                    <div id="resultadodominio">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Domínio</label>
                            </div>
                            <div class="col-lg-4">
                                <label>Período</label>
                            </div>
                            <div class="col-lg-2">
                                <label>Valor</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>www.hospesite.com</label>
                            </div>
                            <div class="col-lg-4">
                                <label>1 ano</label>
                            </div>
                            <div class="col-lg-2">
                                <label>R$ 40,00</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="hospedagem"> <label>Hopesite</label>
                            </div>
                            <div class="col-lg-4">
                                <label>1 ano</label>
                            </div>
                            <div class="col-lg-2">
                                <label>R$ 40,00</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <button  class="btn btn-primary" id="btn_reg">Registrar</button>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid">                
                <div class="container">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et sagittis ante. Morbi non viverra lacus, in gravida urna. 
                        Praesent gravida sem ultrices nibh feugiat pulvinar. Quisque pulvinar dui eget justo feugiat, sed ullamcorper neque auctor. 
                        Integer eu felis pharetra, malesuada est eu, accumsan magna. Donec elementum ullamcorper ex vitae tempus. Aliquam placerat 
                        vehicula risus nec interdum. Sed dignissim dolor lorem, ac cursus dui egestas non. Quisque est tellus, congue a lacinia vel, 
                        blandit eu lectus. Cras ut maximus turpis. Maecenas vel lectus ut elit ullamcorper finibus sit amet quis quam. Sed dapibus, 
                        purus vel vulputate ultrices, neque neque lacinia mi, in hendrerit nunc sem et sapien. Vivamus viverra magna sit amet tortor 
                        scelerisque, sed elementum elit imperdiet. Vestibulum sollicitudin purus felis, sit amet tempus sapien laoreet nec. 
                        Fusce sit amet tincidunt nunc, id condimentum odio. Praesent vel eros vitae enim convallis iaculis.
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

