<section id="categories-tab" class="categories-tab-main-block">
    <div class="container">
        <div id="categories-tab-slider" class="categories-tab-block owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1883px, 0px, 0px); transition: all 2s ease 0s; width: 3390px;">
                    <?php foreach ($category as $c) { ?>
                    <div class="owl-item cloned" style="width: 168.333px; margin-right: 20px;">
                        <div class="item categories-tab-dtl">
                            <a href="<?php echo base_url()."/web/category/".$c['id']."/".clean($c['category']); ?>" title="<?= $c['category']; ?>"><i class="<?= $c['icon']==""?"fa fa-bars":$c['icon']; ?>"></i><?= $c['category']; ?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </div>
            <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
</section>