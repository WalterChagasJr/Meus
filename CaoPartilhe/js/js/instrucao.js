function abrirPag(valor){
var url = valor;

xmlRequest.open("GET",url,true);
xmlRequest.onreadystatechange = mudancaEstado;
xmlRequest.send(null);

if (xmlRequest.readyState == 1) {
document.getElementById("context").innerHTML = "<img src='loader.gif'>";
}

return url;
}

function mudancaEstado(){
if (xmlRequest.readyState == 4){
  document.getElementById("context").innerHTML = xmlRequest.responseText;
  $('.nano').nanoScroller();
  $('.nano').nanoScroller({ alwaysVisible: true, scroll: 'top' });	
}
}

var imgs1 = new Array("http://caopartilhe.org.br/img/ong-caopartilhe-loader1.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loader2.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loader3.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loader4.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loader5.jpg");
var lnks1 = new Array("#","#","#","#","#");
var alt1 = new Array();
var currentAd1 = 0;
var imgCt1 = 5;
function cycle1() {
  if (currentAd1 == imgCt1) {
    currentAd1 = 0;
  }
var banner1 = document.getElementById('adBanner1');
var link1 = document.getElementById('adLink1');
  banner1.src=imgs1[currentAd1]
  banner1.alt=alt1[currentAd1]
  document.getElementById('adLink1').href=lnks1[currentAd1]
  currentAd1++;
}
  window.setInterval("cycle1()",2000);

var imgs2 = new Array("http://caopartilhe.org.br/img/ong-caopartilhe-loadera.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loaderb.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loaderc.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loaderd.jpg","http://caopartilhe.org.br/img/ong-caopartilhe-loadere.jpg");
var lnks2 = new Array("#","#","#","#","#");
var alt2 = new Array();
var currentAd2 = 0;
var imgCt2 = 5;
function cycle2() {
  if (currentAd2 == imgCt2) {
    currentAd2 = 0;
  }
var banner2 = document.getElementById('adBanner2');
var link2 = document.getElementById('adLink2');
  banner2.src=imgs2[currentAd2]
  banner2.alt=alt2[currentAd2]
  document.getElementById('adLink2').href=lnks2[currentAd2]
  currentAd2++;
}
  window.setInterval("cycle2()",2000);