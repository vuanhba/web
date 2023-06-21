<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/assets/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ modules_asset('Products/public/css/style.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body id="page-top">
    <header class="bg-light header_bg">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand logo_menu" href="#">
            <img src="http://localhost/web/public/client/assets/img/logo.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Category 1</a></li>
                  <li><a class="dropdown-item" href="#">Category 2</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">All Products</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 icon_menu_right">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Search_Magnifying_Glass"> <path id="Vector" d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg width="64px" height="64px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile [#1341]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -2159.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M134,2008.99998 C131.783496,2008.99998 129.980955,2007.20598 129.980955,2004.99998 C129.980955,2002.79398 131.783496,2000.99998 134,2000.99998 C136.216504,2000.99998 138.019045,2002.79398 138.019045,2004.99998 C138.019045,2007.20598 136.216504,2008.99998 134,2008.99998 M137.775893,2009.67298 C139.370449,2008.39598 140.299854,2006.33098 139.958235,2004.06998 C139.561354,2001.44698 137.368965,1999.34798 134.722423,1999.04198 C131.070116,1998.61898 127.971432,2001.44898 127.971432,2004.99998 C127.971432,2006.88998 128.851603,2008.57398 130.224107,2009.67298 C126.852128,2010.93398 124.390463,2013.89498 124.004634,2017.89098 C123.948368,2018.48198 124.411563,2018.99998 125.008391,2018.99998 C125.519814,2018.99998 125.955881,2018.61598 126.001095,2018.10898 C126.404004,2013.64598 129.837274,2010.99998 134,2010.99998 C138.162726,2010.99998 141.595996,2013.64598 141.998905,2018.10898 C142.044119,2018.61598 142.480186,2018.99998 142.991609,2018.99998 C143.588437,2018.99998 144.051632,2018.48198 143.995366,2017.89098 C143.609537,2013.89498 141.147872,2010.93398 137.775893,2009.67298" id="profile-[#1341]"> </path> </g> </g> </g> </g></svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg fill="#000000" width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>alt-heart</title> <path d="M0.256 12.16q0.544 2.048 2.080 3.616l13.664 14.24 13.664-14.24q1.536-1.568 2.080-3.616t0-4.16-2.080-3.616-3.584-2.112-4.16 0-3.584 2.112l-2.336 2.816-2.336-2.816q-1.536-1.568-3.584-2.112t-4.128 0-3.616 2.112-2.080 3.616 0 4.16zM4 10.080q0-1.664 1.184-2.88 1.152-1.152 2.816-1.152t2.848 1.152l5.152 5.728 5.152-5.728q1.184-1.152 2.848-1.152t2.816 1.152q1.184 1.216 1.184 2.88t-1.184 2.848l-10.816 11.392-10.816-11.392q-1.184-1.184-1.184-2.848z"></path> </g></svg>
                  <span class="badge rounded-pill bg-danger">2</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg width="64px" height="64px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>shopping_cart [#1135]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -3119.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M180.846448,2977 L167.153448,2977 C166.544448,2977 166.077448,2976.461 166.163448,2975.859 L167.306448,2967.859 C167.376448,2967.366 167.798448,2967 168.296448,2967 L168.999448,2967 L168.999448,2969 C168.999448,2969.552 169.447448,2970 169.999448,2970 C170.552448,2970 170.999448,2969.552 170.999448,2969 L170.999448,2967 L176.999448,2967 L176.999448,2969 C176.999448,2969.552 177.447448,2970 177.999448,2970 C178.552448,2970 178.999448,2969.552 178.999448,2969 L178.999448,2967 L179.703448,2967 C180.201448,2967 180.623448,2967.366 180.693448,2967.859 L181.836448,2975.859 C181.922448,2976.461 181.455448,2977 180.846448,2977 L180.846448,2977 Z M170.999448,2964 C170.999448,2962.346 172.345448,2961 173.999448,2961 C175.654448,2961 176.999448,2962 176.999448,2964 L176.999448,2965 L170.999448,2965 L170.999448,2964 Z M183.979448,2976.717 L182.550448,2966.717 C182.410448,2965.732 181.566448,2965 180.570448,2965 L178.999448,2965 L178.999448,2964 C178.999448,2961 176.756448,2959 173.999448,2959 C171.243448,2959 168.999448,2961.243 168.999448,2964 L168.999448,2965 L167.734448,2965 C166.739448,2965 165.589448,2965.732 165.448448,2966.717 L164.020448,2976.717 C163.848448,2977.922 164.783448,2979 166.000448,2979 L181.999448,2979 C183.216448,2979 184.151448,2977.922 183.979448,2976.717 L183.979448,2976.717 Z" id="shopping_cart-[#1135]"> </path> </g> </g> </g> </g></svg>
                   <span class="badge rounded-pill bg-danger">3</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

        <section class="bg-cover" style="background:url({{ asset('client/assets/img/cover-1.jpg') }}) no-repeat;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="text-center py-5 mt-3 mb-3">
                            <h1 class="ft-medium mb-3">Shop</h1>
                            <ul class="shop_categories_list m-0 p-0">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="py-2 br-bottom br-top filter_breadcrumb">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                            @include('RootViews::modules.breadcrumb')
                        </div>
                        
                        <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                            <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                                <div class="single_fitres elspo_filter mr-2 br-right">
                                    <a href="#filterBox" class="simple-button px-2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="filterBox"><i class="lni lni-text-align-right mr-2"></i><span class="hide_mob">Filters</span></a>
                                </div>
                                <div class="single_fitres mr-2 br-right">
                                    <select class="custom-select simple">
                                      <option value="1" selected="">Default Sorting</option>
                                      <option value="2">Sort by price: Low price</option>
                                      <option value="3">Sort by price: Hight price</option>
                                      <option value="4">Sort by rating</option>
                                      <option value="5">Sort by trending</option>
                                    </select>
                                </div>
                                <div class="single_fitres">
                                    <a href="shop-style-4.html" class="simple-button mr-1"><i class="ti-layout-grid3"></i></a>
                                    <a href="shop-grid-3.html" class="simple-button mr-1"><i class="ti-layout-grid2"></i></a>
                                    <a href="shop-list-view.html" class="simple-button active"><i class="ti-view-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="collapse" id="filterBox">
                                <div class="card py-3 b-0">
                                    <div class="row">
                                        
                                        <!-- Choose Category -->
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                            <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Choose Categories</h6></div>
                                            <div class="single_filter_card mb-2">
                                                <h5><a href="#mens" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Men's<i class="accordion-indicator ti-angle-down"></i></a></h5>
                                                <div class="collapse" id="mens" data-parent="#mens-categories">
                                                    <div class="card-body">
                                                        <div class="inner_widget_link">
                                                            <ul class="m-0 p-0">
                                                                <li><a href="#">Pumps &amp; high Heals<span>112</span></a></li>
                                                                <li><a href="#">Sandels<span>82</span></a></li>
                                                                <li><a href="#">Sneakers<span>56</span></a></li>
                                                                <li><a href="#">Boots<span>101</span></a></li>
                                                                <li><a href="#">Casual Shoes<span>212</span></a></li>
                                                                <li><a href="#">Flats Sandel<span>92</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_filter_card">
                                                <h5><a href="#womens" data-toggle="collapse" class="collapsed" aria-expanded="false" role="button">Women's<i class="accordion-indicator ti-angle-down"></i></a></h5>
                                                <div class="collapse" id="womens" data-parent="#womens-categories">
                                                    <div class="card-body">
                                                        <div class="inner_widget_link">
                                                            <ul class="p-0 m-0">
                                                                <li><a href="#">Pumps &amp; high Heals<span>112</span></a></li>
                                                                <li><a href="#">Sandels<span>82</span></a></li>
                                                                <li><a href="#">Sneakers<span>56</span></a></li>
                                                                <li><a href="#">Boots<span>101</span></a></li>
                                                                <li><a href="#">Casual Shoes<span>212</span></a></li>
                                                                <li><a href="#">Flats Sandel<span>92</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Choose Category -->
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                            <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Choose Size</h6></div>
                                            <div class="text-left pb-0 pt-2">
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="size" id="a26">
                                                    <label class="form-option-label" for="a26">26</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="size" id="a28">
                                                    <label class="form-option-label" for="a28">28</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a30" checked="">
                                                    <label class="form-option-label" for="a30">30</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a32">
                                                    <label class="form-option-label" for="a32">32</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a34">
                                                    <label class="form-option-label" for="a34">34</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a36">
                                                    <label class="form-option-label" for="a36">36</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a38">
                                                    <label class="form-option-label" for="a38">38</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a40">
                                                    <label class="form-option-label" for="a40">40</label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="sizes" id="a42">
                                                    <label class="form-option-label" for="a42">42</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Choose Category -->
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                            <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Choose Colors</h6></div>
                                            <div class="text-left">
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="whitea8">
                                                    <label class="form-option-label rounded-circle" for="whitea8"><span class="form-option-color rounded-circle blc7"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="bluea8">
                                                    <label class="form-option-label rounded-circle" for="bluea8"><span class="form-option-color rounded-circle blc2"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="yellowa8">
                                                    <label class="form-option-label rounded-circle" for="yellowa8"><span class="form-option-color rounded-circle blc5"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="pinka8">
                                                    <label class="form-option-label rounded-circle" for="pink8"><span class="form-option-color rounded-circle blc3"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="ared">
                                                    <label class="form-option-label rounded-circle" for="red"><span class="form-option-color rounded-circle blc4"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="agreen">
                                                    <label class="form-option-label rounded-circle" for="agreen"><span class="form-option-color rounded-circle blc6"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="askypet">
                                                    <label class="form-option-label rounded-circle" for="askypet"><span class="form-option-color rounded-circle blc9"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="aphilips">
                                                    <label class="form-option-label rounded-circle" for="aphilips"><span class="form-option-color rounded-circle blc8"></span></label>
                                                </div>
                                                <div class="form-check form-option form-check-inline mb-1">
                                                    <input class="form-check-input" type="radio" name="colora8" id="aelio">
                                                    <label class="form-option-label rounded-circle" for="aelio"><span class="form-option-color rounded-circle blc1"></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Choose Category -->
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                            <div class="single_filter_title mb-2"><h6 class="mb-0 fs-sm ft-medium text-muted">Filter By Price</h6></div>
                                            <div class="side-list mb-2">
                                                <div class="rg-slider">
                                                     <span class="irs irs--flat js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="">0</span><span class="irs-max" style="">1 000</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: hidden;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: hidden;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: hidden;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%">1 000</span></span><span class="irs-bar"></span><span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-handle from"><i></i><i></i><i></i></span><span class="irs-handle to type_last"><i></i><i></i><i></i></span></span><input type="text" class="js-range-slider irs-hidden-input" name="my_range" value="" tabindex="-1" readonly="">
                                                </div>      
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

    <main>
      <section class="container my-5">
        <h1>Welcome to My Website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique nisl a lacus eleifend vehicula. Cras sagittis pulvinar mauris eu rhoncus. Sed porttitor ante at eros aliquet, non bibendum mi lacinia. Fusce nec libero vulputate, blandit enim nec, maximus dolor. Fusce metus est, consequat eget luctus ac, commodo in enim. Donec consectetur quam et vestibulum pretium. Vestibulum vel orci a justo faucibus congue.</p>
      </section>
    </main>

    <footer class="bg-light text-center py-3">
      &copy; 2023 My Website
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>