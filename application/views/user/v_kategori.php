<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <bannerkategori :sub_base_url="base_url" :sub_main_url="main_url"></bannerkategori>
        <br class="uk-margin-small-top uk-margin-small-top uk-margin-small-bottom">
        <div class="uk-container">
            <infokategori :sub_base_url="base_url" :sub_main_url="main_url"></infokategori>
            <div class="uk-container uk-margin-small-bottom">
                <h5 class="uk-text-bold uk-margin-remove-bottom uk-heading-line"><span>Tempat Wisata Terbaik Di Semarang</span></h5>
            </div>
        </div>
        
        <div class="uk-container uk-padding-remove-right">
            <sliderkategori1 :sub_base_url="base_url" :sub_main_url="main_url"></sliderkategori1>
        </div>
        <div class="uk-container uk-margin-small-bottom">
            <buttonwisata class="uk-text-uppercase" :title="btnwis" :sub_main_url="main_url"></buttonwisata>
        </div>
        
        <div class="uk-container">
            <div class="uk-margin-small-bottom uk-margin-small-top">
                <h5 class="uk-text-bold uk-margin-remove-bottom uk-heading-line"><span>Best Seller</span></h5>
            </div>
        </div>
        <div class="uk-container uk-padding-remove-right">
            <sliderkategori1 :sub_base_url="base_url" :sub_main_url="main_url"></sliderkategori1>
        </div>
        <div class="uk-container">
            <buttonwisata :title="btnpenawaran" :sub_main_url="main_url"></buttonwisata>
        </div>
    </div>
    <script type="text/javascript">
     var v = new Vue({
            el: '#app',
            data: {
                show: false,
                 //main_url:'http://random.host:8888/magang/codeigniter/admin2/index.php/',
                //base_url:'http://random.host:8888/magang/codeigniter/admin2/',
                main_url:'http://localhost/proto/merchant/index.php/',
                base_url:'http://localhost/proto/merchant/',
                //main_url:'https://phinemo.com/merchant/index.php/',
                //base_url:'https://phinemo.com/merchant/',

                btnwis:{name:'cek semua wisata terbaik',url:'listbycategory.html'},
                btnpenawaran:{name:'cek semua penawaran',url:'listbycategory.html'}
            },
            components: {
                 'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                 'bannerkategori': httpVueLoader('<?php echo base_url("components/kategori/bannerkategori.vue") ?>'),
                 'infokategori': httpVueLoader('<?php echo base_url("components/kategori/infokategori.vue") ?>'),
                 'sliderkategori1':httpVueLoader('<?php echo base_url("components/homepage/listamazing.vue") ?>'),
                 'buttonwisata':httpVueLoader('<?php echo base_url("components/global/buttonfullwidth.vue") ?>')
            },
        });
    </script>