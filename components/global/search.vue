<template>
   <div class="uk-container">

       <div class="uk-grid-small uk-child-width-1-3@s uk-text-center" uk-grid>
            <div v-for="(card, index) in cards" :key="index">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-remove-top uk-padding-remove-right uk-padding-remove-left">
                    <a :href="sub_main_url+card.url"><img class="uk-border-rounded uk-width-1-1" :data-src="sub_base_url+'admintemplate/dist_view/img/'+card.image" :alt="card.title" 
                        uk-img></a>
                    <h5 class="uk-margin-remove-bottom uk-text-bold"><a style="color:black;" :href="sub_main_url+card.url">{{card.title}}</a></h5>
                    <p class="uk-text-small uk-margin-small-bottom uk-margin-remove-top" style="color: orange;">From IDR {{card.price}}K</p>
                    <i v-for="rating in card.ratings" :key="rating" class="fa fa-star" aria-hidden="true" ></i><br>
                    <span class="uk-label uk-margin-right uk-margin-small-top uk-margin-remove-bottom uk-margin-small-left" 
                        :style="s_label">{{card.labels}}</span>
                </div>
                <div class="uk-card-body uk-padding-small">
                        
                </div>
            </div>
        </div>
</div>
   
    <!-- <div class="uk-flex uk-flex-wrap uk-width-1-1" style="max-width:80%; margin:0 auto;">      
        <div class="uk-card uk-card-default uk-box-shadow-material-small uk-border-rounded uk-margin-small-bottom
             uk-width-1-1@s uk-width-1-4@m"
             v-for="(card, index) in cards" :key="index">
                <div>
                    <div class="uk-card-media-top">
                        <a :href="card.url"><img class="uk-border-rounded uk-width-1-1" :data-src="card.image" :alt="card.title" 
                        uk-img></a>
                        <span class="uk-label uk-margin-right uk-margin-small-top uk-margin-remove-bottom uk-margin-small-left" :style="s_label">{{card.labels}}</span>
                    </div>
                    <div class="uk-card-body uk-padding-small">
                        <h5 class="uk-margin-remove-bottom uk-text-bold"><a style="color:black;" :href="card.url">{{card.title}}</a></h5>
                        <p class="uk-text-small uk-margin-small-bottom uk-margin-remove-top" style="color: orange;">From IDR {{card.price}}K</p>
                        <i v-for="rating in card.ratings" :key="rating" class="fa fa-star" aria-hidden="true" ></i>
                    </div>
                </div>
        </div>
    </div> -->

</template>

<script>
    module.exports = {
        props: {
			sub_base_url: {
				type: String,
				require: true
            },
            sub_main_url: {
				type: String,
				require: true
			},
        },
        data: function () {
            return {
                cards: [{
                        title: 'Mt. Batur Sunrise Hike ',
                        image: 'batur.jpg',
                        price: '600',
                        ratings: 3,
                        labels: 'Top Rated',
                        url: 'offer/index/121'
                    },
                    {
                        title: 'Ubud Cycling Tour',
                        image: 'ubud_sepeda.jpg',
                        price: '700',
                        ratings: 1,
                        labels: 'Best Seller',
                        url: 'offer/index/121'
                    },
                    {
                        title: 'Gili Meno Fun Dive Trip',
                        image: 'gili_meno.jpg',
                        price: '800',
                        ratings: 5,
                        labels: 'Spesial Offer',
                        url: 'offer/index/121'
                    },
                    {
                        title: 'Dieng Plateau Golden Sunrise',
                        image: 'dieng.jpg',
                        price: '350',
                        ratings: 1,
                        labels: 'Popular',
                        url: 'offer/index/121'
                    },
                    {
                        title: 'Lava Tour Yogyakarta',
                        image: 'lava_tour.jpg',
                        price: '1000',
                        ratings: 4,
                        labels: 'Popular',
                        url: 'offer/index/121'
                    },

                ],
                s_label: {bottom: '15px',fontSize: '10px'},
            }
        }
    };
</script>