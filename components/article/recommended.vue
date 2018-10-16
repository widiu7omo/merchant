<template>
    <div class="uk-position-relative uk-visible-toggle uk-margin-small" uk-slider>
        <ul class="uk-slider-items uk-width-3-4 uk-child-width-1-2@s uk-child-width-1-4@m">
            <li class="uk-margin-small-right uk-margin-small-bottom" v-for="(offer, index) in offers" :key="index">
                <div class=" uk-card uk-card-default uk-box-shadow-material-small uk-border-rounded">
                    <div class="uk-card-media-top">
                        <a :href="sub_main_url+offer.url"><img class="uk-border-rounded uk-height-small uk-width-1-1" 
                        :data-src="offer.image" :alt="offer.title" uk-img></a>
                    </div>
                    <div class="uk-card-body uk-padding-small" style="height:100px;">
                        <h5 class="uk-margin-remove-bottom uk-text-bold">
                            <a class="uk-text-justify" style="color:black;" :href="offer.url">{{offer.title}}</a></h5>
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
                        title: 'Wanagiri Hidden Hills Bali, Wisata Alam Terbaru yang Jadi Spot Selfie Masa Kini',
                        image: 'https://phinemo.com/wp-content/uploads/2018/03/28765977_2111566119127668_2666973647691841536_n-768x512.jpg',
                        price: '600',
                        ratings: 3,
                        label: 'Top Rated',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Rekomendasi Tempat Romantis di Bali yang Tak Bikin Kantong Jebol',
                        image: 'https://phinemo.com/wp-content/uploads/2018/07/2-35.jpg',
                        price: '700',
                        ratings: 1,
                        label: 'Best Seller',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Desa Pinggan Kintamani, Spot Instagramable di Bali Selain Pantai',
                        image: 'https://phinemo.com/wp-content/uploads/2018/07/36085635_262085951251292_2765808378545438720_n.jpg',
                        price: '800',
                        ratings: 5,
                        label: 'Spesial Offer',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Wisata dan Penginapan di Sekitar Danau Batur Untuk Liburan Luar Biasa',
                        image: 'https://phinemo.com/wp-content/uploads/2017/09/18013883_220195035132119_7419339258315407360_n.jpg',
                        price: '350',
                        ratings: 1,
                        label: 'Popular',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Ulu Cliffhouse, Destinasi Wisata Instagenik Terbaru di Tebing Uluwatu Bali',
                        image: 'https://phinemo.com/wp-content/uploads/2017/11/uluwatu.png',
                        price: '1000',
                        ratings: 4,
                        label: 'Popular',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Sumberkima Hill Retreat, Resort di Tengah Alam Bali dengan Harga Terjangkau',
                        image: 'https://phinemo.com/wp-content/uploads/2018/01/resort-di-buleleng-bali-sumberkima6.jpg',
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
