<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">

  <title>AmazFit</title>
</head>

<body>

  <main>

  <?php
    include('header.php');
  ?>


    <section data-anim-wrap class="masthead -type-6">
      <div data-anim-child="fade" class="masthead__bg bg-dark-3">
        <img src="img/masthead/6/bg.png" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center">
          <div class="col-xl-9">
            <div class="text-center">
              <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">The World is Waiting For You</h1>
              <p data-anim-child="slide-up delay-5" class="text-white mt-5">Discover amzaing places at exclusive deals</p>
            </div>

            <div data-anim-child="slide-up delay-6" class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100 mt-40">
              <div class="button-grid items-center">

                <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                  <div data-x-dd-click="searchMenu-loc">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
                    </div>
                  </div>


                  <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                      <div class="y-gap-5 js-results">

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                              </div>
                            </div>
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>


                <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar">

                  <div data-x-dd-click="searchMenu-date">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <span class="js-first-date">Wed 2 Mar</span>
                      -
                      <span class="js-last-date">Fri 11 Apr</span>
                    </div>
                  </div>


                  <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 rounded-4">
                      <div class="overflow-hidden js-calendar-slider">
                        <div class="swiper-wrapper">


                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">January 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="1" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="2" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="3" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="4" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="5" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="6" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="7" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="8" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="9" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="10" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="11" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="12" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="13" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="14" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="15" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="16" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="17" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="18" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="19" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="20" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="21" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="22" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="23" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="24" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="25" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="26" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="27" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="28" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="29" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="30" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="31" data-week="Tue" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="32" data-week="Wed" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="33" data-week="Thu" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="34" data-week="Fri" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="35" data-week="Sat" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="36" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="37" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">February 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="38" data-week="Sun" data-month="Jan" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="39" data-week="Mon" data-month="Jan" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="40" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="41" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="42" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="43" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="44" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="45" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="46" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="47" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="48" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="49" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="50" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="51" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="52" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="53" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="54" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="55" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="56" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="57" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="58" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="59" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="60" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="61" data-week="Tue" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="62" data-week="Wed" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="63" data-week="Thu" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="64" data-week="Fri" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="65" data-week="Sat" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="66" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="67" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">March 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="68" data-week="Sun" data-month="Feb" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="69" data-week="Mon" data-month="Feb" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="70" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="71" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="72" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="73" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="74" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="75" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="76" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="77" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="78" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="79" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="80" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="81" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="82" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="83" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="84" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="85" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="86" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="87" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="88" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="89" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="90" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="91" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="92" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="93" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="94" data-week="Fri" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="95" data-week="Sat" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="96" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="97" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="98" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="99" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="100" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">April 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="101" data-week="Sun" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="102" data-week="Mon" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="103" data-week="Tue" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="104" data-week="Wed" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="105" data-week="Thu" data-month="Mar" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="106" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="107" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="108" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="109" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="110" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="111" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="112" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="113" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="114" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="115" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="116" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="117" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="118" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="119" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="120" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="121" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="122" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="123" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="124" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="125" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="126" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="127" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="128" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="129" data-week="Sun" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="130" data-week="Mon" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="131" data-week="Tue" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="132" data-week="Wed" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="133" data-week="Thu" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="134" data-week="Fri" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="135" data-week="Sat" data-month="Apr" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">May 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="136" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="137" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="138" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="139" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="140" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="141" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="142" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="143" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="144" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="145" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="146" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="147" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="148" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="149" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="150" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="151" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="152" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="153" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="154" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="155" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="156" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="157" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="158" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="159" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="160" data-week="Wed" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="161" data-week="Thu" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="162" data-week="Fri" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="163" data-week="Sat" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="164" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="165" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="166" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">June 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="167" data-week="Sun" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="168" data-week="Mon" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="169" data-week="Tue" data-month="May" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="170" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="171" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="172" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="173" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="174" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="175" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="176" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="177" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="178" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="179" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="180" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="181" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="182" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="183" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="184" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="185" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="186" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="187" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="188" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="189" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="190" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="191" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="192" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="193" data-week="Fri" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="194" data-week="Sat" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="195" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="196" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="197" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="198" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="199" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">July 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="200" data-week="Sun" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="201" data-week="Mon" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="202" data-week="Tue" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="203" data-week="Wed" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="204" data-week="Thu" data-month="Jun" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="205" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="206" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="207" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="208" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="209" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="210" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="211" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="212" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="213" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="214" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="215" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="216" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="217" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="218" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="219" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="220" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="221" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="222" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="223" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="224" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="225" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="226" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="227" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="228" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="229" data-week="Mon" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="230" data-week="Tue" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="231" data-week="Wed" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="232" data-week="Thu" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="233" data-week="Fri" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="234" data-week="Sat" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="235" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">August 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="236" data-week="Sun" data-month="Jul" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="237" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="238" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="239" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="240" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="241" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="242" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="243" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="244" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="245" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="246" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="247" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="248" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="249" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="250" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="251" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="252" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="253" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="254" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="255" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="256" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="257" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="258" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="259" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="260" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="261" data-week="Thu" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="262" data-week="Fri" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="263" data-week="Sat" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="264" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="265" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="266" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="267" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">September 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="268" data-week="Sun" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="269" data-week="Mon" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="270" data-week="Tue" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="271" data-week="Wed" data-month="Aug" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="272" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="273" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="274" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="275" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="276" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="277" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="278" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="279" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="280" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="281" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="282" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="283" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="284" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="285" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="286" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="287" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="288" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="289" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="290" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="291" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="292" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="293" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="294" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="295" data-week="Sat" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="296" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="297" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="298" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="299" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="300" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="301" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">October 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="302" data-week="Sun" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="303" data-week="Mon" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="304" data-week="Tue" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="305" data-week="Wed" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="306" data-week="Thu" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="307" data-week="Fri" data-month="Sep" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="308" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="309" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="310" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="311" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="312" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="313" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="314" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="315" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="316" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="317" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="318" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="319" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="320" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="321" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="322" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="323" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="324" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="325" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="326" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="327" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="328" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="329" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="330" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="331" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="332" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="333" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="334" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="335" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="336" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="337" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="338" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="339" data-week="Tue" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="340" data-week="Wed" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="341" data-week="Thu" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="342" data-week="Fri" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="343" data-week="Sat" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="344" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="345" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">November 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="346" data-week="Sun" data-month="Oct" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="347" data-week="Mon" data-month="Oct" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">31</span>


                                </div>


                                <div data-index="348" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="349" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="350" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="351" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="352" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="353" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="354" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="355" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="356" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="357" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="358" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="359" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="360" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="361" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="362" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="363" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="364" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="365" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="366" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="367" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="368" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="369" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="370" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="371" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="372" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="373" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="374" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="375" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="376" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="377" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="378" data-week="Thu" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="379" data-week="Fri" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="380" data-week="Sat" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="381" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="382" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="383" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="384" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="text-28 fw-500 text-center mb-10">December 2022</div>

                            <div class="table-calendar js-calendar-single">
                              <div class="table-calendar__header">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                              </div>

                              <div class="table-calendar__grid overflow-hidden">

                                <div data-index="385" data-week="Sun" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="386" data-week="Mon" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="387" data-week="Tue" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="388" data-week="Wed" data-month="Nov" class="table-calendar__cell lh-1 text-light-1">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="389" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">1</span>


                                </div>


                                <div data-index="390" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="391" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="392" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="393" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="394" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="395" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="396" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="397" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">2</span>


                                </div>


                                <div data-index="398" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">3</span>


                                </div>


                                <div data-index="399" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">4</span>


                                </div>


                                <div data-index="400" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">5</span>


                                </div>


                                <div data-index="401" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">6</span>


                                </div>


                                <div data-index="402" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">7</span>


                                </div>


                                <div data-index="403" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">8</span>


                                </div>


                                <div data-index="404" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">9</span>


                                </div>


                                <div data-index="405" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">10</span>


                                </div>


                                <div data-index="406" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">11</span>


                                </div>


                                <div data-index="407" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">12</span>


                                </div>


                                <div data-index="408" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">13</span>


                                </div>


                                <div data-index="409" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">14</span>


                                </div>


                                <div data-index="410" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">15</span>


                                </div>


                                <div data-index="411" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">16</span>


                                </div>


                                <div data-index="412" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">17</span>


                                </div>


                                <div data-index="413" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">18</span>


                                </div>


                                <div data-index="414" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">19</span>


                                </div>


                                <div data-index="415" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">20</span>


                                </div>


                                <div data-index="416" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">21</span>


                                </div>


                                <div data-index="417" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">22</span>


                                </div>


                                <div data-index="418" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">23</span>


                                </div>


                                <div data-index="419" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">24</span>


                                </div>


                                <div data-index="420" data-week="Sun" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">25</span>


                                </div>


                                <div data-index="421" data-week="Mon" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">26</span>


                                </div>


                                <div data-index="422" data-week="Tue" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">27</span>


                                </div>


                                <div data-index="423" data-week="Wed" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">28</span>


                                </div>


                                <div data-index="424" data-week="Thu" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">29</span>


                                </div>


                                <div data-index="425" data-week="Fri" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">30</span>


                                </div>


                                <div data-index="426" data-week="Sat" data-month="Dec" class="table-calendar__cell lh-1 ">
                                  <span class="js-date">31</span>


                                </div>


                              </div>
                            </div>
                          </div>

                        </div>

                        <button class="calendar-icon -left js-calendar-prev z-2">
                          <i class="icon-arrow-left text-24"></i>
                        </button>

                        <button class="calendar-icon -right js-calendar-next z-2">
                          <i class="icon-arrow-right text-24"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                  <div data-x-dd-click="searchMenu-guests">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <span class="js-count-adult">2</span> adults
                      -
                      <span class="js-count-child">1</span> childeren
                      -
                      <span class="js-count-room">1</span> room
                    </div>
                  </div>


                  <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 rounded-4">
                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 fw-500">Adults</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">2</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="border-top-light mt-24 mb-24"></div>

                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 lh-12 fw-500">Children</div>
                          <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="border-top-light mt-24 mb-24"></div>

                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 fw-500">Rooms</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="button-item">
                  <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-100 bg-blue-1 text-white">
                    <i class="icon-search text-20 mr-10"></i>
                    Search
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md bg-light-2">
      <div class="container">
        <div class="row y-gap-30">

          <div class="col-lg-4 col-md-6">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/1.svg" alt="image">

              <div class="ml-15">
                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/2.svg" alt="image">

              <div class="ml-15">
                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/3.svg" alt="image">

              <div class="ml-15">
                <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Special Offers</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-20 pt-40">
          <div data-anim-child="slide-up delay-2" class="col-lg-4 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 -no-overlay">
              <div class="ctaCard__image ratio ratio-41:35">
                <img class="img-ratio js-lazy" src="#" data-src="img/features/1.png" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 xl:py-30 xl:px-30">


                <h4 class="text-30 xl:text-24 text-white">Things To Do On<br class='lg:d-none'> Your Trip</h4>

                <div class="d-inline-block mt-30">
                  <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Experiences</a>
                </div>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-4 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 -no-overlay">
              <div class="ctaCard__image ratio ratio-41:35">
                <img class="img-ratio js-lazy" src="#" data-src="img/features/2.png" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 xl:py-30 xl:px-30">

                <div class="text-15 fw-500 text-white mb-10">Enjoy Summer Deals</div>


                <h4 class="text-30 xl:text-24 text-white">Up To 70% Discount!</h4>

                <div class="d-inline-block mt-30">
                  <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn More</a>
                </div>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-lg-4 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 -no-overlay">
              <div class="ctaCard__image ratio ratio-41:35">
                <img class="img-ratio js-lazy" src="#" data-src="img/features/3.png" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 xl:py-30 xl:px-30">


                <h4 class="text-30 xl:text-24 text-white">Let Your Vuriosity Do Yhe Booking</h4>

                <div class="d-inline-block mt-30">
                  <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn More</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Trending Activity</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <div data-anim-child="slide-up delay-2" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      LIKELY TO SELL OUT*
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day Trip</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">


                    <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <img class="col-12" src="img/activities/2.png" alt="image">
                        </div>

                        <div class="swiper-slide">
                          <img class="col-12" src="img/activities/3.png" alt="image">
                        </div>

                        <div class="swiper-slide">
                          <img class="col-12" src="img/activities/4.png" alt="image">
                        </div>

                        <div class="swiper-slide">
                          <img class="col-12" src="img/activities/1.png" alt="image">
                        </div>

                      </div>

                      <div class="cardImage-slider__pagination js-pagination"></div>

                      <div class="cardImage-slider__nav -prev">
                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                          <i class="icon-chevron-left text-10"></i>
                        </button>
                      </div>

                      <div class="cardImage-slider__nav -next">
                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                          <i class="icon-chevron-right text-10"></i>
                        </button>
                      </div>
                    </div>

                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>Edinburgh Sky to Sea Bike Tour by Manual or E-Bike</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Ciutat Vella, Barcelona</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/3.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>Natural Crystal Blue Ice Cave Tour of Vatnajökull Glacier</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Manhattan, New York</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-5" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/4.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                      Top Rated
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>South Coast Full Day Tour by Minibus from Reykjavik</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Vaticano Prati, Rome</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Adventure &amp; Activity</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <div class="col-xl col-md-4 col-sm-6">

            <a href="tour-single.html" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <i class="icon-camping text-60 sm:text-40 text-blue-1"></i>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Camping</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">5 Tours From 550$</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="tour-single.html" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <i class="icon-hiking-2 text-60 sm:text-40 text-blue-1"></i>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Trekking</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">5 Tours From 550$</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="tour-single.html" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <i class="icon-fire text-60 sm:text-40 text-blue-1"></i>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Camp Fire</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">5 Tours From 550$</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="tour-single.html" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <i class="icon-jeep text-60 sm:text-40 text-blue-1"></i>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Off Road</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">5 Tours From 550$</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="tour-single.html" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <i class="icon-traveller text-60 sm:text-40 text-blue-1"></i>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Exploring</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">5 Tours From 550$</p>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Popular Destinations</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>

          <div class="col-auto">
            <a href="#" class="button -blue-1 -md bg-blue-1-05 text-blue-1">
              View All Destinations
              <i class="icon-arrow-top-right ml-10"></i>
            </a>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/destinations/1/1.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">New York</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/destinations/1/2.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">London</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/destinations/1/3.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Barcelona</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/destinations/1/4.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Sydney</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/destinations/1/5.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Rome</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

          </div>

          <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>
        </div>
      </div>
    </section>

    <section class="section-bg layout-pt-lg layout-pb-lg bg-light-2">
      <div class="section-bg__item col-12">
        <img src="img/backgrounds/testimonials/bg-2.svg" alt="image">
      </div>

      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Testimonials</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row justify-center pt-50 md:pt-30">
          <div class="col-xl-7 col-lg-10">
            <div class="overflow-hidden js-testimonials-slider">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="pt-60 lg:pt-40">
                <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                  <div class="col-auto">
                    <div class="pagination__item is-active">
                      <img src="img/avatars/testimonials/1.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="img/avatars/testimonials/2.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="img/avatars/testimonials/3.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="img/avatars/testimonials/4.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="img/avatars/testimonials/5.png" alt="image">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Recommended Activity</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <div data-anim-child="slide-up delay-2" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      LIKELY TO SELL OUT*
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/2.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Edinburgh Sky to Sea Bike Tour by Manual or E-Bike</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Ciutat Vella, Barcelona</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/3.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Natural Crystal Blue Ice Cave Tour of Vatnajökull Glacier</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Manhattan, New York</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-5" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/4.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                      Top Rated
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>South Coast Full Day Tour by Minibus from Reykjavik</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Vaticano Prati, Rome</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-6" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/5.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      Likely to sell out
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div class="container">
        <div class="row y-gap-30 items-center justify-between">
          <div class="col-xl-6">
            <img src="img/app/2.svg" alt="image">
          </div>

          <div class="col-xl-5">
            <h2 class="text-30 lh-15">Download the App</h2>
            <p class="text-dark-1 pr-40 lg:pr-0 mt-15 sm:mt-5">Book in advance or last-minute with GoTrip. Receive instant confirmation. Access your booking info offline.</p>

            <div class="row items-center pt-30 sm:pt-10">
              <div class="col-auto">
                <div class="d-flex items-center px-20 py-10 rounded-8 border-white-15 text-white bg-dark-3">
                  <div class="icon-apple text-24"></div>
                  <div class="ml-20">
                    <div class="text-14">Download on the</div>
                    <div class="text-15 lh-1 fw-500">Apple Store</div>
                  </div>
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center px-20 py-10 rounded-8 border-white-15 text-white bg-dark-3">
                  <div class="icon-play-market text-24"></div>
                  <div class="ml-20">
                    <div class="text-14">Get in on</div>
                    <div class="text-15 lh-1 fw-500">Google Play</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40">

          <div data-anim-child="slide-up delay-2" class="col-lg-6">
            <a href="blog-single-1.html" class="row y-gap-20 items-center">
              <div class="col-auto">
                <img class="size-250 rounded-4" src="img/blog/1.png" alt="image">
              </div>

              <div class="col">
                <div class="text-15 text-light-1">April 06, 2022</div>
                <h4 class="text-22 fw-600 text-dark-1 mt-10">10 European ski destinations you should visit this winter</h4>
                <p class="mt-10">Ut enim ad minim veniam, quis nostrud exerc ullamco laboris nisi ut aliquip.</p>
              </div>
            </a>
          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-6">
            <a href="blog-single-1.html" class="row y-gap-20 items-center">
              <div class="col-auto">
                <img class="size-250 rounded-4" src="img/blog/2.png" alt="image">
              </div>

              <div class="col">
                <div class="text-15 text-light-1">April 06, 2022</div>
                <h4 class="text-22 fw-600 text-dark-1 mt-10">Booking travel during Corona: good advice in an uncertain time</h4>
                <p class="mt-10">Ut enim ad minim veniam, quis nostrud exerc ullamco laboris nisi ut aliquip.</p>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>

<?php
  include ('footer.php');
?>

  </main>


  <!-- JavaScript -->

  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
</body>

</html>