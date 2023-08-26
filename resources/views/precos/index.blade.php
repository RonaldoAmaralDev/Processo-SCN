<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ asset('', Request::secure()) }}">
    <title>Listagem de clientes | Projeto</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v10/images/icons/favicon.ico" />


    <script src="https://code.iconify.design/3/3.0.1/iconify.min.js"></script>


    <link href="{{ asset('public/assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/plugin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/line.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/custom.css?') }}" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body class="layout-light">
<div class="mobile-author-actions"></div>
<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                <a href="#" class="sidebar-toggle"><img class="svg" src="../public/assets/img/svg/align-center-alt.svg" alt="img"></a>
            </div>
        </div>

        <div class="navbar-right">
            <ul class="navbar-right__menu">

                <li class="nav-notification">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            <img class="svg" src="{{ asset('/assets/img/svg/alarm.svg') }}" alt="img">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notificações <span class="badge-circle badge-warning ms-1">0</span>
                                </h2>
                                <ul>

                                </ul>
                                <a href="#" class="dropdown-wrapper__more">Ver todas notificações</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img src="https://demo.dashboardmarket.com/hexadash-html/ltr/img/author-nav.jpg" alt="" class="rounded-circle">
                            <span class="nav-item__title">Teste<i class="las la-angle-down nav-item__arrow"></i></span>
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Teste</h6>
                                        <span class="text-uppercase">Admin</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li><a href="#"><i class="uil uil-user"></i> Minha conta</a></li>
                                    </ul>
                                    <a href="{{ route('logout') }}" class="nav-author__signout"><i class="uil uil-sign-out-alt"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

            </ul>
            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-author-action"><img class="svg" src="../public/assets/img/svg/more-vertical.svg" alt="more-vertical"></a>
            </div>
        </div>

    </nav>
</header>

<main class="main-content">

    <div class="sidebar-wrapper">
        <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
                <ul class="sidebar_nav">

                    <br><br>


                    <li class="has-child">
                        <a href="#" class="">
                            <span class="nav-icon uil uil-user"></span>
                            <span class="menu-text">{{ __('Clientes') }}</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li class=""><a href="{{ route('clientes.novocliente') }}">Novo cliente</a></li>
                            <li class=""><a href="{{ route('clientes.index') }}">Listagem de clientes</a></li>
                        </ul>

                        <a href="#" class="">
                            <span class="nav-icon uil uil-list-ui-alt"></span>
                            <span class="menu-text">{{ __('Produtos') }}</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li class=""><a href="{{ route('produtos.create') }}">Novo produto</a></li>
                            <li class=""><a href="{{ route('produtos.index') }}">Listagem de produtos</a></li>
                        </ul>

                        <a href="#" class="">
                            <span class="nav-icon uil uil-money-bill"></span>
                            <span class="menu-text">{{ __('Preços') }}</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li class=""><a href="{{ route('precos.index') }}">Listagem preços</a></li>
                        </ul>

                        <a href="#" class="">
                            <span class="nav-icon uil uil-list-ol"></span>
                            <span class="menu-text">{{ __('Relatórios') }}</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>
                            <li class=""><a href="{{ route('relatorios.index') }}">Importação CSV</a></li>
                        </ul>
                    </li>




                </ul>
            </div>
        </div>
    </div>

    <div class="contents">
        <div class="crm mb-25">


            <br><br>



            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main user-member justify-content-sm-between ">
                            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                                    <h4 class="text-capitalize fw-500 breadcrumb-title">Listagem de produtos</h4>
                                    <span class="sub-title ms-sm-25 ps-sm-25">Home</span>
                                </div>


                            </div>

                        </div>


                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Produto</th>
                                <th>Valor do Custo</th>
                                <th>Valor da venda</th>
                                <th>Margem</th>
                                <th>Situação</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($precos as $row)
                                <tr>
                                    <td>
                                        {{$row->cliente_codigo}} - {{$row->cliente_nome}}
                                    </td>

                                    <td>
                                        {{$row->produto_codigo}} - {{$row->produto_descricao}}
                                    </td>


                                    <td>
                                        R$  {{number_format((float)$row->produto_custo, 2, '.', '')}}
                                    </td>

                                    <td>
                                        R$  {{number_format((float)$row->valor, 2, '.', '')}}
                                    </td>

                                    <td>
                                        {{$row->produto_margem}}%
                                    </td>

                                    <td>

                                        <?php

                                        $lucro = number_format((float)$row->valor, 2, '.', '') - number_format((float)$row->produto_custo, 2, '.', '');
                                        $lucro = $lucro * 100;
                                        $situacao = '';

                                        if($lucro < $row->produto_margem) {
                                            $situacao = 'ABAIXO DA MARGEM MÍNIMA';

                                            echo "<label style='color: red'>$situacao</label>";

                                        }


                                        ?>


                                    </td>



                                </tr>
                            @endforeach

                            </tbody>
                        </table>



                        <!--Fim Datatable -->





                    </div>
                </div>

            </div>
        </div>
    </div>


    <footer class="footer-wrapper">
        <div class="footer-wrapper__inside">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p><span>© 2023</span><a href="https://wa.me/5531975465685">Projeto Ronaldo G Amaral</a>, todos os direitos reservados.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-end">
                            <ul>
                                <li><a href="https://github.com/RonaldoAmaralDev">Github</a></li>
                                <li><a href="https://www.linkedin.com/in/ronaldobh/">Linkedin</a></li>
                                <li><a href="https://wa.me/5531975465685">Meu Whatsapp</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>


</main>

<div id="overlayer" class="loader">
    <div class="loader-overlay">
        <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
        </div>
    </div>
</div>



<script src="{{ asset('public/assets/js/plugins.min.js') }}" ></script>
<script src="{{ asset('public/assets/js/script.min.js') }}" ></script>
<script src="{{ asset('public/assets/js/jquery-migrate-3.3.2.js') }}" ></script>
<script src="{{ asset('public/assets/js/jquery.maskedinput.min.js') }}" ></script>
<script src="{{ asset('public/assets/js/mootools-core-1.4.5.js') }}" ></script>
<script src="{{ asset('public/assets/js/main.js') }}" ></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>




@include('sweetalert::alert')

@stack('scripts')


<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
            },
            "responsive": true,
            order: [[1, 'ASC']],
        });
    });
</script>




</body>
</html>
