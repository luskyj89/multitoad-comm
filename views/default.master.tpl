<!DOCTYPE html>
<html>
<head>
  {asset name="Head"}
  <link href='http://fonts.googleapis.com/css?family=Arimo:400,700|Oswald:400,700' rel='stylesheet' type='text/css'>
</head>
<body id="{$BodyID}" class="{$BodyClass}">
   <div id="Frame">
      <div class="Head" id="Head">
         <div class="Row">
            <div class="row">
                <div class="large-12 columns">
                    <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>
                    <div class="SiteSearch">{searchbox}</div>
                    <ul class="SiteMenu">
                       <!-- {dashboard_link} -->
                       <!--{discussions_link} -->
                       <!-- {activity_link} -->
                       <!-- {inbox_link} -->
                       <!-- {custom_menu} -->
                       <!-- {profile_link}
                       {signinout_link}  -->
                       <li><a href="http://multitoad.com" target="_self">Features</a></li>
                       <li class="community-active">Community</li>
                       <li><a href="http://multitoad.com/streaming-network/" target="_self">Streamers</a></li>
                    </ul>
                </div>
            </div>
         </div>
      </div>
      <div id="Body">
         <div class="Row">
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <div class="Column PanelColumn" id="Panel">
                       {module name="MeModule"}
                       {asset name="Panel"}
                    </div>
                </div>
                <div class="large-9 medium-9 columns">
                    <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
                    <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
                </div>
            </div>
         </div>
      </div>
      <div id="Foot">
            <div class="Row">
                <div class="row">
                    <div class="large-12 columns">
                        &copy; 2015 Multitoad | All Rights Reserved | <a href="http://multitoad.com" target="_self" title="Back to the homepage">mulitoad.com</a>
                    {asset name="Foot"}
                    </div>
                </div>
            </div>
      </div>
   </div>
   {event name="AfterBody"}
</body>
</html>
