(function(t){function e(e){for(var s,r,o=e[0],c=e[1],u=e[2],d=0,p=[];d<o.length;d++)r=o[d],Object.prototype.hasOwnProperty.call(n,r)&&n[r]&&p.push(n[r][0]),n[r]=0;for(s in c)Object.prototype.hasOwnProperty.call(c,s)&&(t[s]=c[s]);l&&l(e);while(p.length)p.shift()();return i.push.apply(i,u||[]),a()}function a(){for(var t,e=0;e<i.length;e++){for(var a=i[e],s=!0,o=1;o<a.length;o++){var c=a[o];0!==n[c]&&(s=!1)}s&&(i.splice(e--,1),t=r(r.s=a[0]))}return t}var s={},n={profile:0},i=[];function r(e){if(s[e])return s[e].exports;var a=s[e]={i:e,l:!1,exports:{}};return t[e].call(a.exports,a,a.exports,r),a.l=!0,a.exports}r.m=t,r.c=s,r.d=function(t,e,a){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},r.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(r.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var s in t)r.d(a,s,function(e){return t[e]}.bind(null,s));return a},r.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],c=o.push.bind(o);o.push=e,o=o.slice();for(var u=0;u<o.length;u++)e(o[u]);var l=c;i.push([4,"chunk-vendors"]),a()})({"0a8f":function(t,e,a){t.exports=a.p+"public/img/badge_icon.8de737d1.png"},"10fd":function(t,e,a){"use strict";a.r(e);a("e260"),a("e6cf"),a("cca6"),a("a79d");var s=a("2b0e"),n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-app",[a("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[a("v-app-bar-nav-icon",[a("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),a("v-spacer"),a("div",{staticClass:"log_out_btn"},[a("v-btn",{attrs:{rounded:"",color:"white"},on:{click:function(e){return t.logOut()}}},[t._v(" Log Out ")])],1),a("div",{staticClass:"user_edit_icon"},[a("v-btn",{attrs:{icon:""},on:{click:function(e){return t.logOut()}}},[a("icon",{attrs:{name:"user_edit"}})],1)],1)],1),a("v-main",{attrs:{id:"main"}},[a("v-container",[a("div",{staticClass:"content"},[a("div",{staticClass:"w-full p-10 user_container"},[a("div",{staticClass:"avatar_container"},[a("v-avatar",{staticClass:"elevation-8",attrs:{size:"152"}},[a("img",{attrs:{src:t.userData.avatar,alt:""}})])],1),a("div",{staticClass:"user_info"},[a("p",{staticClass:"user_info_header"},[t._v(t._s(t.userData.userName))]),a("p",{staticClass:"user_info_subheader"},[t._v("@"+t._s(t.userData.userName))])])]),a("v-container",{attrs:{id:"profile_content"}},[a("spam",{staticClass:"topMenu"},[a("button",{staticClass:"topMenuButton",class:["my_pictures"==t.tab?"pressed":"unpressed"],attrs:{ripple:!1},on:{click:function(e){t.tab="my_pictures"}}},[t._v(" My pictures ")]),a("button",{staticClass:"topMenuButton",class:["tags"==t.tab?"pressed":"unpressed"],attrs:{ripple:!1},on:{click:function(e){t.tab="tags"}}},[t._v(" Tags ")]),a("button",{staticClass:"topMenuButton",class:["badges"==t.tab?"pressed":"unpressed"],attrs:{ripple:!1},on:{click:function(e){t.tab="badges"}}},[t._v(" Badges ")])]),"my_pictures"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/5/5e/Sassafras_Leaves_June_Nbg_%28261691941%29.jpeg",alt:""}})]),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2)]):t._e(),"tags"==t.tab?a("div",[a("div",{staticClass:"photo_grid",style:{"grid-template-columns":t.itemsPerRow}},[a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://www.differencebetween.com/wp-content/uploads/2019/11/Difference-Between-Stem-Tendril-and-Leaf-Tendril_2.jpg",alt:""}})]),t._l(t.discoveries.length,(function(e){return a("div",{key:e,staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:t.discoveries[e-1].photoPath,alt:""}})])})),a("div",{staticClass:"photo_container"},[a("img",{staticClass:"photo",attrs:{src:"https://upload.wikimedia.org/wikipedia/commons/b/b7/Bloodroot_%28Sanguinaria_canadensis%29.jpeg",alt:""}})])],2)]):t._e(),"badges"==t.tab?a("div",[a("div",{staticClass:"badgesContainer",style:{"grid-template-columns":t.badgesPerRow}},[a("Badge",{attrs:{title:"Made 10 Discoveries"}}),a("Badge",{attrs:{title:"Scanned a wild animal"}}),a("Badge",{attrs:{title:"Scanned 10 Oak Trees"}}),a("Badge",{attrs:{title:"Made 10 Discoveries"}}),a("Badge",{attrs:{title:"Scanned a wild animal"}}),a("Badge",{attrs:{title:"Scanned 10 Oak Trees"}})],1)]):t._e()],1)],1)])],1)],1)},i=[],r=(a("b0c0"),a("cdae")),o=a("a0fd"),c=a("bc3a"),u=a.n(c),l={name:"App",components:{Icon:r["a"],Badge:o["a"]},data:function(){return{discoveries:null,userData:null,tags:null,badges:null,tab:"my_pictures",test:null}},mounted:function(){var t=this;u.a.get("/public/profile/getOwnDiscoveries").then((function(e){return t.discoveries=e["data"]})),u.a.get("/public/profile/getUserData").then((function(e){return t.userData=e["data"]}))},computed:{itemsPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"auto";case"sm":return"auto";case"md":return"auto auto";case"lg":return"auto auto auto";case"xl":return"auto auto auto auto"}return 1},badgesPerRow:function(){switch(this.$vuetify.breakpoint.name){case"xs":return"auto";case"sm":return"auto";case"md":return"auto auto";case"lg":return"auto auto";case"xl":return"auto auto"}return 1}},methods:{logOut:function(){window.location.href="/public/login/logout"},testFunc:function(){this.test="yes"}}},d=l,p=(a("ad65"),a("2877")),f=a("6544"),v=a.n(f),g=a("7496"),b=a("40dc"),m=a("5bc1"),_=a("8212"),h=a("8336"),w=a("a523"),C=a("f6c4"),y=a("2fa4"),O=Object(p["a"])(d,n,i,!1,null,null,null),x=O.exports;v()(O,{VApp:g["a"],VAppBar:b["a"],VAppBarNavIcon:m["a"],VAvatar:_["a"],VBtn:h["a"],VContainer:w["a"],VMain:C["a"],VSpacer:y["a"]});var k=a("402c");a("15f5"),a("7051");s["a"].config.productionTip=!1,new s["a"]({vuetify:k["a"],render:function(t){return t(x)}}).$mount("#app")},"128a":function(t,e,a){},2571:function(t,e,a){},"31e8":function(t,e,a){var s={"./logo.svg":"9b19","./user_edit.svg":"5500"};function n(t){var e=i(t);return a(e)}function i(t){if(!a.o(s,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return s[t]}n.keys=function(){return Object.keys(s)},n.resolve=i,t.exports=n,n.id="31e8"},4:function(t,e,a){t.exports=a("10fd")},"402c":function(t,e,a){"use strict";var s=a("2b0e"),n=a("f309");s["a"].use(n["a"]),e["a"]=new n["a"]({})},5500:function(t,e,a){t.exports=a.p+"public/img/user_edit.d950906d.svg"},8548:function(t,e,a){},"9b19":function(t,e,a){t.exports=a.p+"public/img/logo.07d1e22e.svg"},a0d3:function(t,e,a){"use strict";var s=a("128a"),n=a.n(s);n.a},a0fd:function(t,e,a){"use strict";var s=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"badge"},[s("div",{staticClass:"rounded-card mx-auto mt-5",attrs:{shaped:""}},[s("img",{staticClass:"badge_icon",attrs:{src:a("0a8f")}}),s("spam",{staticClass:"badgeText"},[s("v-card-title",{staticClass:"badgeTitle"},[t._v(t._s(t.title))]),s("v-card-subtitle",{staticClass:"badgeSubtitle"},[t._v(" "+t._s(t.subtitle)+" ")])],1)],1)])},n=[],i={props:{title:{type:String,default:""},subtitle:{type:String,default:"You didn't receive this badge yet"}}},r=i,o=(a("a0d3"),a("2877")),c=a("6544"),u=a.n(c),l=a("99d9"),d=Object(o["a"])(r,s,n,!1,null,null,null);e["a"]=d.exports;u()(d,{VCardSubtitle:l["a"],VCardTitle:l["b"]})},ad65:function(t,e,a){"use strict";var s=a("2571"),n=a.n(s);n.a},b98e:function(t,e,a){"use strict";var s=a("8548"),n=a.n(s);n.a},cdae:function(t,e,a){"use strict";var s=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"icon",class:["icon--"+t.name,"icon--"+t.size,{"has-align-fix":t.fixAlign}]},[s("img",{staticClass:"icon__svg",attrs:{src:a("31e8")("./"+t.name+".svg"),alt:""+t.name}})])},n=[],i={props:{name:{type:String,default:""},size:{type:String,default:"normal"},modifier:{type:Object,default:null},fixAlign:{type:Boolean,default:!1}}},r=i,o=(a("b98e"),a("2877")),c=Object(o["a"])(r,s,n,!1,null,"b1300e9e",null);e["a"]=c.exports}});
//# sourceMappingURL=profile.8de4c2f5.js.map