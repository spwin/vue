<template>
    <section class="bg-shadow text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Stanislav Markevic</h2>
                    <p>Emergency WEB Developer</p>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import niceMessage from './modules/niceMessage';
    export default {
        data: function() {
            return {
                message: {}
            };
        },
        
        beforeMount: function(){
            this.message = niceMessage;
        },
        
        mounted: function() {
            this.init();
        },
        
        methods: {
            init: function() {
                window.console.log(this.message.message());
            }
        }
    }
</script>