<template>
    <div>
        <div class="uk-width-1-1@s uk-width-3-4@m uk-padding-remove uk-position-fixed uk-button-group uk-visible@m" style="bottom:0px;">
            <a class="uk-button uk-button-primary uk-width-1-3 uk-button-small uk-border-rounded" href="#modal-call" uk-toggle><span uk-icon="receiver"></span><br>Telpon</a>
            <a class="uk-button uk-button-danger uk-width-1-3 uk-button-small uk-border-rounded" href="https://phinemo.com/"><span uk-icon="world"></span><br>Website</a>
        </div>

        <div class=" uk-width-1-1@s uk-width-1-2@m uk-padding-remove uk-position-fixed uk-flex-center uk-button-group uk-hidden@m " style="bottom:0px; left:0px;">
            <a class="uk-button uk-button-primary uk-width-1-3 uk-button-small uk-border-rounded"  href="#modal-mobile-call" uk-toggle><span uk-icon="receiver"></span><br>Telpon</a>
            <a class="uk-button uk-button-secondary uk-width-1-3 uk-button-small uk-border-rounded" href="#modal-mobile-mail" uk-toggle><span uk-icon="mail"></span><br>Pesan</a>
            <a class="uk-button uk-button-danger uk-width-1-3 uk-button-small uk-border-rounded" href="https://phinemo.com/"><span uk-icon="world"></span><br>Website</a>
        </div>

        <div id="modal-call" uk-modal v-for="(number,index) in numbers" :key="index">
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-border-rounded" style="height:auto;" >
                <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                <div class="uk-modal-header uk-border-rounded">
                    <h2 class="uk-modal-title uk-text-center">Contact Person</h2>
                </div>
                <div class="uk-modal-body uk-width-1-1">
                        <ul class="uk-list">
                            <li>
                                 <h4> {{number.nama_operator}} </h4>
                            </li>
                            <li>
                                <img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""> {{number.con}} 
                            </li>
                            <li>
                                <img :src="sub_base_url+'admintemplate/dist_view/img/phone.svg'" width="48" height="48" alt=""> {{number.con}} 
                            </li>
                        </ul>
                </div>
            </div>
        </div>

        <div id="modal-mobile-call" uk-modal v-for="(number,index) in numbers" :key="index">
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-border-rounded" style="height:auto;" >
                <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                <div class="uk-modal-header uk-border-rounded">
                    <h2 class="uk-modal-title uk-text-center">Contact Us With</h2>
                </div>
                <div class="uk-modal-body uk-width-1-1">
                        <ul class="uk-list">
                            <li>
                                <a class="uk-margin-small-right" :href="'https://wa.me/'+number.con">
                                <img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""> WHATSAPP
                                </a>
                            </li>
                            <li>
                                <a :href="'tel:'+number.con">
                                    <img :src="sub_base_url+'admintemplate/dist_view/img/phone.svg'" width="48" height="48" alt=""> PHONE
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>

        <div id="modal-mobile-mail" uk-modal v-for="(number,index) in numbers" :key="index">
            <div class="uk-modal-dialog  uk-margin-auto-vertical uk-border-rounded" style="height:auto;" >
                <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                <div class="uk-modal-header uk-border-rounded " >
                    <h3 class="uk-modal-title uk-text-center">Message Us With</h3>
                </div>
                <div class="uk-modal-body uk-width-1-1">
                        <ul class="uk-list">
                            <li>
                                <a class="uk-margin-small-right" :href="'https://wa.me/'+number.con">
                                <img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""> WHATSAPP
                                </a>
                            </li>
                            <li>
                                <a class="uk-margin-small-right" :href="'sms:'+number.con+'?body= Welcome Phinemo Merchant'"> 
                                    <img :src="sub_base_url+'admintemplate/dist_view/img/mail.svg'" width="48" height="48" alt=""> MAIL PHONE
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>

    
</template>

<script>
    module.exports = {
        props: {
            numbers: {
				type: Array,
				require: true
			},
			sub_base_url: {
				type: String,
				require: true
            },
		},
        data: function () {
            return {

            }
        }
    };
</script>