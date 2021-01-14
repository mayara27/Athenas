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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cadastro
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Novo Cliente</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Novo Funcionário</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Chamado
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Novo Chamado
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Todos os Chamados
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                    
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
       

        <div class="container mt-2 ml-15">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nome Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="Ex: Julia Fernandes">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Ex: julia@gmail.com">
                        </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Ex: Av. Bahia, 101, Poiares">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone">Telefone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Ex:(12) 99212-0107 ">
                        </div>
                    </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Gênero</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="setor">Setor</label>
                            <select id="setor" class="form-control">
                            <option>Recursos Humanos</option>
                            <option>Atendimento</option>
                            <option>Financeiro</option>
                            <option>Desenvolvimento Web</option>
                            <option>Fiscalização</option>
                            <option>Marketing</option>
                            <option>Secretaria</option>
                            <option>Gerencia</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="id">Matrícula</label>
                            <input type="text" class="form-control" id="id">
                        </div>

                        </div>

                        <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                            Possui Alguma Deficiência?
                            </label>
                        </div>
                        </div>
                        
                        <div class="row mt-5">
                        <div class="col-6">
                            <a href="consultar_chamado.html" class="btn  btn-danger btn-block">Voltar</a>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-primary btn-block" type="">Abrir</button>
                        </div>
                        </div>

                    </form>
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
