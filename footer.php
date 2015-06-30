<!-- FOOTER -->

<footer class="pFooter">

    <div class="container">

        <div class="col-md-4 col-sm-4 col-xs-12 fCopy">
            <h6>© Yoursite.</h6>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 fScroll">
            <a class="easing scroll-up" href="#sHome">
                BACK TO TOP<span aria-hidden="true" class="arrow_carrot-up"></span>
            </a>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 fIcons">
            <a href="#">
                <span aria-hidden="true" class="social_facebook_circle"></span>
            </a>
            <a href="#">
                <span aria-hidden="true" class="social_twitter_circle"></span>
            </a>
            <a href="#">
                <span aria-hidden="true" class="social_dribbble_circle"></span>
            </a>
            <a href="#">
                <span aria-hidden="true" class="social_deviantart_circle"></span>
            </a>
        </div>

    </div>

</footer>

</section>


</div>

<script>
    new WOW().init();
</script>


<script>
    $(window).load(function(){
        var $container = $('#isotopeGrid');
        $container.isotope({
            itemSelector: '.itemIso'
        });
    });
</script>

<script>
    $(window).load(function(){
        var $container2 = $('#blogGrid');
        $container2.isotope({
            itemSelector: '.blog-item'
        });
    });
</script>


<?php wp_footer(); ?>

  </body>
</html>