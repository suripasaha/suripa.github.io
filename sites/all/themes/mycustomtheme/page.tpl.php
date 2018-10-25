<div id ="page-wrapper">

<header>
<div id ="header">
<h2>My first website theming<h2>
<?php print render($page['header']); ?>
</div>
<div id ="menu">
<?php print render($page['menu']); ?>
</div>
<nav><?php print render($page['main-navigation']); ?></nav>
<?php print render($page['header']); ?>
</header>
<div id ="slideshow">
<?php print render($page['slideshow']); ?>
</div>


<div id ="region">
<?php print render($page['content']); ?>
</div>
<div id ="footer">
<?php print render($page['footer-navigation']); ?>
</div>


</div>