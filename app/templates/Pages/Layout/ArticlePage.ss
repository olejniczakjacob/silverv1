
<h1>$Title</h1>

<% if $Date %><time>$Date</time><% end_if %>
<% if $Author %><span rel="Author">$Author</span><% end_if %>
<% if $Teaser %><p>$Teaser</p><% end_if %>

$Content
<% if $Photo %>
<% with $Photo.ScaleWidth(400) %>
<img src="$URL" alt="$Title" title="$Title" width="$Width" height="$Height">
[$Size] ($Extension)
<% end_with %>
<% end_if %>

<br><br>

<% if $Brochure %>
<% with $Brochure %>
<a href="$URL" title="$Title">Brochure ($Extension) [$Size]</a>
<% end_with %>
<% end_if %>

$CategoriesList

$CommentForm
<% loop $Comments %>
                    <li>
                        <img src="images/comment-man.jpg" alt="" />
                        <div class="comment">
                            <h3>$Name<small>$Created.Format('j F, Y')</small></h3>
                            <p>$Comment</p>
                        </div>
                    </li>
								<% end_loop %>
