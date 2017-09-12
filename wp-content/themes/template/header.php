<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head();?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/owl.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/sli.css">  
<style>
html {
	line-height: 1.45;
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
.metaslider-96{
	max-width:100%!important;
	margin:auto;
	overflow:hidden
}

.hotline i{
	padding:0 5px
}
/*!
*  Font Awesome 4.5.0 by @davegandy - http://fontawesome.io - @fontawesome
*  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
	*/@font-face{font-family:'FontAwesome';src:url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.eot?1475046671880);src:url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.eot?1475046671880) format('embedded-opentype'),url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.ttf?1475046671880) format('truetype'),url(//bizweb.dktcdn.net/100/126/593/themes/162650/assets/fontawesome-webfont.svg?1475046671880) format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}
h1{font-size:20px}h2{font-size:18px} h3{font-size:15px}
	
.content p{
	text-align:justify
}
.content em, .content i{font-style:italic}
.content{line-height:1.75}
.content a{color:#ab8e00}
.alignnone {
margin: 5px 20px 20px 0;
}
.aligncenter, div.aligncenter {
display:block;
margin: 5px auto 5px auto;
}
.alignright {
float:right;
margin: 5px 0 20px 20px;
}
.alignleft {
float:left;
margin: 5px 20px 20px 0;
}
.aligncenter {
display: block;
margin: 5px auto 5px auto;
}
a img.alignright {
float:right;
margin: 5px 0 20px 20px;
}
a img.alignnone {
margin: 5px 20px 20px 0;
}
a img.alignleft {
float:left;
margin: 5px 20px 20px 0;
}
a img.aligncenter {
display: block;
margin-left: auto;
margin-right: auto
}
.wp-caption {
background: #fff;
border: 1px solid #f0f0f0;
max-width: 96%; /* Image does not overflow the content area */
padding: 5px 3px 10px;
text-align: center;
}
.wp-caption.alignnone {
margin: 5px 20px 20px 0;
}
.wp-caption.alignleft {
margin: 5px 20px 20px 0;
}
.wp-caption.alignright {
margin: 5px 0 20px 20px;
}
.wp-caption img {
border: 0 none;
height: auto;
margin:0;
max-width: 98.5%;
padding:0;
width: auto;
}
.wp-caption p.wp-caption-text {
font-size:11px;
line-height:17px;
margin:0;
padding:0 4px 5px;
}
.woocommerce-billing-fields{
margin-top:15px;
}
/* pagination */
.navigation{display:inline-block;width:100%;margin: 10px 0;
    text-align: center;}
.navigation ul{    margin: 0;
    list-style: none;
    display: inline-block;}

	.navigation ul li{display:inline-block}
	.navigation ul li a{    position: relative;
    float: left;
    padding: 5px 12px;
    margin-left: -5px;
    line-height: 1.42857;
    color: #555;
    text-decoration: none;
    background-color: #fafafa;
    border: 1px solid #ccc;}
	.navigation ul li.next a, .navigation ul li.prev a{
		color: rgba(0,0,0,0);
    font-size: 0px;
	}
	.woocommerce-pagination ul li:hover .next-1, .woocommerce-pagination ul li:hover .prev-1{color:#fff!important}
	a.next, a.prev{
		color: rgba(0,0,0,0)!important;
    font-size: 0px!important;
	}
	a.next span.next-1, a.prev span.prev-1 {
		    color: #343434!important;
    font-size: 14px !important;
	}
	
	.navigation ul li.next a span.next-1, .navigation ul li.prev a span.prev-1{
		    color: #343434;
    font-size: 13px;
	}
		.navigation ul li:hover a{  background: #ab8e00;
    color: #FFF;transition:.5s}
	 .navigation ul li:hover a span{color:#fff!important}
	.navigation ul li.active a{    background: #ab8e00;
    color: #FFF;}
div.wpcf7-validation-errors{
	color:#36b3d6!important;
	border:0px!important
}
	/* end pagination */
.content h1{
margin-bottom:30px
}
.content h2{
margin-bottom:20px
}
.content h3, .content h4, .content h5, .content h6{
margin-bottom:12px
}
.content h3{
font-size:18px
}
.content h4{
font-size:16px
}
.content img{    max-width: 100%;height:auto}
.content{ 
    margin-bottom: 20px;}
.link-more{display:none;line-height:0}
.content b, .content strong{font-weight:700}
.content p{margin-bottom:12px}
.content i, .content em, .content dfn, .content cite{font-style:italic}
.content table>thead>tr, table>tbody>tr, table>tbody>tr {
border-top:1px solid #343434;
}
.content table>thead>tr>td, table>tbody>tr>td, table>tbody>tr>td{
	padding:5px 10px;
}
.content table thead tr:first-child {background: #f9f9f9}
.content table{border-collapse: collapse;}
blockquote {
	border-left: 4px solid #707070;
	color: #707070;
	font-size: 20px;
	font-style: italic;
	line-height: 1.8182;
	margin: 0 0 35px -21px;
	padding-left: 17px;
}

blockquote > blockquote {
	margin-left: 0;
}

blockquote p {
	margin-bottom: 35px;
}

blockquote > p:last-child {
	margin-bottom: 0;
}

blockquote cite,
blockquote small {
	color: #333;
	font-family: "Noto Sans", sans-serif;
	font-size: 17px;
	line-height: 1.6471;
}

blockquote em,
blockquote i,
blockquote cite {
	font-style: normal;
}

blockquote strong,
blockquote b {
	font-weight: 400;
}
.content strong{font-weight:700}

*{
	    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
nav div form input:focus{
	outline:0;
	border: 1px solid #dbdbdb;
}
img {
	max-width:100%;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none;
}

a{
	text-decoration:none;
}
body{font-family:Tahoma;font-size:13px;margin:0}
header{
    display: inline-block;
    width: 100%;
    padding: 15px;
    margin-bottom: -5px;
    background-size: cover
}
.container{
	max-width:1250px;
	margin:auto;
	padding:0 15px
}
.logo{
    display: inline-block;
    width: 28%;
    float: left;
	margin:0
}
.social a{
	    color: #666666;
    border: 1px solid #666666;
    border-radius: 50%;
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 2.1;
    text-align: center;
	margin:0 2px;
}
.social a:hover{
	background: #ab8e00;
	color:#fff;
	border: 1px solid #ab8e00;
}
.metaslider-22{
	margin:auto
}
nav.menu{
    display: inline-block;
        float: right;
		z-index:99;
		position:relative
}
.menu-menu-container{
display:inline-block
}
#menu-menu{
	    display: inline-block;
    width: 100%;
}

#menu-menu, #menu-menu .sub-menu, #menu-menu .sub-menu .sub-menu{
	    padding: 0;
    margin: 0;
    list-style: none;
}
#menu-menu li{
	    display:inline-block;
    padding: 15px;
	position:relative;
}
#menu-menu li a{
	font-weight:600;
    text-transform: uppercase;
}
.sub-menu{
	display:none;
	position:absolute;
	background:#fff;
	right:0;
	    top: 100%;
    width: 290px;
	border:1px solid #999;
	border-left:1px solid #ff6600;
	margin:-2px!important;
}
.sub-menu a{
	color:#000!important;
	text-transform:none!important;
	    padding: 5px 10px;
    display: inline-block;
}
.sub-menu li{
	display:block!important;
	position:relative;
	    padding: 6px 17px!important;
}
.sub-menu .sub-menu{
    right: 0%;
    left: inherit!important;
    top: 0;
}
.sub-menu li:hover{
	background:#ff6600!important
}
.sub-menu li:hover a{
	color:#fff!important
}
.sub-menu li:hover .sub-menu li{
	background:inherit!important
}
.sub-menu li:hover .sub-menu li a{
	color:inherit!important
}
.sub-menu li .sub-menu li:hover{
	background:#ff6600!important
}
.sub-menu li .sub-menu li:hover a{
	color:#fff!important
}
.show{
	display:block!important
}
nav .social{
	    float: right;
    position: relative;
    padding: 8px 0;
}

.metaslider-34, .metaslider-35{
	margin:auto;
	overflow:hidden;
	max-width:100%!important
}
/*------------------
[9. Owl carousel]
*/
.owl-controls{
    
}
.owl-controls .owl-prev{
    position: absolute;

    top: 50%;
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.owl-controls .owl-next{
    position: absolute;

    top: 50%;
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
.owl-controls .owl-prev,
.owl-controls .owl-next{
text-align: center;
    color: #fff;
    line-height: 0;
    font-size: 35px;
    font-weight: 500;
    padding: 0 5px;
    background: #ff6600;
}
.owl-controls .owl-prev i,
.owl-controls .owl-next i{
	font-size:16px
}
.owl-controls .owl-prev .fa,
.owl-controls .owl-next .fa{
    padding-top: 3px;
}
.owl-stage{margin:auto}
@media(min-width:1024px){
.calling{
	    float: left;
    font-size: 33px;
    position: relative;
    top: 8px;
    left: -5px;
}

.hotline div{
	float: left;
    text-align: left;
    color: #000;
    font-size: 14px;
    font-weight: 500;
}
}
@media(max-width:1024px){
	#menu-menu li{
		text-align:left
	}
.hotline div{
	display:inline-block
}
.hotline div span, .hotline div br{
	display:none;
}
}
.hotline strong{
	font-size: 16px;
}
.cat-house{
	    list-style: none;
    padding: 0;
    margin: 0;
	display:inline-block;
	width:100%
}
.cat-house li{
	    float: left;
    padding: 10px;
    text-align: center;
	width:25%;
}
.cat-house li .img{
	    overflow: hidden;
    height: 200px;
	position:relative;
}
.cat-house li .img img{
	    height: 100%;
    width: auto;
    border-radius: 50%;
	    padding: 7px;
    border: 1px solid #2bb6d7;
}
.cat-house li .img .hover{
    top: 8px;
    position: absolute;
    background: rgba(88, 150, 201, 0.58);
    border-radius: 50%;
    width: 183px;
    margin: auto;
    height: 183px;
    left: 16%;
	display:none
}
.cat-house li .img .hover i{
	    top: 39%;
    position: absolute;
    left: 25%;
    font-size: 41px;
    right: 25%;
	color:#fff
}
.cat-house li h3{
	    text-align: center;
    text-transform: uppercase;
    color: #333;
}
.cat-house li:hover .hover{
	display:block
}
.h1{
	    text-align: center;
    color: #038cad;
    padding: 25px 0;
}
.hide{
	display:none!important
}
footer{
	    background: #0f1416;
    display: inline-block;
    width: 100%;
	color: #fff;
	    margin-bottom: -5px;
		background-size:cover
}
.info{
    width: 50%;
    float: left;
    padding: 40px 10px;
    overflow: hidden;
    line-height: 1.8;
    color: #dbeaf0;
font-size:13px;
}
.info span{
	display:block
}
.info strong{
	    font-size: 14px;
    display: inline-block;
    color: #fff;
    margin-bottom: 10px;
	width:100%;
	position:relative;
	line-height:1
}
.info strong:before{
	content:'';
	background:#ff6600;
	position:absolute;
	height:2px;
	width:90px;
	display:inline-block;
	    bottom: 2px;
		border-radius:1px;
}
.info strong:after{
	content:'';
	background:#fff;
	height:2px;
	border-radius:1px;
	width:100%;
	display:inline-block
}

.info .a{
	    color: #fff;
    display: block
}
.info ul{
	    list-style: none;
    padding: 0;
	margin:0
}
.info:last-child{
	text-align:center
}
.text{
	    background: #000000;
    color: #fff;
    font-style: italic;
    text-align: center;
    padding: 7px;
}
.breadcrumb{
	padding: 25px 0;
}
.breadcrumb span{
	color:#fff
}
.breadcrumb .current{
	color: #fff;
}
.breadcrumb a{
	color:#fff;
}
.page-title{

	    margin-top: 0px;
		font-size:18px;
	text-align:center
}
.page-title i{
    padding: 7px;	
}
.page-title span{
	    text-transform: uppercase;
    font-size:18px;
}
.page-title:after{
	content:'';
	display:block;
	width:100%;
	<?php if(is_front_page()){?>
	background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;
	<?php }else{?>
	   background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat left;
	<?php };?>
	height:3px;
	    margin-top: 5px;
}
.page-title-2:after{
	content:'';
	background: url(<?php echo get_template_directory_uri();?>/assets/images/line-2.png)no-repeat center !important;
}
section:first-child{
	width:75%;
	float:left;
	padding-right:15px;
	padding-bottom:15px
}
section:nth-child(2){
	width:25%;
	float:left;
	padding-bottom:15px
}
.more-link{
	display:none;
}
.cat-rel{
	padding-left:12px;
	list-style: none;
    padding: 0;
}
.cat-rel li{
	padding-bottom:12px
}
.cat-rel li:hover a{
	color:#ff6600
}
.cat{
	display:inline-block;
	width:100%;
	padding-left:12px
}
.cat{
	display:inline-block;
	width:100%;
	list-style:none;
	margin:0;
	padding:0
}
.cat li{
	display:inline-block;
	width:100%;
	padding:10px 0
}
.cat li .thumb{
	float:left;
	width:30%;
}
.cat li .thumb img{
	    width: 100%;
height: auto;
}
.cat li .tomtat{
	width:70%;
	float:left;
	padding-left:15px
}
.cat li:hover h3{
	color:#ff6600!important
}
.cat li h3{
	    font-size: 15px;
		    margin-top: 0;
}
aside iframe{
	max-width:100%;
	outline:0;
	border:0
}
 .tags{
	    list-style: none;
    padding: 0;
	display:inline-block;
	margin:10px 0!important
}
.tags li{
	    background: #ff6600;
    display: inline-block;
    padding: 3px 20px;
    border-radius: 20px;
	    margin: 0 2px;
}
.tags li a{
	color:#000;
	background:none
}
.tags li:hover{
	background:#ff6600;
}
.tags li:hover a{
	color:#fff
}
.cat-rel li span {
    padding-right: 5px;
}
a{
	color:#333
}
.webs{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
	list-style:none
}
.webs .thumbs{
	border-radius: 50%;
    overflow: hidden;
    width: 169px;
    height: 169px;
    margin: auto;
}
.webs img{
	    height: 100%!important;
    width: auto!important;
    max-width: inherit;
    position: relative;
    left: -35%;
}
.webs h3{
	    text-align: center;
    color: #fff;
    font-weight: 500;
}
.products{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
	list-style:none
}
.products li{
	float:left;
	text-align:center;
	padding:15px;
}
.products li h3{
	color:#343434;
font-weight: 600;
    font-size: 12px;
margin-bottom:0;
margin-top:0;
    height: 60px;
    padding: 10px;
    overflow: hidden;
}
.products li:hover h3{
	color:#ff6600
}
.productss{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
}
.productss li{
	float:left;
	text-align:center;
	padding:15px;
}
.productss li h3{
	height:42px;
	overflow:hidden;
	color:#343434;
	font-weight:500
}


.li{
	display:inline-block!important;
	padding-right:12px!important
}

.news{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
	list-style:none
}
.news li{
	width:33.333%;
	float:left;
	text-align:center;
	padding:15px;
}
.news li h3{
	overflow:hidden;
	color:#343434;
	font-weight:700!important;
	font-size:16px!important;
}
.news li:hover h3{
	color:#ffc819
}
.news li p {
	text-align:justify
}
.productss{
	    display: inline-block;
    width: 100%;
    margin: 0;
    padding: 0;
}
.news li{
	float:left;
	text-align:center;
	padding:15px;
}
.news li h3{
	height:43px;
	overflow:hidden;
	color:#343434;
	font-weight:500
}



.img-cat{
	    height: 180px;
    overflow: hidden;
}
.img-cat img{
	width:100%!important;
	height:auto;
}
.click {
	    background: #333;
    color: #fff;
    padding: 5px 12px;
    display: inline-block;
    margin: 5px 20px;
}
.products li .fig:hover{
	box-shadow: 0px 0px 5px -1px;
}
.productss li .fig:hover{
	box-shadow: 0px 0px 5px -1px;
}
.fig h3{
	font-weight:600
}

#slider3-pager{
	list-style:none;
	margin:0;
	padding:0
}
.gallery{
	float:left;
	width:33.333%;
    padding: 5px;
}
.nd{
	float:left;
	width:66.666%;
	padding-left:25px;
	height:420px;
	overflow:hidden
}

.tabs{
	    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 24px;
    text-transform: uppercase;
}
.title-box{
	    background: #ff6600;
    color: #fff;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 3px 3px 0 0;
	margin:0
}

.box{
	    display: inline-block;
    width: 100%;
    border: 1px solid #e1e1e1;
    border-radius: 0 0 7px 7px;
}
aside ul.menu{
    margin: 0;
	list-style:none
}
aside ul.menu li{
	margin-bottom:12px
}
aside ul.menu a{
	color:#333
}
aside ul.menu li:hover a{
	color:#ff6600;
}

aside{
display:inline-block;
width:100%
}
aside div{
    display: inline-block;
    width: 100%;
}
aside div span{
    width: 20%;
    float: left;
    font-size: 24px!important;
    padding: 14px;
    text-align: center;
}
aside div p{
	    width: 80%;
    float: left;
	color:#666666
}
.box ul{
	list-style:none;
	padding:0
}
.box li{
	padding-bottom: 5px;
}
.box i {
	padding-right:10px
}
@media(min-width:1024px){
	.fly{
		    width: 25%;
    position: fixed;
	z-index:99;
	    top: 10%;
	}
}
@media(max-width:1024px){
		.metaslider-33{
		margin:auto
	}
	nav.menu{
		float:none!important;
		width:100%!important
	}
	.process_top_left, .process_top_right, .process_bottom_left, .process_bottom_right{
		width:100%!important
	}
	.process img{
		display:none
	}
	.title_step h4{
		    padding: 0!important;
    position: relative;
    width: 100%;
	}
}
.wpcf7-form{
	width:100%
}
.wpcf7-form input[type="text"], .wpcf7-form input[type="tel"], .wpcf7-form input[type="email"], textarea {
	width:100%;
	border : 1px solid #ebebeb;
	color:#9d9d9d;
	border-radius:2px;
	    margin-bottom: 10px;
		padding:10px;
}
.wpcf7-form input[type="submit"] {
	background: #ab8e00;
    border: 0px;
    color: #fff;
    padding: 10px 20px;
    border-radius: 2px;
    text-transform: uppercase;
	float:left
}
.wpcf7-form input[type="text"]:focus, .wpcf7-form input[type="tel"]:focus, .wpcf7-form input[type="email"]:focus, textarea:focus {
	border:1px solid #ab8e00;
	outline:0
}

.fa-align-justify{
	display:none
}

	.hotline a:nth-child(2){
		display:none
	}
	.info a{
	color:#fff 
}

.sss strong:nth-child(3){
	display:none
}
.metaslider-39{
	max-width:100%!important
}
.detail{
	display:none
}
.detail a{
	color:#1f79bc
}
@media all and (max-width:1024px){
	.metaslider-39{
		margin:auto
	}
	.languages{
		top:9px!important
	}
	.detail{
    position: fixed;
    z-index: 999;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #ff6600;
    color: #fff;
    padding: 5px;
    display: block;
    text-align: center;
    font-size: 16px;
	}
	.detail a {
    color: #fff;
}
	header form{
		width:100%!important
	}
	.logo{
		padding:10px 0 0 0!important;
	}
	.cat li .thumb{
		width:100%
	}
.cat li .tomtat{
width:100%!important;
}
	.metaslider-37{
		margin:auto
	}
	nav form{
		padding:15px 0!important
	}


	#closefbchat{display:none}

	.metaslider-69, .metaslider-31, .metaslider-95{
		margin:auto
	}
	.social{
		width:auto!important
	}
		.sss strong:nth-child(2){
		border-right: 0!important;
		    width: 100%;
    text-align: center;
    float: left;
	}
	.sss strong:nth-child(3){
		border-right: 0!important;
		border-left: 1px solid #fff!important;
		display:none!important;
		    width: 50%;
    text-align: center;
    float: left;
	}

	.hot{
		display:none
	}
	.hotline a:nth-child(2){
		display:inline-block;
		border-left:1px solid #fff
	}
		.hotline a:first-child{
		display:inline-block;
		border-right:1px solid #fff
	}
	.hotline{
		padding-top:0!important
	}
	.hotline a{
		width:50%;
		float:left;
		font-size:16px!important
	}
		#closefbchat{
		display:none
	}
	.description{
		width:100%;
		max-width:100%!important;
		padding:0!important
	}
.hotline {
    float: none;
    width: 100%;
    margin: auto;
    position: fixed;
    bottom: 0;
    background: #424242;
    left: 0;
    width: 100%;
    z-index: 100;
    text-align: center;
    border-top: 1px solid #fff;
}
.hotline a{
	color:#fff!important
}
.logo{
	width:100%
}
.metaslider-23{
	margin:auto
}
#menu-menu li {
    display: block;
    padding: 12px;
    position: relative;
    border-top: 1px solid #fff;

}
.fa-align-justify{
    font-size: 24px;
    margin: 12px;
	display:block;
	float:left;
	
    line-height: 1.5;
}
nav .social{
	padding:13px 0
}
.menu-menu-container{
	display:none;
	width:100%
}


.sub-menu{
	position:relative;

}
.sub-menu .sub-menu{
	right:0;
	width:100%
}
.sub-menu{
	margin-top:10px!important;
	width: 100%;
}
.info{
	width:100%;
	padding:10px
}
footer{
	padding:20px 0;
	
}
section{
	width:100%!important;
	padding:0 0 15px 0!important;
}
.text{
	padding-bottom:40px
}
}
@media all and (max-width:360px){
	nav form input{
		width:auto
	}
}
@media all and (max-width:900px) and (min-width:490px) {
	.cat-house li{
		width: 50%;
	}
}
@media all and (max-width:489px){
		.cat-house li{
		width: 100%;
	}

	.text{
		padding-bottom:40px!important
	}
}
@media all and (max-width:600px){
	.cat li {
    border-bottom: 1px solid #d8d8d8;
    margin-bottom: 15px;
}
	.cat li .thumb{
		width:100%
	}
	.cat li .tomtat{
		padding-left:0;
		width:100%
	}
}
@media all and (max-width:1024px) and (min-width:890px){
	.products li{
		width:33.33%!important
	}
}
@media all and (max-width:889px) and (min-width:640px){
	.products li{
		width:50%!important
	}
}

@media all and (max-width:649px) and (min-width:420px){
	.products li{
		width:100%!important
	}
	
}
@media all and (max-width:419px){
		.products li{
		width:100%!important
	}
	.products li h3{
		height:auto
	}
}
@media all and (max-width:700px){
		.nd {
    float: left;
    width: 100%;
    padding-left: 0;
		}
		.gallery{
			float: left;
    width: 100%;
	margin-bottom:20px
		}
		#slider3{
			margin:auto
		}
}
.float {
	    position: absolute!important;
       right: 15px;
	   top:20px!important
}
.description{
	    text-align: center;
    float: right;
    padding: 25px 0;
}
.description form{
    position: relative;
}
.description form input:focus{
	outline:0
}
.description form button:focus{
	outline:0
}
.description form input{
	    padding: 6px 20px;
    border-radius: 10px;
    border: 1px solid #42b0b9;
    width: 100%;
    max-width: 500px;
}
.description form input::placeholder{
	    color: #42b0b9;
}
.description form button{
	    position: absolute;
    background: none;
    border: 0;
    color: #42b0b9;
    margin-left: -30px;
    top: 5px;
}
.hotline{
	    display: inline-block;
    float: right;
    font-size: 20px;
	padding-top: 10px;
}
.hotline a{
	 padding: 5px;
    display: inline-block;
    color: #38c7fc;
    font-weight: 600; 
}

nav.menu ul li.current-menu-item a{
	color:#ff6600!important
}
.paragraph{
	    margin: 30px 0 0;
}
.clear{
	    height: 10px
}
.title-cat-home{
	font-weight:600;
	text-align:center;
	margin:0;
	font-size:18PX;
	display:inline-block;
	width:100%;
}
.title-cat-home:after{
	content:"";
	background:url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;
	display:inline-block;
	width:100%;
	height:12px;
}
.des-cat-home{
	text-align: center;
    margin: 0 0 20px 0;
    color: #515252;
}

.page-title-home{
	text-align: center;
    text-transform: uppercase;
    margin-top: 0px;
    font-size: 20px
}
.page-title-home:after{
	content: '';
    display: block;
    background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;
    height: 18px;
    margin: auto;
}
.ft:after{
    background: url(<?php echo get_template_directory_uri();?>/assets/images/line-3.png)no-repeat center!important;
}
.ft{
	color:#fff
}
.xemthem{
	    background: #ea0000;
		opacity:.6;
    color: #fff;
    padding: 7px 15px;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-oz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	border-radius:7px;
font-size:13px;
    position: relative;
text-transform: uppercase;
}
.products li:hover .xemthem{
	  background: #ea0000;
	  opacity:1
}
@media(max-width:563px){
	.description form button{
		right:10px
	}
}
@media all and (max-width:890px) and (min-width:520px){
	.news li{
		width:50%;
		margin-bottom:12px
	}
}
@media all and (max-width:519px){
	.news li{
		width:100%;
		margin-bottom:12px
	}
}
.social{
list-style: none;
    margin: 0;
    float: right;
    text-align: center;
    padding: 30px 0;
}

.metaslider-70{
	overflow:hidden
}
.news li .hover{
	    background: rgba(0, 0, 0, 0.48);
    color: #fff;
    padding: 4px 10px;
    border-radius: 7px;
    border: 1px solid #fff;
    position: absolute;
    top: 35%;
    left: 30%;
    right: 30%;
	display:none
}
.news li{
	position:relative
}
.news li:hover div .hover{
	display:block
}
.news li:hover div .img-cat{
	background:#000
}
.news li:hover div .img-cat img{
	opacity:.6
}
.price{
	color:#c90000;
	margin-bottom:15px;
	display:inline-block;
	width:100%;
	list-style:none;
	font-weight:600;
	padding:0;
	    display: table;
}
.price del{
	color:#747474
}
.price li{
	display:table-cell;
	    width: auto;
    float: none;
}
.cat-prop a{color: #0066b3}
.products li .thumb{
    overflow: hidden;
	position:relative
}
.products li .thumb img{
		height:auto;
		width:100%;
		margin:auto
}
@media(max-width:390px){
	.posts .owl-controls{
		top:0%!important
	}
}
.owl-prev, .owl-next{
	opacity:.5
}
.owl-prev:hover, .owl-next:hover{
	opacity:1
}
 .KMPOP div.wpcf7-mail-sent-ok{
	background:#fff;
		 color:green;
		 border:0px
	}
	.KMPOP{
 position: absolute;
    top: 0%;
    left: 15%;
    right: 15%;
    overflow: hidden;
	background:#fff
	}
	.KMPOP form{
	    margin-top: 20px;
	}
	.KMPOP strong{
	    color: #fff;
		font-size:16px
	}
	.KMPOP button{
	    background: #708f02;
    border: 0;
    padding: 10px 20px;
    color: #fff;
    margin: 20px;
	}
	
	.KMPOP input[type="text"]{
	    width: 100%;
    padding: 5px;
	}
	#boxes{
	     position: fixed;
    z-index: 99;
    display: inline-block;
    height: 100%;
    width: 100%;
    top: 0;
	left:0;
    background: rgba(0, 0, 0, 0.28);
	display:none;
	}
	.close{
	    position: absolute;
    right: 12px;
    top: 5px;
	color:#fff!important
	}
	#lorem{
	    position: absolute;
    z-index: 99;
    top: 25%;
    left: 25%;
    right: 25%;
    display: inline-block;
    background: url(<?php echo $url;?>)no-repeat center;
    height: 230px;
    background-size: cover;}
	@media(max-width:470px){
		#lorem{
		left:0;
			width:100%
		}
	}
	.KMPOP .btnn a:hover{
		background:#fff!important;
		color:#ea0000!important;
		border:1px solid #ea0000!important;
		margin:-1px
	}
	.price-boxPOP p{
		    display: inline;
			padding: 0 6px
	}
	.menu-doc .sub-menu li a:hover{
		color:#0075cd!important;
		font-weight:600
	}
	.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:988px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}
	
	.quantity wac-quantity{
	display:inline-block
}
button:focus{
	outline:0
}
.wac-qty-button{
	    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    user-select: text;
    cursor: auto;
    padding: 1px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
    width: 22px;
    text-align: center;
    margin: 0;
	float:left;
	padding:0!important;
	margin:0!important;
	background:none!important;
	border-radius:0px!important
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
.update{
	background: #ea0000;
    color: #fff!important;
    padding: 5px 10px;
    border-radius: 5px;
}
.del{
	background: #ea0000;
    color: #fff!important;
    padding: 5px 10px;
    border-radius: 5px;
}
.wc-proceed-to-checkout{
	background:#ea0000!important;
	
}
.wc-proceed-to-checkout a{
	padding:0!important;
	margin:0!important;
}
.woocommerce-info{
	display:none
}
.woocommerce form .form-row label{
	display:none!important
}
.form-row{
	width:100%!important;
	position:relative
}
#order_comments, #billing_field_446{
	display:none
}
.form-row span {
	border-right: 1px solid #d7d7d7;
    padding: 8px;
    position: absolute;
	left:3px;
	    width: 31px;
    text-align: center;
}
.form-row input{
	    border: 1px solid #d7d7d7;
    padding: 7px 10px 7px 43px;
}
.delivery{
	display:inline-block;
	margin:10px 0
}
.delivery p{
	display:inline-block;
	padding: 0 7px
}

#customer_details{
	    border: 1px solid #ebebeb;
    border-radius: 5px;
	padding:0
}
.woocommerce-message{
	display:none
}
.paid{
	    display: inline-block;
    width: 100%;
	margin:0
}
.paid li{
	display: inline-block;
    width: 100%;
}
.paid li .con{
    padding: 10px 30px;
    display: inline-block;
    width: 100%;
}
.paid li .con div{
	float:left;
	padding: 8px 0
} 
#step1{
	    border-radius: 5px;
    border: 1px solid #d7d7d7;
    padding: 0;
}
#step2, #step3{
	display:none;
	    border-radius: 5px;
    border: 1px solid #d7d7d7;
    padding: 0;
}
.ms{
	background: #6836e3;
    color: #fff;
    width: 200px;
    text-align: center;
    padding: 5px;
    border-radius: 4px;
    font-size: 24px;
}

				span.wpcf7-not-valid-tip{
			color:#000!important;
			    position: absolute;
    top: -43%;
    left: 10%;
    width: 100%;
    right: 10%;
    text-align: center;
		}
		#wpcf7-f119-o1 .wpcf7-form-control-wrap{
			display: inline-block;
    width: 100%;
		}
		.wpcf7-response-output, .wpcf7-display-none, .wpcf7-validation-errors{
			    margin: 0!important;
    padding: 0!important;
	position:absolute
		}

header form input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #f69090
}
header form input::-moz-placeholder { /* Firefox 19+ */
  color:#f69090
}
header form input:-ms-input-placeholder { /* IE 10+ */
  color: #f69090
}
header form input:-moz-placeholder { /* Firefox 18- */
  color: #f69090
}
header form input:focus{
	border: 1px solid #0066b3;
	outline:0
}
header form{
	display: inline-block;
    width:47%;
    float: left;
       margin: 20px 0;
}
header form button{
border: 0px;
    background: #ab8e00;
    position: absolute;
    right: 0;
    top: 0;
    color: #fff;
    height: 46px;
    width: 46px;
}
header form input{
	    width: 100%;
    padding: 12px;
    font-size: 17px;
    border: 1px solid #b69d22;
	color:#999999
}
header form input:focus{
	border:1px solid #ab8e00
}
header form input::placeholder{
	color:#999999
}
.info i{
	    display: inline-block;
    text-align: center;
    margin: 0 10px 0 0;
    color: #ab8e00;
}
form{
	position:relative
}

#wpcf7-f41-o1 input[type="submit"]{
	display:none
}
	.price li.xt{
		width:100%!important
	}
	.catss li:nth-child(even){
		background:#e1f2ff
	}
	.catss li:last-child{
		border-bottom:0px
	}
.catss li{
	padding:5px 0
}
.catss{
	    border: 1px solid #ececec;
    border-radius: 5px;
}
	.catss li .thumb img{
	padding:5px;
	width:auto;
	}
	.catss li h3{
		font-size: 13px;
    font-weight: 500
	}
	.cat li:hover .ds{
		opacity:1!important
	}
	@media(max-width:1024px){
		.catss li .thumb{
	height:auto
	}
		.catss li .thumb img{
	height:auto;
		}
	}
	.myportfolio{
	list-style:none;
	display:inline-block;
	padding:0;
	margin:20px 0;
	text-align:center;
	width:100%
}
.myportfolio li{
	display:inline-block;
	width:190px;
	float:left
}
.myportfolio li div{
	position:relative;
}
.myportfolio li h3{
	    position: absolute;
    color: #fff;
    top: 35%;
    left: 5px;
    right: 5px;
    font-size: 18px;
	display:block;
    font-weight: 500;
}

.myportfolio li h3:after{
	    content: "";
    width: 120px;
    height: 2px;
    background: #0066b3;
    display: block;
    margin: 10px auto;
	 
}
.myportfolio li:hover h3{
	display:none
}
.myportfolio li:hover h3:after{
	display:none
}
.myportfolio li .thumb{
	background:#000;
	height:184px
}
.myportfolio li .thumb img{
	width:100%;
	height:100%;
	opacity:.6;
}
.myportfolio li:hover .thumb img{
	opacity:1
}
.esg-media-cover-wrapper{
	padding:3px
}
.myportfolio li{
	cursor:pointer
}
.dss, .ds{
	width:12%!important
}
@media(max-width:1024px){
	.ds, .dss, .tomtat{
		width:100%!important;
		padding-right:0!important;
		max-width:100%!important
	}
	.dss{
		margin-bottom:12px
	}
}
@media(max-width:415px){
	.myportfolio li{
		float:none
	}
}
.hot{
	    background: #0066b3;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    line-height: 1.7;
    text-align: center;
    font-size: 20px;
    margin-right: 5px;
    position: relative;
    top: 3px;
}
#wpcf7-f4-o1 form p span:first-child, #wpcf7-f4-o1 form p span:nth-child(2), #wpcf7-f4-o1 form p span:nth-child(3), #wpcf7-f4-o1 form p span:nth-child(4) {
	    width: 100%;
    display: inline-block;
    float: left;
} 

#wpcf7-f4-o1 form p .your-message {
	padding:0!important
} 
@media(max-width:900px){
	#wpcf7-f4-o1 form p span{
		width:100%!important;
		padding:0!important;
	}
}
.woocommerce-cart table.cart img{
	width:auto
}
validated input.input-text{
	border-color:#d7d7d7!important
}
.backTOP{
	background:url(<?php echo get_template_directory_uri();?>/assets/images/top.png);
	background-size:contain;
	display:inline-block;
	width:45px;
	height:45px;
	position:fixed;
	bottom:40px;
	right:40px;
	z-index:999
}
.price li{
	width:auto!important;
	    padding: 10px 0;
}
.woocommerce-Price-amount{
	    font-size: 13px;
    white-space: nowrap;
}
.woocommerce table.shop_table td, .woocommerce table.shop_table tbody th, .woocommerce table.shop_table tfoot td, .woocommerce table.shop_table tfoot th{
	border-top: 1px solid #ea0000!important;
}
.woocommerce table.shop_table tfoot tr:last-child td{
	border-top: 0px!important;
}
@media(max-width:768px){
	.col-md-4{
		padding:0
	}
}
.content short{
color: #666;
}
#step2 input[type=radio]{
	    position: relative;
    top: 3px;
}
#step2 h4, #step1 h4, .ttoan h4{
	text-transform:uppercase;
	    font-weight: 500!important;
}
li.show:hover .tit-show{
	display:block
}
.pp_details h4{
	margin:0;display:block
}
div.pp_default .pp_nav{
	display:block
}
.pp_content{
	margin:auto
}
div.pp_default .pp_content_container .pp_right, div.pp_default .pp_content_container .pp_left{
	padding-right:0px!important;
	background:none!important;
	padding-left:0!important
}
.pp_bottom, .ppt, .pp_top{
	display:none
}
.pp_content_container {
    position: relative;
    text-align: left;
    width: 100%;
    background: #fff;
    display: inline-block;
    padding: 12px;
}
.imageframe img{
	width:100%
}
.wp-caption{
	margin-bottom: 11px;
    margin-right: 10px;
}
.posts {
	position:relative
}

.posts .owl-controls .owl-prev{
	left:-10px!important
}
.posts .owl-nav{
	    width: 100%;
    position: absolute;
    top: 48%;
}
.posts .owl-controls .owl-next{
	right:-10px!important
}
.posts{
	list-style:none;
	padding:0;
	margin:0
}
.posts li{
	display:inline-block;
	padding:0 15px;
}
.posts h3, .posts p{
	padding:0 15px
}
.cat-sp{
	    list-style: none;
    padding: 0;
     margin: auto;
    text-align: center;
    max-width: 740px;
}
.cat-sp li{
	    display: inline-block;
        width: 240px;
    padding: 27px;
}
.cat-sp li .thumb{
	    height: 185px;
    overflow: hidden;
    border-radius: 50%;
    border: 10px solid #8b959e;
}
.cat-sp li img{
	height: 100%;
    width: auto;
    max-width: inherit;
}
.cat-sp li h3{
	color:#fff
}
.noi-bat{
	list-style:none;
	padding:0;
	margin:0
}
.noi-bat li{
	width:33.333%;
	float:left;
	padding:0 15px;
	text-align:center;
	margin-bottom:20px
}
.noi-bat li .thumb{
	    overflow: hidden;
    border: 1px solid #0066b3;
    padding: 7px;
	    -webkit-transition: all 1s ease; /* Safari and Chrome */
  	-moz-transition: all 1s ease; /* Firefox */
  	-o-transition: all 1s ease; /* IE 9 */
  	-ms-transition: all 1s ease; /* Opera */
  	transition: all 1s ease;
}
.noi-bat li img{
	display:block;
	margin:auto;
	width:100%;
    height: auto;
}
.noi-bat li:hover .thumb{
	    -webkit-transform: scale(1.18);
    -moz-transform: scale(1.18);
    -ms-transform: scale(1.18);
    -o-transform: scale(1.18);
    transform: scale(1.18);
    background: #fff;
}
@media all and (max-width:1024px) and (min-width:568px){
	.noi-bat li{
		width:50%
	}
}
@media all and (max-width:567px){
	.noi-bat li{
		width:100%
	}
}
.metaslider-73{
	margin:auto
}

		.appear{
			color:#0066b3
		}
		.btn{
			color:#fff;
				float:right;
				position: relative;
		}
		.btn span{
			cursor:pointer;
			display:block
		}
		.languages{
    float: right;
    display: inline-block;
    position: relative;
        padding: 13px 0;
		}
		@media(max-width:1024px){
				.social{
		text-align: center;
    padding: 15px 0!important;
    display: inline-block!important;
    width: 100%!important;
	float:none!important;
	}
		}
		#category{
	    color: #999;
    font-size: 16px;
    max-width: 120px;
    border: 0px;
    position: absolute;
    right: 51px;
    top: 14px;
    border-left: 1px solid #ab8e00;
    padding-left: 9px;
		}
			#category:focus{
				outline:0
			}
			option:hover {background:#705d00;color:#fff}

option {border:1px solid #ab8e00}
.owl-next{
	right:-15px
}
.owl-prev{
	left:-15px
}
.pop{
	    position: absolute;
    background: #ab8e00;
    color: #fff;
    right: 0;
    z-index: 9;
    border-radius: 5px;
    padding: 3px 7px;
}
@media(max-width:420px){
	#category{
		display:none
	}
}
.metaslider-25{
	max-width:100%!important
}
.dv{
	list-style:none;
	padding:0;
	margin:25px 0;
	text-align:center
}
.dv li{
	display:inline-block;
	width:33.333%;
	float:left;
	margin-bottom:15px;
	padding:0 10px
}
@media all and (max-width:1024px) and (min-width:760px){
	.dv li{
			width:50%
	}
}
@media all and (max-width:759px){
	.dv li{
			width:100%
	}
}
.dv div{
	width:100%;
	display: inline-block;
    padding: 20px;
    border: 1px solid #e1e1e1;
    border-radius: 10px;
	padding:0 15px 10px
}
.dv h3{
	color: #ff6600;
    text-transform: uppercase;
}
.dv h3:after{
	content:'';
	width:100%;
	max-width:220px;
	background:#ff6600;
	height:2px;
	margin:15px auto;
	display:block
}
.dv b{
	    color: #ed2222;
    font-size: 15px;
}
.dv a{
	color: #ff6600;
    float: right;
}
.dv p{
	text-align:left
}
.process{width:100%;}
.process_top{width:100%;}
.process_top_left{width:80%;float:left;}
.process_top_right{width:20%;float:left;}
.title_process h1{font-size:16px;font-family:OpenSans_Bold;color:#333;text-transform:uppercase;position:relative;padding-bottom:5px;line-height:24px;}
.title_process h1:before{position:absolute;content:"";width:10%;height:2px;background-color:#f69c2a;left:0;top:100%;}
.des_process{padding-bottom:20px;}
.des_process p{font-size:14px;font-family:OpenSans_Regular;color:#777;line-height:21px;}
.process_top_right img{margin:0;
position: relative;
    top: 40px;
    right: 0;}
.stepped{width:100%;}
.title_step{width:100%;border-bottom:1px solid #ddd;}

.title_step h4{font-size:14px;color:#000;font-family:OpenSans_Bold;text-transform:uppercase;padding-left:6%;position:relative;}
.title_step h4 b{font-size:25px;color:#0c6ce8;font-family:OpenSans_Bold;}
.title_step h4 b:before{position:absolute;content:"";width:20px;height:20px;background-color:#0c6ce8;top:100%;border-radius:50%;z-index:1;margin-top:0px;overflow:hidden;border:3px solid #fff;}
.process_bottom{width:100%;}
.process_bottom_left{width:20%;float:left;}
.process_bottom_right{width:80%;float:left;}
.process_bottom_left img{margin:0;
position: relative;
    top: 40px;
    left: -15px;}
.stepped_2 .title_step h4 b{color:#ee1576;}
.stepped_2 .title_step h4 b:before{background-color:#ee1576;}
.stepped_3 .title_step h4 b{color:#cc33ff;}
.stepped_3 .title_step h4 b:before{background-color:#cc33ff;}
.stepped_4 .title_step h4 b{color:#f69c2a;}
.stepped_4 .title_step h4 b:before{background-color:#f69c2a;}
.stepped_1 .title_step h4{padding-left:8%;}
.stepped_2 .title_step h4{padding-left:29%;}
.stepped_2 .stepped_content p, .stepped_3 .stepped_content p, .stepped_4 .stepped_content p{text-align:right;}
.stepped_3 .title_step h4{padding-left:26%;}
.stepped_4 .title_step h4{padding-left:46%;}

.products li{
	width:33.333%;
}
.products .thumbs{
	height:420px;
	overflow:hidden;
}
.products li h3{
	text-transform:uppercase
}
.products .thumbs img{
	position:relative;
	width:100%;
	height:auto;
	transition-duration: 5s;
    -webkit-transition-duration: 5s;
    -moz-transition-duration: 5s;
    -o-transition-duration: 5s;
}
.nd img{
		position:relative;
	width:100%;
	height:auto;
	transition-duration: 5s;
    -webkit-transition-duration: 5s;
    -moz-transition-duration: 5s;
    -o-transition-duration: 5s;
}
.dtac img{
	left:0
}
.dtac li{
	text-align:center
}
.dtac h3{
	color:#333;
	
}
.dtac .thumbs{
	    overflow: inherit;
		border-radius:100%
}
.dtac .thumbs img{
	border-radius:50%;
	border:4px solid #ff6600
}
.dtac .owl-controls .owl-prev,.dtac .owl-controls .owl-next{
	background:none;
	color:#ff6600;
	top:38%
}
.process_top, .process_bottom{
	display:none
}
</style>
</head>
<body <?php body_class();?>>
<header>
<div class="container">
<?php if(!is_front_page()){?>
<div class="logo">
<a href="<?php echo site_url();?>" title="<?php echo get_bloginfo('name');?>">
<?php echo do_shortcode('[metaslider id=33]');?>
</a>
</div>
<?php }else{ ?>
<h1 class="logo">
<a href="<?php echo site_url();?>" title="<?php echo get_bloginfo('name');?>">
<?php echo do_shortcode('[metaslider id=33]');?>
</a>
</h1>
<?php };?>
<nav class="menu">
<i class="fa fa-align-justify"></i>
<?php wp_nav_menu(array('theme_location' => 'menu'));?>
</nav>
</div>
</header>