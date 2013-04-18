
function AJAXConnection(newURL)
{this.onchange=null;this.ie=false;this.url=newURL;this.body=null;this.callbackfunction=null;if(typeof(_AJAXConnection_prototype_called)=='undefined')
{_AJAXConnection_prototype_called=true;AJAXConnection.prototype.setRequestTag=setRequestTag;AJAXConnection.prototype.getRequestTag=getRequestTag;AJAXConnection.prototype.setCallbackFunction=setCallbackFunction;AJAXConnection.prototype.getResponseText=getResponseText;AJAXConnection.prototype.getResponseXML=getResponseXML;AJAXConnection.prototype.callBack=callBack;AJAXConnection.prototype.get=get;}
function setRequestTag(newBody)
{this.body=newBody;}
function getRequestTag()
{return this.body;}
function setCallbackFunction(newCallbackfunction)
{this.callbackfunction=newCallbackfunction;}
function getResponseText()
{if(this.rpc_request!=null)return this.rpc_request.responseText;else return null;}
function getResponseXML()
{if(this.rpc_request!=null)return this.rpc_request.responseXML;else return null;}
function callBack(self)
{if(self!=null&&self.rpc_request.readyState==4)
{if(self.callbackfunction!=null)self.callbackfunction();}}
function get(wait)
{if(wait==null)wait=true;this.rpc_wait=wait;var self=this;if(window.XMLHttpRequest)
{this.rpc_request=new XMLHttpRequest();this.rpc_request.onreadystatechange=function(){self.callBack(self);}}
else if(window.ActiveXObject)
{this.ie=true;this.rpc_request=new ActiveXObject("Microsoft.XMLHTTP");if(this.rpc_request)this.rpc_request.onreadystatechange=function(){self.callBack(self);}}
this.rpc_request.open("GET",this.url,!this.rpc_wait);if(this.ie)this.rpc_request.send();else this.rpc_request.send(null);}}