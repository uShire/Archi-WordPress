<?php
/*PANU GAMITIN SA TEMPLATE
<?php echo do_shortcode('[arch-quote title="asdasd"  body="asdasdas" url="asdasdasd" img="http://localhost/arch/wp-content/uploads/2023/05/services-img-xl.jpg"]')?>
*/

function arch_cpt ($atts) {
 $option = shortcode_atts(
  array(
   'title' => '',
   'body' => '',
   'url' => '',
   'img' => '',
   'person' => get_field('company_person', 'option'),
  ), $atts); 


 $output = '<section class="get-qoute" style="background-image: url('. $option['img'] .')">'.
  '<div class="container">'.
    '<div class="get-qoute__wrapper">'.
      '<div class="get-qoute__content">'.
        '<h3 class="get-qoute__header">'.$option['title'] .'</h3>'.
        '<h3 class="get-qoute__header">'. $option['person']  .'</h3>'.
        '<p class="get-qoute__body">'. $option['body'] . '</p>'.
     ' </div>'.

     ' <a href="'. $option['url'] .'" class="btn btn--transparent">Get Quote</a>'.
     ' <p class="outline__text">Quote</p>'.
   ' </div>'.
 ' </div>'.
'</section>';


 return $output ;
}  
add_shortcode('arch-quote', 'arch_cpt');
