<template>
    <div>
        <ul uk-accordion class="uk-text-small">
            <li class="uk-open">
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title " href="#">
                    <h5 class="uk-text-bold">HIGHLIGHT</h5> 
                </a>
                <div class="uk-accordion-content" style="font-size:16px;" v-html="highlight">
                    
                </div>
            </li>
            <li class="uk-open">
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title " href="#">
                   <h5 class="uk-text-bold"> FASILITAS</h5>
                </a>
                <div class="uk-accordion-content" style="font-size:16px;" v-html="fasilitas">
                    
                </div>
            </li>
            <li class="uk-open">
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title " href="#">
                   <h5 class="uk-text-bold">KEBIJAKAN PEMBATALAN</h5>
                </a>
                <div class="uk-accordion-content" style="font-size:16px;" v-html="kebijakan">
                    
                </div>
            </li>           
        </ul>

    </div>

</template>

<script>
    module.exports = {
        props:{
          fasilitas:String,
          highlight:String,
          kebijakan:String  
        },
        data: function () {
            return {
                s_font:{fontSize:'.875rem'},
                s_font2:{fontSize:'.850rem'},
            }
        }
    };
</script>