<div class="innovation-block" style="display: none">
    <div class="content-wrapper">
        <img src="<?= get_template_directory_uri() ?>/assets/images/close-black.svg " alt=""
             class="close-icon">
        <h3>
            INNOVATION
        </h3>
        <div class="centered text-center">
            <img src="<?=get_field('icon', $weDo->ID)['url']?>" alt=""
                 class="scivizgroup-logo">
        </div>
        <div class="description"><?=$weDo->innovation_description?></div>
        <a href="mailto:info@bioscicom.net" class="email-link">Email Us for more information </a>
        <div class="centered text-center email-logo">
            <a href="mailto:info@bioscicom.net"> <img class="email-img" src="<?= get_template_directory_uri() ?>/assets/images/btn_email.svg" alt=""></a>
        </div>
    </div>

</div>