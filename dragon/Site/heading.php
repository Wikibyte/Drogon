/**
 *
 * @file Dragon multi-css
 * @Labs.Wikibyte.org
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */
<style type="text/css"> #wb-heading-bg { background: url("<?php echo $SIpfad; ?>/images/under<?php echo $wgSkinColor; ?>.png") no-repeat center bottom transparent; padding: 10px; } #wb-heading-color { color: #07C; } </style> <div id="wb-heading-bg"> <div class="row-fluid"> <div class="span6"> <?php # Header - Titel # ?> <h1 id="wb-heading-color"><span dir="auto"><?php $this->html( 'title' ) ?></span></h1> </div> <div class="span6"> <div style="margin-top:15px; margin-bottom:-12px; float:right;"> <ul class="nav nav-pills"> <?php #<li class="active"><a href="http://www.wikibyte.org"><i class="icon-home"></i></a> </li> ?> <?php #<!--Botton1 Forum--> ?> <li><a id="hele<?php echo $wgSkinColor; ?>" href="http://podcast.wikibyte.org/wiki/Spezial:WikiForum"><?php #<i class="icon-comment"></i> ?> Forum</a> </li> <?php #<!--Botton2 Blog--> ?> <li><a id="hele<?php echo $wgSkinColor; ?>" href="http://wikibyte.org/wiki/Blog:WikiByte"><?php #<i class="icon-align-justify"></i> ?> Blog</a> </li> <?php #<!--Botton3 Labs--> ?> <li class="dropdown"> <a id="hele<?php echo $wgSkinColor; ?>" class="dropdown-toggle" data-toggle="dropdown" href="#"><?php #<i class="icon-certificate"></i> ?>Labs</a> <ul class="dropdown-menu"> <!--<li><a href="http://labs.wikibyte.org/wiki">Wikibyte Labs - Wiki</a></li>--> <li><a href="http://labs.wikibyte.org">Wikinode - Suchmaschine</a></li> <li><a href="http://labs.wikibyte.org/wip">WiP - Soziales Netzwerk</a></li> </ul> </li> <?php #<!--Botton4 Partner--> ?> <li class="dropdown"> <a id="hele<?php echo $wgSkinColor; ?>" class="dropdown-toggle" data-toggle="dropdown" href="#"><?php #<i class="icon-star-empty"></i> ?> Partner</a> <ul class="dropdown-menu pull-right"> <li><a target="_blank" href="http://labs.wikibyte.org/">Suchmaschine</a></li> <li><a target="_blank" href="http://marjorie-wiki.de/">Marjorie - Wikis</a></li> <li><a target="_blank" href="http://se-heaven.de/">Final Fantasy - Wikis</a></li> <li><a target="_blank" href="http://ameriv.de/">Ameriv - Wikis</a></li> <li><a target="_blank" href="http://basteleck.wikibyte.org">Basteleck - Blog</a></li> <li><a target="_blank" href="http://bastardmagazine.de">Bastardmagazine</a></li> </ul> </li> <?php #<!--ButtonEnde Hilfe--> ?> <li class="<?php #active ?> dropdown"> <a id="hele<?php echo $wgSkinColor; ?>" class="dropdown-toggle" data-toggle="dropdown" href="#"><? #<i class="icon-question-sign"></i>?> Hilfe</a> <ul class="dropdown-menu pull-right"> <?php if($this->data['loggedin']) { #Angemeldet: echo '<li><a href="/wiki/Hilfe:Inhaltsverzeichnis">Inhaltsverzeichnis</a></li>'; echo '<li><a href="/wiki/Hilfe:Benutzer_und_Rechte">Benutzer und Rechte</a></li>'; echo '<li><a href="/wiki/Hilfe:Flattr">Unterst&uuml;tzen</a></li>'; } else { #nicht angemeldet echo '<li><a href="http://hilfe.wikibyte.org/wiki/Hilfe:Inhaltsverzeichnis">&Uuml;bersicht</a></li>'; } ?> </ul> </li> </ul> </div> </div> </div> </div> <?php #<!-- /firstHeading --> ?>