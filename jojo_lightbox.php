<?php
/**
 *
 * Copyright 2007 Michael Cochrane <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class Jojo_Plugin_jojo_lightbox extends Jojo_Plugin
{

      public static function customhead() {
        switch (Jojo::getOption('lightbox_version', 'huddletogether')) {
            case 'huddletogether':
                $head = '<link rel="stylesheet" type="text/css" href="'._SITEURL.'/css/huddlestyles.css" />'."\n";
                $head .= Jojo::getOption('lightbox_head', 'head')=='head' ? '<script type="text/javascript" src="'._SITEURL.'/js/huddletogether_lightbox.js"></script>'."\n" : '';
                break;
            case 'jqlightbox':
                $head = '<link rel="stylesheet" type="text/css" href="'._SITEURL.'/css/jquery.lightbox-0.4.css" />'."\n";
                $head .= Jojo::getOption('lightbox_head', 'head')=='head' ? '<script type="text/javascript" src="'._SITEURL.'/js/jquery.lightbox-0.4.min.js"></script>'."\n" : '';
                break;
            case 'ryrych':
                $head = '<link rel="stylesheet" type="text/css" href="'._SITEURL.'/css/rlightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="'._SITEURL.'/css/jquery-ui-1.8.16.css" />'."\n";
                $head .= Jojo::getOption('lightbox_head', 'head')=='head' ? '<script type="text/javascript" src="'._SITEURL.'/js/jquery.ui.rlightbox.min.js"></script>'."\n" : '';
                break;
        }
        return $head;
    }

    public static function loadjs() {
        if (Jojo::getOption('lightbox_head', 'head')=='foot') {
            switch (Jojo::getOption('lightbox_version', 'huddletogether')) {
                case 'huddletogether':
                    $foot = '<script type="text/javascript" src="'._SITEURL.'/js/huddletogether_lightbox.js"></script>'."\n";
                case 'jqlightbox':
                    $foot = '<script type="text/javascript" src="'._SITEURL.'/js/jquery.lightbox-0.4.min.js"></script>'."\n";
                case 'ryrych':
                    $foot = '<script type="text/javascript" src="'._SITEURL.'/js/jquery.ui.rlightbox.min.js"></script>'."\n";
            }
        }
        $foot .= '<script type="text/javascript">
$(document).ready(function(){
';
        switch (Jojo::getOption('lightbox_version', 'huddletogether')) {
            case 'huddletogether':
                $foot .= '  initLightbox()'."\n";
            case 'jqlightbox':
                $foot .= '  <script type="text/javascript" src="'._SITEURL.'/js/jquery.lightbox-0.4.min.js"></script>'."\n";
            case 'ryrych':
                $foot .= '  $(\'a[rel="lightbox"]\').rlightbox();'."\n";
        }

        $foot .= '});
</script>';
        return $foot;
    }


}