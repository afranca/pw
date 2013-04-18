
var timeout=500;var closetimer=0;var hdmenuitem=0;var ddmenuitem=0;function mopen(hdid,ddid)
{mcancelclosetime();if(hdmenuitem)
{hdmenuitem.style.background='transparent';hdmenuitem.style.border='0';}
if(ddmenuitem)ddmenuitem.style.visibility='hidden';ddmenuitem=document.getElementById(ddid);if(ddmenuitem!=null)
{ddmenuitem.style.visibility='visible';hdmenuitem=document.getElementById(hdid);}}
function mclose()
{if(ddmenuitem)
{ddmenuitem.style.visibility='hidden';}
if(hdmenuitem)
{hdmenuitem.style.background='transparent';hdmenuitem.style.padding='5px 1px 4px 1px';hdmenuitem.style.border='0';}}
function mclosetime()
{closetimer=window.setTimeout(mclose,timeout);}
function mcancelclosetime()
{if(closetimer)
{window.clearTimeout(closetimer);closetimer=null;}}
document.onclick=mclose;