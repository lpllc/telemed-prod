<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Сервис обеспечивает мгновенную связь с врачами, психологами, диетологами, ветеринарами и фитнес тренерами со всего мира.">
    <meta name="keywords" content="Сервис обеспечивает мгновенную связь с врачами, психологами, диетологами, ветеринарами и фитнес тренерами со всего мира.">
    <meta property="og:image" content="img/share.png">

    <link rel='shortcut icon' type=image/vnd.microsoft.icon href=img/favicon.ico>
    <link rel=apple-touch-icon type=image/png href=img/favicon.ico>
    <link rel=apple-touch-icon type=image/png sizes=72x72 href=img/favicon.ico>
    <link rel=apple-touch-icon type=image/png sizes=114x114 href=img/favicon.ico>
    <link rel=icon type=image/png href=img/favicon.ico>
    <link rel="manifest" href="site.webmanifest">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <?= Html::csrfMetaTags() ?>
    <title>Doctor Smart платформа для консультаций в сфере здоровья</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TDJ44T8');</script>
    <!-- End Google Tag Manager -->

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDJ44T8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?= $content ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://d3js.org/d3-ease.v0.5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/segment-js/1.0.0/segment.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '394152674344854');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=394152674344854&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
  (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
      try {
        w.yaCounter47098227 = new Ya.Metrika({
          id:47098227,
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true,
          trackHash:true
        });
      } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
  })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47098227" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110201705-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110201705-2');
</script>

<?php
$this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
