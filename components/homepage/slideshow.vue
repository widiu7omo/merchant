<template>
    <div uk-slideshow="animation: push; autoplay: true; ratio: 7:1.7;" autoplay-interval="3000">
            <div class="uk-visible-toggle uk-light">
                <ul class="uk-slideshow-items uk-width-1-1">
                    <li v-for="(cover,index) in covers" :key="index" class="uk-transition-toggle uk-height-1-1">
                        <img class="uk-border-rounded uk-width-1-1 uk-height-1-1"
                        :data-src="sub_base_url+'admintemplate/dist_view/img/'+cover.url" alt="" uk-img>
                        <!-- <div class="uk-hidden-hover uk-transition-slide-bottom uk-overlay uk-padding-small uk-overlay-primary uk-position-bottom uk-text-center">
                        <h3 class="uk-margin-remove">Overlay Bottom</h3>
                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div> -->
                            <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous
                                uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                                uk-slideshow-item="next"></a>
                    </li>
                </ul>
                <ul class="uk-position-center uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul> 
            
            </div>
        </div>
</template>
<script>
module.exports = {
    props: {
			sub_base_url: {
				type: String,
				require: true
			},
        },
    data: function(){
        return{
            covers:[
                {url:'bannerhome1.jpg'},
                {url:'bannerhome2.jpg'},
                {url:'bannerhome3.jpg'},
                {url:'bannerhome4.jpg'},
                {url:'bannerhome5.jpg'},
            ],
        }
    }
}
</script>
