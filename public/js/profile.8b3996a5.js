(function(t){function e(e){for(var r,s,o=e[0],c=e[1],u=e[2],p=0,f=[];p<o.length;p++)s=o[p],Object.prototype.hasOwnProperty.call(n,s)&&n[s]&&f.push(n[s][0]),n[s]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(t[r]=c[r]);l&&l(e);while(f.length)f.shift()();return i.push.apply(i,u||[]),a()}function a(){for(var t,e=0;e<i.length;e++){for(var a=i[e],r=!0,o=1;o<a.length;o++){var c=a[o];0!==n[c]&&(r=!1)}r&&(i.splice(e--,1),t=s(s.s=a[0]))}return t}var r={},n={profile:0},i=[];function s(e){if(r[e])return r[e].exports;var a=r[e]={i:e,l:!1,exports:{}};return t[e].call(a.exports,a,a.exports,s),a.l=!0,a.exports}s.m=t,s.c=r,s.d=function(t,e,a){s.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},s.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},s.t=function(t,e){if(1&e&&(t=s(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(s.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)s.d(a,r,function(e){return t[e]}.bind(null,r));return a},s.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],c=o.push.bind(o);o.push=e,o=o.slice();for(var u=0;u<o.length;u++)e(o[u]);var l=c;i.push([4,"chunk-vendors"]),a()})({"10fd":function(t,e,a){"use strict";a.r(e);a("e260"),a("e6cf"),a("cca6"),a("a79d");var r=a("2b0e"),n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-app",[a("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[a("v-app-bar-nav-icon",[a("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),a("v-spacer"),a("div",{staticClass:"user_edit_icon"},[a("v-btn",{attrs:{icon:""}},[a("icon",{attrs:{name:"user_edit"}})],1)],1)],1),a("v-main",{attrs:{id:"main"}},[a("v-container",[a("div",{staticClass:"content"},[a("div",{staticClass:"w-full p-10 user_container"},[a("div",{staticClass:"avatar_container"},[a("v-avatar",{staticClass:"elevation-8",attrs:{size:"112"}},[a("img",{attrs:{src:t.userData.avatar,alt:""}})])],1),a("div",{staticClass:"user_info"},[a("p",{staticClass:"user_info_header"},[t._v(t._s(t.userData.userName))]),a("p",{staticClass:"user_info_subheader"},[t._v("@"+t._s(t.userData.userName))])])]),a("v-app-bar",{attrs:{fixed:"",grow:"",extended:""}},[a("v-btn",{attrs:{color:"white",ripple:!1}},[t._v(" My pictures ")]),a("v-btn",{attrs:{color:"white",ripple:!1}},[t._v(" Tags ")]),a("v-btn",{attrs:{color:"white",ripple:!1}},[t._v(" Badges ")])],1),a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/5/5e/Sassafras_Leaves_June_Nbg_%28261691941%29.jpeg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2),t._v("} ")],1)])],1)],1)},i=[],s=(a("b0c0"),function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"icon",class:["icon--"+t.name,"icon--"+t.size,{"has-align-fix":t.fixAlign}]},[r("img",{staticClass:"icon__svg",attrs:{src:a("31e8")("./"+t.name+".svg"),alt:""+t.name}})])}),o=[],c={props:{name:{type:String,default:""},size:{type:String,default:"normal"},modifier:{type:Object,default:null},fixAlign:{type:Boolean,default:!1}}},u=c,l=(a("b98e"),a("2877")),p=Object(l["a"])(u,s,o,!1,null,"b1300e9e",null),f=p.exports,d=a("bc3a"),v=a.n(d),g={name:"App",components:{Icon:f},data:function(){return{discoveries:null,userData:null}},mounted:function(){var t=this;v.a.get("/public/profile/getOwnDiscoveries").then((function(e){return t.discoveries=e["data"]})),v.a.get("/public/profile/getUserData").then((function(e){return t.userData=e["data"]}))},computed:{itemsPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"repeat(2, 0.1fr)";case"sm":return"repeat(2, 0.1fr)";case"md":return"repeat(3, 0.1fr)";case"lg":return"repeat(4, 0.1fr)";case"xl":return"repeat(4, 0.1fr)"}return 1}}},b=g,m=(a("ad65"),a("6544")),h=a.n(m),_=a("7496"),w=a("40dc"),y=a("5bc1"),C=a("8212"),x=a("8336"),O=a("a523"),j=a("f6c4"),S=a("2fa4"),k=Object(l["a"])(b,n,i,!1,null,null,null),D=k.exports;h()(k,{VApp:_["a"],VAppBar:w["a"],VAppBarNavIcon:y["a"],VAvatar:C["a"],VBtn:x["a"],VContainer:O["a"],VMain:j["a"],VSpacer:S["a"]});var P=a("402c");a("15f5"),a("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:P["a"],render:function(t){return t(D)}}).$mount("#app")},2571:function(t,e,a){},"31e8":function(t,e,a){var r={"./logo.svg":"9b19","./user_edit.svg":"5500"};function n(t){var e=i(t);return a(e)}function i(t){if(!a.o(r,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return r[t]}n.keys=function(){return Object.keys(r)},n.resolve=i,t.exports=n,n.id="31e8"},4:function(t,e,a){t.exports=a("10fd")},"402c":function(t,e,a){"use strict";var r=a("2b0e"),n=a("f309");r["a"].use(n["a"]),e["a"]=new n["a"]({})},5500:function(t,e,a){t.exports=a.p+"public/img/user_edit.d950906d.svg"},8548:function(t,e,a){},"9b19":function(t,e,a){t.exports=a.p+"public/img/logo.07d1e22e.svg"},ad65:function(t,e,a){"use strict";var r=a("2571"),n=a.n(r);n.a},b98e:function(t,e,a){"use strict";var r=a("8548"),n=a.n(r);n.a}});
//# sourceMappingURL=profile.8b3996a5.js.map