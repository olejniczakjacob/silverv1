<!DOCTYPE html>
<html lang="pl-PL" dir="ltr">
<head>
  <% base_tag %>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">-
  <!-- -->
  $MetaTags
  <!-- -->
  <title>$Title</title>
  <meta name="author" content="Autor page">
  <meta name="description" content="Description page">
  <% include OpenGraph %>
  <link href="" rel="canonical">
  <link rel="shortcut icon" href="http://nazwa-serwisu.pl/favicon.ico" type="image/x-icon">
  <link rel="icon" href="..." type="image/x-icon">

  <link rel="stylesheet" href="">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.0&appId=429299764176449&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<% include Header %>

  $Layout

<% include Footer %>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'pl'}
</script>
</body>
</html>
