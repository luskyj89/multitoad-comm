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
                    <strong class="SiteTitle"><a href="http://multitoad.com">{logo}</a></strong>
                    {module name="MeModule"}
                    <a class="toad-search" href="http://multitoad.com/community/search" title="Search">Search</a>
                    <a id="hamburger-btn" href="#" title="Menu">Menu</a>
                    <!-- <div class="SiteSearch">{searchbox}</div> -->
                    <ul class="SiteMenu">
                       <!-- {dashboard_link} -->
                       <!--{discussions_link} -->
                       <!-- {activity_link} -->
                       <!-- {inbox_link} -->
                       <!-- {custom_menu} -->
                       <!-- {profile_link}
                       {signinout_link}  -->
                       <li><a href="http://multitoad.com" target="_self">Features</a></li>
                       <li class="community-active"><a href="{link path="/"}" title="Community">Community</a></li>
                       <li><a href="http://multitoad.com/category/videos/" target="_self">Videos</a></li>
                       <li><a href="http://multitoad.com/category/podcast/" target="_self">Podcast</a></li>
                       <li><a href="http://multitoad.com/mtsc-statistics/" target="_self">MTSC Stats</a></li>
                       <!-- <li><a id="mtsn-button" href="#" target="_self">Streaming Network</a></li> -->
                    </ul>

                    <div id="hamburger">
                        <ul>
                            <li><a href="http://multitoad.com" target="_self">Features</a></li>
                            <li class="community-active"><a href="{link path="/"}" title="Community">Community</a></li>
                            <li><a href="http://multitoad.com/category/videos/" target="_self">Videos</a></li>
                            <li><a href="http://multitoad.com/category/podcast/" target="_self">Podcast</a></li>
                            <li><a href="http://multitoad.com/mtsc-statistics/" target="_self">MTSC Stats</a></li>
                            <!-- <li><a id="mtsn-button" href="#" target="_self">Streaming Network</a></li> -->
                        </ul>
                    </div>

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
                    <img class="masthead" src="http://multitoad.com/community/themes/multitoad/design/images/masthead-aug-2015.png" alt="Let's Beat It Together!" />
                    <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
                    <figure class="toads"></figure>
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
   <script src="http://multitoad.com/community/themes/multitoad/design/js/scripts.min.js" type="text/javascript"></script>
</body>
</html>
