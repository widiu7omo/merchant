<template>
  <div>
        <div class="uk-panel uk-width-1-1" v-for="(sub_title,index) in sub_titles" :key="index">
                
                <div class="uk-background-cover uk-background-muted uk-height-large uk-width-1-1@m uk-flex uk-flex-center uk-flex-middle"
                 style="background-image: url(https://phinemo.com/wp-content/uploads/2018/10/40612443_269868606981418_715767568131743349_n.jpg);">
                    
                </div>
                                
                    <!-- <div class="">
                            <img class="uk-width-1-1 uk-height-max-medium" :src="sub_base_url+'upload/images/'+sub_title.gambar" alt="">
                    </div> -->
                
                <!-- <div class="uk-position-center uk-text-center">
                    <h2 class="uk-margin-remove-bottom" uk-slider-parallax="x: 100,-100">Heading</h2>
                    <p class="uk-margin-remove-top" uk-slider-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
                   
                </div> -->
                 <div class="uk-position-large uk-position-bottom-left uk-margin-bottom" uk-lightbox>
                     <div>
                        <a class="uk-button uk-button-primary uk-button-small" uk-icon="image" title="Lebih Banyak Gambar" 
                            :href="sub_base_url+'upload/images/'+sub_title.gambar" data-caption="Image">
                        </a>
                        <a v-for="( pic, index ) in pics" :key="index" v-if="index>0" class="" 
                            :href="sub_base_url+'upload/images/'+pic.gambar" data-caption="Image">
                        </a>
                     </div>
                </div>
                
        </div>
  </div>
</template>

<script>
module.exports = {
    props:{
        sub_titles:Array,
        pics:Array,
        sub_base_url:String
    },
    data:function(){
        return{
            
        }
    }
};
</script>