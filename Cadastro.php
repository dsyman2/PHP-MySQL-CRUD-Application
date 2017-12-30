<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
         <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    </head>
    
    <body>
        <h1 class="form-signin-heading text-center">Cadastro de Usuario</h1>
        
        
        <div class="container">
            <form action="Classes/cadastro.php" method="post">
                <div class="form-group row">
                    <label for="n" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required="" id="n" name="nome" placeholder="Nome"/>
                
                    </div>
                </div>    
                <div class="form-group row">
                    <label for="eml" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" required="" id="eml" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logi" class="col-sm-2 col-form-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" required="" id="logi" name="login" placeholder="Login">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="senh" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" required=""id="senh" name="senha" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Cadastro</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
