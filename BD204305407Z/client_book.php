<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/vendors.css">
  <link rel="stylesheet" href="../css/main.css">

  <title>AmazFit</title>
</head>

<body data-barba="wrapper">


  <div class="preloader js-preloader">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
            <path
              d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z"
              fill="#3554D1" />
          </g>

          <defs>
            <clipPath id="clip0_1_41">
              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class="preloader__title">AmazFit</div>
  </div>


  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="index.html" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
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
              include('header_menu.php');
              ?>
            </div>


            <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-email-2 text-20"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-notification text-20"></i>
                </button>
              </div>
            </div>

            <div class="pl-15">
              <img src="img/avatars/3.png" alt="image" class="size-50 rounded-22 object-cover">
            </div>

            <div class="d-none xl:d-flex x-gap-20 items-center pl-20" data-x="header-mobile-icons"
              data-x-toggle="text-white">
              <div><button class="d-flex items-center icon-menu text-20"
                  data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
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
            <a href="client_dash" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/house.svg" alt="image" class="mr-15">
              Inicio de tu cuenta
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button -is-active">
            <a href="client_book" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/sneakers.svg" alt="image" class="mr-15">
              Sus Pedidos
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="client_settings.php" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/gear.svg" alt="image" class="mr-15">
              Detalles de la cuenta
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="db-wishlist.html" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/map.svg" alt="image" class="mr-15">
              Dirección
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
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

            <h1 class="text-30 lh-14 fw-600">Pedidos</h1>
            <div class="text-15 text-light-1">Aquí puedes consultar tus pedidos activos y los completados</div>

          </div>

          <div class="col-auto">

          </div>
        </div>

        <div class="row y-gap-30">

          <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="d-flex justify-between items-center">
              <h2 class="text-22 lh-1 fw-500">
                Órdenes activas
              </h2>
            </div>

            <div class="overflow-scroll scroll-bar-1 pt-30">
              <table class="table-2 col-12">
                <thead class="">
                  <tr class="text-center">
                    <th>Número de orden</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Fecha de Pedido</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>#1</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td class="d-flex justify-center">
                      <div class="rounded-100 py-4 text-center col-6 text-14 fw-500 bg-yellow-4 text-yellow-3">
                        Pending</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                    <td>
                      <div style="border-radius: 10px !important; cursor: pointer;"
                        class="px-4 py-10 text-center col-6 text-14 fw-500 bg-dark-1 text-white">Ver detalles</div>
                    </td>
                  </tr>

                  <tr>
                    <td>#2</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td class="d-flex justify-center">
                      <div class="rounded-100 py-4 col-6 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                        Confirmed</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                    <td>
                      <div style="border-radius: 10px !important; cursor: pointer;"
                        class=" py-10 text-center col-6 text-14 fw-500 bg-dark-1 text-white">Ver detalles</div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

        </div>



        <div class="row y-gap-30 pt-20 mt-3">
          <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="d-flex justify-between items-center mb-3">
              <h2 class="text-22 lh-1 fw-500">
                Pedidos completados
              </h2>
            </div>
            <div class="tabs -underline-2 js-tabs">
              <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                <div class="col-auto">
                  <button
                    class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                    data-tab-target=".-tab-item-1">Todos los pedidos</button>
                </div>

                <div class="col-auto">
                  <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                    data-tab-target=".-tab-item-2">Confirmados</button>
                </div>

                <div class="col-auto">
                  <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                    data-tab-target=".-tab-item-3">Procesados</button>
                </div>

                <div class="col-auto">
                  <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                    data-tab-target=".-tab-item-5">Cacelado</button>
                </div>

                <div class="col-auto">
                  <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                    data-tab-target=".-tab-item-6">Devultos</button>
                </div>

              </div>

              <div class="tabs__content pt-30 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                  <div class="overflow-scroll scroll-bar-1">
                    <table class="table-3 -border-bottom col-12">
                      <thead class="bg-light-2">
                        <tr>
                          <th>Número de orden</th>
                          <th>Items</th>
                          <th>Fecha de la órden</th>
                          <th>Hora de la órden</th>
                          <th>Total</th>
                          <th>Estado</th>
                          <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>#1</td>
                          <td>The May Fair Hotel</td>
                          <td>04/04/2022</td>
                          <td class="lh-16">11:00:00</td>
                          <td class="fw-500">$130</td>
                          <td><span
                              class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span>
                          </td>

                          <td>
                            <div class="dropdown js-dropdown js-actions-1-active">
                              <div
                                class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
                                data-el-toggle=".js-actions-1-toggle" data-el-toggle-active=".js-actions-1-active">
                                <span class="js-dropdown-title">Actions</span>
                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                              </div>

                              <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-1-toggle">
                                <div class="text-14 fw-500 js-dropdown-list">

                                  <div><a href="#" class="d-block js-dropdown-link">Details</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Invoice</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Confirm</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Cancel</a></div>

                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>#2</td>
                          <td>The May Fair Hotel</td>
                          <td>04/04/2022</td>
                          <td class="lh-16">22:30:00</td>
                          <td class="fw-500">$130</td>
                          <td><span
                              class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span>
                          </td>

                          <td>
                            <div class="dropdown js-dropdown js-actions-2-active">
                              <div
                                class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
                                data-el-toggle=".js-actions-2-toggle" data-el-toggle-active=".js-actions-2-active">
                                <span class="js-dropdown-title">Actions</span>
                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                              </div>

                              <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-2-toggle">
                                <div class="text-14 fw-500 js-dropdown-list">

                                  <div><a href="#" class="d-block js-dropdown-link">Details</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Invoice</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Confirm</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Cancel</a></div>

                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>#3</td>
                          <td>The May Fair Hotel</td>
                          <td>04/04/2022</td>
                          <td class="lh-16">14:15:00</td>
                          <td class="fw-500">$130</td>
                          <td><span
                              class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span>
                          </td>

                          <td>
                            <div class="dropdown js-dropdown js-actions-3-active">
                              <div
                                class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
                                data-el-toggle=".js-actions-3-toggle" data-el-toggle-active=".js-actions-3-active">
                                <span class="js-dropdown-title">Actions</span>
                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                              </div>

                              <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-3-toggle">
                                <div class="text-14 fw-500 js-dropdown-list">

                                  <div><a href="#" class="d-block js-dropdown-link">Details</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Invoice</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Confirm</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Cancel</a></div>

                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>#4</td>
                          <td>The May Fair Hotel</td>
                          <td>04/04/2022</td>
                          <td class="lh-16">13:00:05</td>
                          <td class="fw-500">$130</td>
                          <td><span
                              class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span>
                          </td>

                          <td>
                            <div class="dropdown js-dropdown js-actions-4-active">
                              <div
                                class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
                                data-el-toggle=".js-actions-4-toggle" data-el-toggle-active=".js-actions-4-active">
                                <span class="js-dropdown-title">Actions</span>
                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                              </div>

                              <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-4-toggle">
                                <div class="text-14 fw-500 js-dropdown-list">

                                  <div><a href="#" class="d-block js-dropdown-link">Details</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Invoice</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Confirm</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Cancel</a></div>

                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>#5</td>
                          <td>The May Fair Hotel</td>
                          <td>04/04/2022</td>
                          <td class="lh-16">15:32:43</td>
                          <td class="fw-500">$130</td>
                          <td><span
                              class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span>
                          </td>

                          <td>
                            <div class="dropdown js-dropdown js-actions-5-active">
                              <div
                                class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
                                data-el-toggle=".js-actions-5-toggle" data-el-toggle-active=".js-actions-5-active">
                                <span class="js-dropdown-title">Actions</span>
                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                              </div>

                              <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-5-toggle">
                                <div class="text-14 fw-500 js-dropdown-list">

                                  <div><a href="#" class="d-block js-dropdown-link">Details</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Invoice</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Confirm</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Cancel</a></div>

                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="pt-30">
              <div class="row justify-between">
                <div class="col-auto">
                  <button class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-left text-12"></i>
                  </button>
                </div>

                <div class="col-auto">
                  <div class="row x-gap-20 y-gap-20 items-center">

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">1</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">3</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">5</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">...</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">20</div>

                    </div>

                  </div>
                </div>

                <div class="col-auto">
                  <button class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-right text-12"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <footer class="footer -dashboard mt-60">
          <div class="footer__row row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="row y-gap-20 items-center">
                <div class="col-auto">
                  <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
                </div>

                <div class="col-auto">
                  <div class="row x-gap-20 y-gap-10 items-center text-14">
                    <div class="col-auto">
                      <a href="#" class="text-13 lh-1">Privacy</a>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="text-13 lh-1">Terms</a>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="text-13 lh-1">Site Map</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="d-flex x-gap-5 y-gap-5 items-center">
                <button class="text-14 fw-500 underline">English (US)</button>
                <button class="text-14 fw-500 underline">USD</button>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <script src="../js/vendors.js"></script>
  <script src="../js/main.js"></script>
  <script src="../alertifyjs/alertify.js"></script>
  <script src="../js/jquery-3.6.1.min.js"></script>
</body>

</html>