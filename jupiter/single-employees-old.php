<?php

/*

** single-employee.php

** mk_build_main_wrapper : builds the main divisions that contains the content. Located in framework/helpers/global.php

** mk_get_view gets the parts of the pages, modules and components. Function located in framework/helpers/global.php

*/



get_header(); ?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LegalService",
  "name": "The Johnson Firm",
  "description": "The Johnson Firm family law lawyers in Lake Charles, Louisiana handle family law matters including divorce, child custody, support, and adoption. Call 337.433.1414 for consultation.",
  "url": "https://johnsonfirmla.com/family-law/",
  "image": "https://johnsonfirmla.com/wp-content/uploads/2020/04/web-logo-min.png",
  "telephone": "337-433-1414",
  "email": "info@johnsonfirmla.com",
  "hasMap": "https://goo.gl/maps/mciDkoyMw2CejexAA",
  "address": {
    "@type":"PostalAddress",
      "addressLocality":"Lake Charles",
      "addressRegion":"LA",
      "postalCode":" 70601",
      "streetAddress":"1400 Ryan Street"
  },
  "sameAs": [
    "https://web.facebook.com/thejohnsonfirmlawyers/",
    "https://twitter.com/TheJFirm"
  ],
  "openingHours": "Mo,Tu,We,Th,Fr,Sa, 00:00-23:59",
   "priceRange": "$",
    "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4",
    "reviewCount": "250"
  }
}
</script>

<?php $style = get_post_meta( $post->ID, '_employees_single_layout', true );



$wrapper_class = 'mk-single-employee layout-'.$style;



mk_build_main_wrapper( mk_get_view('singular', 'wp-single-employees', true), $wrapper_class );





get_footer();

