<% loop $Children %>
  <h2><a href="$Link">$Title</a></h2>
  $Content.LimitCharacters(2,'...')
  $Content.LimitWordCount(2,'...')

        <% if $Teaser %>
          <p>$Teaser</p>
        <% else %>
          <p>$Content.FirstSentence</p>
        <% end_if %>
<% end_loop %>
<% with $SiteConfig %>

<% if $FacebookLink %>
<div class="fb-page" data-href="$FacebookLink" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="$FacebookLink" class="fb-xfbml-parse-ignore">
    <a href="$FacebookLink">Elektronika dla każdego</a>
  </blockquote>
</div>
<% end_if %>

<% if $GoogleLink %>
<div class="g-page" data-href="$GoogleLink" data-rel="publisher"></div>
<% end_if %>

<% end_with %>
