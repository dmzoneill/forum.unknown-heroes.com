<?PHP
require_once("global.php");

class Page	{
	var $title = "New Page";
	var $linkIcon = "favicon.ico";
	var $linkCSS = "base/style.css";
	var $linkHome = "index.php";
	var $linkHelp = "index.php";
	var $linkFirst = "index.php";
	var $linkLast = "index.php";
	var $linkNext = "index.php";
	var $linkPrevious = "index.php";
	var $linkContents = "index.php";
	var $linkSearch = "index.php";
	var $linkCopyright = "index.php";
	var $linkAuthor = "index.php";
	var $linkRSS = "http://www.hypereon.net/hyp/pages/rss.php";
	var $linkRSSFeed = "Hypereon RSS Feed";
	var $metaRobots = "index,follow";
	var $metaDescription = "New Description";
	var $metaKeywords = "New Keywords";
	var $metaRevisit = "2 days";
	var $baseURL = "";
	var $corpName = "";
		
	function Page($inTitle = "New Page"){
		$this->title = $inTitle;
		require_once("global.php");
		$this->baseURL = $baseURL_Default;
		$this->corpName = $corpName_Default;
	}
		
	function SendHeader(){
		if(makeSafe($_GET['a']) == "rmfl"){
			$_SESSION['forumUser'] = "";
			$_SESSION['loggedIn'] = false;
		}
			
		echo("<?xml version=\"1.0\" encoding=\"utf-8\"?>");
		echo("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">");
		echo("<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">");
		echo("<head>");
		echo("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />");
		echo("<title>{$this->title}</title>");
		echo("<meta name=\"keywords\" content=\"{$this->metaKeywords}\" />");
		echo("<meta name=\"description\" content=\"{$this->metaDescription}\" />");
		echo("<meta name=\"revisit-after\" content=\"{$this->metaRevisit}\" />");
		echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"{$this->linkCSS}\" />");
		echo("<link rel=\"alternate\" type=\"application/rss+xml\" title=\"{$this->linkRSS}\" href=\"{$this->linkRSSFeed}\" />");
		echo("<link rel=\"shortcut icon\" href=\"{$this->linkIcon}\" type=\"image/x-icon\" />");
		echo("<link rel=\"home\" href=\"{$this->linkHome}\" />");
		echo("<link rel=\"search\" href=\"{$this->linkSearch}\" />");
		echo("<link rel=\"help\" href=\"{$this->linkHelp}\" />");
		echo("<link rel=\"first\" href=\"{$this->linkFirst}\" />");
		echo("<link rel=\"previous\" href=\"{$this->linkPrevious}\" />");
		echo("<link rel=\"next\" href=\"{$this->linkNext}\" />");
		echo("<link rel=\"last\" href=\"{$this->linkLast}\" />");
		echo("<link rel=\"copyright\" href=\"{$this->linkCopyright}\" />");
		echo("<link rel=\"author\" href=\"{$this->linkAuthor}\" />");
		echo("</head>");
		echo("<body>");
		echo("<table width='720' cellpadding=10><tr>");
				
		echo("<td width='60' height='32' valign='middle'>");
		echo("<img src=\"corplogo:713611672\" size=\"50\" border=0></td>");
		echo("<td width='200' height='32' valign='middle'>  
		<a href='index.php?p=forum'><h3>Unknown Heroes</h3></a></td>");
		echo("<td width='470' height='15' valign='middle' align=right>");
					
		echo("
		<br />
		<a href='index.php?p=index'>IGB Home</a> | 
		<a href='index.php?p=forum'>Forum</a> | 
		<a href='http://killboard.unknown-heroes.com'>Killboard</a> | 
		<a href='index.php?p=diplomacy'>Diplomacy</a>  <br>
		<a href='index.php?p=constitution'>Aims & Constitution</a> |
		<a href='index.php?p=history'>History</a> | 
		<a href='index.php?p=applicant'>Join Corporation</a>
		");		
				
		if($_SESSION['loggedIn'] > 0){
			echo(" | <a href='index.php?p=forum&a=rmfl'>Logout ". $_SESSION['forumUser'] ."</a>");
		}
		else{
			//echo(" | <a href='index.php?p=register'>Register</a>");
		}
		echo("</td></tr></table><table width=\"750\"><tr><td width=\"100%\" valign=\"top\"><hr></td></tr></table>");
	}

	function fixString($data){
		$tmp = preg_replace("/\'/", "&#39;", $data);
		$tmp = preg_replace("/\"/", "&#34;", $data);
		$tmp = preg_replace("/</", "&lt;", $data);
		$tmp = preg_replace("/>/", "&gt;", $data);
		$tmp = preg_replace("/\$/", "&#36;", $data);
		$tmp = preg_replace("/\&/", "&#38;", $data);
		$tmp = preg_replace("/\n/", "<br />", $data);
		$tmp = preg_replace("/\r/", "", $data);
		$tmp = stripslashes($data);
		return $tmp;
	}
		
	function SendMain($page){
		include($page);
	}
		
	function SendFooter(){
		echo("");
		echo("</body>");
		echo("</html>");
	}
		
	function AddValidator(){
		echo("<p><a href=\"http://validator.w3.org/check?uri=referer\">");
		echo("<img src=\"http://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Strict\" height=\"31\" width=\"88\" /></a></p>");
	}
		
	function AddCSSValidator(){
		echo("<p><a href=\"http://jigsaw.w3.org/css-validator/\"><img style=\"border:0;width:88px;height:31px\"	src=\"http://jigsaw.w3.org/css-validator/images/vcss\" alt=\"Valid CSS!\" /></a></p>");
	}
		
	function getTitle() { return $title; } 
	function setTitle($data) { $title = $data; } 
	function getLinkIcon() { return $linkIcon; } 
	function setLinkIcon($data) { $linkIcon = $data; } 
	function getLinkCSS() { return $linkCSS; } 
	function setLinkCSS($data) { $linkCSS = $data; } 
	function getLinkHome() { return $linkHome; } 
	function setLinkHome($data) { $linkHome = $data; } 
	function getLinkHelp() { return $linkHelp; } 
	function setLinkHelp($data) { $linkHelp = $data; } 
	function getLinkFirst() { return $linkFirst; } 
	function setLinkFirst($data) { $linkFirst = $data; } 
	function getLinkLast() { return $linkLast; } 
	function setLinkLast($data) { $linkLast = $data; } 
	function getLinkNext() { return $linkNext; } 
	function setLinkNext($data) { $linkNext = $data; } 
	function getLinkPrevious() { return $linkPrevious; } 
	function setLinkPrevious($data) { $linkPrevious = $data; } 
	function getLinkContents() { return $linkContents; } 
	function setLinkContents($data) { $linkContents = $data; } 
	function getLinkSearch() { return $linkSearch; } 
	function setLinkSearch($data) { $linkSearch = $data; } 
	function getLinkCopyright() { return $linkCopyright; } 
	function setLinkCopyright($data) { $linkCopyright = $data; } 
	function getLinkAuthor() { return $linkAuthor; } 
	function setLinkAuthor($data) { $linkAuthor = $data; } 
	function getLinkRSS() { return $linkRSS; } 
	function setLinkRSS($data) { $linkRSS = $data; } 
	function getLinkRSSFeed() { return $linkRSSFeed; } 
	function setLinkRSSFeed($data) { $linkRSSFeed = $data; } 
	function getMetaRobots() { return $metaRobots; } 
	function setMetaRobots($data) { $metaRobots = $data; } 
	function getMetaDescription() { return $metaDescription; } 
	function setMetaDescription($data) { $metaDescription = $data; } 
	function getMetaKeywords() { return $metaKeywords; } 
	function setMetaKeywords($data) { $metaKeywords = $data; } 
	function getMetaRevisit() { return $metaRevisit; } 
	function setMetaRevisit($data) { $metaRevisit = $data; } 
}


?>