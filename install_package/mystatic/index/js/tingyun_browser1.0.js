window._ty_rum&&window._ty_rum.server||function(r){function t(){}function e(){var r=Y(rr);return r||(r=K(),Z(rr,r)),r}function n(r){if("string"!=typeof r)return null;var t=I.cookie;if(!t)return null;var e=null,n=t.split(";");return F.each(n,function(t){var n=t.split("=");if(F.trim(n[0])===F.trim(r))return e=n[1],!0}),e}function a(r,t,e){var n=r+"="+t;if(e){var a=new Date;a.setTime(a.getTime()+1e3*e),n+=";expires="+a.toGMTString()}I.cookie=n}function o(r){switch(typeof r){case"object":if(!r)return"null";if(r instanceof Array){for(var t="[",e=0;e<r.length;e++)t+=(e>0?",":"")+o(r[e]);return t+"]"}if(r instanceof Date)return r.getTime().toString();var t="{",e=0;for(var n in r)if("function"!=typeof r[n]){var a=o(r[n]);t+=(e>0?",":"")+o(n)+":"+a,e++}return t+"}";case"string":return'"'+r.replace(/([\"\\])/g,"\\$1").replace(/\n/g,"\\n")+'"';case"number":return r.toString();case"boolean":return r?"true":"false";case"function":return o(r.toString());case"undefined":default:return'"undefined"'}}function i(r){for(var t in r)return!1;return!0}function s(r){return A?A(r):r}function c(){return Date.now?Date.now():(new Date).valueOf()}function u(r,t,e){function n(){var r=F.args.apply(this,arguments);return t(o,r,e)}var a,o=r[r.length-1];if("function"==typeof o){switch(o.length){case 0:a=function(){return n.apply(this,arguments)};break;case 1:a=function(r){return n.apply(this,arguments)};break;case 2:a=function(r,t){return n.apply(this,arguments)};break;case 3:a=function(r,t,e){return n.apply(this,arguments)};break;case 4:a=function(r,t,e,a){return n.apply(this,arguments)};break;case 5:a=function(r,t,e,a,o){return n.apply(this,arguments)};break;default:for(var i=[],s=0,c=o.length;s<c;s++)i.push("_"+s);a=eval("(function(){return function("+i.join(",")+"){var args = [].slice.call(arguments, 0);return t(o, args, e);};})();")}r[r.length-1]=a}return r}function f(r,t){return r&&t&&(r.moduleName=t),r}function l(r,t,e){return function(){try{N=t,e&&p(t),r.apply(this,arguments),e&&h()}catch(n){throw e&&h(),f(n,t)}}}function p(t){F.each(["setTimeout","setInterval"],function(e){F.wrap(!0,r,e,function(r){return function(){var e,n=F.args.apply(this,arguments),a=n[0];return"function"==typeof a&&(e=l(a,t,!0)),e&&(n[0]=e),r.apply?r.apply(this,n):Function.prototype.apply.apply(r,[r,n])}})})}function h(){F.each(["setTimeout","setInterval"],function(t){F.unwrap(r,t)})}function d(r){z&&F.wrap(!1,z.prototype,"addEventListener",function(t){return function(){var e,n=F.args.apply(this,arguments),a=n[1];return"function"==typeof a&&(e=l(a,r,!0)),e&&(n[1]=e),t.apply(this,n)}}),p(r)}function m(){z&&F.unwrap(z.prototype,"addEventListener"),h()}function g(r){return function(r,t){}}function v(){var r=F.parseJSON(Y(ar))||{};return delete r[or],r}function y(){if(this.errors.length){var r=function(r){var t=[],e={};F.each(r,function(r){var t=O(r[1],r[2],r[3],r[6]);e[t]?e[t][4]+=1:e[t]=[r[1],r[2],r[3],"#"==r[4]?I.URL:r[4],1,r[5],r[6],r[7]]});for(var n in e)t.push(e[n]);return t}(this.errors),t=this;F.POST(F.mkurl(J.server.beacon,"err",{fu:M?M:M++,os:parseInt((c()-(U||J.st))/1e3)}),F.stringify({datas:r}),{},function(r,e){r||(t.errors=[])})}}function _(){return r.nbperf&&r.nbperf.data}function b(){ir.initend()}function w(){"complete"===I.readyState&&ir.initend()}function S(r,t,e){var n=I.createElement(r);try{for(var a in t)n[a]=t[a]}catch(o){var i="<"+r;for(var a in t)i+=" "+a+'="'+t[a]+'"';i+=">",e||(i+="</"+r+">"),n=I.createElement(i)}return n}function k(r){function t(){ir.send()}return!!J.load_time||(ir.initend(),J.load_time=c(),void(9===r?t():setTimeout(t,0)))}function T(){cr||k(9),sr||F.bind(y,ir)(),cr=1}function E(){ir.touch||(ir.touch=c())}function x(r){if(r[6]){var t=r[4],e=r[5];if(e&&"string"==typeof e&&t){e=e.split(/\n/);var n=B.exec(e[0]);n||(n=B.exec(e[1])),n&&n[1]!=t&&(r[4]=n[1]||t,r[2]=n[2]||r[2],r[3]=n[3]||r[3])}}}function O(r,t,e,n){return String(r)+String(t)+String(e)+String(n)}function R(t){var e=arguments,n="unknown",a=[c()];if(0!=e.length){if("string"==typeof t){var o=e.length<4?e.length:4;a[1]=e[0],o>2&&(a[2]=e[2],a[3]=0,a[4]=e[1]),o>3&&e[3]&&(a[3]=e[3])}else if(t instanceof Event||r.ErrorEvent&&t instanceof ErrorEvent){if(a[1]=t.message||(t.error&&t.error.constructor.name)+(t.error&&t.error.message)||"",a[2]=t.lineno?t.lineno:0,a[3]=t.colno?t.colno:0,a[4]=t.filename||t.error&&t.error.fileName||t.target&&t.target.baseURI||"",!a[4]&&W)return;a[4]==I.URL&&(a[4]="#"),t.error?(a[5]=t.error.stack,a[6]=t.error.moduleName):(a[5]=null,a[6]=null);var i=O(a[1],a[2],a[3],a[6]);if(a[7]=ur[i]?0:1,ur[i]=!0,a[1]===n&&a[4]===n)return;x(a)}ir.errors.push(a)}}function q(r){return function(){var t=arguments;if(!this._ty_wrap){var e=F.args.apply(this,t);this._ty_rum={method:e[0],url:e[1],start:c()}}try{return r.apply(this,t)}catch(n){return Function.prototype.apply.call(r,this,t)}}}function L(t){return"string"==typeof t?t.length:r.ArrayBuffer&&t instanceof ArrayBuffer?t.byteLength:r.Blob&&t instanceof Blob?t.size:t&&t.length?t.length:0}function C(t){return function(){function e(r){var t,e,n=u._ty_rum;if(n){if(4!==n.readyState&&(n.end=c()),n.s=u.status,""==u.responseType||"text"==u.responseType)n.res=L(u.responseText);else if(u.response)n.res=L(u.response);else try{n.res=L(u.responseText)}catch(o){n.res=0}if(n.readyState=u.readyState,n.cb_time=l,t=[n.method+" "+n.url,n.s>0?n.end-n.start:0,l,n.s,n.s>0?0:r,n.res,n.req],n.r&&(e=a(u),e&&(e=e.xData)&&(t.push(e.id),t.push(e.action),t.push(e.time&&e.time.duration),t.push(e.time&&e.time.qu))),J.aa.push(t),J.server.custom_urls&&J.server.custom_urls.length&&!ir.ct){if(!J.pattern){J.pattern=[];for(var i=0;i<J.server.custom_urls.length;i++)J.pattern.push(new RegExp(J.server.custom_urls[i]))}for(var i=0;i<J.pattern.length;i++)if(n.url.match(J.pattern[i])){ir.ct=n.end+l;break}}ir.sa(),u._ty_rum=null}}function n(){4==u.readyState&&e(0)}function a(t){var e;if(t.getResponseHeader){var n=F.parseJSON(t.getResponseHeader("X-Tingyun-Tx-Data"));n&&n.r&&t._ty_rum&&n.r+""==t._ty_rum.r+""&&(e={name:t._ty_rum.url,xData:n},nr&&r._ty_rum.c_ra.push(e))}return e}function o(r){return function(){var t,e;4==u.readyState&&u._ty_rum&&(u._ty_rum.end=t=c(),u._ty_rum.readyState=4);try{N&&p(N),e=r.apply(this,arguments),N&&h()}catch(a){throw a=f(a,N),N&&h(),N=null,a}return 4==u.readyState&&(l=c()-t),n(),e}}function i(r){return function(){var t=u._ty_rum;return!t||("progress"==r||("abort"==r?e(905):"loadstart"==r?t.start=c():"error"==r?e(990):"timeout"==r&&e(903),!0))}}function s(r,t){t instanceof Array||(t=[t]);for(var e=0;e<t.length;e++){var n=t[e];F.sh(r,n,i(n),!1)}}if(!this._ty_wrap){this._ty_rum.start=c(),this._ty_rum.req=arguments[0]?L(arguments[0]):0;var u=this,l=0,d=F.wrap(!1,this,"onreadystatechange",o);d||F.sh(this,"readystatechange",n,!1),s(this,["error","progress","abort","load","loadstart","loadend","timeout"]),d||setTimeout(function(){F.wrap(!1,u,"onreadystatechange",o)},0)}var m=function(){function r(r){var t={},e=/^(?:([A-Za-z]+):)?(\/{0,3})([0-9.\-A-Za-z]+)(?::(\d+))?/.exec(r);return e&&(t.protocol=e[1]?e[1]+":":"http:",t.hostname=e[3],t.port=e[4]||""),t}return function(t){var e=location;if(t=F.trim(t)){if(t=t.toLowerCase(),t.startsWith("//")&&(t=e.protocol+t),!t.startsWith("http"))return!0;var n=r(t),a=n.protocol===e.protocol&&n.hostname===e.hostname;return a&&(a=n.port===e.port||!e.port&&("http:"===e.protocol&&"80"===n.port||"https:"===e.protocol&&"443"===n.port)),a}return!1}}(),g=arguments;try{var v=J.server;v&&v.id&&this._ty_rum&&m(this._ty_rum.url)&&(this._ty_rum.r=(new Date).getTime()%1e8,this.setRequestHeader&&this.setRequestHeader("X-Tingyun-Id",v.id+";r="+this._ty_rum.r))}catch(y){}try{return t.apply(this,g)}catch(_){return Function.prototype.apply.call(t,this,g)}}}var N,P=r.XMLHttpRequest,I=document,j=Object.defineProperty,D=r.define,z=r.EventTarget,M=0,B=new RegExp("([a-z]+:/{2,3}.*):(\\d+):(\\d+)"),A=r.encodeURIComponent,U=null,$=new RegExp(/(.*?)\.?([^\.]*?)\.?(com|net|org|biz|ws|in|me|co\.uk|co|org\.uk|ltd\.uk|plc\.uk|me\.uk|edu|mil|br\.com|cn\.com|eu\.com|hu\.com|no\.com|qc\.com|sa\.com|se\.com|se\.net|us\.com|uy\.com|ac|co\.ac|gv\.ac|or\.ac|ac\.ac|af|am|as|at|ac\.at|co\.at|gv\.at|or\.at|asn\.au|com\.au|edu\.au|org\.au|net\.au|id\.au|be|ac\.be|adm\.br|adv\.br|am\.br|arq\.br|art\.br|bio\.br|cng\.br|cnt\.br|com\.br|ecn\.br|eng\.br|esp\.br|etc\.br|eti\.br|fm\.br|fot\.br|fst\.br|g12\.br|gov\.br|ind\.br|inf\.br|jor\.br|lel\.br|med\.br|mil\.br|net\.br|nom\.br|ntr\.br|odo\.br|org\.br|ppg\.br|pro\.br|psc\.br|psi\.br|rec\.br|slg\.br|tmp\.br|tur\.br|tv\.br|vet\.br|zlg\.br|br|ab\.ca|bc\.ca|mb\.ca|nb\.ca|nf\.ca|ns\.ca|nt\.ca|on\.ca|pe\.ca|qc\.ca|sk\.ca|yk\.ca|ca|cc|ac\.cn|com\.cn|edu\.cn|gov\.cn|org\.cn|bj\.cn|sh\.cn|tj\.cn|cq\.cn|he\.cn|nm\.cn|ln\.cn|jl\.cn|hl\.cn|js\.cn|zj\.cn|ah\.cn|gd\.cn|gx\.cn|hi\.cn|sc\.cn|gz\.cn|yn\.cn|xz\.cn|sn\.cn|gs\.cn|qh\.cn|nx\.cn|xj\.cn|tw\.cn|hk\.cn|mo\.cn|cn|cx|cz|de|dk|fo|com\.ec|tm\.fr|com\.fr|asso\.fr|presse\.fr|fr|gf|gs|co\.il|net\.il|ac\.il|k12\.il|gov\.il|muni\.il|ac\.in|co\.in|org\.in|ernet\.in|gov\.in|net\.in|res\.in|is|it|ac\.jp|co\.jp|go\.jp|or\.jp|ne\.jp|ac\.kr|co\.kr|go\.kr|ne\.kr|nm\.kr|or\.kr|li|lt|lu|asso\.mc|tm\.mc|com\.mm|org\.mm|net\.mm|edu\.mm|gov\.mm|ms|nl|no|nu|pl|ro|org\.ro|store\.ro|tm\.ro|firm\.ro|www\.ro|arts\.ro|rec\.ro|info\.ro|nom\.ro|nt\.ro|se|si|com\.sg|org\.sg|net\.sg|gov\.sg|sk|st|tf|ac\.th|co\.th|go\.th|mi\.th|net\.th|or\.th|tm|to|com\.tr|edu\.tr|gov\.tr|k12\.tr|net\.tr|org\.tr|com\.tw|org\.tw|net\.tw|ac\.uk|uk\.com|uk\.net|gb\.com|gb\.net|vg|sh|kz|ch|info|ua|gov|name|pro|ie|hk|com\.hk|org\.hk|net\.hk|edu\.hk|us|tk|cd|by|ad|lv|eu\.lv|bz|es|jp|cl|ag|mobi|eu|co\.nz|org\.nz|net\.nz|maori\.nz|iwi\.nz|io|la|md|sc|sg|vc|tw|travel|my|se|tv|pt|com\.pt|edu\.pt|asia|fi|com\.ve|net\.ve|fi|org\.ve|web\.ve|info\.ve|co\.ve|tel|im|gr|ru|net\.ru|org\.ru|hr|com\.hr|ly|xyz)$/),F={wrap:function(r,t,e,n,a){try{var o=t[e]}catch(i){if(!r)return!1}if(!o&&!r)return!1;if(o&&o._ty_wrap)return!1;try{t[e]=n(o,a)}catch(i){return!1}return t[e]._ty_wrap=[o],!0},unwrap:function(r,t){try{var e=r[t]._ty_wrap;e&&(r[t]=e[0])}catch(n){}},each:function(r,t){if(r){var e;for(e=0;e<r.length&&(!r[e]||!t(r[e],e,r));e+=1);}},mkurl:function(t,n){var a=arguments,o=/^https/i.test(I.URL)?"https":"http";if(o=o+"://"+t+"/"+n+"?av=1.2.1.0512&v=1.3.2&key="+s(J.server.key)+"&ref="+s(I.URL)+"&rand="+c()+"&pvid="+V+"&did="+s(e()),"pf"!==n&&J&&(J.agent=J.agent||r._ty_rum.agent,J.agent&&J.agent.n&&(o+="&n="+s(J.agent.n))),a.length>2){var i=a[2];for(var u in i)o+="&"+u+"="+i[u]}return H.host&&(o+="&cshst="+s(H.host)),H.url&&(o+="&csurl="+s(H.url)),o},GET:function(r,t){function e(){t&&t.apply(this,arguments),n.parentNode&&n.parentNode.removeChild(n)}if(navigator&&navigator.sendBeacon&&Q.test(r))return navigator.sendBeacon(r,null);var n=I.createElement("img");return n.setAttribute("src",r),n.setAttribute("style","display:none"),this.sh(n,"readystatechange",function(){"loaded"!=n.readyState&&4!=n.readyState||e("loaded")},!1),this.sh(n,"load",function(){return e("load"),!0},!1),this.sh(n,"error",function(){return e("error"),!0},!1),I.body.appendChild(n)},fpt:function(r,t,e){var n=S("div",{style:"display:none"},!1),a=S("iframe",{name:"_ty_rum_frm",width:0,height:0,style:"display:none"},!1),o=S("form",{style:"display:none",action:r,enctype:"application/x-www-form-urlencoded",method:"post",target:"_ty_rum_frm"},!1),i=S("input",{name:"data",type:"hidden"},!0);return i.value=t,o.appendChild(i),n.appendChild(a),n.appendChild(o),I.body.appendChild(n),o.submit(),a.onreadystatechange=function(){"complete"!==a.readyState&&4!==a.readyState||(e(null,a.innerHTML),I.body.removeChild(n))},!0},POST:function(t,e,n,a){if(this.ie)return this.fpt(t,e,a);if(navigator&&navigator.sendBeacon&&Q.test(t)){var o=navigator.sendBeacon(t,e);return a(!o),o}var i;if(r.XDomainRequest)return i=new XDomainRequest,i.open("POST",t),i.onload=function(){a(null,i.responseText)},this.sh(i,"load",function(){a(null,i.responseText)},!1),this.sh(i,"error",function(){a("POST("+t+")error")},!1),this.wrap(!0,i,"onerror",function(r){return function(){return a&&a("post error",i.responseText),!0}}),i.send(e),!0;if(!P)return!1;i=new P,i.overrideMimeType&&i.overrideMimeType("text/html");try{i._ty_wrap=1}catch(s){}var c=0;i.onreadystatechange=function(){4==i.readyState&&200==i.status&&(0==c&&a(null,i.responseText),c++)},i.onerror&&this.wrap(!0,i,"onerror",function(r){return function(){return a("post error",i.responseText),"function"!=typeof r||r.apply(this,arguments)}});try{i.open("POST",t,!0)}catch(s){return this.fpt(t,e,a)}for(var u in n)i.setRequestHeader(u,n[u]);return i.send(e),!0},sh:function(r,t,e,n){return r.addEventListener?r.addEventListener(t,e,n):!!r.attachEvent&&r.attachEvent("on"+t,e)},args:function(){for(var r=[],t=0;t<arguments.length;t++)r.push(arguments[t]);return r},stringify:o,parseJSON:function(t){if(t&&"string"==typeof t){var e=r.JSON?r.JSON.parse:function(r){return new Function("return "+r)()};return e(t)}return null},trim:G?function(r){return null==r?"":G.call(r)}:function(r){return null==r?"":r.toString().replace(/^\s+/,"").replace(/\s+$/,"")},extend:function(r,t){if(r&&t)for(var e in t)t.hasOwnProperty(e)&&(r[e]=t[e]);return r},bind:function(r,t){return function(){return r.apply(t,arguments)}}},H={},J=r._ty_rum=r.TINGYUN=F.extend({st:c(),ra:[],c_ra:[],aa:[],snd_du:function(){return this.server.adu?1e3*this.server.adu:1e4},cc:function(){return this.server.ac?this.server.ac:10},config:function(r,t){var e;if("object"==typeof r)e=r;else{if("string"!=typeof r||void 0===t)throw new Error("illegal arguments");e={},e[r]=t}for(var n in e)H[n]=e[n];return this},ty_set_userprofile:function(r,e){if(!r||!r.id)throw new Error("User or user's id is empty.");var n=F.mkurl(J.server.beacon,"userprofile");F.POST(n,F.stringify({user:r,properties:e||{}}),{},t)},ty_track_event:function(r,e,n){if("string"!=typeof r)throw new Error("Event Id is invalid.");var a=F.mkurl(J.server.beacon,"event");F.POST(a,F.stringify({event_id:r,tag:e||"",properties:n||{},uf:v()}),{},t)}},r._ty_rum||{});var ty_rum=J;ty_rum.server = {id:'p35OnrDoP8k',beacon:'myd.crc.com.cn/ty8',beacon_err:'myd.crc.com.cn/ty8',key:'P54-bRBPcGU',trace_threshold:7000,custom_urls:[],sr:1.0};if(J.server&&!(J.server.sr&&Math.random()>=J.server.sr)){var X="ignore_err",W=!(X in J.server)||J.server[X],G=String.prototype.trim;String.prototype.startsWith||(String.prototype.startsWith=function(r,t){return t=t||0,this.indexOf(r,t)===t});var Y,Z,Q=/^http/i,V=function(){function r(){return(65536*(1+Math.random())|0).toString(16).substring(1)}return r()+"-"+r()+r()}(),K=function(){function r(r){return r<0?NaN:r<=30?0|Math.random()*(1<<r):r<=53?(0|Math.random()*(1<<30))+(0|Math.random()*(1<<r-30))*(1<<30):NaN}function t(r,t){for(var e=r.toString(16),n=t-e.length,a="0";n>0;n>>>=1,a+=a)1&n&&(e=a+e);return e}return function(){return t(r(32),8)+"-"+t(r(16),4)+"-"+t(16384|r(12),4)+"-"+t(32768|r(14),4)+"-"+t(r(48),12)}}(),rr="TY_DISTINCT_ID",tr=function(){try{return localStorage.setItem(V,V),localStorage.removeItem(V),!0}catch(r){return!1}}();tr?(Y=F.bind(localStorage.getItem,localStorage),Z=F.bind(localStorage.setItem,localStorage)):(Y=n,Z=a);try{j&&j(r,"define",{get:function(){return D},set:function(r){"function"==typeof r&&(r.amd||r.cmd)?(D=function(){var t=F.args.apply(this,arguments);if(3!==t.length)return r.apply(this,t);var e="string"==typeof t[0]?t[0]:"anonymous";return r.apply(this,u(t,function(r,t,e){var n;try{N=e,d(e),n=r.apply(this,t),m()}catch(a){throw m(),f(a,e)}return n},e))},F.extend(D,r)):D=r},configurable:!0})}catch(er){}var nr=r.performance?r.performance:r.Performance;nr&&(F.sh(nr,"resourcetimingbufferfull",function(){var r=nr.getEntriesByType("resource");r&&(J.ra=J.ra.concat(r),nr.clearResourceTimings())},!1),F.sh(nr,"webkitresourcetimingbufferfull",function(){var r=nr.getEntriesByType("resource");r&&(J.ra=J.ra.concat(r),nr.webkitClearResourceTimings())},!1));var ar="_ty_uf_data",or="_ty_first_day";!function(){function t(r){var t=r[or];t?(t=parseInt(t),new Date(t).toDateString()===(new Date).toDateString()?r[o]=!0:r[o]=!1,r[i]=!1):(r[or]=c(),r[o]=!0,r[i]=!0)}function e(r){function t(r,t){if(r=r.replace(/^http(s)?:\/\//,""),r.startsWith(t))return!0;var e=$.exec(r),n=$.exec(t);return e&&n?e[2]==n[2]:r.startsWith(t)}var e=I.referrer;e&&!t(e,location.host)&&(r[s]=e)}function n(r){var t={};if(r=r||location.href,!r)return t;var e=r.indexOf("?");return e>=0&&(r=r.substring(e+1)),r?(F.each(r.split("&"),function(r){var e=r.split("="),n=a(e[0]),o=a(e[1]);n&&o&&(t[n]=o)}),t):t}function a(r){try{return decodeURIComponent(r)}catch(t){}return null}var o="is_first_day",i="is_first_time",s="latest_referrer",u=2592e3,f=F.parseJSON(Y(ar))||{};t(f),e(f);var l=n(location.search),p=["utm_source","utm_medium","utm_term","utm_content","utm_campaign"];F.each(p,function(r){l[r]&&(f["latest_"+r]=l[r])}),f.pageref=I.referrer||"",f.first_browser_language=navigator.language||navigator.browserLanguage,f[s]=f[s]||"",f.screen_height=r.screen&&r.screen.height,f.screen_width=r.screen&&r.screen.width,Z(ar,F.stringify(f),u)}();for(var ir=J.metric={ready:function(){return J.load_time},initend:function(){function r(){ir.sa()}J.end_time||(J.end_time=c(),this._h=setInterval(r,2e3))},send:function(){function t(){function t(r){return n[r]>0?n[r]-a:0}var e={};if(!nr&&(nr=_(),"string"==typeof nr&&(nr=F.parseJSON(nr),i(nr))))return e;if(nr&&nr.timing){var n=nr.timing;a=n.navigationStart;var o=t("domainLookupStart"),c=t("domainLookupEnd"),u=t("redirectStart"),f=t("redirectEnd"),l=t("connectStart"),p=t("connectEnd");e={f:t("fetchStart"),qs:t("requestStart"),rs:t("responseStart"),re:t("responseEnd"),os:t("domContentLoadedEventStart"),oe:t("domContentLoadedEventEnd"),oi:t("domInteractive"),oc:t("domComplete"),ls:t("loadEventStart"),le:t("loadEventEnd"),tus:t("unloadEventStart"),tue:t("unloadEventEnd")},p-l>0&&(e.cs=l,e.ce=p),c-o>0&&(e.ds=o,e.de=c),(f-u>0||f>0)&&(e.es=u,e.ee=f),0==e.le&&(e.ue=J.load_time-(_()?J.st:a));var h;if(n.msFirstPaint)h=n.msFirstPaint;else if(r.chrome&&chrome.loadTimes){var d=chrome.loadTimes();d&&d.firstPaintTime&&(h=1e3*d.firstPaintTime)}else J.firstPaint&&(h=J.firstPaint);h&&(e.fp=Math.round(h-a)),n.secureConnectionStart&&(e.sl=t("secureConnectionStart"))}else e={t:a,os:J.end_time-a,ls:J.load_time-a,le:J.load_time-a};e.je=ir.errors.length,ir.ct&&(e.ct=ir.ct-a),ir.touch&&(e.fi=ir.touch-a);var m=J.agent||r._ty_rum&&r._ty_rum.agent;return m&&(e.id=s(m.id),e.a=m.a,e.q=m.q,e.tid=s(m.tid),e.n=s(m.n)),e.sh=r.screen&&r.screen.height,e.sw=r.screen&&r.screen.width,e}function e(t){var e=r._ty_rum.c_ra;if(t)for(var n=e.length-1;n>=0;n--)if(t.indexOf(e[n].name)>-1)return e[n].xData;return null}function n(r){function t(r){return f[r]>0?f[r]:0}var n={tr:!1,tt:s(I.title),charset:I.characterSet,uf:v()};if(r<J.server.trace_threshold)return n;n.tr=!0;var o=nr;if(o||(o=_(),"string"==typeof o&&(o=F.parseJSON(o))),o){var i=J.ra,c=null;o.getEntriesByType?c=o.getEntriesByType("resource"):o.getEntries&&(c=o.getEntries),c&&(i=i.concat(c),o.webkitClearResourceTimings&&o.webkitClearResourceTimings(),o.clearResourceTimings&&o.clearResourceTimings()),n.res=[];for(var u=0;u<i.length;u++){var f=i[u],l={o:t("startTime"),rt:f.initiatorType,n:f.name,f:t("fetchStart"),ds:t("domainLookupStart"),de:t("domainLookupEnd"),cs:t("connectStart"),ce:t("connectEnd"),sl:t("secureConnectionStart"),qs:t("requestStart"),rs:t("responseStart"),re:t("responseEnd")};_()&&(l.ec=f.errorCode||0);var p=e(f.name);p&&(l.aid=p.id,l.atd=p.trId,l.an=p.action,l.aq=p.time&&p.time.qu,l.as=p.time&&p.time.duration),n.res.push(l)}if(ir.errors.length){n.err=[];for(var u=0,h=ir.errors,d=h.length;u<d;u++){var m=h[u][0]-(_()?J.st:a);n.err.push({o:Math.round(m),e:h[u][1],l:h[u][2],c:h[u][3],r:h[u][4],ec:d,s:h[u][5],m:h[u][6],ep:h[u][7]})}}}return n}if(this.sended)return!1;if(!this.ready())return!1;var a=J.st,o={},u={};try{if(u=t(),!u||i(u))throw new Error("err:empty pf");o=n(u.ls>0?u.ls:J.load_time-a),o=o?F.stringify(o):"";var f=F.mkurl(J.server.beacon,"pf",u);U=c(),0!=o.length&&F.POST(f,o,{},g("POST"))||F.GET(f),this.sended=!0;var l=F.bind(y,this);l(),setInterval(l,1e4),this.sa(1)}catch(p){sr=!0}return!0},sa:function(r){(this.ready()||r)&&(r||(r=!this._last_send||c()-this._last_send>J.snd_du()||J.aa.length>=J.cc()),J.aa.length>0&&r&&(this._last_send=c(),F.POST(F.mkurl(J.server.beacon,"xhr"),F.stringify({xhr:J.aa}),{},g("POST")),J.aa=[]))},errors:[]},sr=!1,cr=null,ur={},fr=[["load",k],["beforeunload",T],["pagehide",T],["unload",T]],lr=0;lr<fr.length;lr++)F.sh(r,fr[lr][0],fr[lr][1],!1);r.addEventListener?F.sh(r,"error",R,!1):r.onerror=function(r,t,e,n,a){if(t||!W){var o=[c(),r,e,n,t==I.URL?"#":t],i=O(r,e,n,a&&a.moduleName);o=o.concat([a&&a.stack,a&&a.moduleName,ur[i]?0:1]),ur[i]=!0,x(o),ir.errors.push(o)}};for(var pr=[["scroll",E],["keypress",E],["click",E],["DOMContentLoaded",b],["readystatechange",w]],lr=0;lr<pr.length;lr++)F.sh(I,pr[lr][0],pr[lr][1],!1);if(F.wrap(!1,r,"requestAnimationFrame",function(t){return function(){return J.firstPaint=c(),r.requestAnimationFrame=t,t.apply(this,arguments)}}),P)if(P.prototype)F.wrap(!1,P.prototype,"open",q),F.wrap(!1,P.prototype,"send",C);else{F.ie=7;var hr=P;r.XMLHttpRequest=function(){var r=new hr;return F.wrap(!1,r,"open",q),F.wrap(!1,r,"send",C),r}}else r.ActiveXObject&&(F.ie=6)}}(window);