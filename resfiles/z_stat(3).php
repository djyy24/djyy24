!function(){var t,i="http:"==function(){for(var t=document.getElementsByTagName("script"),i=0,s=t.length;i<s;i++){var e,h=t[i];if(h.src&&(e=/^(https?:)\/\/[\w\.\-]+\.cnzz\.com\//i.exec(h.src)))return e[1]}return window.location.protocol}()?"http:":"https:",s=document,e=window,h=encodeURIComponent,r=decodeURIComponent,n=unescape,c=escape,a="navigator",o="location",u="screen",f="cookie",_="createElement",v="push",p="join",d="width",l="height",y="indexOf",g="length",m="split",z="parentNode",w="write",C="getElementById",b="toString",k="call",D="floor",j="random",x="onabort",S="onload",A="onerror",M="getTime",U="setTime",E="toUTCString",I=i+"//c.cnzz.com/c.js",P=i+"//ca.cnzz.com",V="userAgent",R="1257962242",N=function(t,i){try{Math.random()}catch(t){}return!0},T=function(){this.t=R,this.i="z",this.h="",this.o="",this.u="",this._=((new Date).getTime()/1e3).toFixed(0),this.v="z13.cnzz.com",this.p="",this.l="CNZZDATA"+this.t,this.m="_CNZZDbridge_"+this.t,this.C="_cnzz_CV"+this.t,this.k="CZ_UUID"+this.t,this.D="UM_distinctid",this.j="UM_BID",this.S="0",this.A={},this.M={},this.U=[],this.init()};T.prototype={init:function(){try{this.I(),this.P(),this.V(),this.R(),this.N(),this.T(),this.Z(),this.B(),this.q(),this.L(),this.F(),this.H(),this.O(),this.Y(),this.$(),e[this.m]=e[this.m]||{},this.G("_cnzz_CV")}catch(t){N()}},J:function(){},P:function(){for(var t=document.getElementsByTagName("script"),i=new RegExp("^(https:|http:)?//.+\\.cnzz\\.com/[a-z0-9_]+\\.(php|js)\\?.*id="+this.t,"i"),s=t.length-1;s>=0;s--){var e=t[s];e.src&&i.test(e.src)&&e.async&&(this.S="1")}},K:function(){try{var t=this;e._czc={push:function(){return t.W.apply(t,arguments)}}}catch(t){N()}},O:function(){try{var t=e._czc;if("[object Array]"==={}[b][k](t))for(var i=0;i<t[g];i++){var s=t[i];switch(s[0]){case"_setAccount":e._cz_account="[object String]"==={}[b][k](s[1])?s[1]:String(s[1]);break;case"_setAutoPageview":"boolean"==typeof s[1]&&(e._cz_autoPageview=s[1])}}}catch(t){N()}},$:function(){try{if(void 0===e._cz_account||e._cz_account===this.t){if(e._cz_account=this.t,"[object Array]"==={}[b][k](e._czc))for(var t=e._czc,i=0,s=t[g];i<s;i++){var h=t[i];this.W(h)}this.K()}}catch(t){N()}},W:function(t){try{if("[object Array]"==={}[b][k](t))switch(t[0]){case"_trackPageview":if(t[1]){if(this.M.X=i+"//"+e[o].host,"/"!==t[1].charAt(0)&&(this.M.X+="/"),this.M.X+=t[1],""===t[2])this.M.tt="";else if(t[2]){var s=t[2];"http"!==s.substr(0,4)&&(s=i+"//"+e[o].host,"/"!==t[2].charAt(0)&&(s+="/"),s+=t[2]),this.M.tt=s}this.it(),void 0!==this.M.tt&&delete this.M.tt,void 0!==this.M.X&&delete this.M.X}break;case"_trackEvent":var r=[];t[1]&&t[2]&&(r[v](h(t[1])),r[v](h(t[2])),r[v](t[3]?h(t[3]):""),t[4]=parseFloat(t[4]),r[v](isNaN(t[4])?0:t[4]),r[v](t[5]?h(t[5]):""),this.st=r[p]("|"),this.it(),delete this.st);break;case"_setCustomVar":if(t[g]>=3){if(!t[1]||!t[2])return!1;var n,c=t[1],a=t[2],u=t[3]||0,f=0;for(var _ in this.M.et)f++;if(f>=5)return!1;n=0==u?"p":-1==u||-2==u?u:(new Date)[M]()+1e3*u,this.M.et[c]={},this.M.et[c].ht=a,this.M.et[c].rt=n,this.nt()}break;case"_deleteCustomVar":t[g]>=2&&(c=t[1],this.M.et[c]&&(delete this.M.et[c],this.nt()));break;case"_trackPageContent":t[1]&&(this.ct=t[1],this.it(),delete this.ct);case"_trackPageAction":r=[],t[1]&&t[2]&&(r[v](h(t[1])),r[v](h(t[2])),this.ot=r[p]("|"),this.it(),delete this.ot);break;case"_setUUid":var d=t[1];if(d[g]>128)return!1;var l=new Date;l[U](l[M]()+157248e5),this.ut(this.k,d,l)}}catch(t){N()}},Y:function(){try{var t,i=this.getACookie(this.C);if(this.M.et={},i)for(var s=i[m]("&"),e=0;e<s[g];e++)t=r(s[e])[m]("|"),this.M.et[r(t[0])]={},this.M.et[r(t[0])].ht=r(t[1]),this.M.et[r(t[0])].rt=r(t[2])}catch(t){N()}},ft:function(){try{var t=(new Date)[M]();for(var i in this.M.et)"p"===this.M.et[i].rt?this.M.et[i].rt=0:"-1"!==this.M.et[i].rt&&t>this.M.et[i].rt&&delete this.M.et[i];this.nt()}catch(t){N()}},nt:function(){try{var t,i,e=[];for(var r in this.M.et){var n=[];n[v](r),n[v](this.M.et[r].ht),n[v](this.M.et[r].rt),t=n[p]("|"),e[v](t)}if(0===e.length)return!0;var c=new Date;c[U](c[M]()+157248e5),i=this.C+"=",this.et=h(e[p]("&")),i+=this.et,i+="; expires="+c[E](),i+="; path=/",s[f]=i}catch(t){N()}},H:function(){try{return this._t=e[o].href}catch(t){N()}},B:function(){try{return this.M.vt=s.referrer||""}catch(t){N()}},q:function(){try{return this.M.dt=e[a].systemLanguage||e[a].language,this.M.dt=this.M.dt.toLowerCase(),this.M.dt}catch(t){N()}},L:function(){try{return e[u][d]&&e[u][l]?this.M.lt=e[u][d]+"x"+e[u][l]:this.M.lt="0x0",this.M.lt}catch(t){N()}},Z:function(){try{return this.M.yt=this.gt("ntime")||"none"}catch(t){N()}},N:function(){try{return this.M.zt=this.gt("cnzz_eid")||"none"}catch(t){N()}},wt:function(){try{var t=I+"?",i=[];i[v]("web_id="+h(this.t)),this.h&&i[v]("show="+h(this.h)),this.u&&i[v]("online="+h(this.u)),this.o&&i[v]("l="+h(this.o)),this.i&&i[v]("t="+this.i),t+=i[p]("&"),this.Ct(t,"utf-8")}catch(t){N()}},V:function(){try{return!1===e[a].cookieEnabled?this.M.bt=!1:this.M.bt=!0}catch(t){N()}},ut:function(t,i,e,r,n,c){var a=h(t)+"="+h(i);e instanceof Date&&(a+="; expires="+e.toGMTString()),r&&(a+="; path="+r),n&&(a+="; domain="+n),c&&(a+="; secure"),s[f]=a},getACookie:function(t){try{t+="=";var i=s[f],e=i[y](t),h="";if(e>-1){var n=i[y](";",e);-1===n&&(n=i[g]),h=r(i.substring(e+t[g],n))}return h||""}catch(t){N()}},G:function(t){try{s[f]=t+"=; expires="+new Date(0)[E]()+"; path=/"}catch(t){N()}},F:function(){try{var t=s.title;e._cz_loaded[this.t]>1&&(t="__cnzz,pv,"+e._cz_loaded[this.t]+"__"+t),t.length>40&&(t=t.substr(0,40),t+="..."),this.M.kt=t}catch(t){N()}},I:function(){e._cz_loaded=e._cz_loaded||{},e._cz_loaded[this.t]?e._cz_loaded[this.t]++:e._cz_loaded[this.t]=1},Dt:function(t){try{return"http"!==t.substr(0,4)?"":new RegExp(i+"//.*?/","i").exec(t)}catch(t){N()}},R:function(){try{this.l;var t={},i=this.getACookie(this.l);if(i[g]>0)if(this.t>1e8){var s=i[m]("|");t.cnzz_eid=r(s[0]),t.ntime=r(s[1])}else{s=i[m]("&");for(var e=0,h=s[g];e<h;e++){var n=s[e][m]("=");t[r(n[0])]=r(n[1])}}this.A=t}catch(t){N()}},jt:function(){try{var t=this.l+"=",i=[],e=new Date;if(e[U](e[M]()+157248e5),this.t>1e8){if("none"!==this.M.zt)i[v](h(this.M.zt));else{var r=Math[D](2147483648*Math[j]())+"-"+this._+"-"+this.Dt(this.B());i[v](h(r))}i[v](this._),i[g]>0?(t+=h(i[p]("|")),t+="; expires="+e[E](),t+="; path=/"):t+="; expires="+new Date(0)[E]()}else"none"!==this.M.zt?i[v]("cnzz_eid="+h(this.M.zt)):(r=Math[D](2147483648*Math[j]())+"-"+this._+"-"+this.Dt(this.B()),i[v]("cnzz_eid="+h(r))),i[v]("ntime="+this._),i[g]>0?(t+=h(i[p]("&")),t+="; expires="+e[E](),t+="; path=/"):t+="; expires="+new Date(0)[E]();s[f]=t}catch(t){N()}},gt:function(t){try{return void 0!==this.A[t]?this.A[t]:null}catch(t){N()}},xt:function(t,i){try{this.A[h(t)]=h(i)}catch(t){N()}},Ct:function(t,i,e){try{if(i=i||"utf-8","1"===this.S||"function"==typeof e){var h=s[_]("script");h.type="text/javascript",h.async=!0,h.charset=i,h.onload=e,h.src=t;var r=s.getElementsByTagName("script")[0];r[z]&&r[z].insertBefore(h,r)}else s[w](n("%3Cscript src='"+t+"' charset='"+i+"' type='text/javascript'%3E%3C/script%3E"))}catch(t){N()}},createScriptIcon:function(t,i){try{var e=s[C]("cnzz_stat_icon_"+this.t);if(e){var h=s[_]("script");h.type="text/javascript",h.async=!0,h.charset=i,h.src=t,e.appendChild(h)}else"0"===this.S&&s[w](n("%3Cscript src='"+t+"' charset='"+i+"' type='text/javascript'%3E%3C/script%3E"))}catch(t){N()}},createIcon:function(t){try{for(var i=t[g],e="",h=0;h<i;h++)t[h]&&(e+=n(t[h]));var r=s[C]("cnzz_stat_icon_"+this.t);r?r.innerHTML=e:"0"===this.S&&s[w](e)}catch(t){N()}},it:function(){try{this.jt(),this.R(),this.N(),this.ft();var t=this.getACookie(this.k),s=[];s[v]("id="+h(this.t)),this.M.tt||""===this.M.tt?s[v]("r="+h(this.M.tt)):s[v]("r="+h(this.M.vt)),s[v]("lg="+h(this.M.dt)),s[v]("ntime="+h(this.M.yt)),s[v]("cnzz_eid="+h(this.M.zt)),s[v]("showp="+h(this.M.lt)),this.M.X?s[v]("p="+h(this.M.X)):"[object String]"==={}[b][k](this._t)&&s[v]("p="+h(this._t)),"[object String]"==={}[b][k](this.st)&&s[v]("ei="+h(this.st)),"[object String]"==={}[b][k](this.et)&&s[v]("cv="+this.et),"[object String]"==={}[b][k](this.ct)&&s[v]("pc="+h(this.ct)),"[object String]"==={}[b][k](this.ot)&&s[v]("ai="+this.ot),t&&s[v]("uuid="+h(t)),this.St&&s[v]("eid="+h(this.St)),s[v]("t="+h(this.M.kt)),s[v]("umuuid="+h(this.M.At)),s[v]("h=1");var e=s[p]("&");"[object String]"==={}[b][k](this.st)?this.callRequest([i+"//ei.cnzz.com/stat.htm?"+e]):this.ct||this.ot?this.callRequest([P+"/stat.htm?"+e]):(this.p&&this.callRequest([i+"//"+this.p+"/stat.htm?"+e]),this.v&&this.callRequest([i+"//"+this.v+"/stat.htm?"+e]))}catch(t){N()}},Mt:function(t){return!(c(t)[y]("%u")<0)},Ut:(t=function(){for(var t=1*new Date,i=0;t==1*new Date;)i++;return t.toString(16)+i.toString(16)},function(){var i=(e[u][l]*e[u][d]).toString(16);return t()+"-"+Math.random().toString(16).replace(".","")+"-"+function(t){function i(t,i){var s,e=0;for(s=0;s<i.length;s++)e|=n[s]<<8*s;return t^e}var s,h,r=e[a][V],n=[],c=0;for(s=0;s<r.length;s++)h=r.charCodeAt(s),n.unshift(255&h),n.length>=4&&(c=i(c,n),n=[]);return n.length>0&&(c=i(c,n)),c.toString(16)}()+"-"+i+"-"+t()}),T:function(){try{return this.M.At=this.getACookie(this.D)||function(t){var i=t.Ut(),s=new Date;s[U](s[M]()+157248e5);var e,h=(e=document.location.hostname.match(/[a-z0-9][a-z0-9\-]+\.[a-z\.]{2,6}$/i))?e[0]:"";return t.ut(t.D,i,s,"/",h),i}(this),this.M.At}catch(t){N()}},callRequest:function(t){try{for(var i=t[g],s=null,h=0;h<i;h++)if(t[h]){if(e[a]&&e[a].sendBeacon&&e[a].sendBeacon(t[h]))return;s="cnzz_image_"+Math[D](2147483648*Math[j]()),e[s]=new Image,e[s].Et=s,e[s][S]=e[s][A]=e[s][x]=function(){try{this[S]=this[A]=this[x]=null,e[this.Et]=null}catch(t){}},e[s].src=t[h]+"&rnd="+Math[D](2147483648*Math[j]())}}catch(t){N()}}};try{if("1"=="0"&&function(){try{return e[a]&&e[a][V]&&/(indexer|bot|scraper|Yahoo! Slurp|spider|crawl|archiver)/i.test(e[a][V])}catch(t){return!1}}())return!1;var Z=new T;e[Z.m].bobject=Z,!1!==e._cz_autoPageview?Z.it():Z.jt(),T.prototype.getACookie=T.prototype.getACookie,T.prototype.callRequest=T.prototype.callRequest,T.prototype.createScriptIcon=T.prototype.createScriptIcon,T.prototype.createIcon=T.prototype.createIcon,Z.wt()}catch(t){N()}}();