<template>
  
   <div>
        <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1 uk-margin-small-top uk-visible@m" style="max-width:50%; margin:0 auto;">
            <a href="#modal-info" uk-toggle class="uk-button uk-button-primary uk-width-expand uk-border-rounded"><span uk-icon="icon: receiver; ratio: 0.9"></span> Info Contact</a>
            <a href="https://phinemo.com/merchant/" class="uk-button uk-button-danger uk-width-expand uk-border-rounded uk-margin-small-left"><span uk-icon="icon: world; ratio: 0.9"></span> Website</a>
        </div>

        <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1 uk-margin-small-top uk-hidden@m">
            <a href="#modal-call" uk-toggle class="uk-button uk-button-primary uk-width-expand uk-border-rounded  uk-text-small"><span uk-icon="icon: receiver; ratio: 0.9"></span><br> Call</a>
            <a href="#modal-mail" uk-toggle class="uk-button uk-button-secondary uk-width-expand uk-border-rounded uk-margin-small-left uk-text-small"><span uk-icon="icon: commenting; ratio: 0.9"></span><br> Message</a>
            <a href="https://phinemo.com/merchant/" class="uk-button uk-button-danger uk-width-expand uk-border-rounded uk-margin-small-left uk-text-small"><span uk-icon="icon: world; ratio: 0.9"></span> <br> Website</a>
        </div>
        
        <div class="uk-flex uk-flex-wrap uk-flex-wrap-reverse uk-width-1-1 uk-margin-small-top">
            <div class="uk-width-expand">
                 <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-text-small"><span class="uk-position-small uk-position-top-center" uk-icon="icon: star; ratio: 0.8"></span> <p class="uk-text-center">343 Ulasan</p></div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-text-small"><span class="uk-position-small uk-position-top-center" uk-icon="icon: plus; ratio: 0.8"></span> <p class="uk-text-center"> 100 Product</p></div>
            </div>
         </div>
            <h4 class="uk-text-bold uk-heading-line"><span>Biografi</span></h4>
            <div v-for="(sub_title, index) in sub_titles" :key="index" v-html="sub_title.biografi">
                
            </div>

             <div id="modal-info" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical uk-border-rounded" style="height:auto;" >
                    <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                    <div class="uk-modal-header uk-border-rounded">
                        <h2 class="uk-modal-title uk-text-center">Info Contact</h2>
                    </div>
                    <div class="uk-modal-body uk-width-1-1">
                            <ul class="uk-list">
                                <li>
                                    <a class="uk-margin-small-right" :href="'https://wa.me/'+number">
                                    <img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""> WHATSAPP
                                    </a>
                                </li>
                                <li>
                                    <a :href="'tel:'+number">
                                        <img :src="sub_base_url+'admintemplate/dist_view/img/phone.svg'" width="48" height="48" alt=""> PHONE
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

             <div id="modal-call" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical uk-border-rounded" style="height:auto;" >
                    <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                    <div class="uk-modal-header uk-border-rounded">
                        <h2 class="uk-modal-title uk-text-center">Contact Us With</h2>
                    </div>
                    <div class="uk-modal-body uk-width-1-1">
                            <ul class="uk-list">
                                <li>
                                    <a class="uk-margin-small-right" :href="'https://wa.me/'+number">
                                    <img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""> WHATSAPP
                                    </a>
                                </li>
                                <li>
                                    <a :href="'tel:'+number">
                                        <img :src="sub_base_url+'admintemplate/dist_view/img/phone.svg'" width="48" height="48" alt=""> PHONE
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
            <div id="modal-mail" uk-modal>
            <div class="uk-modal-dialog  uk-margin-auto-vertical uk-border-rounded" style="height:auto;" >
                <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                <div class="uk-modal-header uk-border-rounded " >
                    <h3 class="uk-modal-title uk-text-center">Message Us With</h3>
                </div>
                <div class="uk-modal-body uk-width-1-1">
                        <ul class="uk-list">
                            <li>
                                <a class="uk-margin-small-right" :href="'https://wa.me/'+number">
                                <img :src="sub_base_url+'admintemplate/dist_view/img/wa.svg'" width="48" height="48" alt=""> WHATSAPP
                                </a>
                            </li>
                            <li>
                                <a class="uk-margin-small-right" :href="'sms:'+number+'?body= Welcome Phinemo Merchant'"> 
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
			sub_titles: {
				type: Array,
				require: true
			},
			sub_base_url: {
				type: String,
				require: true
			},
          number:String,
		},
    data:function(){
        return{
            
        }
    }
};
</script>