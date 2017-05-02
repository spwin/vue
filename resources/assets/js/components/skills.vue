<template>
    <section class="bg-shadow mt-20px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="icons-carousel">
                        <i class="skill-icon i_php"></i>
                        <i class="skill-icon i_laravel"></i>
                        <i class="skill-icon i_prog_symfony"></i>
                        <i class="skill-icon i_mysql"></i>
                        <i class="skill-icon i_jquery"></i>
                        <i class="skill-icon i_javascript"></i>
                        <i class="skill-icon i_bootstrap"></i>
                        <i class="skill-icon i_linux"></i>
                        <i class="skill-icon i_java"></i>
                        <i class="skill-icon i_android"></i>
                        <i class="skill-icon i_wordpress"></i>
                        <i class="skill-icon i_joomla"></i>
                        <i class="skill-icon i_html"></i>
                        <i class="skill-icon i_css"></i>
                        <i class="skill-icon i_git"></i>
                        <i class="skill-icon i_apache"></i>
                        <i class="skill-icon i_paypal"></i>
                        <i class="skill-icon i_facebook"></i>
                        <i class="skill-icon i_twitter"></i>
                        <i class="skill-icon i_google"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    $(document).ready(function() {
        $('.icons-carousel').lightSlider({
            pager: false,
            autoWidth: true,
            slideMargin: 10,
            loop: true,
            currentPagerPosition: 'middle',
            controls: false
        });
    });
</script>