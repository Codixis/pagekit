<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= $app['url']->getStatic('extensions/system/modules/theme/favicon.ico') ?>" rel="shortcut icon" type="image/x-icon">
        <link href="<?= $app['url']->getStatic('extensions/system/modules/theme/apple_touch_icon.png') ?>" rel="apple-touch-icon-precomposed">
        <?= $app['sections']->render('head') ?>
        <?php $app['styles']->add('theme', 'extensions/system/modules/theme/css/theme.css') ?>
        <?php $app['scripts']->add('uikit') ?>
    </head>
    <body class="uk-height-1-1">

        <div class="tm-height-4-5 uk-vertical-align uk-text-center">
            <div class="uk-vertical-align-middle">

                <div class="tm-container">

                    <img class="uk-margin-bottom" src="<?= $app['url']->getStatic('extensions/system/assets/images/pagekit-logo-large.svg') ?>" width="120" height="120" alt="Pagekit">

                    <form class="uk-panel uk-panel-box" action="<?= $app['url']->get('@system/migration/migrate') ?>">
                        <h1><?= __('Update Pagekit') ?></h1>
                        <p><?= __('Pagekit has been updated! Before we send you on your way, we have to update your database to the newest version.') ?></p>
                        <p>
                            <button class="uk-button uk-button-primary" type="submit" value=""><?= __('Update') ?></button>
                            <?php $this['token']->generate() ?>
                        </p>
                    </form>

                </div>

            </div>
        </div>

    </body>
</html>