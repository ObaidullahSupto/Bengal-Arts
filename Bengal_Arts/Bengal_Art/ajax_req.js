

function GetXmlHttpObject(handler)
{
   var objXMLHttp=null
   if (window.XMLHttpRequest)
   {
       objXMLHttp=new XMLHttpRequest()
   }
   else if (window.ActiveXObject)
   {
       objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
   }
   return objXMLHttp
}

function stateChanged()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtResult").innerHTML= xmlHttp.responseText;
		    document.getElementById("txtResult1").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtResult").innerHTML="";
	   document.getElementById("txtResult1").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function totalChanged()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("totalResult").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
// Will populate data based on input
function totalData(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("totalResult").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=totalChanged;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function totalChance()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("totalShow").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalADD(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("totalShow").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=totalChance;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function bgChance()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showbg").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalbg(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showbg").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=bgChance;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function totalenglish()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showeg").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totaleg(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showeg").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=totalenglish;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function totalenglish2()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showeg2").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totaleg2(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showeg2").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=totalenglish2;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeMath()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showmath").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalm(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showmath").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeMath;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changegs()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showgs").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalgs(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("totalgs").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changegs;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changess()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showss").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalss(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showss").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changess;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changere()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showr").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalre(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showr").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changere;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeag()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showag").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalag(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showag").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeag;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeop()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showop").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalop(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showop").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeop;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changecom()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showcom").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalcomp(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showcom").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changecom;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeop()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showph").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalph(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showph").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeop;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changech()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showch").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalch(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showch").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changech;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeent()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showent").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalenter(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showent").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeent;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeacc()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showacc").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalaccount(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showacc").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeacc;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changebus()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showbus").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalbus(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showbus").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changebus;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changegeo()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showgeo").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalgeo(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showgeo").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changegeo;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changehis()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showhis").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalhis(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showhis").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changehis;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeciv()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showciv").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalciv(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showciv").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeciv;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeoptional()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showoption").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totaloptional(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showoption").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeoptional;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
function changeecono()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("showecono").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function totalecono(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("showecono").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=changeecono;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
