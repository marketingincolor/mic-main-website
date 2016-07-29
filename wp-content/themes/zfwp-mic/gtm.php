<?php
$request_url = $_SERVER["REQUEST_URI"];

$isBuzz = strpos($request_url, '/blog/buzz/');
$isDowntown = strpos($request_url, '/blog/downtown/');
$isNews = strpos($request_url, '/blog/news/');
$isTech = strpos($request_url, '/blog/technology/');

if ($isBuzz!==false)
{
    //url contains '/blog/buzz/'
    $cat_name = 'Buzz';
}
else if ($isDowntown!==false)
{
    //url contains '/blog/downtown/'
    $cat_name = 'Downtown';
}
else if ($isNews!==false)
{
    //url contains '/blog/news/'
    $cat_name = 'MIC News';
}
else if ($isTech!==false)
{
    //url contains '/blog/technology/'
    $cat_name = 'Technology';
}
else {
	
	$cat_name = 'No Category';
}
 	
  ?>
<script>
window.dataLayer = window.dataLayer || [];

dataLayer.push({
'blogCategory': '<?php echo $cat_name; ?>'
});


</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLNW5X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TLNW5X');</script>
<!-- End Google Tag Manager -->