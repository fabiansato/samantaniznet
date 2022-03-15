<?php
$filename = 'data/head.json';
$data = file_get_contents($filename);
$head = json_decode($data);

header("X-Robots-Tag: index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1", true);

?>

<head>

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <!-- styles -->
  <link href="src/assets/css/estilo.css" rel="stylesheet">
  <link href="src/assets/css/promotigo.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- external css -->

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <!-- Favicons -->
  <link href="src/assets/img/favicon.ico" rel="icon">
  <link href="src/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="manifest" href="src/assets/img/manifest.json" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta name="theme-color" content="<?php echo $head[0]->themecolor?>" />

<!-- google analytics -->
<script>
  function isMobile() {
  var check = false;
                  (function(a) {
                      if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
                              .test(a)
                              || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
                                  .test(a.substr(0, 4))) {
                          check = true;
                      }
                  })(navigator.userAgent || navigator.vendor || window.opera);
                  return check;
              }
              var channelVal;
    if (isMobile()) {
      channelVal = "Mobile Site";
    } else {
      channelVal = "Brand Site";
    }
    digitalData = {
      siteInfo: {
        channel: '',
        sitetype: 'Non-D2'
      },
      page: {
        pageInfo: {
          destinationURL: "<?php echo $head[0]->urlbase?>"
        },
        category: {
          pageType: "Form"
        }
      },
      video: [],
      campaign: [],
      product: [],
      privacy: {
        accessCategories: [{
          domains: []
        }]
      },
      component: [],
      trackingInfo: {
        GID: '',
        "un": "",
        tool: [{
          ids: ""
        }]
      },
      promotion: []
    }
    digitalData.siteInfo.channel = channelVal;
    digitalData.page.category.primaryCategory = channelVal;
    digitalData.trackingInfo = {};
    digitalData.trackingInfo.tool = [{}];
    digitalData.trackingInfo.tool[0] = {};
    digitalData.trackingInfo.tool[1] = {};
    digitalData.privacy = {}; //Optional
    digitalData.page.attributes = {};
    digitalData.privacy.accessCategories = [{}]; //Optional
    digitalData.privacy.accessCategories[0].domains = []; //Optional
    digitalData.event = [];
    digitalData.page.pageInfo.pageName = "<?php echo $head[0]->title?>"; //Cambiar por nombre de pagina
    digitalData.page.pageInfo.language = "es";
    digitalData.page.category.subCategory1 = "/";
    digitalData.page.attributes.contentType = "Form"; // To be set on each page change. Should contain 404
    //for error pages
    digitalData.page.attributes.articleName = "<?php echo $head[0]->title?>"; //Cambiar por nombre de pagina
    digitalData.page.attributes.brandCategory = '<?php echo $head[0]->brand?>'; //Cambiar por marca
    digitalData.page.attributes.country = 'Argentina'; //Cambiar por país
    digitalData.page.attributes.globalBrand = 'Unilever'; //Cambiar por marca
    digitalData.page.attributes.localBrand = '<?php echo $head[0]->brand?>'; //Cambiar por marca
    //digitalData.user[n].profile[n].profileInfo.crmID = 'CRM ID'; //Optional
    digitalData.trackingInfo.tool[0].id = "UA-69168250-13,G-7GV4QCGML9"; //Cambiar por tracking id PROD
    digitalData.trackingInfo.tool[1].id = "unileverlatam-promo-allbrands-ar,unileverlatam-global-allbrands";
    digitalData.siteInfo.internalDomain = "<?php echo $head[0]->urlbase?>";
  
    var ev = {};
    ev.eventInfo = {
      'type': ctConstants.trackEvent,
      'eventAction': ctConstants.RegistrationStart,
      'eventLabel': "<?php echo $head[0]->url?>",
      'eventValue': 1,
    };
    ev.category = { 'primaryCategory': ctConstants.engagement }
    ev.subcategory = 'Lead';
    ev.attributes = { 'nonInteractive': { 'nonInteraction': 1 } };
    digitalData.event.push(ev);
  
    function googleCompleteRegistration() {
      var ev2 = {};
      ev2.eventInfo = {
        'type': ctConstants.trackEvent,
        'eventAction': ctConstants.registration,
        'eventLabel': "<?php echo $head[0]->url?>",
        'eventValue': 1,
      };
      ev2.category = { 'primaryCategory': ctConstants.engagement }
      ev2.subcategory = 'Lead';
      digitalData.event.push(ev2)
    }
  
              function googleCompleteRegistration() {
      var ev2 = {};
      ev2.eventInfo = {
        'type': ctConstants.trackEvent,
        'eventAction': ctConstants.registration,
        'eventLabel': "<?php echo $head[0]->url?>",
        'eventValue': 1,
      };
      ev2.category = { 'primaryCategory': ctConstants.engagement }
      ev2.subcategory = 'Lead';
      digitalData.event.push(ev2)
    }
  
    </script>
    <script src="//assets.adobedtm.com/e6bd1902389a/0c42a94ee42f/launch-edc5891416f7.min.js" async></script>
  


  <!--PROMOTIGO SCRIPT COPY AND PASTE TO ACTIVATE -->

    <!--Update Form ID for each App instance using formId var -->
    <!--Production Bootstrap Link -->
    <script src="https://apps.promotigo.com/Scripts/forms-bootstrapper.js">

    </script>


  <script>
    function loadPromotigo() {
      var formId = '<?php echo $head[0]->promotigoid?>';
      promotigo.server = 'https://api2.promotigo.com/';
      promotigo.formId = formId;
      promotigo.bootstrap = true;
      promotigo.language = 'es';
      promotigo.renderForm('#promotigoForm');
      promotigo.customColumns = 'mycolumns';
      promotigo.columns = 'col-xs-12 col-sm-12 col-md-12 col-md-offset-3 col-lg-12 col-lg-offset-4';

    };
  </script>
    <!--END OF PROMOTIGO SCRIPT-->

    <!--FACEBOOK SCRIPT-->
<script>
! function (f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?php echo $head[0]->facebookpixelid?>');
  fbq('track', 'PageView');

  function completeRegistration() {
    fbq('track', 'CompleteRegistration', {
      value: 1.00,
      currency: 'USD'
    });
  }</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $head[0]->facebookpixelid ?>&ev=PageView&noscript=" /></noscript>
<!-- End Facebook Pixel Code -->

<!-- metadescriptions --> 
<meta charset="<?php echo $head[0]->charset ?>" />
<title><?php echo $head[0]->title ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="<?php echo $head[0]->metadescription ?>" />
	<meta name="author" content="<?php echo $head[0]->author ?>">
	<link rel="canonical" href="<?php echo $head[0]->url ?>" />
	<meta itemprop="name" content="<?php echo $head[0]->brand ?>">
	<meta itemprop="description" content="<?php echo $head[0]->metadescription ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $head[0]->title?>">
	<meta name="twitter:description" content="<?php echo $head[0]->metadescription ?>">
	<meta name="twitter:site" content="<?php echo $head[0]->twitter?>">
	<meta name="twitter:creator" content="<?php echo $head[0]->twitter?>">
	<meta name="twitter:image:src" content="<?php echo $head[0]->url?>src/assets/img/ogimage.jpg">
	<meta name="og:title" content="<?php echo $head[0]->brand?>">
	<meta name="og:description" content="<?php echo $head[0]->metadescription ?>">
	<meta name="og:image" content="<?php echo $head[0]->url?>src/assets/img/ogimage.jpg">
  <meta property="og:image:alt" content="<?php echo $head[0]->title ?>" />
	<meta name="og:url" content="<?php echo $head[0]->url?>src/assets/img/ogimage.jpg">
	<meta name="og:site_name" content="<?php echo $head[0]->brand?>">
	<meta name="og:locale" content="es_AR">
	<meta name="og:type" content="article">
	<meta name="article:section" content="Social Media">
	<meta name="article:author" content="<?php echo $head[0]->brand?> ">
	<meta name="article:tag" content="Social Media">
  <meta name="keywords" content="<?php echo $head[0]->keywords?>">

  <meta name="robots" content="index, follow">
</head>