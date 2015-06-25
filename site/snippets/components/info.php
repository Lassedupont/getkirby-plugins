
<section class="section  section--info  info">
    <div class="section__wrap">

        <ul class="layout">

            <li class="layout__item  one-whole  lap-and-up-two-thirds  desk-three-quarters">
                <h3 class="info__headline">
                    Additional Information
                </h3>
                <div class="info__description">
                    <?php if (!$page->text()->empty()): ?>
                        <?= $page->text()->kirbytext() ?>
                    <?php else: ?>
                        <p>
                            <?= $page->description()->html() ?>
                        </p>
                    <?php endif ?>
                </div>
                <div class="info__read-more">
                    <a href="<?= $page->website()->or($page->repository()) ?>" rel="nofollow">Read the full documentation</a>
                </div>
            <!-- </li> -->
            <li class="layout__item  one-whole  lap-and-up-one-third  desk-one-quarter">
                <h3 class="info__headline">
                    Plugin Meta
                </h3>
                <dl class="report__meta">
                    <dt class="info__meta__item  info__meta__item--inline">Author</dt>
                    <dd><a href="<?= $page->authorlink() ?>" rel="author nofollow"><?= $page->authorname()->html() ?></a></dd>

                    <?php if(!$page->repository()->empty()): ?>
                        <dt class="info__meta__item  info__meta__item--inline">
                            Repo
                        </dt>
                        <dd>
                            <a href="<?= $page->repository() ?>" rel="nofollow">
                                <?= Url::host($page->repository()) ?>
                            </a>
                        </dd>
                    <?php endif ?>

                    <?php if(!$page->website()->empty()): ?>
                        <dt class="info__meta__item  info__meta__item--inline">
                            Website
                        </dt>
                        <dd>
                            <a href="<?= $page->website() ?>" rel="nofollow">
                                <?= Url::host($page->website()) ?>
                            </a>
                        </dd>
                    <?php endif ?>

                    <!-- <dt class="info__meta__item  info__meta__item--inline">Version</dt>
                    <dd><em>Unknown</em></dd> -->

                    <dt class="info__meta__item  info__meta__item--inline">Added</dt>
                    <dd><?= date('j M Y', strtotime($page->created())) ?></dd>

                    <dt class="info__meta__item  info__meta__item--block">Description</dt>
                    <dd><?= $page->description()->html() ?></dd>

                </dl>

                <p class="info__button">
                    <a href="<?= $page->website()->or($page->repository()) ?>" rel="nofollow">
                        Full Documentation
                    </a>
                </p>

                <p class="info__report">
                    <a href="https://docs.google.com/forms/d/15ksJbVeFx6PhI1vuOdvdKQguRL8lNtQ9PA2N0G5v_E0/viewform?entry.372255256=http://getkirby-plugins.com/<?= $page->uid() ?>" rel="nofollow" target="_blank">Report Changes</a>
                </p>
            <!-- </li> -->

        </ul>

    </div>
</section>