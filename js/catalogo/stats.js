google.maps.__gjsload__('stats', '\'use strict\';function m3(a,b,c){var d=[];Ka(a,function(a,c){d.push(a+b+c)});return d.join(c)}function n3(a,b,c,d){var e={};e.host=document.location&&document.location.host||window.location.host;e.v=a;e.r=Math.round(1/b);c&&(e.client=c);d&&(e.key=d);return e}function eca(){this.j=new HB;this.H=0}function o3(a,b){var c=new Image,d=a.H++;a.j.set(d,c);c.onload=c.onerror=function(){c.onload=c.onerror=wa;a.j.remove(d)};c.src=b}\nfunction fca(a){var b={};Ka(a,function(a,d){var e=encodeURIComponent(a),f=encodeURIComponent(d).replace(/%7C/g,"|");b[e]=f});return m3(b,":",",")}function gca(a,b,c,d){var e=S.I[23],f=S.I[22];this.N=a;this.T=b;this.S=null!=e?e:500;this.K=null!=f?f:2;this.M=c;this.P=d;this.H=new HB;this.j=0;this.L=Fa();p3(this)}function p3(a){window.setTimeout(function(){hca(a);p3(a)},Math.min(a.S*Math.pow(a.K,a.j),2147483647))}function q3(a,b,c){a.H.set(b,c)}\nfunction hca(a){var b=n3(a.T,a.M,a.P,void 0);b.t=a.j+"-"+(Fa()-a.L);a.H.forEach(function(a,d){var e=a();0<e&&(b[d]=Number(e.toFixed(2))+(Ok()?"":"-if"))});a.N.j({ev:"api_snap"},b);++a.j}function r3(a,b,c,d,e){this.P=a;this.N=b;this.K=c;this.H=d;this.L=e;this.j=new HB;this.M=Fa()}\nr3.prototype.qh=function(a,b){var c=va(b)?b:1;this.j.isEmpty()&&window.setTimeout(t(function(){var a=n3(this.N,this.K,this.H,this.L);a.t=Fa()-this.M;var b=this.j;IB(b);for(var c={},g=0;g<b.j.length;g++){var h=b.j[g];c[h]=b.X[h]}YA(a,c);this.j.clear();this.P.j({ev:"api_maprft"},a)},this),500);c=this.j.get(a,0)+c;this.j.set(a,c)};function s3(a,b,c,d){this.N=c;this.K={};this.P=a+"/csi";this.L=d||"";this.M=b+"/maps/gen_204";this.H=new eca}\ns3.prototype.Lq=function(a,b,c){ph&&!this.K.apiboot&&(this.K.apiboot=!0,a=ica(this,a.j,b,c||null),o3(this.H,a))};function ica(a,b,c,d){var e=a.P,e=e+"?v=2&s=mapsapi3&action=apiboot&rt=",f=[];G(b,function(a){f.push(a[0]+"."+a[1])});u(f)&&(e+=f.join(","));Ka(c,function(a,b){e+="&"+encodeURIComponent(a)+"="+encodeURIComponent(b)});a.L&&(d=XB(a.L,d||[]));d&&d.length&&(e+="&e="+Ij(d,encodeURIComponent).join(","));return e}\ns3.prototype.j=function(a,b){var c=b||{},d=$a().toString(36);c.src="apiv3";c.token=this.N;c.ts=d.substr(d.length-6);a.cad=fca(c);c=m3(a,"=","&");o3(this.H,this.M+"?target=api&"+c)};s3.prototype.yh=function(a){o3(this.H,a)};function t3(){this.I=new HB}t3.prototype.update=function(a,b,c){this.I.set(J(a),{Wr:b,wr:c})};function jca(a){var b=0,c=0;a.I.forEach(function(a){b+=a.Wr;c+=a.wr});return c?b/c:0}function u3(a,b,c,d,e){this.M=a;this.N=b;this.P=c;this.L=d;this.K=e;this.H={};this.j=[]}\nu3.prototype.qh=function(a){this.H[a]||(this.H[a]=!0,this.j.push(a),2>this.j.length&&Lj(this,this.T,500))};u3.prototype.T=function(){for(var a=n3(this.N,this.P,this.L,this.K),b=0,c;c=this.j[b];++b)a[c]="1";b=jk;a.hybrid=+((mk(b)||b.T)&&nk(b));this.j.length=0;this.M.j({ev:"api_mapft"},a)};function v3(a,b,c,d){this.L=a;H.bind(this.L,"set_at",this,this.K);H.bind(this.L,"insert_at",this,this.K);this.M=b;this.N=c;this.P=d;this.H=0;this.j={};this.K()}v3.prototype.K=function(){for(var a;a=this.L.removeAt(0);){var b=a.Tq;a=a.timestamp-this.N;++this.H;this.j[b]||(this.j[b]=0);++this.j[b];if(20<=this.H&&!(this.H%5)){var c={};c.s=b;c.sr=this.j[b];c.tr=this.H;c.te=a;c.hc=this.P?"1":"0";this.M({ev:"api_services"},c)}}};function w3(){this.j={}}w3.prototype.ya=function(a){a=J(a);var b=this.j;a in b||(b[a]=0);++b[a]};w3.prototype.remove=function(a){a=J(a);var b=this.j;a in b&&(--b[a],b[a]||delete b[a])};w3.prototype.count=function(a){return this.j[J(a)]||0};function kca(){this.j=[];this.H=[]};function x3(a,b,c){this.j=a;this.H=b;this.L=c}x3.prototype.contains=function(a){return!!this.H.count(a)};function lca(a,b){a.j.j.push(b);a.H.ya(b);var c=a.j;if(c.j.length+c.H.length>a.L){var d=a.j,c=d.H,d=d.j;if(!c.length)for(;d.length;)c.push(d.pop());(c=c.pop())&&a.H.remove(c)}};function y3(a,b){this.N=new x3(new kca,new w3,100);this.H=null;this.na=[];this.M=a;H.bind(a,"insert_at",this,this.Fe);H.bind(a,"set_at",this,this.Fe);H.bind(a,"remove_at",this,this.Fe);this.Fe();this.j=0;this.X=b;this.K=0}w(y3,K);m=y3.prototype;m.Fe=function(){G(this.na,H.removeListener);this.na.length=0;var a=this.na,b=t(this.vg,this);this.M.forEach(function(c){a.push(H.addListener(c.data,"insert",b))});b()};\nm.vg=function(){var a=this.get("bounds");if(this.get("projection")&&a&&this.H){var b={};this.M.forEach(t(function(c){c.data.forEach(t(function(c){var d=c.rawData;if(0==(""+d.layer).indexOf(this.H.substr(0,5))&&d.features){c=d.id.length;for(var e=JJ(d.id),d=d.features,k=0,n;n=d[k];k++){var p=n.id,q;a:{q=n;if(!q.latLngCached){var r=q.a;if(!r){q=null;break a}var v=new N(r[0],r[1]),r=e,v=[v.x,v.y],x=(1<<c)/8388608;v[0]/=x;v[1]/=x;v[0]+=r.$;v[1]+=r.Z;v[0]/=8388608;v[1]/=8388608;r=new N(v[0],v[1]);v=this.get("projection");\nq.latLngCached=v&&v.fromPointToLatLng(r)}q=q.latLngCached}q&&a.contains(q)&&(b[p]=n)}}},this))},this));var c=this.N,d;for(d in b)c.contains(d)||(++this.j,lca(c,d));!this.K&&this.j&&(this.K=Lj(this,this.bp,0))}else Lj(this,this.vg,1E3)};m.bp=function(){this.K=0;this.j&&(Wl(this.X,"smni",this.j),this.j=0)};m.mapType_changed=function(){var a=this.get("mapType");this.H=a&&a.Hf};m.bounds_changed=function(){this.vg()};function z3(){this.j=ug(S);var a=lg(S),b;xj()?(b=a.I[11],b=null!=b?b:""):b=Uk;this.oc=new s3(U[43]?ng(a):mg(a),b,Vh,this.j);new v3(zh,t(this.oc.j,this.oc),wh,!!this.j);a=pg(Eg());this.P=a.split(".")[1]||a;Uh&&(this.H=new gca(this.oc,this.P,this.T,this.j));this.M={};this.K={};this.L={};this.N={};this.T=tg()}m=z3.prototype;m.Pn=function(a,b){var c=new y3(b,a);c.bindTo("mapType",a.__gm);c.bindTo("zoom",a);c.bindTo("bounds",a);c.bindTo("projection",a)};\nm.xo=function(a){a=J(a);this.M[a]||(this.M[a]=new u3(this.oc,this.P,this.T,this.j));return this.M[a]};m.vo=function(a){a=J(a);this.K[a]||(this.K[a]=new r3(this.oc,this.P,1,this.j));return this.K[a]};m.Te=function(a){if(this.H){this.L[a]||(this.L[a]=new sC,q3(this.H,a,function(){return b.Qc()}));var b=this.L[a];return b}};m.qo=function(a){if(this.H){this.N[a]||(this.N[a]=new t3,q3(this.H,a,function(){return jca(b)}));var b=this.N[a];return b}};var mca=new z3;fe.stats=function(a){eval(a)};uc("stats",mca);\n')