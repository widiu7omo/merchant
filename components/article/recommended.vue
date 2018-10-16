<template>
    <div class="uk-position-relative uk-visible-toggle uk-margin-small" uk-slider>
        <ul class="uk-slider-items uk-width-3-4 uk-child-width-1-2@s uk-child-width-1-4@m">
            <li class="uk-margin-small-right uk-margin-small-bottom" v-for="(offer, index) in offers" :key="index">
                <div class=" uk-card uk-card-default uk-box-shadow-material-small uk-border-rounded">
                    <div class="uk-card-media-top">
                        <a :href="sub_main_url+offer.url"><img class="uk-border-rounded uk-height-small uk-width-1-1" 
                        :data-src="sub_base_url+'admintemplate/dist_view/img/'+offer.image" :alt="offer.title" uk-img></a>
                    </div>
                    <div class="uk-card-body uk-padding-small" style="height:100px;">
                        <h5 class="uk-margin-remove-bottom uk-text-bold">
                            <a style="color:black;" :href="offer.url">{{offer.title}}</a></h5>
                    </div>
                </div>
            </li>
        </ul>

    </div>
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
                offers: [{
                        title: 'Mt. Batur Sunrise Hike ',
                        image: 'batur.jpg',
                        price: '600',
                        ratings: 3,
                        label: 'Top Rated',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Ubud Cycling Tour',
                        image: 'ubud_sepeda.jpg',
                        price: '700',
                        ratings: 1,
                        label: 'Best Seller',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Gili Meno Fun Dive Trip',
                        image: 'gili_meno.jpg',
                        price: '800',
                        ratings: 5,
                        label: 'Spesial Offer',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Dieng Plateau Golden Sunrise',
                        image: 'dieng.jpg',
                        price: '350',
                        ratings: 1,
                        label: 'Popular',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Lava Tour Yogyakarta',
                        image: 'lava_tour.jpg',
                        price: '1000',
                        ratings: 4,
                        label: 'Popular',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Ubud Cycling Tour',
                        image: 'ubud_sepeda.jpg',
                        price: '700',
                        ratings: 1,
                        label: 'Best Seller',
                        url: 'C_showoffer/index/99'
                    },

                ],
                s_label: {bottom: '15px',fontSize: '10px'},
            }
        }
    };
</script>
<style scoped>
    @import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css';
</style>
