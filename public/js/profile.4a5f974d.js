(function(e){function t(t){for(var n,s,o=t[0],c=t[1],u=t[2],p=0,f=[];p<o.length;p++)s=o[p],Object.prototype.hasOwnProperty.call(a,s)&&a[s]&&f.push(a[s][0]),a[s]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);l&&l(t);while(f.length)f.shift()();return i.push.apply(i,u||[]),r()}function r(){for(var e,t=0;t<i.length;t++){for(var r=i[t],n=!0,o=1;o<r.length;o++){var c=r[o];0!==a[c]&&(n=!1)}n&&(i.splice(t--,1),e=s(s.s=r[0]))}return e}var n={},a={profile:0},i=[];function s(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,s),r.l=!0,r.exports}s.m=e,s.c=n,s.d=function(e,t,r){s.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},s.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,t){if(1&t&&(e=s(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(s.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)s.d(r,n,function(t){return e[t]}.bind(null,n));return r},s.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return s.d(t,"a",t),t},s.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},s.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],c=o.push.bind(o);o.push=t,o=o.slice();for(var u=0;u<o.length;u++)t(o[u]);var l=c;i.push([4,"chunk-vendors"]),r()})({"10fd":function(e,t,r){"use strict";r.r(t);r("e260"),r("e6cf"),r("cca6"),r("a79d");var n=r("2b0e"),a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-app",[r("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[r("v-app-bar-nav-icon",[r("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),r("v-spacer"),r("div",{staticClass:"user_edit_icon"},[r("v-btn",{attrs:{icon:""}},[r("icon",{attrs:{name:"user_edit"}})],1)],1)],1),r("v-main",[r("br"),r("br"),r("br"),r("v-container",[r("div",{staticClass:"content"},[r("div",{staticClass:"w-full p-10"},[r("div",{staticClass:"avatar_container"},[r("v-avatar",{staticClass:"elevation-8",attrs:{size:"112"}},[r("img",{attrs:{src:e.userData.avatar,alt:""}})])],1),r("div",{staticClass:"user_info"},[r("p",{staticClass:"user_info_header"},[e._v(e._s(e.userData.userName))]),r("p",{staticClass:"user_info_subheader"},[e._v("@"+e._s(e.userData.userName))])])]),r("v-container",[r("div",{staticClass:"photo_grid",style:{"grid-template-columns":e.itemsPerRow}},e._l(e.discoveries.length,(function(t){return r("div",{key:t,staticClass:"photo_container"},[r("img",{attrs:{src:e.discoveries[t-1].photoPath}})])})),0)])],1)])],1)],1)},i=[],s=(r("b0c0"),function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"icon",class:["icon--"+e.name,"icon--"+e.size,{"has-align-fix":e.fixAlign}]},[n("img",{staticClass:"icon__svg",attrs:{src:r("31e8")("./"+e.name+".svg"),alt:""+e.name}})])}),o=[],c={props:{name:{type:String,default:""},size:{type:String,default:"normal"},modifier:{type:Object,default:null},fixAlign:{type:Boolean,default:!1}}},u=c,l=(r("b98e"),r("2877")),p=Object(l["a"])(u,s,o,!1,null,"b1300e9e",null),f=p.exports,d=r("bc3a"),v=r.n(d),b={name:"App",components:{Icon:f},data:function(){return{discoveries:null,userData:null}},mounted:function(){var e=this;v.a.get("/public/profile/getOwnDiscoveries").then((function(t){return e.discoveries=t["data"]})),v.a.get("/public/profile/getUserData").then((function(t){return e.userData=t["data"]}))},computed:{itemsPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"repeat(1, 400px)";case"sm":return"repeat(2, 400px)";case"md":return"repeat(2, 400px)";case"lg":return"repeat(3, 400px)";case"xl":return"repeat(3, 400px)"}return 1}}},g=b,m=(r("ad65"),r("6544")),h=r.n(m),_=r("7496"),y=r("40dc"),x=r("5bc1"),w=r("8212"),O=r("8336"),C=r("a523"),j=r("f6c4"),P=r("2fa4"),D=Object(l["a"])(g,a,i,!1,null,null,null),S=D.exports;h()(D,{VApp:_["a"],VAppBar:y["a"],VAppBarNavIcon:x["a"],VAvatar:w["a"],VBtn:O["a"],VContainer:C["a"],VMain:j["a"],VSpacer:P["a"]});var V=r("402c");r("15f5"),r("7051");n["a"].config.productionTip=!1,new n["a"]({vuetify:V["a"],render:function(e){return e(S)}}).$mount("#app")},2571:function(e,t,r){},"31e8":function(e,t,r){var n={"./logo.svg":"9b19","./user_edit.svg":"5500"};function a(e){var t=i(e);return r(t)}function i(e){if(!r.o(n,e)){var t=new Error("Cannot find module '"+e+"'");throw t.code="MODULE_NOT_FOUND",t}return n[e]}a.keys=function(){return Object.keys(n)},a.resolve=i,e.exports=a,a.id="31e8"},4:function(e,t,r){e.exports=r("10fd")},"402c":function(e,t,r){"use strict";var n=r("2b0e"),a=r("f309");n["a"].use(a["a"]),t["a"]=new a["a"]({})},5500:function(e,t,r){e.exports=r.p+"public/img/user_edit.d950906d.svg"},8548:function(e,t,r){},"9b19":function(e,t,r){e.exports=r.p+"public/img/logo.07d1e22e.svg"},ad65:function(e,t,r){"use strict";var n=r("2571"),a=r.n(n);a.a},b98e:function(e,t,r){"use strict";var n=r("8548"),a=r.n(n);a.a}});
//# sourceMappingURL=profile.4a5f974d.js.map