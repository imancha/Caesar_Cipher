"use strict";

// JavaScript Document
var xmlhttp;

function GetXmlHttpObject(){
	if(window.XMLHttpRequest){return new XMLHttpRequest();}
	if(window.ActiveXObject){return new ActivexXObject("Microsoft.XMLHTTP");}
	return null;
}

document.addEventListener("DOMContentLoaded", function(event) {
	document.getElementById("enfresh").addEventListener("click", function(event){
		document.getElementById("plain").value = "";
	});
  document.getElementById("encrypt").addEventListener("click", function(event){
		xmlhttp = GetXmlHttpObject();
		if(xmlhttp == null){alert ("Your browser does not support AJAX!");return;}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById("chiper").value = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","./inc/inc.php?encrypt="+document.getElementById("plain").value,true);
		xmlhttp.send(null);
	});
	document.getElementById("defresh").addEventListener("click", function(event){
		document.getElementById("chiper").value = "";
	});
	document.getElementById("decrypt").addEventListener("click", function(event){
		xmlhttp = GetXmlHttpObject();
		if(xmlhttp == null){alert ("Your browser does not support AJAX!");return;}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById("plain").value = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","./inc/inc.php?decrypt="+document.getElementById("chiper").value,true);
		xmlhttp.send(null);
	});
});
