<?php
/*
Template Name: contact
*/
?>


<?php get_header(); ?>


<div class="service-top">
            <div class="contact-top-img">
                <h2>CONTACT</h2>
            </div>
</div>

<div class="low-page-greeting">
            <h2>お問い合わせ</h2>
            <h3 class="title">Contact</h3>
            <p class="p-t-20">お問い合わせは、下記のフォームから承っております。<br>
                お問い合わせいただいた内容に対して、弊社担当者からご連絡させていただきます。</p>
</div>





<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>



<?php get_footer(); ?>