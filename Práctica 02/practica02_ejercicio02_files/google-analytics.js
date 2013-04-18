//if(_LOGGEDIN == "true")
//{
//    window['ga-disable-' + _UACODE] = false;
//} else {
//    window['ga-disable-' + _UACODE] = true;
//}

var _gaq = _gaq || [];
var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
_gaq.push(['_setAccount', _UACODE]);
_gaq.push(['_addIgnoredRef', 'game05.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game06.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game02.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game14.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game13.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game08.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game03.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game01.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game04.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game09.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game07.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game12.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game11.zylom.com']);
_gaq.push(['_addIgnoredRef', 'game10.zylom.com']);
_gaq.push(['_addIgnoredRef', 'zylom.com']);
_gaq.push(['_addIgnoredRef', 'game.zylom.com']);
_gaq.push(['_addIgnoredRef', 'secure2.zylom.com']);
_gaq.push(['_addIgnoredRef', 'main.zylom.com']);
_gaq.push(['_addIgnoredRef', 'partner.zylom.com']);
_gaq.push(['_addIgnoredRef', 'secure.zylom.com']);
_gaq.push(['_addIgnoredRef', 'adserver.zylom.com']);

_gaq.push(['_addIgnoredOrganic', 'zylom']);
_gaq.push(['_addIgnoredOrganic', 'zylom games']);
_gaq.push(['_addIgnoredOrganic', 'zylom.com']);
_gaq.push(['_addIgnoredOrganic', 'www.zylom.com']);
_gaq.push(['_addIgnoredOrganic', 'zylom.de']);

_gaq.push(['_addOrganic', 'blogsearch.google','q']);
_gaq.push(['_addOrganic', 'news.google','q']);
_gaq.push(['_addOrganic', 'images.google','q']);
_gaq.push(['_addOrganic', 'maps.google','q']);
_gaq.push(['_addOrganic', 'video.google','q']);
_gaq.push(['_addOrganic', 'blueyonder','q']);
_gaq.push(['_addOrganic', 'chello','q1']);
_gaq.push(['_addOrganic', 'dmoz','search']);
_gaq.push(['_addOrganic', 'dogpile','q']);
_gaq.push(['_addOrganic', 'home.nl','q']);
_gaq.push(['_addOrganic', 'hotbot','query']);
_gaq.push(['_addOrganic', 'ixquick.com','query']);
_gaq.push(['_addOrganic', 'kobala','qr']);
_gaq.push(['_addOrganic', 'metaspider.nl','query']);
_gaq.push(['_addOrganic', 'myway.com','searchfor']);
_gaq.push(['_addOrganic', 'mywebsearch.com','searchfor']);
_gaq.push(['_addOrganic', 'netmenu.metaseek.nl','qry']);
_gaq.push(['_addOrganic', 'planet.nl','googleq=q']);
_gaq.push(['_addOrganic', 'search.icq.com','q']);
_gaq.push(['_addOrganic', 'search.ilse.nl','search_for']);
_gaq.push(['_addOrganic', 'startgoogle.startpagina.nl','q']);
_gaq.push(['_addOrganic', 'vinden.nl','q']);
_gaq.push(['_addOrganic', 'vindex.nl','search_for']);
_gaq.push(['_addOrganic', 'web.nl','zoekwoord']);
_gaq.push(['_addOrganic', 'zoek.nl','q']);
_gaq.push(['_addOrganic', 'zoeken.nl','query']);
_gaq.push(['_addOrganic', 'zoeken.track.nl','qr']);
_gaq.push(['_addOrganic', 'zoekhet.nl','query']);
_gaq.push(['_addOrganic', 'zoeknu.nl','Keywords']);
_gaq.push(['_setDomainName', '.zylom.com']);
if(_forceMediaTakeOver == false)
{
    _gaq.push(['_setCustomVar', 5, 'Homepage Takeover', 'none', 3]);
}
_gaq.push(['_trackPageview']);
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


function gaTrackOnlinePlay(url) {
  var v = decode_popup_url(url);
  if(v == null)
    return;
  var gsid = v['gsid'];
  var lid = v['lid'];
  var dsgid = v['dsgid'];
  gaTrackPlayWebgameChannel(gsid, dsgid, lid);
}

function decode_popup_url(url) {
  if(url == null)
    return null;
  
  // http://main.zylomtest.com/servlet/Play?g=4&l=2&s=606
  // g=gsid
  // l=languageid
  // s=DownloadableSkinnedGameID
  // returns: {'gsid':<v>, 'lid':<v>, 'dsgid':<v>}
  if(url.toLowerCase().indexOf("/servlet/play?") < 0)
    return null;
  
  var v = {};
  var x = url.split('?');
  var p = x[1].split('&');
  for(i=0; i<p.length; i++) 
  {
    var k = p[i].split('=');
    if(k.length == 2)
    {
      switch(k[0])
      {
        case 'g': v['gsid'] = k[1]; break;
        case 'l': v['lid'] = k[1]; break;
        case 's': v['dsgid'] = k[1]; break;
      }
    }
  }
  return v;
}

function gaTrackPlayWebgameChannel(gsid, dsgid, lid)
{
  if(gsid == null || dsgid == null || lid == null ) 
    return

  var PLAY_WEBGAME_CHANNEL = 10;
  try {
    $.getJSON('/servlet/GameInfo',
      {gsid:gsid, dsgid:dsgid, lid:lid, action:PLAY_WEBGAME_CHANNEL},
      function(data) {
        if(data != null && data.jscript != null && data.jscript != "") {
          eval(data.jscript);
        }
      });
  } catch(e) {
  }
}

function gaTrackLanguageChange(cc, lc)
{
  _gaq.push(['_trackEvent', 'Other Language', 'Choose Other Language',,,false]);
}
