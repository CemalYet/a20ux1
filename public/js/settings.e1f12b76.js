(function(a){function t(t){for(var r,o,l=t[0],c=t[1],s=t[2],v=0,f=[];v<l.length;v++)o=l[v],Object.prototype.hasOwnProperty.call(n,o)&&n[o]&&f.push(n[o][0]),n[o]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(a[r]=c[r]);u&&u(t);while(f.length)f.shift()();return i.push.apply(i,s||[]),e()}function e(){for(var a,t=0;t<i.length;t++){for(var e=i[t],r=!0,l=1;l<e.length;l++){var c=e[l];0!==n[c]&&(r=!1)}r&&(i.splice(t--,1),a=o(o.s=e[0]))}return a}var r={},n={settings:0},i=[];function o(t){if(r[t])return r[t].exports;var e=r[t]={i:t,l:!1,exports:{}};return a[t].call(e.exports,e,e.exports,o),e.l=!0,e.exports}o.m=a,o.c=r,o.d=function(a,t,e){o.o(a,t)||Object.defineProperty(a,t,{enumerable:!0,get:e})},o.r=function(a){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(a,"__esModule",{value:!0})},o.t=function(a,t){if(1&t&&(a=o(a)),8&t)return a;if(4&t&&"object"===typeof a&&a&&a.__esModule)return a;var e=Object.create(null);if(o.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:a}),2&t&&"string"!=typeof a)for(var r in a)o.d(e,r,function(t){return a[t]}.bind(null,r));return e},o.n=function(a){var t=a&&a.__esModule?function(){return a["default"]}:function(){return a};return o.d(t,"a",t),t},o.o=function(a,t){return Object.prototype.hasOwnProperty.call(a,t)},o.p="/";var l=window["webpackJsonp"]=window["webpackJsonp"]||[],c=l.push.bind(l);l.push=t,l=l.slice();for(var s=0;s<l.length;s++)t(l[s]);var u=c;i.push([5,"chunk-vendors"]),e()})({"402c":function(a,t,e){"use strict";var r=e("2b0e"),n=e("f309");r["a"].use(n["a"]),t["a"]=new n["a"]({})},4425:function(a,t,e){"use strict";var r=e("ae68"),n=e.n(r);n.a},5:function(a,t,e){a.exports=e("c699")},ae68:function(a,t,e){},c699:function(a,t,e){"use strict";e.r(t);e("e260"),e("e6cf"),e("cca6"),e("a79d");var r=e("2b0e"),n=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("v-app",[e("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[e("v-app-bar-nav-icon",[e("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),e("v-spacer"),e("v-toolbar-title",{attrs:{id:"Title"}},[a._v("Edit Profile")]),e("v-spacer")],1),e("v-main",{attrs:{id:"main"}},[e("v-container",[e("div",{staticClass:"content"},[e("image-input",{model:{value:a.avatar,callback:function(t){a.avatar=t},expression:"avatar"}},[e("div",{attrs:{slot:"activator"},slot:"activator"},[e("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],attrs:{size:"150px"}},[e("img",{attrs:{src:a.avatar,alt:"avatar"}})])],1)]),e("v-slide-x-transition",[a.avatar&&0==a.saved?e("div",[e("v-btn",{staticClass:"primary",attrs:{loading:a.saving},on:{click:a.uploadImage}},[a._v("Save Avatar")])],1):a._e()])],1)])],1)],1)},i=[],o=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",[e("div",{on:{click:function(t){return a.launchFilePicker()}}},[a._t("activator")],2),e("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file",name:a.uploadFieldName},on:{change:function(t){return a.onFileChange(t.target.name,t.target.files)}}}),e("v-dialog",{attrs:{"max-width":"300"},model:{value:a.errorDialog,callback:function(t){a.errorDialog=t},expression:"errorDialog"}},[e("v-card",[e("v-card-text",{staticClass:"subheading"},[a._v(a._s(a.errorText))]),e("v-card-actions",[e("v-spacer"),e("v-btn",{attrs:{flat:""},on:{click:function(t){a.errorDialog=!1}}},[a._v("Got it!")])],1)],1)],1)],1)},l=[],c=(e("d3b7"),e("ac1f"),e("3ca3"),e("466d"),e("ddb0"),e("2b3d"),{name:"image-input",data:function(){return{errorDialog:null,errorText:"",uploadFieldName:"file",maxSize:1024}},props:{value:Object},methods:{launchFilePicker:function(){this.$refs.file.click()},onFileChange:function(a,t){var e=this.maxSize,r=t[0];if(t.length>0){var n=r.size/e/e;if(r.type.match("image.*"))if(n>1)this.errorDialog=!0,this.errorText="Your file is too big! Please select an image under 1MB";else{var i=new FormData,o=URL.createObjectURL(r);i.append(a,r),this.$emit("input",{formData:i,imageURL:o})}else this.errorDialog=!0,this.errorText="Please choose an image file"}}}}),s=c,u=e("2877"),v=e("6544"),f=e.n(v),p=e("8336"),d=e("b0af"),g=e("99d9"),h=e("169a"),m=e("2fa4"),b=Object(u["a"])(s,o,l,!1,null,null,null),y=b.exports;f()(b,{VBtn:p["a"],VCard:d["a"],VCardActions:g["a"],VCardText:g["c"],VDialog:h["a"],VSpacer:m["a"]});var x=e("bc3a"),w=e.n(x),O={name:"App",components:{ImageInput:y},data:function(){return{userData:null,saving:!1,saved:!1,avatar:null}},beforeCreate:function(){var a=this;w.a.get("/public/profile/getUserData").then((function(t){return a.userData=t["data"]})),this.setOriginalAvatar()},methods:{setOriginalAvatar:function(){this.avatar=this.userData.avatar},uploadImage:function(){var a=this;this.saving=!0,setTimeout((function(){return a.savedAvatar()}),1e3)},savedAvatar:function(){this.saving=!1,this.saved=!0}}},_=O,V=(e("4425"),e("7496")),D=e("40dc"),j=e("5bc1"),S=e("8212"),T=e("a523"),P=e("f6c4"),k=e("0789"),A=e("2a7f"),C=e("269a"),F=e.n(C),M=e("5607"),B=Object(u["a"])(_,n,i,!1,null,null,null),I=B.exports;f()(B,{VApp:V["a"],VAppBar:D["a"],VAppBarNavIcon:j["a"],VAvatar:S["a"],VBtn:p["a"],VContainer:T["a"],VMain:P["a"],VSlideXTransition:k["c"],VSpacer:m["a"],VToolbarTitle:A["a"]}),F()(B,{Ripple:M["a"]});var $=e("402c");e("15f5"),e("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:$["a"],render:function(a){return a(I)}}).$mount("#app")}});
//# sourceMappingURL=settings.e1f12b76.js.map