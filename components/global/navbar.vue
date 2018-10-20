<template>
    <!-- Navbar Start -->
    <div uk-grid>
        <div class="uk-width-1-1">

            <div uk-sticky="show-on-up: true; animation: uk-animation-slide-top; bottom: #bottom">
                <nav class="uk-navbar-container uk-box-shadow-material-small" uk-navbar style="position: relative; z-index: 980;">
                    <div class="uk-navbar-left">
                        <div class="uk-visible@m uk-margin-medium-left">
                            <a class="" href="http://localhost/proto/merchant/index.php/">
                            <img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                alt="Logo Phinemo" height="" width=""></a>
                        </div>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active  uk-hidden@m"><a href="" uk-toggle="target: #offcanvas-menu"><span uk-icon="menu"></span></a></li>
                                <li v-for="(navitem,index) in navitems" :key="index" class="uk-active uk-text-bold uk-visible@m">
                                    <a :href="navitem.ref">{{navitem.name}}</a></li>

                        </ul>
                    </div>
                    <a class="uk-navbar-center" href="http://localhost/proto/merchant/index.php/">
                        <div class="uk-hidden@m">
                            <img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                alt="Logo Phinemo" height="" width="">
                        </div>
                    </a>
                    <div class="uk-navbar-right">
                        <div>
                            <a class="uk-navbar-toggle" uk-search-icon href="#modal-search" uk-toggle></a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Modal -->
            <div id="modal-search" class="uk-modal-full uk-animation-toggle" uk-modal>
                <div class="uk-modal-dialog uk-panel uk-width-1-3">
                    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                    <div class="uk-grid-collapse uk-child-width-1-1@s uk-flex-middle"  style="background:white;" uk-grid>

                        <div class="uk-padding uk-margin-top">

                            <div class="uk-text-center uk-margin-small-bottom">
                                <img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                    alt="Logo Phinemo" height="" width="">
                            </div>

                            <form class="uk-search uk-search-navbar uk-animation-sl ide-right uk-width-1-1 uk-margin-small-bottom">
                                <div class="uk-flex uk-flex-center uk-width-1-1@s uk-width-1-1@m">
                                    <div class="uk-inline uk-width-1-2@m">
                                        <a href="http://localhost/proto/merchant/index.php/search" class="uk-search-icon-flip uk-padding-small" uk-search-icon></a>
                                        <input class="uk-search-input uk-padding-small" type="search" placeholder="Search..." autofocus style="border: 1px solid #e5e5e5; border-radius: 30px 30px 30px 30px;">
                                    </div>
                                </div>
                            </form>
                            <!-- <form action="">
                                <div class="">
                                    <div class="uk-form-controls uk-margin uk-flex uk-flex-center uk-width-1-1@s uk-width-1-1@m">
                                        <div class="uk-width-1-2@s uk-width-1-5@m uk-margin-top">
                                            <select name="category" id="categoryid" class="uk-select">
                                                <option v-for="(category,index) in categories" :key="index" :value="category.value">{{category.name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
                            <div class="uk-flex uk-flex-right uk-padding-small uk-width-1-2@m">
                                <button href="#toggle-animation" class="uk-button uk-button-primary uk-width-1-2@m uk-border-rounded" type="button" uk-toggle="target: #toggle-animation; animation: uk-animation-fade">Filter</button>
                            </div>
                            
                            <div id="toggle-animation" aria-hidden="true" hidden>

                                <form class="uk-flex uk-flex-center uk-padding-small">
                                <fieldset class="uk-fieldset uk-width-1-2@m">

                                    <legend class="uk-legend">Filter Category</legend>

                                    <div class="uk-margin">
                                        <div class="uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                            <label> Start </label>  <input type="date" name="tanggal_mulai">
                                        </div>
                                        
                                        <div class="uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                            <label> End </label> <input type="date" name="tanggal_akhir">
                                        </div>
                                        
                                    </div>

                                    <div class="uk-margin uk-width-1-2">
                                        <select name="kota" class="uk-select">
                                            <option v-for="(country,index) in countrys" :key="index" :value="country.value">{{country.name}}</option>
                                        </select>
                                    </div>

                                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                        <label v-for="(jenis,index) in jeniss" :key="index" :value="jenis.value">
                                            <input class="uk-checkbox" type="checkbox" name="jenis" checked> {{jenis.name}} </label>
                                    </div>

                                    
                                    <div class="wrapper" style="padding:20px;">
                                            <div class="range-slider">
                                                <input type="text" class="js-range-slider" value="" />
                                            </div>
                                            <hr>
                                            <div class="extra-controls form-inline">
                                            <div class="form-group">
                                                <input type="text" class="js-input-from form-control" value="0" />
                                                <input type="text" class="js-input-to form-control" value="0" />
                                            </div>
                                            </div>
                                    </div>
                                    

                                </fieldset>
                            </form>

                            </div>

                           
                        </div>
                        <div class="uk-padding-large">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <div id="offcanvas-menu" uk-offcanvas="overlay:true">
                <div class="uk-offcanvas-bar uk-padding-remove uk-flex uk-flex-column">
                    <!-- <nav class="uk-navbar-container uk-dark" uk-navbar>
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav uk-margin-left">
                                <li><img src="https://www.phinemo.com/wp-content/themes/projectav2/images/114x30xlogo-phinemo.png.pagespeed.ic.qkIeB28U-q.webp"
                                        alt="Logo Phinemo" height="" width=""></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-center">
                            <ul class="uk-navbar-nav">
                                <li class="uk-text-lead"></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li><button class="uk-offcanvas-close" type="button" uk-close></button></li>
                            </ul>
                        </div>
                    </nav> -->
                    <div class="uk-width-1-1" uk-grid>
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    </div>
                    <ul class="uk-nav uk-nav-default uk-nav-left uk-margin-left uk-margin-large-top uk-list uk-list-divider">
                        <li v-for="(navitem,index) in navitems" :key="index" class=" uk-active uk-text-uppercase uk-margin-small-bottom uk-text-small"><p class="uk-margin-remove-bottom"><a
                                :href="navitem.ref">{{navitem.name}}</a></p>
                            <ul v-for="(subnav,index) in navitem.subnav" :key="index" class="uk-nav-sub uk-margin-remove">
                                <li><h6 class="uk-text-uppercase uk-margin-remove-bottom"><a :href="subnav.subref">{{subnav.subname}}</a></h6></li>
                            </ul>
                        </li>
                        <!-- <li class="uk-nav-divider"></li>
                        <ul class="uk-nav-sub">
                            <li><a href="about/">ABOUT US</a></li>
                            <li><a href="careers/">WORK FOR US</a></li>
                            <li><a href="advertise/">ADVERTISE</a></li>
                            <li><a href="contact/">CONTACT US</a></li>
                            <li><a href="#">HELP</a></li>
                        </ul> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
</template>
<script>
    module.exports = {
        data: () => {
            return {
                show: false,
                showsearch: false,
                hidden: false,
                countrys: [{
                        name: 'Please Select Country',
                        value: ''
                    },
                    {
                        name: 'Semarang',
                        value: 'Semarang'
                    },
                    
                    {
                        name: 'Yogyakarta',
                        value: 'Yogyakarta'
                    },
                    {
                        name: 'Malang',
                        value: 'Malang'
                    },
                    {
                        name: 'Bali',
                        value: 'Bali'
                    },
                ],
                jeniss: [{
                        name: 'Private Trip',
                        value: 'Private Trip'
                    },
                    {
                        name: 'Group Trip',
                        value: 'Group Trip'
                    },
                    {
                        name: 'Open Trip',
                        value: 'Open Trip'
                    },
                    {
                        name: 'Transportation',
                        value: 'Transportation'
                    },
                ],
                categories: [{
                        name: '--Pilih Category--',
                        value: '#'
                    },
                    {
                        name: 'Harga',
                        value: 'Harga'
                    },
                    {
                        name: 'Jenis',
                        value: 'Jenis'
                    },
                    {
                        name: 'Kota',
                        value: 'Kota'
                    },
                    {
                        name: 'Waktu',
                        value: 'Waktu'
                    },
                ],
                navitems: [{
                        name: 'login',
                        ref: '#'
                    },
                    {
                        name: 'articles',
                        ref: 'http://localhost/proto/merchant/index.php/article'
                    },
                    {
                        name: 'trips',
                        ref: 'http://localhost/proto/merchant/index.php/homepage/index'
                    },
                    {
                        name: 'help',
                        ref: '#',
                    },
                ]
            }
        },
    }
</script>
<style scoped>
    .uk-navbar,
    .uk-navbar-container {
        height: 56px;
    }

    .uk-panel {
        height: 100% !important;
    }
</style>