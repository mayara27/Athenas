<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="{{ url('css/estilo.css')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Help desk</title>

        <style type="text/css">
         	@charset "UTF-8";
        </style>

		    <link rel="stylesheet" href="{{ url('css/estilo.css')}}">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <h1>Inicio</h1>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Athena's HelpDesk</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Sair</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/horario/index')}}">
                            
                                Controle de Ponto
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cliente
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">                                    
                                    <a class="nav-link" href="{{ url('/cliente/show')}}">Lista clientes</a>
                                    <a class="nav-link" href="{{ url('/cliente/create')}}">Novo Cliente</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Funcionário
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('/usuario/show')}}">Lista Funcionários</a>
                                    <a class="nav-link" href="{{ url('/usuario/create')}}">Novo Funcionário</a>
                                </nav>
                            </div>  
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Chamado
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('/chamado/create')}}">Novo Chamado</a>
                                    <a class="nav-link" href="{{ url('/chamado/show')}}">Todos Chamados</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Desenvolvido por:</div>
                        Diana e Mayara
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
          
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                            
                                        <form action="{{ route('usuario.update', $usuario->id_usuario) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                            <fieldset>
                                                <legend > Informações Pesoais  </legend> <br><br>   

                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="id_usuario">Matrícula do Cliente</label>
                                                        <input type="text" class="form-control" name="id_usuario" id="id_usuario" value="{{ $usuario->id_usuario }}" readonly >
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="nome">Nome Completo</label>
                                                        <input type="text" class="form-control" name="nome" id="nome"  value="{{ $usuario->nome_usuario }}">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="cpf">CPF</label>
                                                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Ex: 4623748738" value="{{ $usuario->cpf }}">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Ex: julia@gmail.com" value="{{ $usuario->email }}">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="nascimento">Data de Nascimento</label>
                                                        <input type="date" class="form-control" name="nascimento" id="nascimento" value="{{ $usuario->nascimento_usuario }}" >
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="telefone">Telefone</label>
                                                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Ex:(12) 99212-0107" value="{{ $usuario->telefone_usuario }}" >
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="telefone2">Telefone para Contato</label>
                                                        <input type="text" class="form-control" name="telefone2" id="telefone2" placeholder="Ex:(12) 99212-0107" value="{{ $usuario->tel_contato_usuario }}">
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-row">                 
                                                    <div class="form-group col-md-4">
                                                            <label for="estado_civil">Estado Civil</label>
                                                            <select name="estado_civil" id="estado_civil" class="form-control">
                                                                <option {{ $usuario->estado_civil == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                                                                <option {{ $usuario->estado_civil == 'Solteiro(a)' ? 'selected' : '' }}>Solteiro(a)</option>
                                                                <option {{ $usuario->estado_civil == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                                                                <option {{ $usuario->estado_civil == 'Viuvo(a)' ? 'selected' : '' }}>Viuvo(a)</option>
                                                            </select>                                        
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="escolaridade">Escolaridade</label>
                                                        <select name="escolaridade" id="escolaridade" class="form-control">
                                                            
                                                                <option {{ $usuario->escolaridade == 'Analfabeto(a)' ? 'selected' : '' }}>Analfabeto(a)</option>
                                                                <option {{ $usuario->escolaridade == 'Fundamental Completo' ? 'selected' : '' }}>Fundamental Completo</option>
                                                                <option {{ $usuario->escolaridade == 'Fundamental Incompleto' ? 'selected' : '' }}>Fundamental Incompleto</option>
                                                                <option {{ $usuario->escolaridade == 'Ensino Médio Completo' ? 'selected' : '' }}>Ensino Médio Completo</option>
                                                                <option {{ $usuario->escolaridade == 'Ensino Médio Incompleto' ? 'selected' : '' }}>Ensino Médio Incompleto</option>
                                                                <option {{ $usuario->escolaridade == 'Ensino Superior Completo' ? 'selected' : '' }}>Ensino Superior Completo</option>
                                                                <option {{ $usuario->escolaridade == 'Ensino Superior Incompleto' ? 'selected' : '' }}>Ensino Superior Incompleto</option>
                                                        </select> 
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="filhos">Número de Filhos</label>
                                                        <input type="number" class="form-control" name="filhos" id="filhos" value="{{ $usuario->filhos_usuario }}">
                                                    </div>                                    
                                                </div><br>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="tipo_usuario">Nível de acesso
                                                        </label><select name="tipo_usuario" id="tipo_usuario" class="form-control">
                                                            <option {{ $usuario->tipo_usuario == 'Atendente' ? 'selected' : '' }}>Atendente</option>
                                                            <option {{ $usuario->tipo_usuario == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                                                            <option {{ $usuario->tipo_usuario == 'Suporte' ? 'selected' : '' }}>Suporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="setor">Setor</label>
                                                        <select name="setor" id="setor" class="form-control">
                                                            <option {{ $usuario->setor == 'Recursos Humanos' ? 'selected' : '' }}>Recursos Humanos</option>
                                                            <option {{ $usuario->setor == 'Atendimento' ? 'selected' : '' }}>Atendimento</option>
                                                            <option {{ $usuario->setor == 'Financeiro' ? 'selected' : '' }}>Financeiro</option>
                                                            <option {{ $usuario->setor == 'Desenvolvimento Web' ? 'selected' : '' }}>Desenvolvimento Web</option>
                                                            <option {{ $usuario->setor == 'Fiscalização' ? 'selected' : '' }}>Fiscalização</option>
                                                            <option {{ $usuario->setor == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                                                            <option {{ $usuario->setor == 'Secretaria' ? 'selected' : '' }}>Secretaria</option>
                                                            <option {{ $usuario->setor == 'Gerencia' ? 'selected' : '' }}>Gerencia</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="emaillogin">Nome para email</label>
                                                        <input type="text" class="form-control" name="emaillogin" id="emaillogin" placeholder="marciarhlocaweb" value="{{ $usuario->login }}">
                                                    </div>

                                                </div><br><br>
                                            </fieldset><br><br>

                                            <fieldset>
                                                    <legend > Endereço  </legend><br><br>
                                                        
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" class="form-control" name="cep" id="cep" value="{{ $endereco->cep }}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="rua">Rua</label>
                                                                <input type="text" class="form-control" name="rua" id="rua" value="{{ $endereco->ua }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="numero">Número</label>
                                                                <input type="text" class="form-control" name="numero" id="numero" value="{{ $endereco->num }}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="bairro">Bairro</label>
                                                                <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $endereco->bairro }}">
                                                            </div>
                                                        </div>                                     

                                                        <div class="form-row">                            
                                                            <div class="form-group col-md-6">
                                                                <label for="cidade">Cidade</label>
                                                                <input type="text" class="form-control"  name="cidade" id="cidade" value="{{ $endereco->cidade }}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="estado">Estado</label>
                                                                <input type="text" class="form-control" name="estado" id="estado" value="{{ $endereco->estado }}">
                                                            </div>
                                                            
                                                        </div><br><br>
                                                </fieldset>
                                                
                                            <div class="row mt-5">

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                                                </div>
                                            </div>
                                            <br><br>
                                        </form>
                                        </div>
                                    </main>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="layoutSidenav_content">
                        
                            <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                                        <div>
                                            <a href="#">Privacy Policy</a>
                                            &middot;
                                            <a href="#">Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </main>
            </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js">[</script>
        <script type="text/javascript">
        	    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
                $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
                    if (this.href === path) {
                        $(this).addClass("active");
                    }
                });

            // Toggle the side navigation
            $("#sidebarToggle").on("click", function(e) {
                e.preventDefault();
                $("body").toggleClass("sb-sidenav-toggled");
            });
        </script>
    </body>
</html>
