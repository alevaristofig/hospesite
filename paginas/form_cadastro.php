<!DOCTYPE html>
<html>
    <head>
        <title>Hospesite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webapps/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../webapps/css/hospesite.css" />
        <script type="text/javascript" src="../webapps/jquery.js"></script>
        <script type="text/javascript" src="../webapps/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../webapps/js/jquery.mask.js"></script>
        <script type="text/javascript" src="../webapps/js/hospesite.js"></script>
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
                    <form>
                        <div class="row text-left linha-cad">
                            <div class="col-lg-10">
                                <label for="nome" class="left label_nome">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control input-cad" required />
                            </div>                            
                        </div>
                        <div class="row text-left linha-cad">
                            <div class="col-lg-10">
                                <label for="logradouro" class="left label_logradouro">Logradouro:</label>
                                <input type="text" name="logradouro" id="logradouro" class="form-control input-cad" />
                            </div>                            
                        </div>
                        <div class="row text-left linha-cad">
                            <div class="col-lg-10">
                                <label for="numero" class="left label_numero">Número:</label>
                                <input type="text" name="numero" id="numero" class="left form-control input-cad2" />
                                <label for="complemento" class="left label_complemento_bairro">Complemento:</label>
                                <input type="text" name="complemento" id="complemento" class="left form-control input-cad3" />
                                <label for="cep" class="left label_complemento_bairro">Cep:</label>
                                <input type="text" name="cep" id="cep" class="left form-control input-cad2" />
                            </div>                            
                        </div>
                        <div class="row text-left linha-cad">
                            <div class="col-lg-10">
                                <label for="bairro" class="left label_bairro">Bairro:</label>
                                <input type="text" name="bairro" id="bairro" class="left form-control input-cad" />
                            </div>
                        </div>
                        <div class="row text-left linha-cad">
                             <div class="col-lg-10">
                                 <label for="estado" class="left label_uf">Estado:</label>
                                 <select name="estado" id="estado" class="left form-control select-estado">
                                     <option value="0">Escolha um Estado!</option>
                                 </select>
                                 <label for="cidade" class="left label_complemento_bairro">Cidade:</label>
                                 <select name="cidade" id="cidade" class="left form-control select-estado" disabled>
                                     <option value="0">Escolha uma Cidade!</option>
                                 </select>
                             </div>
                         </div>
                        <div class="row text-left">
                            <div class="col-lg-10">
                                <label for="empresa" class="left label_empresa">Empresa:</label>
                                <input type="text" name="empresa" id="empresa" class="left form-control input-cad" />
                            </div>
                        </div>
                        
                    </form>
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
