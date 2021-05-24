

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSAT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item active ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Acceuil</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <span>Chapitre</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="AjouterChapitre">Ajouter</a>
                                </li>
                                <li>
                                    <a href="chapitres">Modifier/Supprimer</a>
                                </li>
                                
                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <span>Article</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="AjouterArticle">Ajouter</a>
                                </li>
                                <li>
                                    <a href="articles">Modifier/Supprimer</a>
                                </li>
                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <span>Conférence</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="AjouterConference">Ajouter</a>
                                </li>
                                <li>
                                    <a href="conferences">Modifier/Supprimer</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <span>Doctorat soutenu</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="/AjouterDoctorat">Ajouter</a>
                                </li>
                                <li>
                                    <a href="/doctorats">Modifier/Supprimer</a>
                                </li>
                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <span>Ouvrage</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="/AjouterOuvrage">Ajouter</a>
                                </li>
                                <li>
                                    <a href="/ouvrages">Modifier/Supprimer</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <span>Manifestation scientifique</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="/AjouterManifestation">Ajouter</a>
                                </li>
                                <li>
                                    <a href="/manifestations">Modifier/Supprimer</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Pr.</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Changer Mot-de-Passe</a>
                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
            @yield('content')
            </div>    
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="assets/js/vendors.js"></script>

    <script src="assets/js/main.js"></script>
    <script>  
        $(document).ready(function(){  
            var i=1;  
            $('#add').click(function(){  
                i++;  
                $('#dynamic_field').append('<div id="row'+i+'" class="input-group mb-2"><input type="text" name="name[]" class="form-control name_list" /> <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div>');  
            });  
            $(document).on('click', '.btn_remove', function(){  
                var button_id = $(this).attr("id");   
                $('#row'+button_id+'').remove();  
            });  
        });  
    </script>
    
</body>

</html>