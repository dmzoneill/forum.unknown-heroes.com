<?php
/**
 * IGBClass 2 -- PHP4
 * 	(c) 2003-2004 Nonsequitur (Patrick D Hall) Nonsequitur SoftWerx.
 *  
 *	PHP Class, for EVE-Online: Exodus (CCP)
 *
 *  Reworked from EVEUserClass, changed some areas to operate differently.
 *  functionality is similar to the old version, but most likely will break
 *  existing code with regards to Corp Roles.
 *  Reworked from the ground up to add much needed testing and emulation code for
 *  the ever-burdened IGB website builder, this IGBClass is designed to support
 *  the Exodus IGB. 
 *
 *  For more information on how to emulate user data for debuging and testing your
 *  IGB site, see the code docs for the IGB::IGB constructor function.
 *
 *  ***************************************************************************
 *  This code is provided Freely for any, and all use you the end user
 *  would like to use it for.  This project started as my first PHP
 *  "Hello World" script back in EVE Beta 6, when I decided to tinker with
 *  the IGB.  Both this script, and the IGB itself have come a long way
 *  since then.  Since this code is provided Free for any use, the only thing
 *  I ask of you, the end user, is just to drop me a line and let me know
 *  what you think, or maybe what you are working on.  Just fire off an email
 *  to the address below, make sure to substitute the proper symbols in place
 *  of the [spam] hacks.  And good luck with your IGB projects.
 *  ***************************************************************************
 *
 *  Special thanks to Faramir for helping me test and verify all the Corproles.
 *  A big help.
 *
 *  
 *  Questions, Bugs, comments?
 *      	send em here - pdhall[AT]gmail[D0T]com   <-- despam and send
 *
 *
 *	Version -- 2.1.0-php4 -- 2005/06/21
 *  		Support for new IGB headers, ALLIANCEID and CORPID.
 *          Added support for the "Trader" role under "Station Service"
 *          Added new function IsTrustEnabled, which will replace IsTrusted in
 *          future versions of igbclass.  IsTrusted is now deprecated, but will
 *          wrap to IsTrustEnabled to maintain existing installations. You
 *          should update your IGB sites to reflect the change as soon as
 *          possible.
 *
 *          Also added some role catagory, and role description arrays that
 *          may or may not be useful to others, but I use them in the IGBDemo
 *          script.
 *
 *
 *
 * 
 *	Version -- 2.0.0-php4 -- 2004/11/24
 *  		First public release of V2 code for php4 script.  Support for the new
 *          IGB headers SERVERIP, and ALLIANCENAME, and corp roles added.
 *          Removed all php5 code and rolled back to php4, this class has been
 *          tested with apache 2.0.49, Win2k, and PHP 4.3.9
 *          BCMATH is the only catch to watch for on Unix based OS's Make sure
 *          you Have that extension installed, or build into your version of PHP
 *          Windows Servers get it by default.
 *          
*/



// Constants
define("CLASS_VER",					"2.2.0-php4");
define("BROKE_IGB",					"Python-urllib");	// Shiva Beta was broken, sending this. looks to be fixed now.
define("GOOD_IGB",					"EVE-minibrowser");	// This is what we really want to see. (:
    
// General section                              //
define("DIRECTOR",                             0);
define("PERSONNEL_MANAGER",                    7);
define("ACCOUNTANT",                           8);
define("SECURITY_OFFICER",                     9);
define("FACTORY_MANAGER",                     10);
define("STATION_MANAGER",                     11);
define("AUDITOR",                             12);
define("CONFIG_DEPLOY",                       41);
define("RENT_OFFICE",						  49);
define("RENT_FACTORY",						  50);
define("RENT_RESEARCH",						  51);
define("JUNIOR_ACCOUNTANT",					  52);
define("CONFIG_STARBASE",					  53);
define("TRADER",							  54);

// Divisional Roles 1-7 Hanger Can-Take         //
define("DIV1_HANGER_CAN_TAKE",                13);
define("DIV2_HANGER_CAN_TAKE",                14);
define("DIV3_HANGER_CAN_TAKE",                15);
define("DIV4_HANGER_CAN_TAKE",                16);
define("DIV5_HANGER_CAN_TAKE",                17);
define("DIV6_HANGER_CAN_TAKE",                18);
define("DIV7_HANGER_CAN_TAKE",                19);

// Divisional Roles 1-7 Hanger Can-Query        //
define("DIV1_HANGER_CAN_QUERY",               20);
define("DIV2_HANGER_CAN_QUERY",               21);
define("DIV3_HANGER_CAN_QUERY",               22);
define("DIV4_HANGER_CAN_QUERY",               23);
define("DIV5_HANGER_CAN_QUERY",               24);
define("DIV6_HANGER_CAN_QUERY",               25);
define("DIV7_HANGER_CAN_QUERY",               26);

// Divisional Roles 1-7 Account Can-Take        //
define("DIV1_ACCOUNT_CAN_TAKE",               27);
define("DIV2_ACCOUNT_CAN_TAKE",               28);
define("DIV3_ACCOUNT_CAN_TAKE",               29);
define("DIV4_ACCOUNT_CAN_TAKE",               30);
define("DIV5_ACCOUNT_CAN_TAKE",               31);
define("DIV6_ACCOUNT_CAN_TAKE",               32);
define("DIV7_ACCOUNT_CAN_TAKE",               33);

// Divisional Roles 1-7 Account Can-Query       //
define("DIV1_ACCOUNT_CAN_QUERY",              34);
define("DIV2_ACCOUNT_CAN_QUERY",              35);
define("DIV3_ACCOUNT_CAN_QUERY",              36);
define("DIV4_ACCOUNT_CAN_QUERY",              37);
define("DIV5_ACCOUNT_CAN_QUERY",              38);
define("DIV6_ACCOUNT_CAN_QUERY",              39);
define("DIV7_ACCOUNT_CAN_QUERY",              40);

// Container Access (Based At) section          //
define("DIV1_CONTAINER_CAN_TAKE",			  42);
define("DIV2_CONTAINER_CAN_TAKE",			  43);
define("DIV3_CONTAINER_CAN_TAKE",			  44);
define("DIV4_CONTAINER_CAN_TAKE",			  45);
define("DIV5_CONTAINER_CAN_TAKE",			  46);
define("DIV6_CONTAINER_CAN_TAKE",			  47);
define("DIV7_CONTAINER_CAN_TAKE",			  48);

define("GENERAL",							   0);
define("STATION_SERVICE",					   1);
define("ACCOUNTING_DIVISIONAL",				   2);
define("HANGAR_ACCESS_OTHER",				   3);
define("CONTAINER_ACCESS_OTHER",			   4);

// Role Catagories & Descriptions as listed in corp role management in-game.
$role_zone= array(
	GENERAL =>
		array(
			'name' => 'General',
			'desc' => 'General corporation roles'
		),
	STATION_SERVICE =>
		array(
			'name' => 'Station Service',
			'desc' => 'Station service corporation roles'
		),
	ACCOUNTING_DIVISIONAL =>
		array(
			'name' => 'Accounting (Divisional)',
			'desc' => 'Divisional accounting roles'
		),
	HANGAR_ACCESS_OTHER =>
		array(
			'name' => 'Hanger Access (Other)',
			'desc' => 'Other hanger access roles'
		),
	CONTAINER_ACCESS_OTHER =>
		array(
			'name' => 'Container Access (Other)',
			'desc' => 'Other container access roles'
		)
);

// Role descriptions by Role with catagories as shown in role management in-game.
$role = array(
// General roles
	DIRECTOR =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Director',
			'desc' => 'Can do anything like a CEO Can assign any role'
		),
	ACCOUNTANT =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Accountant',
			'desc' => 'Can view/use corporation accountancy info'
		),
	AUDITOR =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Auditor',
			'desc' => 'Can perform audits on corporation security event logs'
		),
	CONFIG_DEPLOY =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Config Equipment',
			'desc' => 'Can deploy and configure equipment in space'
		),
	CONFIG_STARBASE =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Config Starbase Equipment',
			'desc' => 'Can deploy and configure starbase structures in space'
		),
	JUNIOR_ACCOUNTANT =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Junior Accountant',
			'desc' => 'Can view corporation accountancy info'
		),	
	PERSONNEL_MANAGER =>
		array(
			'rolezone' => GENERAL,
			'name' => 'Personnel Manager',
			'desc' => 'Can accept applications to join the corporation'
		),	
// Station Service Roles
	FACTORY_MANAGER =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Factory Manager',
			'desc' => 'Can perform factory management tasks'
		),			
	RENT_FACTORY =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Rent Factory Slot',
			'desc' => 'When assigned to a member, the member can rent factory slots on behalf of the corporation'
		),
	RENT_OFFICE =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Rent Office',
			'desc' => 'When assigned to a member, the member can rent offices on behalf of the corporation'
		),
	RENT_RESEARCH =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Rent Research Slot',
			'desc' => 'When assigned to a member, the member can rent research facilities on behalf of the corporation'
		),
	SECURITY_OFFICER =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Security Officer',
			'desc' => 'Can view the content of others hangers'
		),
	STATION_MANAGER =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Station Manager',
			'desc' => 'Can perform station management for a corporation'
		),
	TRADER =>
		array(
			'rolezone' => STATION_SERVICE,
			'name' => 'Trader',
			'desc' => 'Can buy and sell things for the corporation'
		),
// Accounting Divisional Roles
	DIV1_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 1 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV1_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 1 Take',
			'desc' => 'Can take funds from this divisions account'
		),
	DIV2_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 2 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV2_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 2 Take',
			'desc' => 'Can take funds from this divisions account'
		),
	DIV3_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 3 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV3_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 3 Take',
			'desc' => 'Can take funds from this divisions account'
		),
	DIV4_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 4 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV4_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 4 Take',
			'desc' => 'Can take funds from this divisions account'
		),
	DIV5_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 5 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV5_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 5 Take',
			'desc' => 'Can take funds from this divisions account'
		),
	DIV6_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 6 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV6_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 6 Take',
			'desc' => 'Can take funds from this divisions account'
		),
	DIV7_ACCOUNT_CAN_QUERY =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 7 Query',
			'desc' => 'Can query the status of this divisions account'
		),
	DIV7_ACCOUNT_CAN_TAKE =>
		array(
			'rolezone' => ACCOUNTING_DIVISIONAL,
			'name' => 'Account 7 Take',
			'desc' => 'Can take funds from this divisions account'
		),
// Hanger Access Roles (other)
	DIV1_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 1 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV1_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 1 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
	DIV2_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 2 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV2_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 2 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
	DIV3_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 3 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV3_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 3 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
	DIV4_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 4 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV4_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 4 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
	DIV5_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 5 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV5_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 5 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
	DIV6_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 6 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV6_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 6 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
	DIV7_HANGER_CAN_QUERY =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 7 Query',
			'desc' => 'Can query the content of this divisions hangar'
		),
	DIV7_HANGER_CAN_TAKE =>
		array(
			'rolezone' => HANGAR_ACCESS_OTHER,
			'name' => 'Hangar 7 Take',
			'desc' => 'Can take items from this divisions hangar'
		),
// Container Access (Other)
	DIV1_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 1 Take',
			'desc' => 'Can take containers from this divisional hanger'
		),
	DIV2_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 2 Take',
			'desc' => 'Can take containers from this divisional hanger'
		),
	DIV3_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 3 Take',
			'desc' => 'Can take containers from this divisional hanger'
		),
	DIV4_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 4 Take',
			'desc' => 'Can take containers from this divisional hanger'
		),
	DIV5_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 5 Take',
			'desc' => 'Can take containers from this divisional hanger'
		),
	DIV6_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 6 Take',
			'desc' => 'Can take containers from this divisional hanger'
		),
	DIV7_CONTAINER_CAN_TAKE =>
		array(
			'rolezone' => CONTAINER_ACCESS_OTHER,
			'name' => 'Container 7 Take',
			'desc' => 'Can take containers from this divisional hanger'
		)
);


class IGB {
	
	// IGB Member Vars
	var $UserID;
	var $UserName;
	var $UserCorp;
	var $UserCorpID;
	var $UserAlliance;
	var $UserAllianceID;
	var $UserRole;
	var $UserStation;
	var $UserSystem;
	var $UserConstellation;
	var $UserRegion;
	var $BrowserAgent;
	var $UserIPAddress;
	var $UserServerIP;
	
	// Emulation State
    var $isEmulated;
	
	var $catstring;

	

	/**
	 * IGB::IGB([$_TestUser = False])
	 * 	
     *  	$_TestUser  - Set to false by default, which will force the class to
     *      			  work like normal.  Passing an array with the same set
     *                    of Index keys, and values as the normal $_SERVER vars
     *                    will permit you to test specific users settings when
     *                    debuging your IGB site.  All values set in the array
     *                    should be set as string, using the '' or " " quotes.
     *
     * f.EX.. when you create an emulated user, and create an instance.
   */ 
	
	function IGB($_TestUser = False) {
		// if $_TestUser === False then grab the normal $_SERVER vars for the instance
        // if not false, then assume caller is passing an array to populate instance.
		if ($_TestUser === False) {
			// Grab the $_SERVER vars we need for this class @'s just incase the
			// Array Index does not exist... keep it quiet like. (:
			$this->EVETrusted			= @$_SERVER['HTTP_EVE_TRUSTED'];
			$this->UserID				= @$_SERVER['HTTP_EVE_CHARID'];
			$this->UserName 			= @$_SERVER['HTTP_EVE_CHARNAME'];
			$this->UserCorp 			= @$_SERVER['HTTP_EVE_CORPNAME'];
			$this->UserCorpID 			= @$_SERVER['HTTP_EVE_CORPID'];
			$this->UserAlliance			= @$_SERVER['HTTP_EVE_ALLIANCENAME'];
			$this->UserAllianceID		= @$_SERVER['HTTP_EVE_ALLIANCEID'];
			$this->UserRole				= @$_SERVER['HTTP_EVE_CORPROLE'];
			$this->UserStation			= @$_SERVER['HTTP_EVE_STATIONNAME'];
			$this->UserSystem			= @$_SERVER['HTTP_EVE_SOLARSYSTEMNAME'];
			$this->UserConstellation	= @$_SERVER['HTTP_EVE_CONSTELLATIONNAME'];
			$this->UserRegion			= @$_SERVER['HTTP_EVE_REGIONNAME'];
			$this->BrowserAgent			= @$_SERVER['HTTP_USER_AGENT'];
			$this->UserIPAddress		= @$_SERVER['REMOTE_ADDR'];
			$this->UserServerIP			= @$_SERVER['HTTP_EVE_SERVERIP'];
			// set Emmulate state to false, since we grabbed the Real variables
            $this->isEmulated = False;
		} else {
			// Use passed settings and Emulate an IGB User
			$this->EVETrusted			= @$_TestUser['HTTP_EVE_TRUSTED'];
			$this->UserID				= @$_TestUser['HTTP_EVE_CHARID'];
			$this->UserName 			= @$_TestUser['HTTP_EVE_CHARNAME'];
			$this->UserCorp 			= @$_TestUser['HTTP_EVE_CORPNAME'];
			$this->UserCorpID			= @$_TestUser['HTTP_EVE_CORPID'];
			$this->UserAlliance			= @$_TestUser['HTTP_EVE_ALLIANCENAME'];
			$this->UserAllianceID		= @$_TestUser['HTTP_EVE_ALLIANCEID'];
			$this->UserRole				= @$_TestUser['HTTP_EVE_CORPROLE'];
			$this->UserStation			= @$_TestUser['HTTP_EVE_STATIONNAME'];
			$this->UserSystem			= @$_TestUser['HTTP_EVE_SOLARSYSTEMNAME'];
			$this->UserConstellation	= @$_TestUser['HTTP_EVE_CONSTELLATIONNAME'];
			$this->UserRegion			= @$_TestUser['HTTP_EVE_REGIONNAME'];
			$this->BrowserAgent			= @$_TestUser['HTTP_USER_AGENT'];
			$this->UserIPAddress		= @$_TestUser['REMOTE_ADDR'];
			$this->UserServerIP			= @$_TestUser['HTTP_EVE_SERVERIP'];
			// set Emulate state to True, since we were passed emulation user data
            $this->isEmulated = True;
		}
	}
	

	/**
	 * IGB::RequestTrust($_ReasonText)
     * Trigger IGB to request trust for the server on which this script resides.
     *
     * Since this function sends HTTP headers you must ensure that no text, html
     * or data is sent to the IGB.  HTTP headers must be the first text in any
     * page sent to a browser. Either buffer the output from the server using
     * ob_start() and ob_end_flush() or ensure that you call these functions in
     * the correct order.
     *
     *  $_ReasonText - String that contains the message you wish to display
     *  			   to the user in the popup IGB trust request dialog.
     *                 This text is displayed just below the CCP included
     *                 warning and notice about privacy and trust variables.
     *                 Due to the size of the dialog box used in game, the
     *                 player will most likely have to scroll down to even
     *                 see this text. Oh well, better than nothing I suppose.
	*/
	function RequestTrust($_ReasonText) {
		// if IsMiniBrowser and not Emmulated ask for trust.
        if ((!$this->isEmulated) && ($this->IsMiniBrowser())) {
			header("eve.trustme:http://".$_SERVER['HTTP_HOST']."/::".$_ReasonText,1000000);
		} else {
			return False;
		}		
	}
	
	
	/**
	 * IGB::RedirectURL($_RedirURL)
     * Redirect any Browser IGB, FireFox, IE, etc. to a given url.
     * Useful for incorporation into index.php and testing browser and
     * redirecting to different content such as IGB content or NGB (non game browser)
     * content.
     *
     * Since this function sends HTTP headers you must ensure that no text, html
     * or data is sent to the IGB.  HTTP headers must be the first text in any
     * page sent to a browser. Either buffer the output from the server using
     * ob_start() and ob_end_flush() or ensure that you call these functions in
     * the correct order.
     * 
     * 	$_RedirURL -- Set to a string value containing a fully qualified
     *                URL. This will forward the browser to the location
     *                specified. Must be a fully qualified URL and exist
     *                to prevent 404 Not found Errors.
     *
     *	Will terminate the calling script when a URL is passed.
     *  
	*/
	function RedirectURL($_RedirURL) {
		header("Location: ".$_RedirURL);
		exit;
	}
	
	
	/**
	 * IGB::RefreshIGB($_RefreshRate, $_RefreshURL)
     * Trigger IGB to refresh in either seconds or on sessionchange (jumping,
     * docking, undocking, etc.)
     * 
     * Since this function sends HTTP headers you must ensure that no text, html
     * or data is sent to the IGB.  HTTP headers must be the first text in any
     * page sent to a browser. Either buffer the output from the server using
     * ob_start() and ob_end_flush() or ensure that you call these functions in
     * the correct order.
     * 
     *	$_RefreshRate -- Values passed can be either "sessionchange" or
     *                   any non negative integer value. Values that do not
     *                   match the criteria will fail.
     *
     *  $_RefreshURL  -- Reletive, or qualified url that you wish to load when
     *                   the igb refreshes based on $_RefreshRate.
	*/
	function RefreshIGB($_RefreshRate, $_RefreshURL) {
		if (strtolower($_RefreshRate)=='sessionchange'){
			header("refresh:sessionchange;URL=".$_RefreshURL);
			return true;
		} else {
			if (is_numeric($_RefreshRate)) {
				if ($_RefreshRate >=0){
					header("refresh:".$_RefreshRate.";URL=".$_RefreshURL);
					return true;
				}
			} else {
				return false;
			}
		}		
	}

	/**
	 * IGB::UserID()
	 *	Function to return UserID from the new CHARID header,
     *  Thank you CCP for listening to player Ideas!!
	*/
	function UserID() {
		return $this->UserID;
	}


	/**
	 * IGB::UserName()
	 *	Function to return UserName
	*/
	function UserName() {
		return $this->UserName;
	}
	
	
	/**
	 * IGB::UserCorp()
     * 	Function to return UserCorp
	*/
	function UserCorp() {
		return $this->UserCorp;
	}


	/**
	 * IGB::UserCorpID()
     * 	Function to return UserCorpID
	*/
	function UserCorpID() {
		return $this->UserCorpID;
	}
	
	
	/**
	 * IGB::UserAlliance()
     * 	Function to return UserAlliance Name ('None' if no alliance).
	*/
	function UserAlliance() {
		return $this->UserAlliance;
	}
	
	
	/**
	 * IGB::UserAllianceID()
     * 	Function to return UserAllianceID ('None' if no alliance).
	*/
	function UserAllianceID() {
		return $this->UserAllianceID;
	}
	
	/**
	 * IGB::UserRole()
     *	Function to return UserRole
	*/
	function UserRole() {
		return $this->UserRole;
	}
	
	
	/**
	 * IGB::UserStation()
     * 	Function to return User station name.
     *  Use IGB::IsDocked() to test if in space or in station ('none' if not docked)
	*/
	function UserStation() {
		return $this->UserStation;
	}
	
	
	/**
	 * IGB::UserSystem()
     * 	Function to return User Solarsystem Name
	*/
	function UserSystem() {
		return $this->UserSystem;
	}		
	

	/**
	 * IGB::UserConstellation()
     * 	Function to return User Constellation location
	*/
	function UserConstellation() {
		return $this->UserConstellation;
	}
	
	
	/**
	 * IGB::UserRegion()
     * 	Function to return User current Region
	*/
	function UserRegion() {
		return $this->UserRegion;
	}
	
	
	/**
	 * IGB::BrowserAgent()
     * 	Function that returns Browser agent string.
	*/
	function BrowserAgent() {
		return $this->BrowserAgent;
	}

	
	/**
	 * IGB::UserIPAddress()
     * 	Return IP address of visitor
	*/
	function UserIPAddress() {
		return $this->UserIPAddress;
	}
	
	
	/**
	 * IGB::UserServerIP()
     * 	Return IP address and port, of EVE server visitor is browsing from.
     *  fx.
     *	'157.157.139.10:26000' for Tranquility.
     *  '212.187.162.10:26000' for Singularity.
	*/
	function UserServerIP() {
		return $this->UserServerIP;
	}


	/**
	 * IGB::IsMiniBrowser([$_BypassCheck = False], [$_BogusHeaderCheck = False])
     * 	Return True if Browser is EVE-minibrowser or false for all other browsers.
     *  A word of caution, this is by far not 100% effective, for checking against
     *  fake browsers.
     *
     *  Also of note is the fact that using $_BogusHeaderCheck set to true might
     *  cause some issues with norty isp's that add the http_keep_alive header
     *  on all out going http traffic.  I have been informed that using this
     *  might cause some issues with some UK users and a certain ISP.  As always
     *  use with caution, and keep notes of users not able to pass the IGB check.
     *  
     *  If you need to debug something and need an easy way around this check just
     *  call the function like so to have it return True and skip the check
     *  $IGBUser->IsMiniBrowser(True);
     *  $IGBUser->IsMiniBrowser();  // for normal behavior
     *  
     *  Handy for testing some other logic in your script when you need to test
     *  certain states.
     *
     *  This function also supports the isEmulated status when opperating the class
     *  with passed emulation headers. (see IGB::IGB constructor code docs)
     *  
	*/
	function IsMiniBrowser($_BypassCheck = False, $_BogusHeaderCheck = False) {
		
		// First see if the caller wishes to bypass the check.
		if(($_BypassCheck) || ($this->isEmulated)) {
			return true;
		} else {
			// Parse agent string by spliting on the '/'
			$parts = explode("/", $this->BrowserAgent());
			// Test for Eve Minibrowser also test against broken Shiva IGB Agent
			if (($parts[0] == GOOD_IGB) or ($parts[0] == BROKE_IGB)) {
				
				if ($_BogusHeaderCheck) {
					// NOTE! Some isp's send http_keep_alive either because of proxy,
                    // or net accelerators, so if your users have an isp like this
                    // they will fail the IsMiniBrowser check with BogusHeaderCheck
                    // enabled.
					if (isset($_SERVER['HTTP_ACCEPT']) ||
						isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ||
						isset($_SERVER['HTTP_ACCEPT_ENCODING']) ||
						isset($_SERVER['HTTP_ACCEPT_CHARSET']) ||
						isset($_SERVER['HTTP_CONNECTION']) ||
						isset($_SERVER['HTTP_KEEP_ALIVE']))	{
							// If Extra Headers, return false (not IGB)
                            return false;
						}
				}		
				// IGB always sends this set to yes, or no,
				// so if it is missing, we smell something.
				if (!isset($_SERVER['HTTP_EVE_TRUSTED'])) {
					return false;
				}
				// return true at this point, User Agent matches,
				// and no phishy headers	
				return true;
			} else {
				// User Agent, does not match required.	
				return false;
			}
		}
	}	

	
	/**
	 * IGB::IsDocked([$_BypassCheck = False])
     * 	Return True if docked, false if not.
     *  call IsDocked() for normal test.
     *  call IsDocked(True) to bypass normal check and test as true regardless
	*/
	function IsDocked($_BypassCheck = False) {
		// bypass check if caller wishes.
		if($_BypassCheck) {
			return true;
		} else {
			// Check to see if station name is 'none'
			if (strtolower($this->UserStation()) == "none") {
				// If Station name is set to 'none' the visitor is not docked.
				return false;
			} else {
				// If not 'none' then must be docked.
				return true;
			}
		}
	}

	
	/**
	 * IGB::IsTrusted([$_BypassCheck = False])
	 *	!!!DEPRECATED!!!
     *  Future versions of igbclass may not support this function
     *  Use IGB::IsTrustEnabled() instead.
	*/
	function IsTrusted($_BypassCheck = False) {
		// bypass check if caller wishes.
        return $this->IsTrustEnabled($_BypassCheck);
	}


	/**
	 * IGB::IsTrustEnabled([$_BypassCheck = False])
	 *	Return True if site is trusted
     *  call IsTrustEnabled() for normal test.
     *  call IsTrustEnabled(True) to bypass normal check and test as true regardless
	*/
	function IsTrustEnabled($_BypassCheck = False) {
		// bypass check if caller wishes.
        if($_BypassCheck) {
			return true;
		} else {
			if(strtolower($this->EVETrusted)=='yes') {
				// Trusted.
                return true;
			} else {
				return false;
			}			
		}
	}
	
	
	/**
	 * IGB::IsEmulated()
     *  returns the status of the isEmulated member variable
	*/
	function IsEmulated() {
		return $this->isEmulated;
	}
	
	/**
	 * IGB::IsInAlliance()
     *	returns true if user is in alliance
	*/
	function IsInAlliance(){
		
		if (strtolower($this->UserAlliance) == 'none') {
			return false;
		} else {
			return true;
		}
	}
	
	/**
	 * IGB::HasRole($_RoleMask [, $_BypassCheck = False])
	 *	Return True if Visitor has XXXXX role set. See top of Class for
     *  list of all supported Constants. f.ex. DIRECTOR will check for
     *  director status.
     *  calling this function with a true value in the bypass parameter will
     *  cause the function to return true regardless of the actual role.
     *  f.ex. $IGBUser->HasRole(DIRECTOR, True) to force true.
     *  f.ex. $IGBUser->HasRole(DIRECTOR) for normal role check.
	*/
	function HasRole($_RoleMask, $_BypassCheck = False) {
		// bypass check, if caller wishes
        if($_BypassCheck) {
			return true;
		} else {
			// Here we pass the Role Integer and assign it to a variable
			$RoleArray = $this->dec2bin($this->UserRole());
			
			// We can reference the String var as if it was an array
			// and use the $RoleMask to pull a single character from the 64
			// character string of 1's and 0's
			if ($RoleArray[$_RoleMask]=='1')	{
				return true;
			} else {
				return false;
			}
		}
	}


	/**
	 * GetHash()
     *  Returns the MD5 Hash for the serialized user data variables.
     *  use this function for whatever you feel you need to use it for, it just
     *  gives you a handy way to fetch the hash of this object.  Use it to sort
     *  or lookup, or whatever. Left to the user to decide what it is good for.
     *  (:
     *
     *  you can customize the data that is hashed by commenting out each line you
     *  wish to exclude.  UserIPAddress,is one that would be rather dynamic in nature
     *  and not that good for use if you wanted UID's for a DB. Also any of the
     *  region/system/constellation strings would be bad since they would change too.
	*/
	function GetHash() {
			
		$this->catstring .= $this->UserID;
		$this->catstring .= $this->UserName;
		$this->catstring .= $this->UserCorp;
		$this->catstring .= $this->UserAlliance;
		$this->catstring .= $this->UserRole;
		$this->catstring .= $this->UserStation;
		$this->catstring .= $this->UserSystem;
		$this->catstring .= $this->UserConstellation;
		$this->catstring .= $this->UserRegion;
		$this->catstring .= $this->BrowserAgent;
		$this->catstring .= $this->UserIPAddress;
		$this->catstring .= $this->UserServerIP;
		
		return md5($this->catstring);
	}
	

	/**
	 * dec2bin -- v2.0
	 *  A total overhaul of the old dec2bin in previous versions of the
     *  EveUserClass.  This version utilizes BCMATH functions built into
     *  PHP 4.0.4 or newer to handle any arbitrary precision Integer values.
     *  and is needed to handle the new higher bits added in the corp roles by
     *  ccp.  The old float hack will not function properly anymore.
     *
     *  The "floating point hack", limited to about 46 bits, is no more.
     *  !All Hail BCMATH! (:
	 *  
	 * NOTE:
	 *  BCMATH is enabled automatically on Win32 platforms, but may need to be
     *  enabled manually on *nix platforms. BCMath documentation can be found
     *  at: http://www.php.net/manual/en/ref.bc.php
	 *
	 * USAGE:
     * 	$retval - dec2bin($_indec [, $_pad=64][, $_bitorder=1]);
     *
     *  $_indec  - String representation of any decimal base 10 integer, you can
     *             pass a float with a fractional portion but it will be trun-
     *             cated to the whole integer portion on the left of the decimal
     *             point.
	 *
	 *	[optional parameters]
     *  $_pad	  - number of 0's to pad the returned binary number string with.
     *              Default is 64 characters left side padded.
     *
     *  $_bitorder - Sets the order of the returned string of bits,
     *              0..63 default. Any other value returns the bit order in
     *              reverse [63..0].
	*/
	function dec2bin($_indec, $_pad=64, $_bitorder=1) {
		$digits="01";
		$retval="";
		
		bcscale(0);
			
		while($_indec>1) {
			$rmod=bcmod($_indec,2);
			$_indec=bcdiv($_indec,2);
			$retval=$digits[$rmod].$retval;
		}
		
		$retval=$digits[intval($_indec)].$retval;
		
		if ($_bitorder==1) {
			$retval=strrev(str_pad($retval, $_pad, "0", STR_PAD_LEFT));
		} else {
			$retval=str_pad($retval, $_pad, "0", STR_PAD_LEFT);
		}
		return (string)$retval;
	}


}
?>
