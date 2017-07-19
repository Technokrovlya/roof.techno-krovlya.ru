<script type="text/javascript"> 
  if (navigator.userAgent.indexOf('Safari') != -1 && 
      navigator.userAgent.indexOf('Chrome') == -1) {
          document.body.className += " safari";
      }
</script>

<script>
  function sendMessage(form) {
    var msg = $(form).serialize();
         $.ajax({
           type: 'POST',
           url: 'mailer.php',
           data: msg,
           success: function(data) {
             $('#containerResponse').html(data);
           },
           error:  function(xhr, str){
       alert('Возникла ошибка: ' + xhr.responseCode);
           }
         });
      }
</script>


<script>
  $('.gallery').magnificPopup({
    delegate: 'a', 
    type: 'image',
    gallery: {enabled: true,}
  });
  $(function() {
    var timeMenu = 0;
      $("#menu-icon").on("mouseover", function(){
          $('#dropdown-menu').addClass(' visible')
      });
      $('#dropdown-menu').mouseleave(function(){
        timeMenu = setTimeout(function(){$('#dropdown-menu').removeClass(' visible')}, 800);
    }); 
      $('#dropdown-menu').mouseenter(function(){
        clearTimeout(timeMenu);
    });
      
  });
</script>

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "Технокровля",
  "url": "http://roof.techno-krovlya.ru",
  "logo": "http://roof.techno-krovlya.ru/img/logo.png",
  "image": "http://roof.techno-krovlya.ru/img/about/office2.jpg",
  "description": "Кровельно-фасадная мастерская полного цикла. Строительство скатных кровель под ключ, установка мансардных окон, монтаж вентилируемых фасадов. Гарантия на монтаж до 5 лет.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "проспект Машиностроителей, 20Б",
    "addressLocality": "Курган",
    "addressRegion": "Курганская область",
    "postalCode": "640000",
    "addressCountry": "Россия"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "55.463901",
    "longitude": "65.339402"
  },
  "hasMap": "https://yandex.ru/maps/53/kurgan/?ll=65.339330%2C55.463840&z=17&mode=search&poi%5Bpoint%5D=65.339427%2C55.463798&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1678178789&ol=biz&oid=1121057680",
  "openingHours": "Mo, Tu, We, Th, Fr 09:00-18:00 Sa 09:00-14:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+73522644050",
    "contactType": "general"
  }
}
 </script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35072805 = new Ya.Metrika({
                    id:35072805,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
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
<noscript><div><img src="https://mc.yandex.ru/watch/35072805" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70124990-1', 'auto');
  ga('send', 'pageview');

</script>

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
