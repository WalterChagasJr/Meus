/* wowslider modifications
 * add:
 * -   <link rel="stylesheet" type="text/css" href="engine1/style.mod.css" />
 * -   <script type="text/javascript" src="engine1/wowslider.mod.js"></script> (after "wowslider.js", before "script.js")
 *
 * wowslider-contaner, css-classes:
 * -   "playpause" : adds play/pause controll in slider
 * -   "fullscreen" : enable fullscreen-mode button
 * -   "hidecontrolls" : hide left on first slide and right on last
 * -   "hidetitles" : title and description only on mouse hover
 * -   "stoptitles" : title and description without animation
 * -   "delays" : enable delay for each slide
 *
 * ws_images(for each <li>-block) attributes:
 * -   "data-delay = %number%" : delay for this slide
 */
(function(b){var a=b.fn.wowSlider;b.fn.wowSlider=function(p){var N=p.autoPlay;var e=b(".ws_images ul")[0].children;var I=e.length;var L=null;var m;var F=true;if(this.hasClass("delays")){p.autoPlay=false;var l=new Array();for(var K=0;K<I;K++){l[K]=b(e[K]).data("delay")||p.delay}function v(){clearTimeout(L);L=setTimeout(function(){if(N&&m&&!F){m[0].wsStart()}else{F=false}v()},l[B]+p.duration)}v()}var t=p.onBeforeStep;var k=p.onStep;b.extend(p,{onBeforeStep:function(O,P){if(!N&&m){m[0].wsStop();return O}else{if(t){return t.apply(this,[O,P])}else{return O+1}}},onStep:function(O,P){if(k){k.apply(this,[O,P])}B=O;if(j){if(j.hasClass("delays")){v()}if(j.hasClass("stoptitles")){b(".ws-title, .ws-title>").stop(1,1).stop(1,1)}if(j.hasClass("hidecontrolls")){y()}}}});m=a.apply(this,[p]);var B=p.startSlide||0;var j=this;var s=p.duration;var M=null;var d=false;function y(){var P=b(".ws_prev");var i=b(".ws_next");try{if(B==0){P.css("display","none")}else{P.css("display","block")}if(B==I-1){i.css("display","none")}else{i.css("display","block")}}catch(O){}}if(j.hasClass("hidecontrolls")){y()}if(j.hasClass("fullscreen")){function g(P,O,i){if(P.addEventListener){P.addEventListener(O,i,false)}else{P.attachEvent("on"+O,i)}}function n(P,O,i){if(P.removeEventListener){P.removeEventListener(O,i)}else{P.detachEvent("on"+O,i)}}function J(Q,P){if(!Q.length){Q=[Q]}for(var R in P){for(var O=0;O<Q.length;O++){Q[O].style[R]=P[R]}}}var h=0,q="";if(typeof document.cancelFullScreen!="undefined"){h=true}else{var w="webkit moz o ms khtml".split(" ");for(var K=0,x=w.length;K<x;K++){q=w[K];if(typeof document[q+"CancelFullScreen"]!="undefined"){h=true;break}}}function z(i){if(h){switch(q){case"":return document.fullScreen;case"webkit":return document.webkitIsFullScreen;default:return document[q+"FullScreen"]}}else{return !!i.eh5v}}var c=0;var o=0;function C(Q){if(h){var P=p.width/(p.height+100);var O=window.screen.availWidth;b(Q).css({width:O});b(Q).children().css({top:(window.screen.availHeight-O/P)/2});return(q==="")?Q.requestFullScreen():Q[q+"RequestFullScreen"]()}else{if(!Q){return}if(c){r(c)}var P=p.width/(p.height+100);var O=b(window).width();var i=b("<d