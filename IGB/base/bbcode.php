<?php

class bbcode{


var $text;


var $style = '<style type="text/css">.bb-n1 { font-size:15px; font-family: Verdana, sans-serif; font-weight: bold; }
.bb-n2 { font-size:13px; font-family: Verdana, sans-serif; font-weight: bold; }
.bb-n3 { font-size:11px; font-family: Verdana, sans-serif; font-weight: bold; }
.bb-code { border: 1px solid #666666; background-color: #D0CFC9; padding: 4px; }
.bb-definition { border: 1px solid #6666AA; background-color: #D0CFC9; padding: 4px; }
.bb-note { border: 1px solid #66AA66; background-color: #D0CFC9; padding: 4px }
.bb-warning { border: 1px solid #AA6666; background-color: #D0CFC9; padding: 4px; }
.bb-quote { border: 1px solid #66AA66; background-color: #D0CFC9; padding: 4px }
.bb-code-header { font-weight: bold; }
</style>';


function link($url){
if (!eregi("^(http(s)?\://|ftp(s)?\://|(\?)+).*$", $url))
return "'http://$url' target='".$this->target($url)."'";
else return "'$url' target='".$this->target($url)."'";
}

function target(&$url){
$self = str_replace(".", "\.", $_SERVER['SERVER_NAME']);
if (eregi("^(\?|(http\://)?$self).*$", $url))
return "_self";
else return "_blank";
}

function code($text){
$this->$text = strip_tags($text);
return preg_replace(array("#\[n1\](.*?)\[/n1\]#si", "#\[n2\](.*?)\[/n2\]#si", "#\[n3\](.*?)\[/n3\]#si", "#\[b\](.*?)\[/b\]#si", "#\[u\](.*?)\[/u\]#si", "#\[i\](.*?)\[/i\]#si", "#\[color=(\#?[\w]+)+\](.*?)\[/color\]#si", "#\[font=([\w ]+)+\](.*?)\[/font\]#si", "#\[size=([\w]+)+\](.*?)\[/size\]#si", "#\[right\](.*?)\[/right\]#si", "#\[left\](.*?)\[/left\]#si", "#\[center\](.*?)\[/center\]#si", "#\[definicja\](.*?)\[/definicja\]#si", "#\[uwaga\](.*?)\[/uwaga\]#si", "#\[notatka\](.*?)\[/notatka\]#si", "#\[cytat(=(.*?))?\](.*?)\[/cytat\]#sie", "#\[img\](.*?)\[/img\]#si", "#\[img=(\d{1,3}){1}x(\d{1,3}){1}\](.*?)\[/img\]#si", "#\[url(=(.*?))?\](.*?)\[/url\]#sie", "#\[email=(.*?)\](.*?)\[/email\]#si", "#\[list\](.*?)\[/list\]#si"), array("<span class='bb-n1'>\$1</span>", "<span class='bb-n2'>\$1</span>", "<span class='bb-n3'>\$1</span>", "<b>\$1</b>", "<u>\$1</u>", "<i>\$1</i>", "<span style=\"color:\$1\">\$2</span>", "<span style=\"font-family:\$1\">\$2</span>", "<span style=\"font-size:\$1\">\$2</span>", "<div style=\"text-align:right\">\$1</div>", "<div style=\"text-align:left\">\$1</div>", "<div style=\"text-align:center\">\$1</div>", "<div class='bb-definition'>\$1</div>", "<div class='bb-warning'>\$1</div>", "<div class='bb-note'>\$1</div>", "'<span class=\"bb-code-header\">'.(('\\2')?'\\2':'Cytat:').'</span><div class=\'bb-quote\'>\$3</div>'", "<img alt='Image' src=\"\$1\">", "<img alt='Image' src=\"\$3\" width=\"\$1\" height=\"\$2\">", "'<a href='.(('\\2')?$this->link('\\2'):$this->link('\\3')).'>\\3</a>'", "<a href=\"mailto:\$1\">\$2</a>", "<ul compact>\\1</ul>"), $this->$text);
}

} 

?>