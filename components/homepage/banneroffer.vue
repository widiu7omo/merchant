<template>
    
    <!-- <div class="uk-panel uk-width-1-1">
                <div class="uk-flex uk-flex-center uk-flex-middle" v-for="(url, index) in urls" :key="index">
                    <img class="uk-width-1-1 uk-height-max-small uk-margin-small-bottom" :src="url.site" alt="">
                        <h2 class="uk-margin-remove-bottom uk-text-bold uk-posito" :style="s_color">{{url.name}}</h2>
                        <a v-if="url.click == true " class="uk-button uk-button-default uk-text-small uk-text-bold uk-margin-small uk-margin-small-right uk-position-bottom-right" style="border: 0.15em solid #fff;" :href="url.url">{{url.link}}</a>
                    
                </div>
          </div> -->
    <div class="uk-grid-small uk-child-width-1-2@s" uk-grid>
        <div v-for="(url, index) in urls" :key="index">
            <div  class="uk-inline uk-border-rounded uk-height-small 
            uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light uk-margin-bottom uk-width-1-1" :data-src="sub_base_url+'admintemplate/dist_view/img/'+url.image" uk-img>
                <h1>{{url.name}}</h1>
                <a v-if="url.click == true " class="uk-button uk-button-default uk-text-small uk-text-bold uk-margin-small uk-margin-small-right uk-position-bottom-right" style="border: 0.15em solid #fff;" :href="url.url">{{url.link}}</a>
            </div>
        </div>
    </div>
    
    <!-- <div>
        <div v-for="(url, index) in urls" :key="index" class="uk-inline uk-border-rounded uk-height-small 
        uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light uk-margin-bottom" :data-src="url.site" uk-img>
            <h1>{{url.name}}</h1>
            <a v-if="url.click == true " class="uk-button uk-button-default uk-text-small uk-text-bold uk-margin-small uk-margin-small-right uk-position-bottom-right" style="border: 0.15em solid #fff;" :href="url.url">{{url.link}}</a>
        </div>
    </div>  -->


</template>
<script>
    module.exports = {
        props: {
			sub_base_url: {
				type: String,
				require: true
			},
        },
        data: function () {
            return {
                //url for 
                urls: [{
                    image   : 'Bintan.jpg',
                    name    : 'Bintan',
                    click   : true,
                    link    : 'CLICK HERE',
                    url     : 'kategori.html'
                },
                {
                    image   : 'raja_ampat_banner.jpg',
                    name    :'Raja Ampat',
                    click   :false,
                    url     :'kategori.html'
                },
                {
                    image   : 'Derawan.jpg',
                    name    :'Derawan',
                    click   :false,
                    url     :'kategori.html'
                },
                {
                    image   : 'jogja.jpg',
                    name    :'Yogyakarta',
                    click   :false,
                    url     :'kategori.html'
                }
            ],
            }
            
        },
    }
</script>