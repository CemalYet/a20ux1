(function(t){function e(e){for(var a,n,l=e[0],c=e[1],s=e[2],v=0,u=[];v<l.length;v++)n=l[v],Object.prototype.hasOwnProperty.call(i,n)&&i[n]&&u.push(i[n][0]),i[n]=0;for(a in c)Object.prototype.hasOwnProperty.call(c,a)&&(t[a]=c[a]);p&&p(e);while(u.length)u.shift()();return o.push.apply(o,s||[]),r()}function r(){for(var t,e=0;e<o.length;e++){for(var r=o[e],a=!0,l=1;l<r.length;l++){var c=r[l];0!==i[c]&&(a=!1)}a&&(o.splice(e--,1),t=n(n.s=r[0]))}return t}var a={},i={feed:0},o=[];function n(e){if(a[e])return a[e].exports;var r=a[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=a,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)n.d(r,a,function(e){return t[e]}.bind(null,a));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/";var l=window["webpackJsonp"]=window["webpackJsonp"]||[],c=l.push.bind(l);l.push=e,l=l.slice();for(var s=0;s<l.length;s++)e(l[s]);var p=c;o.push([1,"chunk-vendors"]),r()})({1:function(t,e,r){t.exports=r("4090")},"402c":function(t,e,r){"use strict";var a=r("2b0e"),i=r("f309");a["a"].use(i["a"]),e["a"]=new i["a"]({})},4090:function(t,e,r){"use strict";r.r(e);r("e260"),r("e6cf"),r("cca6"),r("a79d");var a=r("2b0e"),i=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("v-app",[r("v-app-bar",{attrs:{"hide-on-scroll":"",absolute:"",color:"white","scroll-target":"#scrolling-techniques-4",elevation:"1"}},[r("v-app-bar-nav-icon",{on:{click:function(e){e.stopPropagation(),t.drawer=!t.drawer}}},[r("v-icon",{attrs:{large:"",color:"var(--dark-color)"}},[t._v("mdi-menu")]),r("v-badge",{attrs:{color:"red",content:t.notifications}})],1),r("v-spacer"),r("v-toolbar-title",{attrs:{id:"Title"}},[t._v("snAPP")]),r("v-spacer"),r("v-btn",{attrs:{icon:""}},[r("v-icon",{attrs:{large:"",color:"var(--dark-color)"}},[t._v("mdi-account-outline")])],1)],1),r("v-main",[r("br"),r("br"),r("v-container",t._l(5,(function(e){return r("v-row",{key:e,attrs:{cols:"12",sm:"3"}},t._l(4,(function(e){return r("v-col",{key:e,attrs:{cols:"12",sm:"3"}},[r("svg",{attrs:{viewBox:"0 0 600 600"}},[r("defs",[r("clipPath",{attrs:{id:"leaf"}},[r("path",{attrs:{d:t.leaf_shape,transform:"translate(0 50)"}})])]),r("path",{attrs:{d:t.leaf_shape,transform:"translate(0 50)"}}),r("g",{attrs:{"clip-path":"url(#leaf)"}},[r("image",{attrs:{preserveAspectRatio:"xMidYMid slice","xlink:href":t.picture,transform:"translate(0 50)"}})]),r("defs",[r("clipPath",{attrs:{id:"profile"}},[r("circle",{attrs:{r:"77",cx:"450",cy:"475"}})])]),r("circle",{attrs:{r:"77",cx:"450",cy:"475"}}),r("g",{attrs:{"clip-path":"url(#profile)"}},[r("image",{attrs:{preserveAspectRatio:"xMidYMid slice","xlink:href":t.avatar}})])])])})),1)})),1),r("br"),r("br"),r("v-navigation-drawer",{attrs:{fixed:"",temporary:""},scopedSlots:t._u([{key:"append",fn:function(){return[r("div",{staticClass:"pa-2"},[r("v-btn",{attrs:{text:"",ripple:!1}},[r("v-icon",{attrs:{large:"",color:"var(--main-color)",left:""}},[t._v("mdi-cog-outline")]),t._v(" Settings ")],1)],1)]},proxy:!0}]),model:{value:t.drawer,callback:function(e){t.drawer=e},expression:"drawer"}},[r("v-list",{attrs:{nav:"",dense:""}},[r("v-list-item",{attrs:{"two-line":""}},[r("v-list-item-avatar",{attrs:{size:"70"}},[r("v-img",{attrs:{src:t.avatar}})],1),r("v-list-item-content",[r("v-list-item-title",[t._v("Seppe Fleerackers")]),r("v-list-item-subtitle",[t._v("@seppe.f")])],1)],1),r("v-list-item",{attrs:{link:"",ripple:!1}},[r("v-list-item-icon",[r("v-icon",{attrs:{large:"",color:"var(--main-color)"}},[t._v("mdi-tree-outline")])],1),r("v-list-item-title",[t._v("My Discoveries")])],1),r("v-list-item",{attrs:{link:"",ripple:!1}},[r("v-list-item-icon",[r("v-icon",{attrs:{large:"",color:"var(--main-color)"}},[t._v("mdi-account-plus-outline")]),r("v-badge",{attrs:{color:"red",content:t.notifications,overlap:""}})],1),r("v-list-item-title",[t._v("Friends")])],1),r("v-list-item",{attrs:{link:"",ripple:!1}},[r("v-list-item-icon",[r("v-icon",{attrs:{large:"",color:"var(--main-color)"}},[t._v("mdi-shield-star-outline")])],1),r("v-list-item-title",[t._v("Badges")])],1),r("v-list-item",{attrs:{link:"",ripple:!1}},[r("v-list-item-icon",[r("v-icon",{attrs:{large:"",color:"var(--main-color)"}},[t._v("mdi-map-outline")])],1),r("v-list-item-title",[t._v("Map")])],1)],1)],1),r("v-bottom-navigation",{attrs:{fixed:"",grow:"",extended:""}},[r("v-btn",{attrs:{color:"white",ripple:!1}},[r("v-icon",{attrs:{large:"",color:"var(--main-color)"}},[t._v("mdi-shield-star-outline")])],1),r("v-btn",{attrs:{color:"var(--dark-color)",fab:"",elevation:"2",raised:"",rounded:"",ripple:!1}},[r("v-icon",{attrs:{"x-large":"",color:"white"}},[t._v("mdi-camera-plus-outline")])],1),r("v-btn",{attrs:{color:"white",ripple:!1}},[r("v-icon",{attrs:{large:"",color:"var(--main-color)"}},[t._v("mdi-map-outline")])],1)],1)],1)],1)},o=[],n={name:"App",components:{},data:function(){return{drawer:!1,group:null,notifications:2,avatar:"https://scontent-bru2-1.xx.fbcdn.net/v/t31.0-8/27907755_964224010401572_4566376548678829171_o.jpg?_nc_cat=106&ccb=2&_nc_sid=09cbfe&_nc_ohc=2wrEVoQrdBkAX9MBLOP&_nc_ht=scontent-bru2-1.xx&oh=81c5c254570b087bda35d1ced5624cac&oe=5FC6E541",leaf_shape:"M503.141,8.696c-0.016,0-215.215-56.483-390.225,118.511 C-31.579,271.711,96.155,415.69,96.155,415.69s143.979,127.742,288.476-16.775C559.64,223.928,503.156,8.728,503.141,8.696z",picture:"https://img.freepik.com/vrije-photo/close-up-van-een-giftige-rode-muhamor-paddestoel-in-het-bos_75145-275.jpg?size=626&ext=jpg"}},watch:{group:function(){this.drawer=!1}}},l=n,c=(r("67ef"),r("2877")),s=r("6544"),p=r.n(s),v=r("7496"),u=r("40dc"),d=r("5bc1"),f=r("4ca6"),m=r("b81c"),b=r("8336"),g=r("62ad"),h=r("a523"),_=r("132d"),w=r("adda"),x=r("8860"),y=r("da13"),V=r("8270"),k=r("5d23"),j=r("34c3"),M=r("f6c4"),O=r("f774"),P=r("0fd9"),I=r("2fa4"),S=r("2a7f"),A=Object(c["a"])(l,i,o,!1,null,null,null),B=A.exports;p()(A,{VApp:v["a"],VAppBar:u["a"],VAppBarNavIcon:d["a"],VBadge:f["a"],VBottomNavigation:m["a"],VBtn:b["a"],VCol:g["a"],VContainer:h["a"],VIcon:_["a"],VImg:w["a"],VList:x["a"],VListItem:y["a"],VListItemAvatar:V["a"],VListItemContent:k["a"],VListItemIcon:j["a"],VListItemSubtitle:k["b"],VListItemTitle:k["c"],VMain:M["a"],VNavigationDrawer:O["a"],VRow:P["a"],VSpacer:I["a"],VToolbarTitle:S["a"]});var L=r("402c");a["a"].config.productionTip=!1,new a["a"]({vuetify:L["a"],render:function(t){return t(B)}}).$mount("#app")},"67ef":function(t,e,r){"use strict";var a=r("b1b9"),i=r.n(a);i.a},b1b9:function(t,e,r){}});
//# sourceMappingURL=feed.03db90aa.js.map