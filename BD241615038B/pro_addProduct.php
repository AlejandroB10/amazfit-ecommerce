<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/vendors.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">
    <style>
        .toggle-form.active {
            background-color: #051036 !important;
            /* Cambia a tu color azul oscuro */
            color: #ffffff;
            /* Blanco para el texto */
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .dashboard__main {
            overflow: hidden;
            height: 100%;
            width: 100%;
            padding-left: var(--dashboard-width);
            will-change: padding-left;
            transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        .dashboard__content {
            width: 100%;
            min-height: 100vh;
            /* vh significa viewport height */
            padding: 60px;
            padding-bottom: 0;
        }
    </style>
    <title>AmazFit</title>
</head>

<body data-barba="wrapper">

    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
                <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_41)">
                        <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
                    </g>

                    <defs>
                        <clipPath id="clip0_1_41">
                            <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </div>

    <div class="preloader__title">AmazFit</div>
    </div>

    <div class="header-margin"></div>
    <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
        <div data-anim="fade" class="header__container px-30 sm:px-20">
            <div class="-left-side">
                <a href="../index.php" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
                    <img src="../img/general/logo-dark.svg" alt="logo icon">
                    <img src="../img/general/logo-dark.svg" alt="logo icon">
                </a>
            </div>

            <div class="row justify-between items-center pl-60 lg:pl-20">
                <div class="col-auto">
                    <div class="d-flex items-center">
                        <button data-x-click="dashboard">
                            <i class="icon-menu-2 text-20"></i>
                        </button>

                        <div class="single-field relative d-flex items-center md:d-none ml-30">
                            <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
                            <button class="absolute d-flex items-center h-full">
                                <i class="icon-search text-20 px-15 text-dark-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex items-center">

                        <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                            <div class="mobile-overlay"></div>

                            <?php
                            include('../BD204305407Z/header_menu.php');
                            ?>
                        </div>

                        <div class="d-none xl:d-flex x-gap-20 items-center pl-20" data-x="header-mobile-icons" data-x-toggle="text-white">
                            <div><button class="d-flex items-center icon-menu text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
        <div class="dashboard__sidebar bg-white scroll-bar-1">
            <div class="sidebar -dashboard">

                <div class="sidebar__item">
                    <div class="sidebar__button">
                        <a href="pro_dash.php" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="../img/dashboard/sidebar/house.svg" alt="image" class="mr-15">
                            Inicio de tu cuenta
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button ">
                        <a href="pro_products.php" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="../img/dashboard/sidebar/sneakers.svg" alt="image" class="mr-15">
                            Sus Productos
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button">
                        <a href="pro_settings.php" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="../img/dashboard/sidebar/gear.svg" alt="image" class="mr-15">
                            Detalles de la cuenta
                        </a>
                    </div>
                </div>

                <div class="sidebar__item">
                    <div class="sidebar__button ">
                        <a href="../BD204305407Z/userLogout.php" class="d-flex items-center text-15 lh-1 fw-500">
                            <img src="../img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
                            Cerrar Sesión
                        </a>
                    </div>
                </div>

            </div>


        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">
                <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                    <div class="col-auto">

                        <h1 class="text-30 lh-14 fw-600">Productos</h1>
                        <div class="text-15 text-light-1">Aquí puedes añadir productos</div>

                    </div>
                </div>

                <div class="col-auto">
                    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                        <div class="tabs -underline-2 js-tabs">
                            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                                <div class="col-auto">
                                    <div id="producto_btn" style="border-radius: 10px !important; cursor: pointer;" class="toggle-form px-4 py-4 text-underline text-center text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0  fw-500 bg-white text-dark-1 border-4 border-dark-1">Añadir producto</div>
                                </div>
                            </div>

                            <div class="tabs__content pt-30 js-tabs-content">
                                <div class="col-xl-12 card-content">
                                </div>
                                <div class="form-container" id="productoForm">
                                    <div class="col-xl-12">
                                        <div class="row x-gap-20 y-gap-20">
                                            <div class="col-12">

                                                <h1>Añadir Producto Nuevo</h1>
                                                <form action="addProduct.php" method="post" id="formularioProducto">
                                                    <div class="form-input">
                                                        <input type="text" id="nombre" name="nombre" required>
                                                        <label class="lh-1 text-16 text-light-1">Nombre del Producto:</label>
                                                    </div>

                                                    <div class="form-input">
                                                        <textarea id="descripcion" name="descripcion" required></textarea>
                                                        <label class="lh-1 text-16 text-light-1">Descripción:</label>
                                                    </div>

                                                    <div class="form-input">
                                                        <input type="number" id="precio" name="precio" step="0.01" required>
                                                        <label class="lh-1 text-16 text-light-1">Precio:</label>
                                                    </div>

                                                    <div class="form-input">
                                                        <input type="number" id="descuento" name="descuento">
                                                        <label class="lh-1 text-16 text-light-1">Descuento (%):</label>
                                                    </div>

                                                    <div class="form-input">
                                                        <input type="number" id="stock" name="stock" required>
                                                        <label class="lh-1 text-16 text-light-1">Stock:</label>
                                                    </div>

                                                    <div class="form-input">
                                                        <select id="activo" name="activo" required>
                                                            <option value="1">Sí</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                        <label class="lh-1 text-16 text-light-1">Activo:</label>
                                                    </div>

                                                    <div class="form-input">
                                                        <select id="categoria" name="categoria" required>
                                                            <option value="" selected>Elige una categoría</option>
                                                            <?php
                                                            include('../conexion.php'); // Asegúrate de que este path sea correcto

                                                            $sql = "SELECT nombreCat FROM Categoria";
                                                            $result = consultar("localhost", "root", "", $sql);

                                                            if ($result->num_rows > 0) {
                                                                // Mostrar cada fila de resultado como una opción en el desplegable
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    echo "<option value='" . $row["nombreCat"] . "'>" . $row["nombreCat"] . "</option>";
                                                                }
                                                            } else {
                                                                echo "<option value=''>No hay categorías disponibles</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                        <label class="lh-1 text-16 text-light-1">Categoría:</label>
                                                    </div>

                                                    <div class="col-12">
                                                        <input type="submit" value="Añadir Producto" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            // Mostrar u ocultar el formulario al hacer clic en "Añadir producto"
                            $(".toggle-form").click(function() {
                                $(".card-content").toggle();
                                $(".form-container").toggle();
                                // Cambiar el estilo del botón cuando el formulario está activo
                                $(this).toggleClass("active");
                            });
                        });

                        document.getElementById("formularioProducto").onsubmit = function() {
                            var nombre = document.getElementById("nombre").value;
                            var precio = document.getElementById("precio").value;

                            if (nombre === "" || precio === "") {
                                alert("Por favor, completa todos los campos requeridos.");
                                return false;
                            }

                            return true;
                        };
                    </script>

                    <!-- JavaScript -->
                    <script src="../js/vendors.js"></script>
                    <script src="../js/main.js"></script>
                    <script src="../alertifyjs/alertify.js"></script>
                    <script src="../js/jquery-3.6.1.min.js"></script>

</body>

</html>