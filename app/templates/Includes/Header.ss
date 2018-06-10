<header>
  <h2>
    <a href="$AbsoluteBaseURL">
      Widocznis
    </a>
  </h2>
  <h1>
    $Title
  </h1>
<% loop $Menu(1) %>
    <li><a href="$Link" title="$MenuTitle" class="$LinkingMode">$MenuTitle</a></li>
<% end_loop %>
  <nav>
    $Breadcrumbs
  </nav>
</header>
