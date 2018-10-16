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
                        title: 'Malini Agropark, Wisata Bak Santorini di Badung, Bali ',
                        image: 'https://phinemo.com/wp-content/uploads/2018/10/40612443_269868606981418_715767568131743349_n.jpg',
                        price: '600',
                        ratings: 3,
                        label: '',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Pantai Suluban, Alternatif Main Ke Pantai di Bali Selain Kuta',
                        image: 'https://phinemo.com/wp-content/uploads/2018/09/40967389_348296552590372_5629922292139032576_n.jpg',
                        price: '700',
                        ratings: 1,
                        label: 'Best Seller',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Destinasi Wisata Seni Budaya Baru di Ubud, Suarti Culture Center',
                        image: 'https://phinemo.com/wp-content/uploads/2018/09/Suarti-Culture-Center-Ubud-1.jpg',
                        price: '800',
                        ratings: 5,
                        label: 'Spesial Offer',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Waterbom Bali Terpilih Jadi Waterpark Terbaik di Asia Kembali',
                        image: 'https://phinemo.com/wp-content/uploads/2018/01/waterbom-jakarta.jpg',
                        price: '350',
                        ratings: 1,
                        label: 'Popular',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Keramas Aero Park, Resto Pesawat Terbang di Bali yang Jadi Buah Bibir Dunia',
                        image: 'https://phinemo.com/wp-content/uploads/2018/08/38244538_1839740779455466_7293547852423233536_n.jpg',
                        price: '1000',
                        ratings: 4,
                        label: 'Popular',
                        url: 'C_showoffer/index/99'
                    },
                    {
                        title: 'Bukit Indrakila Karangasem, Bukit Fotogenik di Bali yang Bisa Diakses Gratis',
                        image: 'https://phinemo.com/wp-content/uploads/2018/03/19425227_558522501203475_6673353926340771840_n-768x768.jpg',
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
