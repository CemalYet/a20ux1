(function(t){function e(e){for(var n,i,o=e[0],c=e[1],l=e[2],p=0,d=[];p<o.length;p++)i=o[p],Object.prototype.hasOwnProperty.call(r,i)&&r[i]&&d.push(r[i][0]),r[i]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(t[n]=c[n]);u&&u(e);while(d.length)d.shift()();return s.push.apply(s,l||[]),a()}function a(){for(var t,e=0;e<s.length;e++){for(var a=s[e],n=!0,o=1;o<a.length;o++){var c=a[o];0!==r[c]&&(n=!1)}n&&(s.splice(e--,1),t=i(i.s=a[0]))}return t}var n={},r={profile:0},s=[];function i(e){if(n[e])return n[e].exports;var a=n[e]={i:e,l:!1,exports:{}};return t[e].call(a.exports,a,a.exports,i),a.l=!0,a.exports}i.m=t,i.c=n,i.d=function(t,e,a){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},i.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(i.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)i.d(a,n,function(e){return t[e]}.bind(null,n));return a},i.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],c=o.push.bind(o);o.push=e,o=o.slice();for(var l=0;l<o.length;l++)e(o[l]);var u=c;s.push([4,"chunk-vendors"]),a()})({"10fd":function(t,e,a){"use strict";a.r(e);a("e260"),a("e6cf"),a("cca6"),a("a79d");var n=a("2b0e"),r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-app",[a("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[a("v-app-bar-nav-icon",[a("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),a("v-spacer"),a("div",{staticClass:"user_edit_icon"},[a("v-btn",{attrs:{icon:""}},[a("icon",{attrs:{name:"user_edit"}})],1)],1)],1),a("v-main",{attrs:{id:"main"}},[a("v-container",[a("div",{staticClass:"content"},[a("div",{staticClass:"w-full p-10 user_container"},[a("div",{staticClass:"avatar_container"},[a("v-avatar",{staticClass:"elevation-8",attrs:{size:"112"}},[a("img",{attrs:{src:t.userData.avatar,alt:""}})])],1),a("div",{staticClass:"user_info"},[a("p",{staticClass:"user_info_header"},[t._v(t._s(t.userData.userName))]),a("p",{staticClass:"user_info_subheader"},[t._v("@"+t._s(t.userData.userName))])])]),a("v-container",{attrs:{id:"profile_content"}},[a("spam",{staticClass:"topMenu"},[a("button",{staticClass:"topMenuButton",class:["my_pictures"==t.tabs?"pressed":"unpressed"],attrs:{ripple:!1},on:{click:function(e){t.tab="my_pictures"}}},[t._v(" My pictures ")]),a("button",{staticClass:"topMenuButton",attrs:{ripple:!1},on:{click:function(e){t.tab="tags"}}},[t._v(" Tags ")]),a("button",{staticClass:"topMenuButton",attrs:{ripple:!1},on:{click:function(e){t.tab="badges"}}},[t._v(" Badges ")])]),"my_pictures"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/5/5e/Sassafras_Leaves_June_Nbg_%28261691941%29.jpeg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2)]):t._e(),"tags"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})])],2)]):t._e(),"badges"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),0)]):t._e()],1)],1)])],1)],1)},s=[],i=(a("b0c0"),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"icon",class:["icon--"+t.name,"icon--"+t.size,{"has-align-fix":t.fixAlign}]},[n("img",{staticClass:"icon__svg",attrs:{src:a("31e8")("./"+t.name+".svg"),alt:""+t.name}})])}),o=[],c={props:{name:{type:String,default:""},size:{type:String,default:"normal"},modifier:{type:Object,default:null},fixAlign:{type:Boolean,default:!1}}},l=c,u=(a("b98e"),a("2877")),p=Object(u["a"])(l,i,o,!1,null,"b1300e9e",null),d=p.exports,f=a("bc3a"),v=a.n(f),g={name:"App",components:{Icon:d},data:function(){return{discoveries:null,userData:null,tab:"my_pictures"}},mounted:function(){var t=this;v.a.get("/public/profile/getOwnDiscoveries").then((function(e){return t.discoveries=e["data"]})),v.a.get("/public/profile/getUserData").then((function(e){return t.userData=e["data"]}))},computed:{itemsPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"repeat(2, 0.1fr)";case"sm":return"repeat(2, 0.1fr)";case"md":return"repeat(2, 0.1fr)";case"lg":return"repeat(3, 0.1fr)";case"xl":return"repeat(4, 0.1fr)"}return 1}}},m=g,_=(a("ad65"),a("6544")),b=a.n(_),h=a("7496"),w=a("40dc"),y=a("5bc1"),C=a("8212"),O=a("8336"),x=a("a523"),j=a("f6c4"),k=a("2fa4"),P=Object(u["a"])(m,r,s,!1,null,null,null),S=P.exports;b()(P,{VApp:h["a"],VAppBar:w["a"],VAppBarNavIcon:y["a"],VAvatar:C["a"],VBtn:O["a"],VContainer:x["a"],VMain:j["a"],VSpacer:k["a"]});var B=a("402c");a("15f5"),a("7051");n["a"].config.productionTip=!1,new n["a"]({vuetify:B["a"],render:function(t){return t(S)}}).$mount("#app")},2571:function(t,e,a){},"31e8":function(t,e,a){var n={"./logo.svg":"9b19","./user_edit.svg":"5500"};function r(t){var e=s(t);return a(e)}function s(t){if(!a.o(n,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return n[t]}r.keys=function(){return Object.keys(n)},r.resolve=s,t.exports=r,r.id="31e8"},4:function(t,e,a){t.exports=a("10fd")},"402c":function(t,e,a){"use strict";var n=a("2b0e"),r=a("f309");n["a"].use(r["a"]),e["a"]=new r["a"]({})},5500:function(t,e,a){t.exports=a.p+"public/img/user_edit.d950906d.svg"},8548:function(t,e,a){},"9b19":function(t,e,a){t.exports=a.p+"public/img/logo.07d1e22e.svg"},ad65:function(t,e,a){"use strict";var n=a("2571"),r=a.n(n);r.a},b98e:function(t,e,a){"use strict";var n=a("8548"),r=a.n(n);r.a}});
//# sourceMappingURL=profile.3902a4bf.js.map