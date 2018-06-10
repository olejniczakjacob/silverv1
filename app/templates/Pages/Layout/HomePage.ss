<main>
<% loop LatestArticles(3) %>
  <a href="$Link" title="$Title">Czytaj</a>
  <p><% if $Teaser %>$Teaser<% else %>$Content.FirstSentence<% end_if %></p>
<% end_loop %>
</main>
