<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <div>
        <slideshow :sub_base_url="base_url"></slideshow>
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right">
            <h4 class="uk-text-bold uk-heading-line"><span>Paket Populer</span></h4>
            <listamazing :sub_base_url="base_url" :sub_main_url="main_url"></listamazing>  
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right uk-padding-remove-top">
            <h4 class="uk-text-bold uk-heading-line"><span>Penawaran Spesial</span></h4>
        </div>
        <div class="uk-container uk-padding-small uk-padding-remove-bottom uk-padding-remove-top">
                <banner :sub_base_url="base_url" :sub_main_url="main_url"></banner>
        </div>
        
        <div class="uk-container uk-padding-small uk-padding-remove-right uk-padding-remove-top">
                <h4 class="uk-text-bold uk-heading-line"><span>Destinasi Populer</span></h4>
                <slider :sub_base_url="base_url" :sub_main_url="main_url"></slider>  
        </div>
    </div>
    <!-- End of App Vue -->

    <script type="text/javascript">
      var v =  new Vue({
            el: '#app',
            data: {
                show: false,
                //main_url:'http://random.host:8888/magang/codeigniter/admin2/index.php/',
                //base_url:'http://random.host:8888/magang/codeigniter/admin2/',
                main_url:'http://localhost/proto/merchant/index.php/',
                base_url:'http://localhost/proto/merchant/',
                //main_url:'https://phinemo.com/merchant/index.php/',
                //base_url:'https://phinemo.com/merchant/',
            },
            components: {
                'navbar': httpVueLoader('<?php echo base_url("components/global/navbar.vue") ?>'),
                'slideshow': httpVueLoader('<?php echo base_url("components/homepage/slideshow.vue") ?>'),
                'slider': httpVueLoader('<?php echo base_url("components/homepage/slider.vue") ?>'),
                'banner': httpVueLoader('<?php echo base_url("components/homepage/banneroffer.vue") ?>'),
                'banneramazing': httpVueLoader('<?php echo base_url("components/homepage/banneramazing.vue") ?>'),
                'listamazing': httpVueLoader('<?php echo base_url("components/homepage/listamazing.vue") ?>')
            }
        });
    </script>
    <style>
     @import 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css';
    
     /* @import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'; */
    </style>