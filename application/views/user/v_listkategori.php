<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <hr class="uk-margin-remove-top uk-margin-medium-bottom ">
          <div class="uk-text-center">
                <h3 class="uk-text-bold">Daftar Penawaran Spesial</h3>
         </div>
         <hr class="uk-margin-remove-top uk-margin-small-bottom">
            <cardlist :sub_base_url="base_url" :sub_main_url="main_url"></cardlist>
        
         
    </div>
    <script type="text/javascript">
        new Vue({
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
                 'cardlist': httpVueLoader('<?php echo base_url("components/listbycategory/cardlist.vue") ?>'),
            }
        });
    </script>