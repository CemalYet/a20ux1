(function(t){function e(e){for(var n,s,o=e[0],c=e[1],u=e[2],p=0,f=[];p<o.length;p++)s=o[p],Object.prototype.hasOwnProperty.call(r,s)&&r[s]&&f.push(r[s][0]),r[s]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(t[n]=c[n]);l&&l(e);while(f.length)f.shift()();return i.push.apply(i,u||[]),a()}function a(){for(var t,e=0;e<i.length;e++){for(var a=i[e],n=!0,o=1;o<a.length;o++){var c=a[o];0!==r[c]&&(n=!1)}n&&(i.splice(e--,1),t=s(s.s=a[0]))}return t}var n={},r={profile:0},i=[];function s(e){if(n[e])return n[e].exports;var a=n[e]={i:e,l:!1,exports:{}};return t[e].call(a.exports,a,a.exports,s),a.l=!0,a.exports}s.m=t,s.c=n,s.d=function(t,e,a){s.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},s.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},s.t=function(t,e){if(1&e&&(t=s(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(s.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)s.d(a,n,function(e){return t[e]}.bind(null,n));return a},s.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],c=o.push.bind(o);o.push=e,o=o.slice();for(var u=0;u<o.length;u++)e(o[u]);var l=c;i.push([4,"chunk-vendors"]),a()})({"10fd":function(t,e,a){"use strict";a.r(e);a("e260"),a("e6cf"),a("cca6"),a("a79d");var n=a("2b0e"),r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-app",[a("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[a("v-app-bar-nav-icon",[a("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),a("v-spacer"),a("div",{staticClass:"user_edit_icon"},[a("v-btn",{attrs:{icon:""}},[a("icon",{attrs:{name:"user_edit"}})],1)],1)],1),a("v-main",[a("div",{staticClass:"content"},[a("div",{staticClass:"w-full p-10 user_container"},[a("div",{staticClass:"avatar_container"},[a("v-avatar",{staticClass:"elevation-8",attrs:{size:"112"}},[a("img",{attrs:{src:t.userData.avatar,alt:""}})])],1),a("div",{staticClass:"user_info"},[a("p",{staticClass:"user_info_header"},[t._v(t._s(t.userData.userName))]),a("p",{staticClass:"user_info_subheader"},[t._v("@"+t._s(t.userData.userName))])])]),a("div",{staticClass:"photo_grid"},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/5/5e/Sassafras_Leaves_June_Nbg_%28261691941%29.jpeg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2),t._v("} ")])])],1)},i=[],s=(a("b0c0"),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"icon",class:["icon--"+t.name,"icon--"+t.size,{"has-align-fix":t.fixAlign}]},[n("img",{staticClass:"icon__svg",attrs:{src:a("31e8")("./"+t.name+".svg"),alt:""+t.name}})])}),o=[],c={props:{name:{type:String,default:""},size:{type:String,default:"normal"},modifier:{type:Object,default:null},fixAlign:{type:Boolean,default:!1}}},u=c,l=(a("b98e"),a("2877")),p=Object(l["a"])(u,s,o,!1,null,"b1300e9e",null),f=p.exports,d=a("bc3a"),v=a.n(d),g={name:"App",components:{Icon:f},data:function(){return{discoveries:null,userData:null}},mounted:function(){var t=this;v.a.get("/public/profile/getOwnDiscoveries").then((function(e){return t.discoveries=e["data"]})),v.a.get("/public/profile/getUserData").then((function(e){return t.userData=e["data"]}))},computed:{itemsPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"repeat(1, 400px)";case"sm":return"repeat(2, 400px)";case"md":return"repeat(2, 400px)";case"lg":return"repeat(3, 400px)";case"xl":return"repeat(3, 400px)"}return 1}}},b=g,h=(a("ad65"),a("6544")),m=a.n(h),_=a("7496"),w=a("40dc"),y=a("5bc1"),x=a("8212"),C=a("8336"),O=a("f6c4"),j=a("2fa4"),S=Object(l["a"])(b,r,i,!1,null,null,null),k=S.exports;m()(S,{VApp:_["a"],VAppBar:w["a"],VAppBarNavIcon:y["a"],VAvatar:x["a"],VBtn:C["a"],VMain:O["a"],VSpacer:j["a"]});var D=a("402c");a("15f5"),a("7051");n["a"].config.productionTip=!1,new n["a"]({vuetify:D["a"],render:function(t){return t(k)}}).$mount("#app")},2571:function(t,e,a){},"31e8":function(t,e,a){var n={"./logo.svg":"9b19","./user_edit.svg":"5500"};function r(t){var e=i(t);return a(e)}function i(t){if(!a.o(n,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return n[t]}r.keys=function(){return Object.keys(n)},r.resolve=i,t.exports=r,r.id="31e8"},4:function(t,e,a){t.exports=a("10fd")},"402c":function(t,e,a){"use strict";var n=a("2b0e"),r=a("f309");n["a"].use(r["a"]),e["a"]=new r["a"]({})},5500:function(t,e,a){t.exports=a.p+"public/img/user_edit.d950906d.svg"},8548:function(t,e,a){},"9b19":function(t,e,a){t.exports=a.p+"public/img/logo.07d1e22e.svg"},ad65:function(t,e,a){"use strict";var n=a("2571"),r=a.n(n);r.a},b98e:function(t,e,a){"use strict";var n=a("8548"),r=a.n(n);r.a}});
//# sourceMappingURL=profile.0aa61814.js.map