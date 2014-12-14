
<section class="section  section--plugins  plugins">
    <div class="section__wrap">
        <ul class="layout  js-isotope">

            <?php
                $plugins = $pages
                    ->find('plugins')->children()
                    ->filterBy('draft', 'false')
                    ->sortBy('title', 'ASC')
            ?>

            <?php foreach($plugins as $plugin): ?>

                <li class="[ layout__item  js-isotope-item ] [ one-whole  lap-and-up-one-half  desk-one-third ]">
                    <?php snippet('objects/plugin', ['plugin' => $plugin]) ?>
                <!--</li>-->

            <?php endforeach ?>

        </ul>
    </div>
</section>
