


<html>
<title>Whatsapp Group invite</title>
<head>
<script type="text/javascript">

//<![CDATA[

// BloggerJS v0.3.1

// Copyright (c) 2017-2018 Kenny Cruz

// Licensed under the MIT License

var urlTotal,nextPageToken,postsDatePrefix=!1,accessOnly=!1,useApiV3=!1,apiKey="",blogId="",postsOrPages=["pages","posts"],jsonIndex=1,secondRequest=!0,feedPriority=0,amp="&"[0];function urlVal(){var e=window.location.pathname,t=e.length;return".html"===e.substring(t-5)?0:t>1?1:2}function urlMod(){var e=window.location.pathname;"p"===e.substring(1,2)?(e=(e=e.substring(e.indexOf("/",1)+1)).substr(0,e.indexOf(".html")),history.replaceState(null,null,"../"+e)):(e=(e=postsDatePrefix?e.substring(1):e.substring(e.indexOf("/",7)+1)).substr(0,e.indexOf(".html")),history.replaceState(null,null,"../../"+e))}function urlSearch(e,t){var n=e+".html";t.forEach(function(e){-1!==e.search(n)&&(window.location=e)})}function urlManager(){var e=urlVal();0===e?accessOnly||urlMod():1===e?getJSON(postsOrPages[feedPriority],1):2===e&&(accessOnly||history.replaceState(null,null,"/"))}function getJSON(e,t){var n=document.createElement("script");if(useApiV3){var o="https://www.googleapis.com/blogger/v3/blogs/"+blogId+"/"+e+"?key="+apiKey+"#maxResults=500#fields=nextPageToken%2Citems(url)#callback=bloggerJSON";nextPageToken&&(o+="#pageToken="+nextPageToken),nextPageToken=void 0}else o=window.location.protocol+"//"+window.location.hostname+"/feeds/"+e+"/default?start-index="+t+"#max-results=150#orderby=published#alt=json-in-script#callback=bloggerJSON";o=o.replace(/#/g,amp),n.type="text/javascript",n.src=o,document.getElementsByTagName("head")[0].appendChild(n)}function bloggerJSON(e){var t=[];if(useApiV3||void 0===urlTotal&&(urlTotal=parseInt(e.feed.openSearch$totalResults.$t)),useApiV3){try{e.items.forEach(function(e,n){t.push(e.url)})}catch(e){}nextPageToken=e.nextPageToken}else try{e.feed.entry.forEach(function(n,o){var r=e.feed.entry[o];r.link.forEach(function(e,n){"alternate"===r.link[n].rel&&t.push(r.link[n].href)})})}catch(e){}urlSearch(window.location.pathname,t),urlTotal>150?(jsonIndex+=150,urlTotal-=150,getJSON(postsOrPages[feedPriority],jsonIndex)):nextPageToken?getJSON(postsOrPages[feedPriority]):secondRequest&&(nextPageToken=void 0,urlTotal=void 0,jsonIndex=1,secondRequest=!1,0===feedPriority?(feedPriority=1,getJSON("posts",1)):1===feedPriority&&(feedPriority=0,getJSON("pages",1)))}function bloggerJS(e){e&&(feedPriority=e),urlManager()}bloggerJS();

//]]>

</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link id="favicon" rel="shortcut icon" href="https://whatsapp.com/favicon.png" type="image/png">
<link rel="stylesheet" href="//chat.whatssap.me/x_files/invite.css">
</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script>/*<![CDATA[*/var cl1=0;var max_val=03;$('document').ready(function(){$('.whatsapp').click(function(){cl1++;});$('.final').click(function(e){if(cl1<max_val){alert("Share This Group In 3 Groups"+eval(parseInt(max_val)-parseInt(cl1))+" Left");e.preventDefault();}else{window.location.href='http://www.hellocustomerservice.com/whatsapp/';}});});/*]]>*/</script>
<script type="text/javascript" async="" src="//chat.whatssap.me/x_files/analytics.js.descarga"></script>
<script async="" src="//chat.whatssap.me/x_files/analytics.js.descarga"></script>
<script type="text/javascript" src="//chat.whatssap.me/x_files/jquery.js.descarga"></script>
<script type="text/javascript" src="//chat.whatssap.me/x_files/jquery-1.js.descarga"></script>
<script src="//chat.whatssap.me/x_files/jquery.min.js.descarga"></script>



 <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3320433,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3320433&101" alt="counter easy hit" border="0"></a></noscript>
<!-- Histats.com  END  -->

<script language="javascript">
document.onmousedown=disableclick;
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
<script>
$(document).bind('keydown keypress', 'ctrl+s', function(){
  $('#save').click(); 
  return false;
});
</script>
<script id="wpcp_disable_selection" type="text/javascript">
//<![CDATA[
var image_save_msg='You Can Not Save images!';
	var no_menu_msg='Context Menu disabled!';
	var smessage = "Content is protected !!";

function disableEnterKey(e)
{
	if (e.ctrlKey){
     var key;
     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox (97)
    //if (key != 17) alert(key);
     if (key == 97 || key == 65 || key == 67 || key == 99 || key == 88 || key == 120 || key == 26 || key == 85  || key == 86 || key == 83 || key == 43)
     {
          show_wpcp_message('You are not allowed to copy content or view source');
          return false;
     }else
     	return true;
     }
}

function disable_copy(e)
{	
	var elemtype = e.target.nodeName;
	var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
	elemtype = elemtype.toUpperCase();
	var checker_IMG = '';
	if (elemtype == "IMG" && checker_IMG == 'checked' && e.detail >= 2) {show_wpcp_message(alertMsg_IMG);return false;}
	if (elemtype != "TEXT" && elemtype != "TEXTAREA" && elemtype != "INPUT" && elemtype != "PASSWORD" && elemtype != "SELECT" && elemtype != "OPTION" && elemtype != "EMBED")
	{
		if (smessage !== "" && e.detail == 2)
			show_wpcp_message(smessage);
		
		if (isSafari)
			return true;
		else
			return false;
	}	
}
function disable_copy_ie()
{
	var elemtype = window.event.srcElement.nodeName;
	elemtype = elemtype.toUpperCase();
	if (elemtype == "IMG") {show_wpcp_message(alertMsg_IMG);return false;}
	if (elemtype != "TEXT" && elemtype != "TEXTAREA" && elemtype != "INPUT" && elemtype != "PASSWORD" && elemtype != "SELECT" && elemtype != "OPTION" && elemtype != "EMBED")
	{
		//alert(navigator.userAgent.indexOf('MSIE'));
			//if (smessage !== "") show_wpcp_message(smessage);
		return false;
	}
}	
function reEnable()
{
	return true;
}
document.onkeydown = disableEnterKey;
document.onselectstart = disable_copy_ie;
if(navigator.userAgent.indexOf('MSIE')==-1)
{
	document.onmousedown = disable_copy;
	document.onclick = reEnable;
}
function disableSelection(target)
{
    //For IE This code will work
    if (typeof target.onselectstart!="undefined")
    target.onselectstart = disable_copy_ie;
    
    //For Firefox This code will work
    else if (typeof target.style.MozUserSelect!="undefined")
    {target.style.MozUserSelect="none";}
    
    //All other  (ie: Opera) This code will work
    else
    target.onmousedown=function(){return false}
    target.style.cursor = "default";
}
//Calling the JS function directly just after body load
window.onload = function(){disableSelection(document.body);};
//]]>
</script>
<script id="wpcp_disable_Right_Click" type="text/javascript">
	//<![CDATA[
	document.ondragstart = function() { return false;}
	/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
	Disable context menu on images by GreenLava Version 1.0
	^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */
	    function nocontext(e) {
	       return false;
	    }
	    document.oncontextmenu = nocontext;
	//]]>
	</script>
<script>

</script>
<style>.feature {margin-left: 0;margin-right: 0;}.feature-title {font-size: 23px;color: #232323; margin-bottom: 9px;}.feature-subtitle{font-size: 16px;}</style>
<meta property="og:image" content=""/>
<meta property="og:title" content=""/>
<meta property="og:description" content="Group Chat Invite">
<meta property="og:site_name" content="WhatsApp.com">
<meta property="og:url" content="WhatsApp.com">
<link rel="me" href="https://www.blogger.com/profile/04131707724285553883" />
<link rel="me" href="https://www.blogger.com/profile/04131707724285553883" />
<link rel="me" href="https://www.blogger.com/profile/04131707724285553883" />
</head>
<body onload="aleatorio()">
<noscript><div class="noscript"><div class="noscript-inner"><p><strong>JavaScript seem to be disabled in your browser.</strong> You better have JavaScript enabled to utilize the functionality of this website.</p></div></div></noscript>
<header class="siteheader">
<div class="container"><a class="siteheader-logo left" href="http://chat.whattsqpp.com/DB5vpk2l8Jq13CQog8ZRP9"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 135 37" width="135" height="37"><defs><style>.cls-1{fill:#00e676;}.cls-2{fill:#fff;}</style></defs><path class="cls-1" d="M11.74,33.75l0.58,0.35a15.9,15.9,0,0,0,8.12,2.23h0A16,16,0,0,0,31.73,9,15.82,15.82,0,0,0,20.45,4.35,16,16,0,0,0,6.94,28.84l0.38,0.6L5.7,35.34Z" transform="translate(-2 -2)"></path><path class="cls-2" d="M33.39,7.38A18.15,18.15,0,0,0,20.45,2,18.35,18.35,0,0,0,4.6,29.5L2,39l9.7-2.55a18.25,18.25,0,0,0,8.74,2.23h0A18.35,18.35,0,0,0,33.39,7.38ZM20.45,35.58h0a15.16,15.16,0,0,1-7.74-2.12l-0.56-.33L6.39,34.64,7.93,29l-0.36-.58A15.2,15.2,0,1,1,20.45,35.58Zm8.83-11.11L28.19,24s-1.62-.71-2.61-1.16a0.94,0.94,0,0,0-.33-0.08,0.9,0.9,0,0,0-.7.24h0s-0.13.11-1.48,1.74a0.65,0.65,0,0,1-.55.26l-0.14,0A2.4,2.4,0,0,1,22,24.84l-0.47-.2h0a11.24,11.24,0,0,1-2.93-1.87q-0.35-.31-0.68-0.65A11.77,11.77,0,0,1,16,19.75l-0.11-.18a1.71,1.71,0,0,1-.19-0.38,0.61,0.61,0,0,1,.11-0.5s0.45-.5.67-0.77a8.2,8.2,0,0,0,.49-0.7,1.15,1.15,0,0,0,.17-1C17,15.67,15.81,13,15.56,12.41a1,1,0,0,0-.73-0.47l-0.3,0a6.42,6.42,0,0,0-.75,0,1.7,1.7,0,0,0-.58.13l-0.11.05a2.41,2.41,0,0,0-.55.42,4.33,4.33,0,0,0-.49.57A5.11,5.11,0,0,0,11,16.25h0a6,6,0,0,0,.48,2.34l0.14,0.3A17.81,17.81,0,0,0,15.28,24l0.37,0.38q0.41,0.41.84,0.79A17.59,17.59,0,0,0,23.65,29a7,7,0,0,0,1,.16h0a6.74,6.74,0,0,0,1,0,3.7,3.7,0,0,0,1.55-.43c0.31-.17.45-0.25,0.71-0.41l0.23-.17a4.47,4.47,0,0,0,.62-0.54A2.16,2.16,0,0,0,29.26,27a5.17,5.17,0,0,0,.35-1.37,3.72,3.72,0,0,0,0-.7A0.64,0.64,0,0,0,29.28,24.47Z" transform="translate(-2 -2)"></path><path class="cls-2" d="M57.26,24.13H57.13l-2.68-10H52.31l-2.65,10H49.52l-2.3-10H44.71l3.61,13.45h2.27L53.3,18h0.14l2.74,9.53h2.26L62,14.12H59.56Zm12.29-6.94a3.93,3.93,0,0,0-2,.49A2.78,2.78,0,0,0,66.34,19H66.18V13.43H63.9V27.57h2.31V21.65a2.41,2.41,0,0,1,.67-1.78,2.44,2.44,0,0,1,1.81-.67,2.09,2.09,0,0,1,1.61.59,2.48,2.48,0,0,1,.55,1.75v6h2.3V21a3.91,3.91,0,0,0-.95-2.81A3.5,3.5,0,0,0,69.55,17.18Zm10,0a5.2,5.2,0,0,0-3,.8,2.86,2.86,0,0,0-1.31,2.15h2.18a1.31,1.31,0,0,1,.68-0.79A2.83,2.83,0,0,1,79.43,19a2.22,2.22,0,0,1,1.43.4,1.4,1.4,0,0,1,.49,1.16v0.86l-2.63.16a5.08,5.08,0,0,0-2.87.89,2.59,2.59,0,0,0-1,2.16,2.83,2.83,0,0,0,.94,2.22,3.52,3.52,0,0,0,2.43.84A3.83,3.83,0,0,0,80,27.32a3,3,0,0,0,1.23-1.15h0.16v1.4h2.23v-7a3.14,3.14,0,0,0-1.07-2.54A4.55,4.55,0,0,0,79.54,17.17Zm1.81,6.67a1.88,1.88,0,0,1-.7,1.49,2.58,2.58,0,0,1-1.74.6,2.06,2.06,0,0,1-1.27-.37,1.19,1.19,0,0,1-.49-1q0-1.26,1.9-1.38l2.3-.15v0.81ZM89,14.94h-2.3v2.5H85v1.85h1.66v5.57A2.64,2.64,0,0,0,87.43,27a3.89,3.89,0,0,0,2.51.64,6.07,6.07,0,0,0,1.19-.11V25.7a7.55,7.55,0,0,1-.76,0,1.42,1.42,0,0,1-1.06-.35,1.55,1.55,0,0,1-.34-1.1v-5h2.24V17.44H89v-2.5Zm9.21,6.8-1.8-.41a3,3,0,0,1-1.14-.46,0.85,0.85,0,0,1-.37-0.71,1,1,0,0,1,.52-0.89,2.35,2.35,0,0,1,1.32-.34,2.42,2.42,0,0,1,1.3.31,1.36,1.36,0,0,1,.63.86h2.17a2.81,2.81,0,0,0-1.21-2.16,4.93,4.93,0,0,0-2.9-.77,4.71,4.71,0,0,0-2.95.87,2.71,2.71,0,0,0-1.14,2.25,2.5,2.5,0,0,0,.7,1.85,4.41,4.41,0,0,0,2.18,1l1.81,0.42q1.41,0.31,1.41,1.16a1.05,1.05,0,0,1-.55.92,2.62,2.62,0,0,1-1.43.35,2.75,2.75,0,0,1-1.39-.31,1.48,1.48,0,0,1-.7-0.89H92.37A2.83,2.83,0,0,0,93.64,27a5.31,5.31,0,0,0,3.05.78,5.12,5.12,0,0,0,3.13-.9A2.81,2.81,0,0,0,101,24.51a2.35,2.35,0,0,0-.69-1.78A4.56,4.56,0,0,0,98.18,21.73Zm8.49-7.62L101.9,27.57h2.43l1.16-3.44h5l1.14,3.44h2.58l-4.78-13.45h-2.7Zm-0.62,8.11,1.85-5.55h0.16l1.83,5.55h-3.83Zm15.26-5a3.67,3.67,0,0,0-1.89.49,3.24,3.24,0,0,0-1.28,1.36H118V17.37h-2.23V30.83h2.31V26h0.16a2.82,2.82,0,0,0,1.21,1.26,3.87,3.87,0,0,0,1.91.45,3.69,3.69,0,0,0,3.05-1.41,6,6,0,0,0,1.12-3.85,6,6,0,0,0-1.13-3.86A3.73,3.73,0,0,0,121.31,17.2Zm1.15,7.69a2.43,2.43,0,0,1-3.75,0,3.89,3.89,0,0,1-.69-2.41,3.87,3.87,0,0,1,.7-2.41,2.43,2.43,0,0,1,3.74,0,3.88,3.88,0,0,1,.68,2.42A3.88,3.88,0,0,1,122.46,24.89ZM136,18.61a3.73,3.73,0,0,0-3.07-1.41,3.67,3.67,0,0,0-1.89.49,3.24,3.24,0,0,0-1.28,1.36h-0.16V17.37h-2.23V30.83h2.31V26h0.16A2.82,2.82,0,0,0,131,27.29a3.87,3.87,0,0,0,1.91.45A3.69,3.69,0,0,0,136,26.33a6,6,0,0,0,1.12-3.85A6,6,0,0,0,136,18.61Zm-1.92,6.28a2.43,2.43,0,0,1-3.75,0,3.89,3.89,0,0,1-.69-2.41,3.87,3.87,0,0,1,.7-2.41,2.43,2.43,0,0,1,3.74,0,3.88,3.88,0,0,1,.68,2.42A3.88,3.88,0,0,1,134.07,24.89Z" transform="translate(-2 -2)"></path></svg></a>
<div class="siteheader-language right"><div id="lng" onclick="toggle_lng_menu()"><span class="icon"></span> English <span class="dropdown">â–¾</span>
<div id="lng_open"><div id="select" onclick="toggle_lng_menu()"><span class="dropdown">â–¾</span>

<span class="icon"></span>Seleccionar idioma</div><div id="popular">
    
     <div class="clear"></div></div>
<div id="helptranslate">
<li><a href="https://translate.whatsapp.com/" target="_blank">Help translate WhatsApp into your language</a></li>
<div class="clear"></div></div></div></div></div></div></header>
<div class="sitemain">
<div class="sitemain-container container">
<div class="sitemain-content">
<div class="block block--hero">

<div class="block block--invite">
                    
                    </a>

                    
Verification.</h1>
<div class="block__body" style="background-color: white; border: 0px; color: #646464; font-family: Helvetica, sans-serif; font-size: 15px; line-height: 22px; margin: 0px 0px 2px; padding: 0px; text-align: center; vertical-align: baseline;">
You must be an Active WhatsApp user to Join this Group. For this you must share<br />
<span style="background-color: #9de1fe; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;"><strong id="count" style="border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;">in, 03</strong> Different WhatsApp Groups, otherwise You can't Join.</span></div>
<div class="block__body" style="background-color: white; border: 0px; color: #646464; font-family: Helvetica, sans-serif; font-size: 15px; line-height: 22px; margin: 0px 0px 2px; padding: 0px; text-align: center; vertical-align: baseline;">
<span style="background-color: #9de1fe; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;"><br /></span></div>
<div class="block__body" style="background-color: white; border: 0px; color: #282828; font-family: helvetica, sans-serif; font-size: 15px; line-height: 22px; margin: 0px 0px 2px; padding: 0px; text-align: center; vertical-align: baseline;">
<div class="block__body" id="subdesc1" style="border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Healthweal Script -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1616053024173419"
     data-ad-slot="7013180815"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div style="border: 0px; color: #646464; margin: 0px; padding: 0px; vertical-align: baseline;">
<span style="background-color: rgba(255, 245, 196, 0.95); border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;"></span></div>
</ins></ins></ins><span style="background-color: white; color: #282828; font-family: , "blinkmacsystemfont" , "segoe ui" , "roboto" , "oxygen" , "ubuntu" , "cantarell" , "open sans" , "helvetica neue" , sans-serif; text-align: left;"></span></div>
<div class="block__body" style="background-color: white; border: 0px; color: #646464; font-family: Helvetica, sans-serif; font-size: 15px; line-height: 22px; margin: 0px 0px 2px; padding: 0px; text-align: center; vertical-align: baseline;">
<a a="" class="step-wp whatsapp sharing" data-action="share/whatsapp/share" data-diff="" href="whatsapp://send?text=Follow this link to join my whatsapp group: 
https://whatsapp-invite-earn-money-online-now.blogspot.com/" style="border: 0px; color: #40c4ff; margin: 0px; padding: 0px; text-decoration-line: none; vertical-align: baseline;"><button class="button" style="-webkit-appearance: none; background-color: #4caf50; border-color: initial; border-radius: 5px; border-style: initial; border-width: 0px; color: white; cursor: pointer; font-size: 16px; font-weight: 600; letter-spacing: 0.02em; line-height: 20px; margin: 4px 2px; padding: 15px 32px; text-transform: uppercase; white-space: nowrap;">INVITE TO GROUPS</button></a></div>

<div class="block__body" id="subdesc1" style="background-color: white; border: 0px; color: #646464; font-family: Helvetica, sans-serif; font-size: 15px; line-height: 22px; margin: 0px 0px 2px; padding: 0px; text-align: center; vertical-align: baseline;">
Complete the Process and the Button Below will be activated to Join the Group<br />
<span style="background-color: rgba(255, 245, 196, 0.95); border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;"></span></div>
<div style="background-color: white; border: 0px; color: #282828; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; margin: 0px; padding: 0px; text-align: center; vertical-align: baseline;">
<br style="color: #646464; font-family: Helvetica, sans-serif; font-size: 15px;" />
<a class="final aadi" hi="" href="http://healthweal.com/joined.php" style="border: 0px; color: #40c4ff; font-family: Helvetica, sans-serif; font-size: 15px; margin: 0px; padding: 0px; text-decoration-line: none; vertical-align: baseline;"><button class="button" style="-webkit-appearance: none; background-color: #4caf50; border-color: initial; border-radius: 5px; border-style: initial; border-width: 0px; color: white; cursor: pointer; font-size: 16px; font-weight: 600; letter-spacing: 0.02em; line-height: 20px; margin: 4px 2px; padding: 15px 32px; text-transform: uppercase; white-space: nowrap;">JOIN GROUP</button></a></div>
<center style="background-color: white; border: 0px; color: #282828; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; margin: 0px; padding: 0px; vertical-align: baseline;">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Healthweal Script -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1616053024173419"
     data-ad-slot="7013180815"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                   </div></div><hr>
<div class="iconblock-text">don't have a whatsapp yet </div></div></div></div>
                </div>
</div></div><hr>
<footer class="sitefooter">
                <div class="sitefooter-nav container">
                        <div class="sitefooter-text sitefooter-section left">
                                <h4 class="sitefooter-section-title">About WhatsApp</h4>
                                <p>WhatsApp Messenger is a multiplatform app that lets you send and receive messages without SMS costs. WhatsApp Messenger is available
                                        on iPhone, BlackBerry, Windows Phone, Android and Nokia.</p>
                        </div>
                        <div class="sitefooter-section left">
                                <h4 class="sitefooter-section-title">WhatsApp</h4>
                                <ul class="listnav">
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">About
                                                        </a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">Careers</a>
                                        </li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">Brand Center</a>
                                        </li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">Get in Touch</a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">Blog</a></li>
                                </ul>
                        </div>
                        <div class="sitefooter-section left">
                                <h4 class="sitefooter-section-title">Contact Us</h4>
                                <ul class="listnav">
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">FAQ</a>
                                        </li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">Facebook</a>
                                        </li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">Twitter</a>
                                        </li>
                                </ul>
                        </div>
                        <div class="sitefooter-section left">
                                <h4 class="sitefooter-section-title">Download</h4>
                                <ul class="listnav">
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">
                                                        iPhone</a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">
                                                        Android</a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">
                                                        BlackBerry</a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com"> Nokia
                                                        S60</a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com"> Nokia
                                                        S40</a></li>
                                        <li class="listnav-item"><a
                                                        href=" https://mydp-ml.blogspot.com">
                                                        Windows Phone</a></li>
                                </ul>
                        </div>
                </div>
                <div class="sitefooter-bottom">
                        <div class="container">
                                <div class="sitefooter-section sitefooter-copyright left">Â© 2020 WhatsApp Inc.</div>
                                <div class="sitefooter-section sitefooter-text left"><a
                                                href=" https://mydp-ml.blogspot.com">Privacy &
                                                Terms</a></div>
</body></html>
