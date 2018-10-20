<body>
    <div id="app" class="uk-container-expand">
        <navbar></navbar>
        <hr class="uk-margin-remove-top uk-margin-medium-bottom ">
          <div class="uk-text-center">
                <h3 class="uk-text-bold">Hasil Pencarian</h3>
         </div>
         <hr class="uk-margin-remove-top uk-margin-small-bottom">
            <searchlist :sub_base_url="base_url" :sub_main_url="main_url" ></searchlist>
        
         
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
                 'searchlist': httpVueLoader('<?php echo base_url("components/global/search.vue") ?>'),
            }
        });
    </script>