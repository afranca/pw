<!--
var hasOGM = false;
function OGMCallBack(msg){}

function initiateDownload(gsid, dsgid, lid, b)
{
    try{hasOGM = ogmapi.isServiceCompatible()&&ogmapi.isServiceInstalled();}catch(err){}
    if(hasOGM)
    {
        window.location = "http://www.zylom.com/rdownloadinstruction.jsp?g="+gsid+"&s="+dsgid+"&ogm=true";
    }
    else
    {
      download(gsid, dsgid, lid, b);
    }    
}

function zylomdownload(gsid, dsgid, lid, b, loggedin)
{
  // GA reporting;
  if(gsid != null && lid != null ) 
  {
    var DOWNLOAD_GAME_OFFLINE = 12;
    $.getJSON('/servlet/GameInfo',
      {gsid:gsid, dsgid:dsgid, lid:lid, action:DOWNLOAD_GAME_OFFLINE},
      function(data) {
        if(data == null || data.jscript == null) {
          initiateDownload(gsid, dsgid, lid, b)
          return;
        }
        eval(data.jscript);
        initiateDownload(gsid, dsgid, lid, b);
      });
  } else
    download(gsid, dsgid, lid, b);
}



function purchaseOnsite(gsid, dsgid)
{
    try{hasOGM = ogmapi.isServiceCompatible()&&ogmapi.isServiceInstalled();}catch(err){}
    window.location = 'http://www.zylom.com/rpurchaseonsite.jsp?gsid=' + gsid + '&dsgid=' + dsgid + '&callbackurl=' + encodeURIComponent(document.URL) + '&hasogm=' + hasOGM;
}

//-->