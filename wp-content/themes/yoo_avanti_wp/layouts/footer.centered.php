<div id="tm-footer" class="tm-block-footer tm-footer-centered<?php echo $this['config']->get('footer_contrast') == true ? ' uk-contrast' : ''; ?>">
    <div class="uk-container uk-container-center uk-flex uk-flex-middle uk-flex-center uk-height-1-1 uk-width-1-1">

        <?php if ($this['widgets']->count('footer') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
        <footer class="tm-footer uk-text-center">

            <?php echo $this['widgets']->render('footer'); ?>

            <?php if ($this['config']->get('totop_scroller', true)) : ?>
            <a id="tm-anchor-bottom" class="tm-totop-scroller" data-uk-smooth-scroll href="#"></a>
            <?php endif; ?>

            <?php $this->output('warp_branding'); ?>

            <?php echo $this['widgets']->render('footer-menu'); ?>

        </footer>
        <?php endif; ?>

    </div>
</div>
