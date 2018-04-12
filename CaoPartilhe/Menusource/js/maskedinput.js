/*
Script desenvolvido por: Klonder
Postagem exclusiva em: http://www.forum.imasters.com.br
Versão 09.04.2010 - 21:05h;

Esse script poderá ser utilizado sem a necessidade de citação do autor.
Entretanto, não diga que o script é de sua autoria, pois o mesmo será postado nesse fórum, com a data precisa da publicação e com o nome do autor ao lado.
A capacidade em respeitar o trabalho do outro mostra o tipo de indivíduo que você realmente é.
*/

var trava = false;
var iCount1, iCount2, iCount, iTexto, nChar;
function MaskDown(e) {
        if(trava == false) {
                iTexto = e.value;
                iCount1 = e.value.length;
                trava = true;
        }
}

function MaskUp(e,evt,msc) {
iCount2 = e.value.length;
var key_code = evt.keyCode ? evt.keyCode : evt.charCode ? evt.charCode : evt.which ? evt.which : void 0;
if (key_code == 9) {
                iCount1 = iCount2-1;
                e.select;
                
} else {
if (iCount2 > iCount1) {
        e.value = e.value.substr(0,iCount1+1);
        if(e.value.length > msc.length) {
                e.value = e.value.substr(0,msc.length);
        }
        if(iCount1 == 0) {
                if (msc.substring(iCount1,iCount1+1) != "#") {
                        nChar=1;
                        while (msc.substring(iCount1+nChar,iCount1+nChar+1) != "#" && nChar <= msc.length) {
                                nChar++;        
                        }
                        e.value = msc.substring(0,iCount1+nChar) + e.value.substr(0,iCount1+1);
                } 
        } else {
                if (msc.substring(iCount1+1,iCount1+2) != "#") {
                        var nChar=1;
                        while (msc.substring(iCount1+nChar,iCount1+nChar+1) != "#" && nChar <= msc.length) {
                                nChar++;        
                        }
                        e.value = e.value.substr(0,iCount1+1) + msc.substring(iCount1+1,iCount1+nChar);
                }
        }
} else if (iCount2 == iCount1) {
        e.value = e.value;
} else {        
        if (msc.substr(iCount2,1) != "#") {     

                nChar = 1;
                while (msc.substr(iCount1-nChar,1) != "#" && nChar <= iCount1) {
                        nChar++;        
                }
                e.value = iTexto.substr(0,iCount2-nChar+1);
        }

}
trava = false;
}}