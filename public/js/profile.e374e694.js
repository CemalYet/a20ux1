(function(t){function e(e){for(var n,r,o=e[0],c=e[1],u=e[2],p=0,d=[];p<o.length;p++)r=o[p],Object.prototype.hasOwnProperty.call(s,r)&&s[r]&&d.push(s[r][0]),s[r]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(t[n]=c[n]);l&&l(e);while(d.length)d.shift()();return i.push.apply(i,u||[]),a()}function a(){for(var t,e=0;e<i.length;e++){for(var a=i[e],n=!0,o=1;o<a.length;o++){var c=a[o];0!==s[c]&&(n=!1)}n&&(i.splice(e--,1),t=r(r.s=a[0]))}return t}var n={},s={profile:0},i=[];function r(e){if(n[e])return n[e].exports;var a=n[e]={i:e,l:!1,exports:{}};return t[e].call(a.exports,a,a.exports,r),a.l=!0,a.exports}r.m=t,r.c=n,r.d=function(t,e,a){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},r.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(r.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)r.d(a,n,function(e){return t[e]}.bind(null,n));return a},r.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],c=o.push.bind(o);o.push=e,o=o.slice();for(var u=0;u<o.length;u++)e(o[u]);var l=c;i.push([4,"chunk-vendors"]),a()})({"0a8f":function(t,e,a){t.exports=a.p+"public/img/badge_icon.8de737d1.png"},"10fd":function(t,e,a){"use strict";a.r(e);a("e260"),a("e6cf"),a("cca6"),a("a79d");var n=a("2b0e"),s=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-app",[a("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[a("v-app-bar-nav-icon",[a("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),a("v-spacer"),a("div",{staticClass:"user_edit_icon"},[a("v-btn",{attrs:{icon:""}},[a("icon",{attrs:{name:"user_edit"}})],1)],1)],1),a("v-main",{attrs:{id:"main"}},[a("v-container",[a("div",{staticClass:"content"},[a("div",{staticClass:"w-full p-10 user_container"},[a("div",{staticClass:"avatar_container"},[a("v-avatar",{staticClass:"elevation-8",attrs:{size:"152"}},[a("img",{attrs:{src:t.userData.avatar,alt:""}})])],1),a("div",{staticClass:"user_info"},[a("p",{staticClass:"user_info_header"},[t._v(t._s(t.userData.userName))]),a("p",{staticClass:"user_info_subheader"},[t._v("@"+t._s(t.userData.userName))])])]),a("v-container",{attrs:{id:"profile_content"}},[a("spam",{staticClass:"topMenu"},[a("button",{staticClass:"topMenuButton",class:["my_pictures"==t.tab?"pressed":"unpressed"],attrs:{ripple:!1},on:{click:function(e){t.tab="my_pictures"}}},[t._v(" My pictures ")]),a("button",{staticClass:"topMenuButton",attrs:{ripple:!1},on:{click:function(e){t.tab="tags"}}},[t._v(" Tags ")]),a("button",{staticClass:"topMenuButton",attrs:{ripple:!1},on:{click:function(e){t.tab="badges"}}},[t._v(" Badges ")])]),"my_pictures"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/5/5e/Sassafras_Leaves_June_Nbg_%28261691941%29.jpeg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2)]):t._e(),"tags"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2)]):t._e(),"badges"==t.tab?a("div",[a("div",{staticClass:"badgesContainer"},[a("Badge",{attrs:{title:"Collected 10 Oak Trees"}})],1)]):t._e()],1)],1)])],1)],1)},i=[],r=(a("b0c0"),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"icon",class:["icon--"+t.name,"icon--"+t.size,{"has-align-fix":t.fixAlign}]},[n("img",{staticClass:"icon__svg",attrs:{src:a("31e8")("./"+t.name+".svg"),alt:""+t.name}})])}),o=[],c={props:{name:{type:String,default:""},size:{type:String,default:"normal"},modifier:{type:Object,default:null},fixAlign:{type:Boolean,default:!1}}},u=c,l=(a("b98e"),a("2877")),p=Object(l["a"])(u,r,o,!1,null,"b1300e9e",null),d=p.exports,f=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"badge"},[n("v-card",{staticClass:"rounded-card mx-auto mt-5",attrs:{shaped:""}},[n("img",{staticClass:"badge_icon",attrs:{src:a("0a8f")}}),n("v-card-title",[t._v(t._s(t.title))]),n("v-card-subtitle",[t._v(" "+t._s(t.subtitle)+" ")])],1)],1)},v=[],g={data:{title:{type:String,default:""},subtitle:{type:String,default:"You didn't receive this badge yet"}}},b=g,_=(a("a0d3"),a("6544")),m=a.n(_),h=a("b0af"),C=a("99d9"),w=Object(l["a"])(b,f,v,!1,null,null,null),y=w.exports;m()(w,{VCard:h["a"],VCardSubtitle:C["a"],VCardTitle:C["b"]});var x=a("bc3a"),O=a.n(x),j={name:"App",components:{Icon:d,Badge:y},data:function(){return{discoveries:null,userData:null,tags:null,badges:null,tab:"my_pictures"}},mounted:function(){var t=this;O.a.get("/public/profile/getOwnDiscoveries").then((function(e){return t.discoveries=e["data"]})),O.a.get("/public/profile/getUserData").then((function(e){return t.userData=e["data"]}))},computed:{itemsPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"auto";case"sm":return"auto auto";case"md":return"auto auto";case"lg":return"auto auto auto";case"xl":return"auto auto auto auto"}return 1}}},k=j,S=(a("ad65"),a("7496")),B=a("40dc"),P=a("5bc1"),D=a("8212"),M=a("8336"),T=a("a523"),V=a("f6c4"),A=a("2fa4"),N=Object(l["a"])(k,s,i,!1,null,null,null),E=N.exports;m()(N,{VApp:S["a"],VAppBar:B["a"],VAppBarNavIcon:P["a"],VAvatar:D["a"],VBtn:M["a"],VContainer:T["a"],VMain:V["a"],VSpacer:A["a"]});var $=a("402c");a("15f5"),a("7051");n["a"].config.productionTip=!1,new n["a"]({vuetify:$["a"],render:function(t){return t(E)}}).$mount("#app")},"128a":function(t,e,a){},2571:function(t,e,a){},"31e8":function(t,e,a){var n={"./logo.svg":"9b19","./user_edit.svg":"5500"};function s(t){var e=i(t);return a(e)}function i(t){if(!a.o(n,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return n[t]}s.keys=function(){return Object.keys(n)},s.resolve=i,t.exports=s,s.id="31e8"},4:function(t,e,a){t.exports=a("10fd")},"402c":function(t,e,a){"use strict";var n=a("2b0e"),s=a("f309");n["a"].use(s["a"]),e["a"]=new s["a"]({})},5500:function(t,e,a){t.exports=a.p+"public/img/user_edit.d950906d.svg"},8548:function(t,e,a){},"9b19":function(t,e,a){t.exports=a.p+"public/img/logo.07d1e22e.svg"},a0d3:function(t,e,a){"use strict";var n=a("128a"),s=a.n(n);s.a},ad65:function(t,e,a){"use strict";var n=a("2571"),s=a.n(n);s.a},b98e:function(t,e,a){"use strict";var n=a("8548"),s=a.n(n);s.a}});
//# sourceMappingURL=profile.e374e694.js.map