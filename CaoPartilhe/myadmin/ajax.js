function GetXMLHttp() {

//if(navigator.appName == “Microsoft Internet Explorer”) {

// xmlHttp = new ActiveXObject(“Microsoft.XMLHTTP”);

///}

//else {

// xmlHttp = new XMLHttpRequest();

//}
// return xmlHttp;

//}

//var xmlRequest = GetXMLHttp();

var arrSignatures = ["MSXML2.XMLHTTP.5.0", "MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP","Microsoft.XMLHTTP"];
for (var i=0; i < arrSignatures.length; i++) {
try {
var oRequest = new ActiveXObject(arrSignatures[i]);
return oRequest;
} catch (oError) {
}
}
throw new Error(“MSXML não esta instalado em seu sistema.”);
}
var xmlRequest = GetXMLHttp()