<!DOCTYPE html>


<html lang="pt-BR">



<head>


    <link rel="stylesheet" href="css/controls.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="/your-path-to-fonticon/css/all.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Sistema de Relatórios Axis Analytics</title>

    <style>
        body {

            background-color: maroon;
        }

    </style>

</head>



<body>


    <div class="nav">

        <?php
        session_start();
        $nm_usr = $_SESSION['nome_usr'];

        echo "<h3>Bem vindo, $nm_usr</h3>"

        ?>


    </div>

    <br>


    <div class="container">


        <div class="cabecalho">

            <div class="cards-header">
                <h1>Controles</h1>


                <hr>


                <div class="grid-container">
                    <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Dashboard</div>
                        </div>

                    </a>
                    <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Insinghts</div>
                        </div>
                    </a>
                    <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Pesquisas ativas</div>
                        </div>
                    </a>
                    <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Configuração</div>
                        </div>
                    </a>


                </div>
            </div>
        </div>


        <div class="cabecalho">

            <div class="cards-header">
                <h1>Solicitações</h1>





                <div class="grid-container">
                    <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Pesquisa</div>
                        </div>
                    </a> <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Relatório</div>
                        </div>
                    </a>
                    <a href="##">
                        <div class="cards-controls d-flex">
                            <div class="text-card">Suporte</div>
                        </div>
                    </a>


                </div>
            </div>
        </div>
        <br>
        <br>
        <hr>

        <br>
        <br>

        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <h5 class="text-uppercase">Footer </h5>
                        <p>kndffjalkdjakdja jawkldjalkdjaldkjajw d akldkjalkd alkdj</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Contatos</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">teste@teste.com.br</a>
                            </li>
                            <li>
                                <a href="#!">11 31406480</a>
                            </li>
                            <li>

                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Sociais</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Facebook</a>
                            </li>
                            <li>
                                <a href="#!">Linkedin 2</a>
                            </li>
                            <li>
                                <a href="#!">Instagram</a>
                            </li>
                            <li>
                                <a href="#!">Twitter </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->
            <hr>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://tfleet.com.br"> tfleet.com.br</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->




    </div>

</body>

<script>
    function VoltarPagina() {
        window.setTimeout("location.href = 'index.html'", 0);
        request.getSession().invalidate();
    }

</script>

</html>

