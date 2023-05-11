<?php
    $title = get_field('quote_title');
    $body = get_field('quote_body');
    $url = get_field('quote_url');
?>


<section class="get-qoute">
    <div class="container">
        <div class="get-qoute__wrapper">
            <div class="get-qoute__content">
                <h3 class="get-qoute__header"><?php echo $title;?></h3>
                <p class="get-qoute__body">
                   <?php echo $body;?>
                </p>
            </div>

            <a href="<?php echo $url?>" class="btn btn--transparent">Get Quote</a>
            <p class="outline__text">Quote</p>
        </div>
    </div>
</section>