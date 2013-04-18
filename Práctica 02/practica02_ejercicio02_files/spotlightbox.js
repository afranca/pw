var selectedTab = 0;

function animateFade()
{
  var fade = document.getElementById("fade");
  var opacity = document.getElementById("opacity");

  var animationtimeoutid = document.getElementById("animationtimeoutid");

  var proceed = true;
  var newopacity = opacity.value;
  if (fade.value == 'in')
  {
      proceed = !(newopacity == 0);
      newopacity--;
  }
  else
  {
      proceed = !(newopacity == 6);
      newopacity++;
  }

  if (proceed)
  {
      opacity.value = newopacity;
      var overlay = document.getElementById("overlay");
      animationtimeoutid.value = setTimeout("setPromoOpacity('overlay'," + newopacity + ")", 25);
  }
  else
  {
      fade.value = 'finished-' + fade.value;
      switchPromo(document.getElementById("promoindex").value);
  }
}

function setPromoOpacity(id, value)
{
  var object = document.getElementById(id);
  object.style.opacity = parseInt(value) / 10;
  object.style.filter = 'alpha(opacity=' + value * 10 + ')';
  var animationtimeoutid = document.getElementById("animationtimeoutid");
  clearTimeout(parseInt(animationtimeoutid.value));
  animateFade();
}

function nextPromo()
{
    var promoIndex = parseInt(window.document.getElementById("promoindex").value);
    var promos = parseInt(window.document.getElementById("promos").value);
    var nextPromo = (promoIndex + 1) % promos;
    selectPromo(nextPromo);
}

function previousPromo()
{
    var promoIndex = parseInt(window.document.getElementById("promoindex").value);
    var promos = parseInt(window.document.getElementById("promos").value);
    var previousPromo = (promos + promoIndex - 1) % promos;
    selectPromo(previousPromo);
}

function selectPromo(index)
{
    resetTimer();
    switchPromo(index);
    logPageVisit(index + 1);
    
    checkPromoBanner(index);
    
}

function resetPromoBox()
{
    document.getElementById("promoindex").value = 0;
}

function switchPromo(index)
{
  selectedTab = index;
  document.getElementById("promoindex").value = index;
  var fade = document.getElementById("fade");

  if (fade.value == 'idle')
  {
      // fadeout box
      document.getElementById("overlay").style.display = 'inline';
      fade.value = 'out';
      animateFade();
  }
  else if (fade.value == 'finished-out')
  {
      var promos = parseInt(document.getElementById("promos").value);
      for (var promoIndex = 0; promoIndex < promos; promoIndex++)
      {          
          var promoDisplay = (promoIndex == index ? '' : 'none');
          
          var promoNumber = (promoIndex + 1);
          document.getElementById('promo' + promoNumber).style.display = promoDisplay;
          var promoImageClass = 'spotlight_tab' + promoNumber;
          if (promoIndex == index)
          {
            promoImageClass += '_active';
          }
          $('#tab'+promoNumber).removeClass();
          $('#tab'+promoNumber).addClass(promoImageClass);
      }
      fade.value = 'in';
      animateFade();
      document.getElementById('promocurrentitem').innerHTML = promoItemNames[index];
  }
  else if (fade.value == 'finished-in')
  {      
      fade.value = 'idle';
      document.getElementById("overlay").style.display = 'none';      
  }
}

function resetTimer()
{  
    var timeoutid = document.getElementById("timeoutID").value;
    if (timeoutid != '')
    {
        clearTimeout(timeoutid);
    }
    timeoutid = setTimeout("nextPromo()", 8000);
    window.document.getElementById("timeoutID").value = timeoutid;
}

function stopSpotlightBox()
{    
  var timeoutid = document.getElementById("timeoutID").value;
  if (timeoutid != '')
  {
    clearTimeout(timeoutid);
  }
  var animationtimeoutid = document.getElementById("animationtimeoutid");
  if (animationtimeoutid != '')
  {
    clearTimeout(parseInt(animationtimeoutid.value));
  }
}

function setColorOfCustomBox(from, to)
{
  var featuredbox = document.getElementById("featuredbox");
}

function mouseOverTab(tab, index)
{
    if(selectedTab != index)
    {
        tab.className='spotlightitemhover';
    }
}

function mouseOutTab(tab, index)
{
    if(selectedTab != index)
    {
        tab.className='spotlightitem';
    }
}

function addUnloadEvent(func)
{
    var oldonunload = window.onunload;
    if (typeof window.onunload != 'function')
    {
        window.onunload = func;
    }
    else
    {
        window.onunload = function() {oldonunload();func();}
    }
}

function addLoadEvent(func)
{
    var oldonload = window.onload;
    if (typeof window.onload != 'function')
    {
        window.onload = func;
    }
    else
    {
        window.onload = function() {oldonload();func();}
    }
}