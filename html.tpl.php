<?php

/**
 * refer to /modules/system/html.tpl.php for info and variables
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('#block-block-7 span').prepend('<i class="icon-search"></i>  ');
      jQuery('#block-menu-menu-staff-menu span').prepend('<i class="icon-dashboard"></i>  ');
      jQuery('#HomeLink').prepend('<i class="icon-home"></i>  ');
      jQuery('.menu-885 a').prepend('<i class="icon-hand-right"></i>  ');
      jQuery('.menu-760 a').prepend('<i class="icon-magic"></i>  ');
      jQuery('.menu-774 a').prepend('<i class="icon-list-ul"></i>  ');
      jQuery('.menu-797 a').prepend('<i class="icon-envelope-alt"></i>  ');
      jQuery('.menu-1330 a').prepend('<i class="icon-star"></i>  ');
      jQuery('.menu-1229 a').prepend('<i class="icon-search"></i>  ');
      jQuery('.views-table th a').append('  <i class="icon-sort"></i>');
  	  if (jQuery('.views-table th img').length) { // implies *not* zero
  	    jQuery('.views-table th img').next().removeClass('icon-sort');
      }
      jQuery('#page-tabs ul.tabs').removeClass('tabs primary').addClass('nav nav-pills');
      jQuery('#page-tabs ul.nav li a').addClass('btn btn-small');
      jQuery('#page-tabs ul.nav li a[href$="/edit"]').prepend('<i class="icon-edit"></i>  ');
      jQuery('#page-tabs ul.nav li a:contains("View")').prepend('<i class="icon-eye-open"></i>  ');
      jQuery('#page-tabs ul.nav li a:contains("Devel")').prepend('<i class="icon-beaker"></i>  ');
      jQuery('#page-tabs ul.nav li a:contains("Track")').prepend('<i class="icon-signal"></i>  ');
      jQuery('#page-tabs ul.nav li a:contains("Log")').prepend('<i class="icon-filter"></i>  ');
      jQuery('#block-jquerymenu-1 li.parent').children('a').each(function(){
        var p = jQuery(this);
          p.html(
            p.text().replace(/\(\d\)/,'')
          )
      });
      jQuery('#block-jquerymenu-1 li.parent.closed a').append(' <i class="icon-chevron-right"></i>');
      jQuery('#block-jquerymenu-1 li.parent.open a:first').append(' <i class="icon-chevron-down"></i>');
      jQuery('#block-views-most-popular-block h2').prepend('<i class="icon-heart"></i>  ');
      jQuery('#block-block-1 h2').prepend('<i class="icon-ban-circle"></i>  ');
      jQuery('#block-block-4 h2').prepend('<i class="icon-external-link"></i>  ');
      jQuery('#triptych .region .more-link').addClass('btn btn-small');
      jQuery('#views-exposed-form-bulk-ops-page .views-exposed-widgets').prepend('<div id="form-col-five"></div>');
      jQuery('#views-exposed-form-bulk-ops-page .views-exposed-widgets').prepend('<div id="form-col-four"></div>');
      jQuery('#views-exposed-form-bulk-ops-page .views-exposed-widgets').prepend('<div id="form-col-three"></div>');
      jQuery('#views-exposed-form-bulk-ops-page .views-exposed-widgets').prepend('<div id="form-col-two"></div>');
      jQuery('#views-exposed-form-bulk-ops-page .views-exposed-widgets').prepend('<div id="form-col-one"></div>');
      jQuery('#edit-title-wrapper').appendTo('#form-col-one');
      jQuery('#edit-body-value-wrapper').appendTo('#form-col-one');
      jQuery('#edit-type-wrapper').appendTo('#form-col-one');
      jQuery('#edit-field-feature-category-tid-wrapper').appendTo('#form-col-two');
      jQuery('#edit-field-feat-in-eg-value-wrapper').appendTo('#form-col-three');
      jQuery('#edit-field-feat-in-koha-value-wrapper').appendTo('#form-col-three');
      jQuery('#edit-field-feat-eg-notes-value-wrapper').appendTo('#form-col-four');
      jQuery('#edit-field-feat-koha-notes-value-wrapper').appendTo('#form-col-four');
      jQuery('#edit-guid-wrapper').appendTo('#form-col-five');
      jQuery('#edit-field-old-feature-id-value-wrapper').appendTo('#form-col-five');
      jQuery('#views-form-bulk-ops-page .feature-edit a').prepend('<i class="icon-edit"></i>  ');
      jQuery('#views-form-bulk-ops-page .feature-delete a').prepend('<i class="icon-remove"></i>  ');
      jQuery('.group-feature-details input[type="submit"]').addClass('btn btn-small');
      jQuery('.flag-flag-compare-this a.flag').prepend('<span class="flag-icon"></span>');
    });
  </script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
