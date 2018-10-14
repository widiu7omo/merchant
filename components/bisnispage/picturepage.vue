<template>
  <div>
         <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1"  v-for="(name, index) in names" :key="index">
             
                 <div class="uk-width-1-4 uk-card uk-card-default uk-card-small">
                        <img class="uk-width-1-1 uk-padding-remove uk-border-rounded uk-margin-small-top uk-height-small" :src="sub_base_url+'admintemplate/dist_view/img/'+name.gambar" alt="">
                </div>
                <div class="uk-width-expand uk-card uk-card-default uk-card-body uk-card-small">
                        <h5 class="uk-text-large uk-margin-small-bottom uk-width-1-1"><span uk-icon="heart"></span> {{name.nama_operator}} </h5>
                        <div class="uk-width-1-3@s uk-width-1-3@m uk-text-center" >
                            <a :href="'https://web.facebook.com/'+facebook">
                                 <img class="uk-width-1-6" :src="sub_base_url+'admintemplate/dist_view/img/facebook.svg'" width="48" height="48" alt="">
                            </a>
                            <a :href="'https://twitter.com/'+twitter">
                                 <img class="uk-width-1-6" :src="sub_base_url+'admintemplate/dist_view/img/instagram.svg'" width="48" height="48" alt="">
                            </a>
                            <a :href="'https://www.instagram.com/'+instagram">
                                 <img class="uk-width-1-6" :src="sub_base_url+'admintemplate/dist_view/img/twitter.svg'" width="48" height="48" alt="">
                            </a>
                        </div>
                </div>

         </div>
                        
</div>

</template>

<script>
module.exports = {
    props: {
			names: {
				type: Array,
				require: true
			},
			sub_base_url: {
				type: String,
				require: true
            },
          number:String,
          twitter:String,
          instagram:String,
          facebook:String

        },
        
    data:function(){
        return{
            
        }
    }
};
</script>